{% extends "templates/_templates/ficha-buybox.volt" %}

{% block section %}
    <h4>{{ t.introduccion.subtitle }}</h4>
    {% for p in t.introduccion.parrafos %}
        <p>
            {{ p }}
        </p>
    {% endfor %}
    {% for evento in t.eventos.items %}
        {% include 'templates/_molecules/activity' with ['item': evento] %}
    {% endfor %}
    <a class="button button--block button-first u-pull-right" href="{{ url(lang ~ "/" ~ t.link.href) }}">{{ t.link.texto }}</a>
{% endblock %}