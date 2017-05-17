{% extends "templates/_templates/ficha-buybox.volt" %}

{% block section %}
	<div class="block embed-responsive">
		<iframe width="560" height="315" src="https://www.youtube.com/embed/SdO3RKev3mk?rel=0&amp;controls=0&amp;showinfo=0&amp;autoplay=1" frameborder="0" allowfullscreen></iframe>
	</div>
	<div class="gallery">
	    {% for image in t.gallery %}
	        {{ (loop.index0 % 3) == 0 ? '<div class="row">': '' }}
	            <div class="four columns">
	                <a class="item--gallery" href="{{ url(image.href)}}"><img class="img--responsive" src="{{ url(image.src)}}" alt="{{ image.alt }}"></a>
	            </div>
	        {{ (loop.index % 3) == 0 ? '</div>': '' }}
	    {% endfor %}
    </div>
{% endblock %}