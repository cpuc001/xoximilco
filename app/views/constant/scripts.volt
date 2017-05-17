<script>
        /*LAZY LOAD CAROUSEL ITEMS STARTS AT SECOND SLIDE*/
        if(document.contains(document.getElementById('carouselHtml'))){
            var carousel = document.getElementById('carouselHtml');
            carousel.addEventListener('slide.bs.carousel', function(e) {
                var lazyL;
                var lazyR;
                lazyL = $(this).find('.item.active').next().find('img[data-src]');
                lazyR = $(this).find('.item').last().find('img[data-src]');
                lazyL.attr("src", lazyL.data('src'));
                lazyR.attr("src", lazyR.data('src'));
                lazyL.removeAttr("data-src");
                lazyR.removeAttr("data-src");
            });
        };
</script>
<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
<script>
        WebFont.load({
            {% if tablet or desktop %}
            google: {
                families: ['Source Sans Pro:400,700']
            },
            {% endif %}
            custom: {
                families: ['iconexx'],
                urls: ['{{ url("/assets/output/css/styles.css") }}']
            }
        });
</script>


{# Cargar script buybox #}
{% if buybox_script is defined %}
    <script>
            /*ASIDE WIDTH*/
            var sideNav = document.getElementsByTagName('aside');
            function resetNav() {
                document.getElementById('buybox').style.width = '100%';
            }
            function adjustNav() {
                var ww = window.innerWidth || document.documentElement.clientWidth;
                if ( ww >= 768 ) {
                    document.getElementById('buybox').style.width = sideNav[0].offsetWidth + 'px';
                } else { resetNav() }
            }
            window.addEventListener('resize', adjustNav, false);/* adjust on resize*/
            window.addEventListener('load', adjustNav, false);/* adjust on load*/
    </script>


    {% if is_ficha is not defined %}
        {% include 'constant/requireCart.volt' %}
    {% endif %}

{% elseif path_last != "index" %}
    {% include 'constant/requireCart.volt' %}
{% endif %}
