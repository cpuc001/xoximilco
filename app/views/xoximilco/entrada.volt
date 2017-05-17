{% extends "templates/_templates/base.volt" %}

{% block content %}
    {% include 'templates/_pages/entrada.volt' %}
{% endblock %}
{# BLOQUE PARA SCRIPTS ESPECIFICOS #}
{% block scripts %}
    {% include 'constant/requireCart.volt' %}
<script>
	
function dataLayerPush() {
dataLayer.push({
	'event': 'productDetail',
	'ecommerce': {
		'detail': {
			'actionField': {'list': ''},
			'products': [{
			'name': '{{ dataProduct.dsDescripciones }}', 
			'id': '{{ dataProduct.idProducto }}',
			'price': '{{ dataProduct.adultoPrecioRegularMonedaNumber }}',
			'brand': '{{ dataProduct.dsUnidadNegocio }}',
			'image': '{{ domain ~ "/" ~ t.slider[1].url }}',
			'category': 'Parques y tours',
			'variant': '',
			}] 
		}
	} 
});
   
}
window.addEventListener("load", dataLayerPush);
</script>
{% endblock %}