
	{#<div class="row">
		<div class="header--item logo">
			<a href="{{ url(lang) }}"><img class="img--responsive" src="{{ url("img/xplor.png") }}" alt="Xplor"></a>
		</div>
		<div class="header--item carrito">
			<button class="button button--square">6</button>
		</div>
		<div class="header--item divisa">
			<button value="divisa" class="button button--square divisa coverNav" >{{ moneda[0] }}</button>

		</div>
		<div class="header--item menu" data-type="menu">
			<button class="button button--square"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 6h-24v-4h24v4zm0 4h-24v4h24v-4zm0 8h-24v4h24v-4z"/></svg></button>
		</div>
	</div>
	<nav>
		<ul class="nav nav-primary">
			<li class="text-align--center">
				<a href="{{ url(lang) }}"><span><i class="icon icon-home"></i></span></a>
			</li>
			{% for n in g.nav.mobile.header %}
				<li class="text-align--center">
					<a href="{{ url(lang~"/"~n.href) }}"><span>{{ n.menu }}</span></a>
				</li>
			{% endfor %}
		</ul>
	</nav>#}

	<div class="row">
		<div class="header--item home">
			<a class="button button--square button-icon" href="{{ url(lang) }}"><i class="icon icon-home"></i></a>
		</div>
		<div class="header--item logo">
			<a href="{{ url(lang) }}"><img class="img--responsive" src="{{ url("img/xox.png") }}" alt="Xplor"></a>
		</div>
		<div class="header--item carrito" id="cart">
			{# <button class="button button--square">6</button> #}
		</div>
		<div class="header--item divisa" id="currency">
			{# <button value="divisa" class="button button--square divisa coverNav" >{{ moneda[0] }}</button>#} 
		</div>
		<div class="header--item lang">
            {% for language in languages %}
			<button class="button button--square dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" tabindex="0">
				<a hreflang="{{ language.hreflang }}" rel="alternate" href="{{ url(language.href) }}" target="_self" class="link-lang" data-lang="{{ language.texto }}">
					<span><img class="{{ language.flag }} flag" src="{{ url(language.img) }}" height="32" width="32" alt="{{ language.texto }}"></span>
				</a>
			</button>
            {% endfor %}
			{#
			<ul class="dropdown-menu lang" role="menu">

	            {% for l in languages %}
	                <li class="">
	                    <a hreflang="{{ l.hreflang }}" rel="alternate" href="{{ url(l.href) }}" target="_self" class="link-lang" data-lang="{{ l.texto }}">
	                        <span><img class="{{ l.flag }} flag" src="{{ url(l.img) }}" height="32" width="32" alt="{{ l.texto }}"> {{ l.texto }}</span>
	                    </a>
	                </li>
	            {% endfor %}
			</ul>
			#}
		</div>
	</div>
	<nav>
		<ul class="nav nav-primary">
			{% for n in g.nav.mobile.header %}
				<li class="text-align--center">
					<a href="{{ url(lang~"/"~n.href) }}"><span>{{ n.menu }}</span></a>
				</li>
			{% endfor %}
			<li class="text-align--center" >
				<button class="button button--square button-icon" id="showNav"><i class="icon icon icon-plus-circled"></i></button>
			</li>
		</ul>
		<div id="nav-hide" class="nav-hide hidden">
			<a href="tel:9988833143" {#value="contact"#} class="num-phone-top button button--block button-ghost {#coverNav#}"><i class="icon icon-telefono"></i>Cancún: 998-883-3143</a>
			{#<button value="login" class="button button--block button-ghost coverNav"><i class="icon icon-person"></i> Acceder / Registrar</button>#}
			
			<ul class="nav nav--block" id="accordion">
				{% for n in g.nav.mobile.lateral %}

					{% if n.submenus is not defined  %}
						<li>
                            <a class="title" href="{{ url(lang~"/"~n.href) }}">
							    <span>{{ n.menu }}</span>
                            </a>
						</li>
					{% else %}
						<li class="acc accordion--item">
							<h6 class="title">{{ n.menu }} <i class="icon icon-angle-down"></i></h6>
							<ul class="hidden accordion-content">
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
			<div class="hidden-lateral login" data-form="login">
				<button class="button button--inline button-icon return"><i class="icon icon-angle-left"></i> Regresar</button>
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
				<button class="button button--inline button-icon return"><i class="icon icon-angle-left"></i> Regresar</button>
				<div class="u-cf"></div>
				<h3>Lada gratis desde México</h3>
					<ul class="list">
						{% for telefonos_atencion in g.header.atencion.sub %}
							<li><a class="button button--block button-ghost" href="{{ telefonos_atencion.href }}"><span>{{ telefonos_atencion.texto }}</span></a></li>
						{% endfor %}
					</ul>
			</div>
		</div>
	</nav>

