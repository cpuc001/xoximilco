{% include 'templates/_molecules/toolbarNav.volt' %}
	{% if lang == 'es' %}
	<div class="pleca-msi">
		<a class="toModal row" href="#modals" data-json='{"msi" : {{ g.msi.modal|json_encode }} }' data-modal="{{ url("helpers/msi") }}" data-toggle="modal">
		<img src="{{ url('img/msi-small.png') }}" alt="">
		</a>
	</div>
	{% endif %}
	<div class="container">
		<div class="block header--top u-cf">
			<div class="header--item logo">
				<a href="{{ domain ~ url(lang) }}" itemprop="logo" class="logo">
					<img itemprop="logo" class="img--responsive" src="{{ domain ~ url(g.logo.src) }}" title="{{ g.logo.title }}" alt="{{ g.logo.alt }}">
				</a>
			</div>
			<nav class="u-pull-right">
				<div class="social u-pull-right">
					<ul class="nav--inline">
                        {% for social in g.social %}
							<li><a class="link-social" href="{{ social.href }}" target="_blank" data-red="{{ social.red }}"><i class="icon {{ social.class }}"></i></a></li>
                        {% endfor %}
					</ul>
				</div>
				<div class="u-pull-right">
					<ul class="nav--inline">
						{% for menu_secundario in g.nav.desktop.secundario %}
							<li><a href="{{ url(lang~"/"~menu_secundario.href) }}"><i class="icon {{ menu_secundario.icon }}"></i> <span>{{ menu_secundario.menu }}</span></a></li>
						{% endfor %}
					</ul>
				</div>
			</nav>
		</div>
		<div class="block header--bottom u-cf">
		{% include 'templates/_molecules/mainNav.volt' %}
		</div>
	</div>