{% extends "templates/_templates/ficha-buybox.volt" %}

{% block section %}
    {% include 'templates/_organism/map.volt' %}
    {% for p in t.introduccion.parrafos %}
        <p>
            {{ p }}
        </p>
    {% endfor %}
    <div class="block">
    	<div class="seven columns">
            <h5>{{ t.tiempos.title }}</h5>
            <span>{{ t.tiempos.subtitle }}</span>
            <ul>
                {% for recorrido in t.tiempos.recorridos %}
                    <li>{{ recorrido }}</li>
                {% endfor %}
            </ul>
        </div>
    	<div class="five columns"><a href="{{ url(lang ~ "/" ~ t.tiempos.img.href) }}"> <img class="img--responsive bus" src="{{ url(t.tiempos.img.src) }}" alt=""> </a></div>
    </div>
{% endblock %}