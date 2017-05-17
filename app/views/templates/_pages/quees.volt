{% extends "templates/_templates/ficha-buybox.volt" %}

{% block section %}
    {% include 'templates/_organism/slider-buttons.volt' %}
    {% for p in t.introduccion.parrafos %}
        <p>
            {{ p }}
        </p>
    {% endfor %}
    <h2>{{ t.atractivos.title }}</h2>
    {% for atractivo in t.atractivos.items %}
        {% include 'templates/_molecules/plecaAmarilla.volt' %}
        {% include 'templates/_molecules/activity' with ['item': atractivo] %}
    {% endfor %}
    <a class="button button--block button-first u-pull-right" href="{{ url(lang~"/"~t.link.href) }}">{{ t.link.texto }}</a>
{% endblock %}