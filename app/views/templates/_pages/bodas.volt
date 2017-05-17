{% extends "templates/_templates/ficha-buybox.volt" %}

{% block section %}
    {% include 'templates/_organism/slider-buttons.volt' %}
    {% for parrafo in t.introduccion.parrafos %}
        <p>{{ parrafo }}</p>
    {% endfor %}

    <a class="button button--block button-second u-pull-right button-second" href="{{ t.link.href }}" target="_blank">{{ t.link.texto }}</a>
{% endblock %}