    {% block var %}
    {% endblock %}
<div class="block block--hero {{ classn }}">
    {% block booking %}
    {% endblock %}
  {% include 'templates/_organism/carousel' with ['slider':t.slider, 'id':'carouselHtml', 'async':true, 'classn' : classn ]%}
</div>
{% block buttons %}
{% endblock %}