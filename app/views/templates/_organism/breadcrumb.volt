<div class="block breadcrumb u-cf">
	<nav>
		<ul class="nav nav--inline">
			{% for b in t.breadcrumbs %}
				<li><a href="{{ url(lang ~ "/" ~ b.href) }}">{% if loop.first %}<i class="icon icon-home"></i>{% endif %} {{ b.text }}</a></li>
			{% endfor %}
		</ul>
	</nav>
</div>