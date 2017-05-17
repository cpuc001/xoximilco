{% extends "templates/_templates/ficha-buybox.volt" %}

{% block section %}
    {% include 'templates/_organism/slider-buttons.volt' %}
    {% for item in t.introduccion.items %}
        <h3>{{ item.title }}</h3>
        {% if item.parrafos is defined %}
            {% for parrafo in item.parrafos %}
                <p>{{ parrafo }}</p>
            {% endfor %}
        {% endif %}
        {% if item.lista is defined %}
            <ul>
            {% for elemento in item.lista %}
                {% if elemento.sublista is defined %}
                    <li>
                        {{ elemento.text }}
                        <ul>
                        {% for subelemento in elemento.sublista %}
                            <li>{{ subelemento }}</li>
                        {% endfor %}
                        </ul>
                    </li>
                {% else %}
                    <li>{{ elemento }}</li>
                {% endif %}
            {% endfor %}
            </ul>
        {% endif %}
    {% endfor %}

    <a class="button button--block button-second u-pull-right button-second" href="{{ url(lang~"/"~t.link.href) }}">{{ t.link.texto }}</a>
{% endblock %}