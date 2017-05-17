{% extends "templates/_templates/ficha-buybox.volt" %}

{% block section %}
    {% for i in 1..3 %}

        {% include 'templates/_molecules/promoItem.volt' %}

    {% endfor %}
    <button class="button button--block button-first u-pull-right">Link a ficha de producto Xenses  »</button>
{% endblock %}
