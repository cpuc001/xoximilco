{#
	NAME : PACKAGE ITEM MOLECULE
	CSS : PACKAGESITEM.STYL
#}
{% for paquete in t.paquetes %}

		<article class="item item__package" data-park="xenses" data-rel="relax">
			<div class="flex--wrap">
				<div class="flex--item item__package-header">
					<h3>{{ paquete.name }}</h3>
					{% for parrafo in paquete.parrafos %}
						<p>{{ parrafo }}</p>
					{% endfor %}
				</div>
				<div class="flex--item item__package-img">
					<img class="img--responsive" src="{{ url(paquete.img.src) }}" alt="">
					<button class="button button--block button-ghost button--large toModal" href="#modals" data-json='{"info" : {{ paquete.info|json_encode }} }' data-modal="{{ url("helpers/paquete-info") }}" data-toggle="modal">{{ t.button.modal }}</button>
				</div>
				<div class="flex--item item__package-content">
					<h5 class="amount amount--regular">Precio Regular: {{ paquete.precio.regular }}</h5>
					<h5 class="amount amount--online">Precio en línea: {{ paquete.precio.online }}</h5>
					<h5 class="amount amount--regular">Ahorro: {{ paquete.precio.ahorro }}</h5>
					<button class="button button--block button-first-pay button--large">{{ t.button.pay }}</button>
					<p><small>{{ paquete.complemento }}</small></p>
				</div>
			</div>
		</article>

{% endfor %}