{% extends "templates/_templates/ficha-buybox.volt" %}

{% block section %}
    {% include 'templates/_organism/map.volt' %}
    {% for p in t.introduccion.parrafos %}
        <p>
            {{ p }}
        </p>
    {% endfor %}
    <div class="row">
    	<div class="seven columns"></div>
    	<div class="five columns"><img class="img--responsive bus" src="{{ url('img/autobus.jpg') }}" alt=""></div>
    </div>
{% endblock %}