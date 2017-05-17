<div class="container block--msi u-cf">
	{% if g.msi.modal is defined %}
	<a class="toModal row" href="#modals" data-json='{"msi" : {{ g.msi.modal|json_encode }} }' data-modal="{{ url("helpers/msi") }}" data-toggle="modal">
	{% endif %}
		<div class="flex--wrap text--align-center" data-items="2">
			<div class="flex--item ">
				<h4>{{ g.msi.title }}</h4>
			</div>
			<div class="flex--item">
				{% if not mobile %}
					<img class="img--responsive" src="{% if(current_page != "/"~lang~"/") %}{{ url("img/msi.png") }}{% else %}{{ url("img/msi_02.png") }}{% endif %}" alt="">
				{% else %}
					<img class="img--responsive" src="{% if(current_page != "/"~lang~"/") %}{{ url("img/msi-mobile.png") }}{% else %}{{ url("img/msi-mobile_02.png") }}{% endif %}" alt="">
				{% endif %}
				{% if g.msi.text is defined %}
					<p><small>{{ g.msi.text }}</small></p>
				{% endif %}
			</div>
		</div>
	{% if g.msi.modal is defined %}
	</a>
	{% endif %}
</div>