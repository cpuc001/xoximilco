<div class="booking block u-cf">
	{% if banner == true %}
		{% include 'templates/_molecules/bannerBuybox.volt' %}
	{% endif %}
	{#<div class="tabs tab--container">
		<ul class="nav nav--tab nav--tab-horizontal" role="tablist">
			<li role="presentation" class="nav-tab--item active"><a class="
			tton button--square" href="#xplor" aria-controls="xplor" role="tab" data-toggle="tab" aria-expanded="true">Xplor</a></li>
			<li role="presentation"class="nav-tab--item"><a class="button button--square" href="#xplorf" aria-controls="xplorf" role="tab" data-toggle="tab">Xplor Fuego</a></li>
		</ul>
	</div><!-- tab nav -->#}
	<div class="tab--content">
		<div role="tabpanel" class="tab-pane fade in active" aria-labelledby="xplor-tab" id="precio">
			<div class="left" id="whatever">
				<div class="flexie">
					<div class="flex--item text--align-center">
						<span class="trans-label {% if mobile %}u-pull-left{% endif %}">{{ g.booking.transportacion }}</span>
						<div class="input-container">
							<input type="checkbox" name="checkbox1" id="checkbox1" class="ios-toggle variants" value="T">
							<label for="checkbox1" class="checkbox-label" data-off="\e027" data-on="\e027"></label>
						</div>
					</div>
					<div class="flex--item optionsCart" id="optionsCart">
						{% include 'templates/_molecules/loading.volt' %}
					</div>
					<div class="flex--item"><input id="addProduct" class="button button--block button-first-pay" type="button" value="{{ g.booking.button }}"></div>
				</div>
			</div>
			<div class="right text--align-center">
				<span class="amount amount--online"><small>Total :</small></span> <var class="amount amount--online digit" id="online">{% include 'templates/_molecules/loading.volt' %}</var>
				<div class="u-cf"></div>
				<small>{{ g.booking.legales }}</small>
			</div>
		</div><!-- end -->
		{#<div role="tabpanel" class="tab-pane fade" id="xplorf" aria-labelledby="xplor-fuego-tab">
				<div class="left" id="whatever">
					<div class="flexie">
						<div class="flex--item text--align-center">
							<span>Agregar transportación</span>
							<div class="input-container">
								<input type="checkbox" name="checkbox1" id="checkbox1" class="ios-toggle variants" value="T">
								<label for="checkbox1" class="checkbox-label" data-off="\e027" data-on="\e027"></label>
							</div>
						</div>
						<div class="flex--item optionsCart" id="optionsCart">
							{% include 'templates/_molecules/loading.volt' %}
						</div>
						<div class="flex--item"><input id="addProduct" class="button button--block button-first-pay" type="button" value="Comprar"></div>
					</div>
				</div>
				<div class="right text--align-center">
					<span class="amount amount--online">Total :</span><var class="amount amount--online digit" id="online">{% include 'templates/_molecules/loading.volt' %}</var>
					<div class="u-cf"></div>
					<span><small>Precios sujetos a cambio sin previo aviso y aplican restricciones.</small></span>
				</div>
			</div>#}
	</div>
	{% if mobile %}
		{% include 'templates/_molecules/discountTabs.volt' %}
	{% elseif current_page == "/"~lang~"/" or current_page == "/"~lang %}
		{% include 'templates/_molecules/discountInline.volt' %}
	{% endif %}

</div>