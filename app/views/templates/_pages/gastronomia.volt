{% extends "templates/_templates/ficha-buybox.volt" %}

{% block section %}
    {% include 'templates/_organism/slider-buttons.volt' %}
    {% for parrafo in t.introduccion.parrafos %}
        <p>{{ parrafo }}</p>
    {% endfor %}
    <blockquote class="block u-cf text--align-center">
        {{ t.introduccion.subtitle }}
    </blockquote>
    {% for menu in t.menus %}
        {% include 'templates/_molecules/activity' with ['item':menu] %}
        {% if menu.note is defined %}
            <p><small>{{ menu.note }}</small></p>
        {% endif %}
    {% endfor %}
    <a class="button button--block button-second u-pull-right" href="{{ url(lang~"/"~t.link.href) }}">{{ t.link.texto }}</a>
{% endblock %}