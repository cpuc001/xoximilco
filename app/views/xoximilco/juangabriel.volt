{% extends "templates/_templates/base.volt" %}

{% block content %}
    {% include 'templates/_pages/juangabriel.volt' %}
{% endblock %}
{# BLOQUE PARA SCRIPTS ESPECIFICOS #}
{% block scripts %}
    {% include 'constant/requireCart.volt' %}
{% endblock %}