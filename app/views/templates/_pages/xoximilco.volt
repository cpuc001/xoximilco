{% extends "templates/_templates/ficha-buybox.volt" %}

{% block section %}
    {% include 'templates/_organism/slider-buttons.volt' %}
    {% for parrafo in t.introduccion.parrafos %}
        <p>{{ parrafo }}</p>
    {% endfor %}

    <a class="button button--block button-second u-pull-right button-second" href="{{ url(lang~"/"~t.link.href) }}">{{ t.link.texto }}</a>
{% endblock %}