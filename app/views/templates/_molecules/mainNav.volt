<nav>
	<ul class="nav-primary">
		{% for n in g.nav.desktop.main %}

			{% if n.submenus is not defined  %}
				<li {% if section == n.section %} class="current" {% endif %}>
					<a {% if n.href != ""%} href="{{ url(lang~"/"~n.href~"/") }} "{% endif %}><span>{{ n.menu }}</span></a>
				</li>
			{% else %}
				<li class="dropdown {% if section == n.section %}current{% endif %}">
					<a><span>{{ n.menu }}</span></a>
					<ul class="nav dropdown-menu" data-type="large">
						{% for submenu in n.submenus %}
							<li {% if current_page == "/"~lang~"/"~submenu.href~"/" %} class="current" {% endif %}>
								{% if submenu.ext is not defined %}
									<a href="{{ url(lang~"/"~submenu.href~"/") }}">
										<span>{{ submenu.menu }}</span>
									</a>
								{% else %}
									<a href="{{ submenu.href }}" target="_blank">
										<span>{{ submenu.menu }}</span>
									</a>
								{% endif %}
							</li>
						{% endfor %}
					</ul>
				</li>
			{% endif %}

		{% endfor %}
		{#

		<li>
			<a href="#"><span>QUIERO</span></a>
		</li>
		<li class="dropup">
			<a href="#"><span>SABER MÁS DE XPLOR</span></a>
			<ul class="nav dropdown-menu" data-type="large">
				<li><a href="que-es.php"><span>¿Qué es Xplor?</span></a></li>
				<li><a href=""><span>¿Comó llegar a Xplor?</span></a></li>
				<li><a href="instalaciones.php"><span>Instalaciones y servicios</span></a></li>
				<li><a href=""><span>Seguridad y recomendaciones</span></a></li>
				<li><a href=""><span>Reconocimientos y certificaciones</span></a></li>
			</ul>
		</li>
		<li class="dropup">
			<a href="#"><span>VISITAR XPLOR</span></a>
			<ul class="nav dropdown-menu" data-type="large">
				<li><a href="entrada.php"><span>Entrada Xplor</span></a></li>
				<li><a href="ficha-actividad.php"><span>Actividades Xplor</span></a></li>
			</ul>
		</li>
		<li class="dropup">
			<a href="#"><span>VISITAR XPLOR FUEGO</span></a>
			<ul class="nav dropdown-menu" data-type="large">
				<li><a href="entrada.php"><span>Entrada Xplor Fuego</span></a></li>
				<li><a href="ficha-actividad.php"><span>Actividades Xplor Fuego</span></a></li>
			</ul>
		</li>
		<li class="dropup">
			<a href="#"><span>AHORRA MÁS</span></a>
			<ul class="nav dropdown-menu" data-type="large">
				<li><a href="promociones.php"><span>Promociones Especiales</span></a></li>
				<li><a href=""><span>Paquetes 2 o más parques</span></a></li>
				<li><a href=""><span>Quintanarroenses</span></a></li>
				<li><a href="guia.php"><span>Guía de precios</span></a></li>
			</ul>
		</li>
		<li>
			<a href="#"><span>VER LA GALERÍA DE XPLOR</span></a>
		</li>
		#}
	</ul>
</nav>