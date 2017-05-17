{% extends "templates/_templates/ficha-buybox.volt" %}
{% block section %}
    <div class="block block--search row">
        <div class="one-third column text--align-left">
            <p>{{ t.introduccion.instruccion  }}</p>
        </div>
        <div class="two-thirds column text--align-left" id="buscadorpregs">
            <input type="search" id="searchBox" placeholder="{{ t.introduccion.input }}">
            <ul id="searchResults" class="term-list list hidden"></ul>
        </div>
    </div>
    <div class="block block--faqs row">
        <div class="one-third column text--align-left topics" id="topicos">
            <ul class="list list--block">
                {% for tema,contenido in t.preguntas.items %}
                    <li> <a href="#preguntas{{ loop.index }}" class="menu-tema">{{ tema }}<i class="icon icon-angle-right"></i></a></li>
                {% endfor %}
            </ul>
        </div>
        <div class="two-thirds column text--align-left preguntas" id="preguntas">
            <h2 id="topictitle"></h2>
            <ul class="list list--block">
                {% set parent = 1 %}
                {% for pregs in t.preguntas.items %}
                    <li id="preguntas{{ loop.index }}" class="menu-preguntas">
                        <ul>
                        {% for pregunta in pregs %}
                            <li>
                                <a class="link-pregunta" href="#pregunta{{ parent }}-{{loop.index}}" >{{ pregunta.question }}</a>
                            </li>
                        {% endfor %}
                        </ul>
                    </li>
                    {% set parent = parent +1 %}
                {% endfor %}
            </ul>
        </div>
    </div>

{% include 'templates/_molecules/questions' with ['preguntas':t.preguntas] %}

{% endblock %}