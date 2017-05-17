{% extends "templates/_templates/ficha-buybox.volt" %}

{% block section %}
    {% for p in t.introduccion.parrafos %}
        <p>
            {{ p }}
        </p>
    {% endfor %}
    {% for actividad in actividades %}
        {% include 'templates/_molecules/activity' with ['actividad': actividad] %}
    {% endfor %}
    <button class="button button--block button-first u-pull-right">Link a ficha de producto Xenses  »</button>
{% endblock %}