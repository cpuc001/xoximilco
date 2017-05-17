{% extends "templates/_templates/slider.volt" %}

    {% block var %}
    	{% set classn = 'home' %}
    {% endblock %}
{% block booking %}
    
    {% if not mobile %}
    	{% set banner = false %}
        {% include 'templates/_organism/booking.volt'  %}
    {% endif %}
{% endblock %}