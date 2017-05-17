<div class="savings savings--tab u-cf">
	<div class="savings--header text--align-center">
		<h5>{{ g.discounts.tabs.title }}</h5>
	</div>
	<div class="flex--wrap" data-items="3">
		{% for discount in g.discounts.tabs.items %}
		<div class="flex--item savings--item text--align-center">
			<button class="toModal button button--square" href="#modals" data-modal="{{ url("helpers/discounts") }}" data-toggle="modal" data-json = '{"discounts" : {{ g.discounts.tabs|json_encode }} }'>{{ discount.title }}</button>
			{#
            <button role="button" class="button button--square dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">{{ discount.title }}</button>
			<ul class="dropdown-menu dropdown-menu-{{ loop.last ? "right":"left" }}">
				<li><p>{{ discount.text }}</p></li>
			</ul>
			#}
		</div>
        {% endfor %}
	</div>
</div>