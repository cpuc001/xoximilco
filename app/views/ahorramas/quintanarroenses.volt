{% extends "templates/_templates/base.volt" %}

{% block content %}
    {% set is_ficha = true %}
    {% include 'templates/_pages/quintanarroenses.volt' %}
{% endblock %}
{# BLOQUE PARA SCRIPTS ESPECIFICOS #}
{% block scripts %}
    {% include 'constant/requireCart' with ['coupon' : 'QROO'] %}
{% endblock %}