<div class="block u-cf">
	<div class="row">
        {% if item.img is defined and item.img != "" %}
		<div class="seven columns">
			<img class="thumb u-pull-left" src="{{ url(item.img) }}" alt="activity Image">
		</div>
		<div class="five columns">
		{% else %}
		<div>
		{% endif %}
			<h5>{{ item.name }}</h5>
			{% if item.parrafos is defined %}
                {% for parrafo in item.parrafos %}
				    <p>{{ parrafo }}</p>
                {% endfor %}
			{% endif %}
			{% if item.lista is defined %}
				<ul>
					{% for element in item.lista %}
						<li>{{ element }}</li>
					{% endfor %}
				</ul>
			{% endif %}
			{% if item.button is defined %}
				<a class="button button--block button-first u-pull-right" href="{{ url(lang ~ "/" ~ item.button.href) }}">{{ item.button.text  }}</a>
			{% endif %}
		</div>
	</div>
</div>