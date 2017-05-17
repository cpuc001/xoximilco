{% extends "templates/_templates/slider.volt" %}

    {% block var %}
    	{% set classn = '' %}
    {% endblock %}
{% block buttons %}
    {% if not mobile %}
    <div class="button--group button--group-slider gallery">
        {#<button data-json = '{"slider" : {{ t.modal.slider|json_encode }} }' data-toggle="modal" data-target="#modals" data-modal="{{ url("helpers/fancy") }}" class="button button--block button-info toModal">{{ g.slider.buttons.images }}</button>#}
		{% for slide in t.modal.slider %}
			
			<a href="{{ url(slide.url) }}" class="button button--block button-info" 
            {% if loop.first  %}
                onclick="dataLayer.push({
                    'action': 'ver imagenes', 
                    'label': '{{ dataProduct.dsDescripciones }}', 
                    'event': 'verDetalles'
                });" 
            {% endif %}

            {% if not loop.first %}style="display:none;"{% endif %}>{{ g.slider.buttons.images }}</a>
		{% endfor %}
    </div>
    {% endif %}
{% endblock %}