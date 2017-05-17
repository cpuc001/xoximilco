<main class="container">
	{% include 'templates/_organism/breadcrumb.volt' %}
	<div class="row">
		<section class="twelve column">
			<h1>{{ t.h }}</h1>
			{% for p in t.parrafos  %}
                {{ p }}
			{% endfor %}
			<section data-type="table">
				<header class="flex--wrap" data-items="4">
                    {% for h in t.table.headers %}
                        <div class="flex--item text--align-center"> {{ h }} </div>
                    {% endfor %}
				</header>
				<div>
                    {% for s in t.table.sections %}
                        <header class="text--align-center">{{ s.header }}</header>
                        <div class="wrapping">
                            {% for r in s.rows %}
                            <div class="flex--wrap">

                                <div class="flex--item">{{ r.producto }}</div>
                                <div class="flex--item text--align-right">{{ r.taquilla }}</div>
                                <div class="flex--item text--align-right">{{ r.ahorro }}</div>
                                <div class="flex--item text--align-right">{{ r.internet }}</div>

                            </div>
                            {% endfor %}
                        </div>
                    {% endfor %}

                    {#
					<div class="flex--item text--align-center">Admisión</div>
					<div class="flex--item text--align-center">Precio en taquillas</div>
					<div class="flex--item text--align-center">Ahorro en linea</div>
					<div class="flex--item text--align-center">Precio internet</div>

					<header class="text--align-center">Admisiones</header>
					<div class="wrapping">
						<div class="flex--wrap">
							<div class="flex--item">Nombre del producto</div>
							<div class="flex--item text--align-right">$000.00 MXN</div>
							<div class="flex--item text--align-right">$000.00 MXN</div>
							<div class="flex--item text--align-right">$000.00 MXN</div>
						</div>
						<div class="flex--wrap">
							<div class="flex--item">Nombre del producto</div>
							<div class="flex--item text--align-right">$000.00 MXN</div>
							<div class="flex--item text--align-right">$000.00 MXN</div>
							<div class="flex--item text--align-right">$000.00 MXN</div>
						</div>
					</div>
					<header class="text--align-center">Tours</header>
					<div class="wrapping">
						<div class="flex--wrap">
							<div class="flex--item">Nombre del producto</div>
							<div class="flex--item text--align-right">$000.00 MXN</div>
							<div class="flex--item text--align-right">$000.00 MXN</div>
							<div class="flex--item text--align-right">$000.00 MXN</div>
						</div>
						<div class="flex--wrap">
							<div class="flex--item">Nombre del producto</div>
							<div class="flex--item text--align-right">$000.00 MXN</div>
							<div class="flex--item text--align-right">$000.00 MXN</div>
							<div class="flex--item text--align-right">$000.00 MXN</div>
						</div>
					</div>
					<header class="text--align-center">Combos de 2 o más parques</header>
					<div class="wrapping">
						<div class="flex--wrap">
							<div class="flex--item">Nombre del producto</div>
							<div class="flex--item text--align-right">$000.00 MXN</div>
							<div class="flex--item text--align-right">$000.00 MXN</div>
							<div class="flex--item text--align-right">$000.00 MXN</div>
						</div>
						<div class="flex--wrap">
							<div class="flex--item">Nombre del producto</div>
							<div class="flex--item text--align-right">$000.00 MXN</div>
							<div class="flex--item text--align-right">$000.00 MXN</div>
							<div class="flex--item text--align-right">$000.00 MXN</div>
						</div>
						<div class="flex--wrap">
							<div class="flex--item">Nombre del producto</div>
							<div class="flex--item text--align-right">$000.00 MXN</div>
							<div class="flex--item text--align-right">$000.00 MXN</div>
							<div class="flex--item text--align-right">$000.00 MXN</div>
						</div>
						<div class="flex--wrap">
							<div class="flex--item">Nombre del producto</div>
							<div class="flex--item text--align-right">$000.00 MXN</div>
							<div class="flex--item text--align-right">$000.00 MXN</div>
							<div class="flex--item text--align-right">$000.00 MXN</div>
						</div>
						<div class="flex--wrap">
							<div class="flex--item">Nombre del producto</div>
							<div class="flex--item text--align-right">$000.00 MXN</div>
							<div class="flex--item text--align-right">$000.00 MXN</div>
							<div class="flex--item text--align-right">$000.00 MXN</div>
						</div>
											#}
					</div>
				</div>
			</section>
			<p><small>Niños de 5 a 11 años pagan 50% sobre la tarifa normal de adulto. Solo es admisible la entrada al Parque a niños mayores de 5 años. Es indispensable presentar identificación oficial en las taquillas del Parque.</small></p>
			<p><small>Precios de temporada sujetos a cambio sin previo aviso.</small></p>
			<p><small>Aprovecha 15% de descuento al reservar con 21 días o más de anticipación; o si lo prefieres reserva con 7 a 20 días antes y recibe 10% de descuento.
						Cupón válido por un año a partir de la fecha de compra de tu entrada (los cambios de fecha deben hacerse 24 horas antes de su visita). No se permite realizar cambios de fecha el mismo día de tu visita. La entrada incluye una garantía de mal tiempo (billete no reembolsable).</small></p>
			<button class="button button--block">Link a ficha de producto Xenses  »</button>
			{% include 'templates/_molecules/discountCards.volt' %}
		</section>
	</div>
</main>