<main class="container">
	<div class="row">
		{% include 'templates/_organism/breadcrumb.volt' %}
			<h2 class="text--align-center">Create your own package with the best Tours in Cancun,<br> Riviera Maya and Yucatan.</h2>
			<p class="text--align-center"><strong>And save up to 40% on your purchase!</strong></p>
			<div class="banner banner-packages row">
				<div class="row ">
{# 					<button class="button button--block button-first u-pull-left" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Filtro</button>
					<div id="filter" class="dropdown-menu dropdown-menu-left">
						<div class="flex--wrap" data-items="3">
							<div class="flex--item text--align-left">
								<h5>Precio</h5>
								<label><em><input name="price" type="radio" checked value="less"> Menor precio</em></label>
								<label><em><input name="price" type="radio" value="more"> Mayor precio</em></label>
								<label><em><input name="price" type="radio" value="all"> Todos los precios</em></label>
							</div>
							<div class="flex--item text--align-left">
								<h5>Relevancia</h5>
								<label><em><input name="rel" type="radio" checked value="most"> Los más comprados</em></label>
								<label><em><input name="rel" type="radio" value="adventure"> Los más aventureros</em></label>
								<label><em><input name="rel" type="radio" value="relax"> Los más relajados</em></label>
								<label><em><input name="rel" type="radio" value="all"> Todos los parques</em></label>
							</div>
							<div class="flex--item text--align-left">
								<h5>Combinaciones por Parque</h5>
								<label><em><input name="park" type="radio" checked value="xenses"> Xenses</em></label>
								<label><em><input name="park" type="radio" value="xcaret"> Xcaret</em></label>
								<label><em><input name="park" type="radio" value="xelha"> Xel-Há</em></label>
								<label><em><input name="park" type="radio" value="xplor"> Xplor</em></label>
								<label><em><input name="park" type="radio" value="xichen"> Xichén</em></label>
								<label><em><input name="park" type="radio" value="xenotes"> Xenotes</em></label>
								<label><em><input name="park" type="radio" value="xoximilco"> Xoximilco</em></label>
								<label><em><input name="park" type="radio" value="all"> Todas las combnes</em></label>
							</div>
							<div class="two columns">
								<select name="" id="">
									<option value="null">Precio</option>
									<option value=""></option>
									<option value=""></option>
									<option value=""></option>
								</select>
							</div>
							<div class="two columns">
								<select name="" id="">
									<option value="null">Relevancia</option>
									<option value=""></option>
									<option value=""></option>
									<option value=""></option>
								</select>
							</div>
							<div class="two columns">
								<select name="" id="">
									<option value="null">Parque</option>
									<option value=""></option>
									<option value=""></option>
									<option value=""></option>
								</select>
							</div>#}
							<div class="six columns">
								<label for=""><input name="transportation" type="radio" checked> Con transportación</label>
								<label for=""><input name="transportation" type="radio"> Solo admisión</label>
							</div>
						</div>
<!-- 						<div class="button--group">
							<button id="cancelFilter" class="button button--block button-ghost">Cancelar</button>
							<button id="doFilter" class="button button--block button-first">Filtrar</button>
						</div> -->

					</div>
				</div>

			<!-- </div> -->
			{% include 'templates/_molecules/cardPackages.volt' %}
			{% include 'templates/_molecules/tabs.volt' %}
			{% include 'templates/_molecules/discountCards.volt' %}
	</div>
</main>