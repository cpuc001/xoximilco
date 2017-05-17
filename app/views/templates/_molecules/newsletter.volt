{% if not mobile %}
<div class="news">
    <a class="toModal" href="#modals" data-modal="{{ url("helpers/news") }}" data-toggle="modal" data-json = '{"newsletter" : {{ t.modal.newsletter|json_encode }}, "mailchimpid" : {{ mailchimpid|json_encode }} }'>
		<div class="img">
			<img class="img--responsive" src="{{ url(t.introduccion.newsletter.img)}}" alt="Xoximilco">
		</div>
		<div class="u-cf"></div>
		<button class="button button--inline">{{ t.introduccion.newsletter.button }}</button>
	</a>
</div>
{% else %}
	<button class="button button--block button-first toModal" href="#modals" data-modal="{{ url("helpers/news") }}" data-toggle="modal" data-json = '{"newsletter" : {{ t.modal.newsletter|json_encode }} }'>NEWSLETTER</button>
{% endif %}