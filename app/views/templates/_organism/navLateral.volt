<div class="lateral" id="navLateral">
	<div class="block u-cf">
		<div class="header--item home">
			<a class="button button--square button-icon" href="{{ url(lang) }}"><i class="icon icon-home"></i></a>
		</div>
		<div class="header--item help">
			<button value="contact" class="button button--square coverNav">{{ g.header.atencion.texto }}</button>
		</div>
		<div class="header--item" data-type="menuClose">
			<button class="button button--square button-icon"><i class="icon icon-cerrar"></i></button>
		</div>
	</div>
	<div class="block u-cf" data-type="large">
		<div class="button--group">
			<button value="lang" class="button button--block button-ghost coverNav">Idioma</button>
			<button value="login" class="button button--block button-ghost coverNav">Acceder / Registrar</button>
		</div>
		<nav>
			<ul class="nav nav--block">
				{% for n in g.nav.mobile.lateral %}

					{% if n.submenus is not defined  %}
						<li>
                            <a class="title" href="{{ url(lang~"/"~n.href) }}">
							    <span>{{ n.menu }}</span>
                            </a>
						</li>
					{% else %}
						<li>
							<h4 class="title">{{ n.menu }}</h4>
							<ul>
								{% for sm in n.submenus %}
									<li>
										{% if sm.ext is not defined %}
											<a class="nav--item" href="{{ url(lang~"/"~sm.href) }}">
												<span>{{ sm.menu }}</span>
											</a>
										{% else %}
											<a class="nav--item" href="{{ sm.href }}" target="_blank">
												<span>{{ sm.menu }}</span>
											</a>
										{% endif %}
									</li>
								{% endfor %}
							</ul>
						</li>
					{% endif %}

				{% endfor %}

			</ul>
		</nav>
	</div>
	<div class="hidden-lateral lang" data-form="lang">
		<button class="button button--block button-icon return"><i class="icon icon-angle-left"></i> Regresar</button>
		<div class="u-cf"></div>
		<h3>Seleccione su idioma</h3>
		<ul class="list" role="menu">
            {% for l in languages %}
                <li class="">
                    <a hreflang="{{ l.hreflang }}" rel="alternate" href="{{ url(l.href) }}" target="_self" class="button button--block button-ghost link-lang" data-lang="{{ l.texto }}">
                        <span><img class="{{ l.flag }}" src="{{ url(l.img) }}" height="32" width="32" alt="{{ l.texto }}"> {{ l.texto }}</span>
                    </a>
                </li>
            {% endfor %}
		</ul>
	</div>
	<div class="hidden-lateral login" data-form="login">
		<button class="button button--block button-icon return"><i class="icon icon-angle-left"></i> Regresar</button>
		<div class="u-cf"></div>
		<h3>Acceder a su cuenta</h3>
		<form action="">
			<label for="">Usuario</label>
			<input type="text">
			<label for="">Contraseña</label>
			<input type="text">
			<input class="button button--block button-ghost" type="submit" value="Ingresar">
		</form>
	</div>
	<div class="hidden-lateral text--align-center contact" data-form="contact">
		<button class="button button--block button-icon u-pull-right return" data-type="menuClose"><i class="icon icon-cerrar"></i></button>
		<div class="u-cf"></div>
		<h3>Lada gratis desde México</h3>
			<ul class="list">
				{% for t in g.header.atencion.sub %}
					<li><a class="button button--block button-ghost" href="{{ t.href }}"><span>{{ t.texto }}</span></a></li>
				{% endfor %}
			</ul>
	</div>
</div>
<div class="hidden-lateral divisa" data-form="divisa">
	<button class="button button--block button-icon u-pull-right return" data-type="menuClose"><i class="icon icon-cerrar"></i></button>
				<ul class="list list--block">
					{% for divisa, divisaText in divisas %}
						{% if divisa != moneda[0] %}
							<li class=""><a href="{{  url("helpers/currency/" ~ divisa) }}"><span>{{ divisaText }}</span></a></li>
						{% endif %}
					{% endfor %}
					{#
					<li>
						<a href="//www.xcaretexperiencias.com/?currency=MXN">
							<span><i class="flag mx"></i> MXN</span></a>
					</li>
					<li>
						<a href="//www.xcaretexperiencias.com/?currency=USD"><span><i class="flag us"></i> USD</span></a>
					</li>
					<li>
						<a href="//www.xcaretexperiencias.com/?currency=CAD"><span><i class="flag ca"></i> CAD</span></a>
					</li>
					<li>
						<a href="//www.xcaretexperiencias.com/?currency=EUR"><span><i class="flag eu"></i>
						 EUR</span></a>
					</li>
					<li>
						<a href="//www.xcaretexperiencias.com/?currency=GBP"><span><i class="flag gb"></i> GBP</span></a>
					</li>
					<li>
						<a href="//www.xcaretexperiencias.com/?currency=COP"><span><i class="flag co"></i> COP</span></a>
					</li>
					<li>
						<a href="//www.xcaretexperiencias.com/?currency=CLP"><span><i class="flag cl"></i> CLP</span></a>
					</li>
					<li>
						<a href="//www.xcaretexperiencias.com/?currency=JPY"><span><i class="flag jp"></i> JPY</span></a>
					</li>
					<li>
						<a href="//www.xcaretexperiencias.com/?currency=ARS"><span><i class="flag ar"></i> ARS</span></a>
					</li>
					<li>
						<a href="//www.xcaretexperiencias.com/?currency=CNY"><span><i class="flag cn"></i> CNY</span></a>
					</li>
					<li>
						<a href="//www.xcaretexperiencias.com/?currency=GTQ"><span><i class="flag gt"></i> GTQ</span></a>
					</li>
					<li>
						<a href="//www.xcaretexperiencias.com/?currency=PEN"><span><i class="flag pe"></i> PEN</span></a>
					</li>
					<li>
						<a href="//www.xcaretexperiencias.com/?currency=UYU"><span><i class="flag uy"></i> UYU</span></a>
					</li>
					<li>
						<a href="//www.xcaretexperiencias.com/?currency=CRC"><span><i class="flag cr"></i> CRC</span></a>
					</li>
					<li>
						<a href="//www.xcaretexperiencias.com/?currency=RUB"><span><i class="flag ru"></i> RUB</span></a>
					</li>
					<li>
						<a href="//www.xcaretexperiencias.com/?currency=AUD"><span><i class="flag at"></i> AUD</span></a>
					</li>
					<li>
						<a href="//www.xcaretexperiencias.com/?currency=KRW"><span><i class="flag kr"></i> KRW</span></a>
					</li>
					#}
				</ul>
</div>