{% extends "templates/_templates/base.volt" %}

{% block content %}
    <main class="container">
        {% include 'templates/_organism/breadcrumb.volt' %}
        {% for promocion in t.promociones.items %}
            {% include 'templates/_molecules/promoItem' with ['item': promocion, 'button':t.promociones.button, 'position':  "Promociones - "~ loop.index] %}
        {% endfor %}
        {% include 'templates/_molecules/discountCards.volt' %}
    </main>
{% endblock %}
{# BLOQUE PARA SCRIPTS ESPECIFICOS #}
{% block scripts %}
{% endblock %}