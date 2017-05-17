{% extends "templates/_templates/base.volt" %}

{% block content %}
    {% include 'templates/_pages/listing-preguntas.volt' %}
{% endblock %}
{% block scripts %}
<script>
    var searchIndex = [];
    var linksToPreguntas = [];
    var preguntasLower = [];

    function omitirAcentos(text) {
        var acentos = "ÃÀÁÄÂÈÉËÊÌÍÏÎÒÓÖÔÙÚÜÛãàáäâèéëêìíïîòóöôùúüûÑñÇç";
        var original = "AAAAAEEEEIIIIOOOOUUUUaaaaaeeeeiiiioooouuuunncc";
        for (var i = 0; i < acentos.length; i++) {
            text = text.replace(acentos.charAt(i), original.charAt(i));
        }
        return text;
    }
    var input = document.getElementById("searchBox"),
            ul = document.getElementById("searchResults"),
            inputTerms, termsArray, prefix, terms, results, sortedResults;


    var search = function() {
        inputTerms = input.value.toLowerCase();
        results = [];
        termsArray = inputTerms.split(' ');
        prefix = termsArray.length === 1 ? '' : termsArray.slice(0, -1).join(' ') + ' ';
        terms = termsArray[termsArray.length - 1].toLowerCase();

        for (var i = 0; i < searchIndex.length; i++) {
            var a = searchIndex[i].toLowerCase(),
                    b = omitirAcentos(a),
                    t = b.indexOf(terms);

            if (t > -1) {
                results.push(a);
            } else {
                t = a.indexOf(terms);
                if (t > -1) {
                    results.push(a);
                }
            }
        }
        evaluateResults();
    };

    var evaluateResults = function() {
        if (results.length > 0 && inputTerms.length > 0 && terms.length !== 0) {
            sortedResults = results.sort(sortResults);
            appendResults();
        } else if (inputTerms.length > 0 && terms.length !== 0) {
            ul.innerHTML = '<li>Lo sentimos! <strong>' +
                    inputTerms +
                    '</strong> no coincide con las preguntas, intenta buscar navegando en la parte de abajo.';

        } else if (inputTerms.length !== 0 && terms.length === 0) {
            return;
        } else {
            clearResults();
        }
    };

    var sortResults = function(a, b) {
        if (a.indexOf(terms) < b.indexOf(terms)) return -1;
        if (a.indexOf(terms) > b.indexOf(terms)) return 1;
        return 0;
    };

    var appendResults = function() {
        clearResults();

        for (var i = 0; i < sortedResults.length && i < 5; i++) {
            var li = document.createElement("li"),
                    result = prefix +
                            sortedResults[i].toLowerCase().replace(terms, '<strong>' +
                                    terms +
                                    '</strong>');
            index = preguntasLower.indexOf(sortedResults[i]);

            li.innerHTML = "<a href='" + linksToPreguntas[index] + "'>" + result + "</a>";
            ul.appendChild(li);
        }

        if (ul.className !== "term-list") {
            ul.className = "term-list list";
        }
    };

    var clearResults = function() {
        ul.className = "term-list list hidden";
        ul.innerHTML = '';
    };
    input.addEventListener("keyup", search, false);

    document.addEventListener("readystatechange", function() {
        if (document.readyState == "complete") {
            function eventoFuncion(elemento, evento, funcion) {
                if (elemento.addEventListener) {
                    elemento.addEventListener(evento, funcion, false);
                } else {
                    elemento.attachEvent("on" + evento, funcion);
                }
            }

            function fadeIn(elemento) {
                elemento.style.display = "block";
                elemento.style.opacity = 0;
                var effect = function() {
                    elemento.style.opacity = +elemento.style.opacity + 0.05;
                    if (+elemento.style.opacity < 1) {
                        (window.requestAnimationFrame && requestAnimationFrame(effect)) || setTimeout(effect, 16)
                    }
                };
                effect();
            }

            function getId(element) {
                var contenedor = element.getAttribute("href");
                var contenedorId = contenedor.substr(1);
                return contenedorId;
            }
            var topicos = document.getElementById("topicos").getElementsByTagName("a");
            document.getElementById("topictitle").innerHTML = topicos[0].innerHTML;
            for (var i = 0; i < topicos.length; i++) {
                eventoFuncion(topicos[i], "click", function(event) {
                    event.preventDefault();
                    var topicSelected = this.innerHTML;
                    var topicSelectedLower = topicSelected.toLowerCase();
                    var contenedorSub = getId(this);
                    var idContenedor = document.getElementById(contenedorSub);
                    var topicTitle = document.getElementById("preguntas").getElementsByTagName("h2")[0];
                    var topicTitleLower = topicTitle.innerHTML.toLowerCase();
                    if (topicSelectedLower !== topicTitleLower) {
                        topicTitle.innerHTML = topicSelected;
                        var menuPreguntas = document.getElementsByClassName("menu-preguntas");
                        for (var j = 0; j < menuPreguntas.length; j++) {
                            var preguntasStyle = menuPreguntas[j].currentStyle || window.getComputedStyle(menuPreguntas[j]);
                            if (preguntasStyle.display == "block") {
                                menuPreguntas[j].style.display = "none";
                            }
                        }
                        fadeIn(idContenedor);
                    }
                });
            }
            var linkPreguntas = document.getElementsByClassName("link-pregunta");
            for (var i = 0; i < linkPreguntas.length; i++) {
                var text = linkPreguntas[i].innerHTML;
                searchIndex.push(text);
                preguntasLower.push(text = text.toLowerCase());
                linksToPreguntas.push(linkPreguntas[i].getAttribute("href"));
                 /***** VARIABBLES PARA GTM *****/
                eventoFuncion(linkPreguntas[i],"click",function(){
                    var textTema = this.innerText;
                    var numTopic = this.getAttribute("href").split("-")[0].replace("#pregunta","");
                    var topico = document.getElementsByClassName("menu-tema")[numTopic - 1];
                    var textTopic = topico.innerText;
                    var labelDatalayer = textTopic + " - " + textTema;
                    dataLayer.push({
                        'action': 'menu',
                        'label': labelDatalayer,
                        'event': 'preguntasFrecuentes'
                    });
                });
            }

            function scrollTo(element, to, duration) {
                if (duration <= 0) return;
                var difference = to - element.scrollTop;
                var perTick = difference / duration * 10;

                setTimeout(function() {
                    element.scrollTop = element.scrollTop + perTick;
                    if (element.scrollTop == to) return;
                    scrollTo(element, to, duration - 10);
                }, 10);
            }
            var scrollme = document.querySelectorAll("#topicos a, #preguntaprinted .back");
            for (var i = 0; i < scrollme.length; i++) {
                eventoFuncion(scrollme[i], "click", function() {
                    event.preventDefault();
                    var contenedorSub = getId(this);
                    var contenedorLocation = document.getElementById(contenedorSub).offsetParent.offsetTop + document.getElementById(contenedorSub).offsetTop;
                    scrollTo(document.body, contenedorLocation, 600);
                });
            }

            var buscador = document.getElementById("searchResults");
            input.addEventListener("keyup", function(e) {

                if (buscador.getElementsByTagName("a").length > 0) {
                    for (var i = 0; i < buscador.getElementsByTagName("a").length; i++) {
                        eventoFuncion(buscador.getElementsByTagName("a")[i], "click", function() {
                            var contenedorSub = getId(this);
                            /**** Animacion de scroll ****/
                            var contenedorLocation = document.getElementById(contenedorSub).offsetParent.offsetTop + document.getElementById(contenedorSub).offsetTop;
                            scrollTo(document.body, contenedorLocation, 600);
                            clearTimeout(timer);

                            /***** VARIABBLES PARA GTM *****/
                            var textTema = this.innerText;
                            var numTopic = this.getAttribute("href").split("-")[0].replace("#pregunta","");
                            var topico = document.getElementsByClassName("menu-tema")[numTopic - 1];
                            var textTopic = topico.innerText;
                            var labelDatalayer = textTopic + " - " + textTema;
                            dataLayer.push({
                                'action': 'buscador',
                                'label': labelDatalayer,
                                'event': 'preguntasFrecuentes'
                            });
                        });
                    }
                }
                var timer = setTimeout(clearResults, 3000);

            }, false);

        }
    },false);
</script>
{% endblock %}

