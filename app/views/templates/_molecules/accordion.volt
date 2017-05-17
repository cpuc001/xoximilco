{#
	NAME : ACCORDION MOLECULE
	CSS : ACCORDION.STYL
#}
<div class="accordion">
	{% for item in accordion %}
		<div class="accordion--item is_close">
			<div class="accordion-header"><h6>{{ item.title }} <i class="icon icon-angle-down"></i></h6></div>
			<div class="accordion-content">
				<p>
					{{ item.content }}
				</p>
			</div>
		</div>
	{% endfor %}
</div>