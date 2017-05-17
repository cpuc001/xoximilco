<div  class="buybox block u-pull-right">
    {% if not mobile %}
	{% include 'templates/_molecules/bannerBuybox.volt' %}
    {% endif %}
	<div id="precio" class="buybox--block row">
		<div>
			<span class="amount amount--regular"><small><s>{{ g.buybox.regular }}</s></small></span><var class="amount amount--regular amount-linetrought u-pull-right" id="regular"><s>{% include 'templates/_molecules/loading.volt' %}</s></var>
		</div>
		<hr>
		<div>
			<span class="amount amount--online"><small>{{ g.buybox.online }}</small></span><var class="amount amount--online u-pull-right" id="onlineBase">{% include 'templates/_molecules/loading.volt' %}</var>
		</div>
		<hr>
		{#<div>
			<span></span><var class="amount amount--regular u-pull-right" id="C">{% include 'templates/_molecules/loading.volt' %}</var>
		</div>
		<hr>#}
		{% if notransportation is not defined %}
		<div>
			<label>
				{#<input type="checkbox" value="T" class="variants">#}
				<span class="amount amount--regular">{{ g.buybox.transportacion }}</span>
				<div class="input-container">
					<input type="checkbox" name="checkbox1" id="checkbox1" class="ios-toggle variants" value="T">
					<label for="checkbox1" class="checkbox-label" data-off="\e027" data-on="\e027"></label>
				</div>
			</label>
			<var class="amount amount--regular u-pull-right" id="T">{% include 'templates/_molecules/loading.volt' %}</var>
		</div>
		<hr>
        {% endif %}
		{#<div>
			<var id="D"></var>
		
		</div>#}
		{#<div>
			<label>
				<input type="checkbox" value="P" class="variants">
				<span class="amount amount--regular">{{ g.buybox.foto }}</span>
			</label>
			<var class="amount amount--regular u-pull-right" id="P">{% include 'templates/_molecules/loading.volt' %}</var>
		</div>
		<hr>#}
		<div id="optionsCart">
				<div class="">
					<select id="location" class="geo" style="display: none;"></select>
				</div>
				{% include 'templates/_molecules/loading.volt' %}
		</div>
		<div class="text--align-center">
			<span class="amount amount--online">Total :</span>
			<var class="amount amount--online digit" id="online">{% include 'templates/_molecules/loading.volt' %}</var>
		</div>
		<div class="variants"></div>
		<button class="button button--block button-first-pay" id="addProduct">{{ g.buybox.button }}</button>
	</div>
	{% if mobile %}
		{%  include 'templates/_molecules/discountTabs.volt' %}
	{% endif %}
	<!-- <p><small>*Precios sujetos a cambios sin previo aviso. Niños de 5-11 años pagan -50% e infantes menores de 5 años entran gratis. Aplican restricciones</small></p> -->
</div>