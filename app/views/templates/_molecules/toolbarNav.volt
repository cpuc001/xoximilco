<div class="toolbar u-cf">
	<div class="container">
		<nav id="toolbar">
			<ul class="nav--inline u-pull-right">
	            <li class="dropdown">
	                <span class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" tabindex="0"><i class="icon icon-phone"></i> {{ g.header.atencion.texto }} <i class="caret"></i></span>
	                <ul class="nav dropdown-menu" data-type="large">
	                {% for s in g.header.atencion.sub %}
	                    <li><a href="{{ s.href }}" class="num-phone-top"><span>{{ s.texto }}</span></a></li>
	                {% endfor %}
	                </ul>
	            </li>
				<li id="login" ></li>
				<li id="profile" class="dropdown"></li>
				<li id="cart" class="dropup"></li>
				<li id="currency"></li>
				{#
				<li class="dropdown">
					<span class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" tabindex="0">{{ moneda[0] }} <i class="caret"></i></span>
					<ul class="dropdown-menu lang" role="menu">

						{% for key, divisa in divisas %}
							<li class="">
								<a href="{{ url("helpers/currency/" ~ key) }}" target="_self" class="link-lang">
									{{ divisa }}
								</a>
							</li>
						{% endfor %}
					</ul>
				</li>
				#}
                {% for language in languages %}
				{% if loop.length > 1 %}
				<li class="dropdown">
					<span class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" tabindex="0"><img src="{{ url(flag) }}"/> <i class="caret"></i></span>
					<ul class="dropdown-menu lang" role="menu">


                            <li class="">
                                <a hreflang="{{ language.hreflang }}" rel="alternate" href="{{ url(language.href) }}" target="_self" class="link-lang" data-lang="{{ language.texto }}">
                                    <span><img class="{{ language.flag }}" src="{{ url(language.img) }}" height="32" width="32" alt="{{ language.texto }}"> {{ language.texto }}</span>
                                </a>
                            </li>

					</ul>
				</li>
				{% else %}
                <li class="dropdown">
                    <span class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" tabindex="0">
                        <a hreflang="{{ language.hreflang }}" rel="alternate" href="{{ url(language.href) }}" target="_self" class="link-lang" data-lang="{{ language.texto }}">
                            <span><img class="{{ language.flag }}" src="{{ url(language.img) }}" height="32" width="32" alt="{{ language.texto }}"></span>
                        </a>
                    </span>
                </li>
                {% endif %}
                {% endfor %}
			</ul>	
		</nav>
	</div>
</div>