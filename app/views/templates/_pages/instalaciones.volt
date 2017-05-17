{% extends "templates/_templates/ficha-buybox.volt" %}

{% block section %}
    {% for instalacion in t.instalaciones %}
        {% include 'templates/_molecules/activity' with ['item':instalacion] %}
    {% endfor %}
    <a class="button button--block button-second u-pull-right" href="{{ url(lang~"/"~t.link.href) }}">{{ t.link.texto }}</a>
{% endblock %}
