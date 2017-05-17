{#
<div id="questions-block">
	<ul class="list"></ul>
</div>
#}
<div class="block block--questions" id="preguntaprinted">
{% set parent = 1 %}
{% for tema, pregs in preguntas.items %}
	<h2 id="topictitle">{{ tema }}</h2>
	{% for pregunta in pregs %}
		<div class="item item_border u-cf">
			<h4 id="pregunta{{ parent }}-{{loop.index}}">{{ pregunta.question }}</h4>
			<p>{{ pregunta.ask }}</p>
			<button class="go-top button button--block button-ghost u-pull-right"> {{ preguntas.button }} <i class="icon icon-angle-up"></i></button>
		</div>
	{% endfor %}
	{% set parent = parent +1 %}
{% endfor %}
</div>