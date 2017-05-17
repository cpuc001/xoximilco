{% extends "templates/_templates/base.volt" %}
{% block head %}
    <style type="text/css">
        body{
            background: #000;
        }
		.booking{
			background-color: #fff;
		}
        .cenefa{
            background-image: url(../img/cenefa.jpg);
            background-size: 44px 30px;
            background-repeat: right;
            background-position: center top;
            min-height: 30px;
            margin-bottom: 25px;
        }
        h4{
            color:#fff;
        }
		.header--top a{
			color: #fff;
		}
		.nav-primary > li{
			border-color: #000;
		}
        p{
            color: #fff;
        }
        footer{
            margin-top: 0;
        }
        footer .pleca_1{
            position: absolute;
            top: -16px;
            width: 100%;
        }
		.block--msi{
			border-color: #fff;
		}
		.block--msi .flex--item:nth-of-type(1)::after{
			background-color: #fff;
		}
		.block--msi p{
			color: #fff;
		}
		@media (min-width : 64.063em){
            body{
                background: transparent url(/img/bkg-min.jpg) center no-repeat; background-size: 100% auto;
            }
			header{
			background: linear-gradient(to bottom, rgba(0, 0, 0, 0.7) 50%, rgba(0, 0, 0, 0) 100%);
			}
			.toolbar{
				background-color: #000;
				border-bottom:	 1px solid;
			}
		}
    </style>
{% endblock %}
{% block content %}
	{% include  'templates/_organism/slider-booking.volt' %}
	<main class="container u-cf home">
        {% if mobile %}
            {% include 'templates/_organism/booking.volt'  %}
        {% endif %}
		<div class="row">
			<div class="eight columns">
				<h1>{{ t.introduccion.h }}</h1>
				{% include 'templates/_molecules/plecaAmarilla.volt'  %}
				<div class="clear25"></div>
				{% for parrafo in t.introduccion.parrafos %}
					<p>{{ parrafo }}</p>
				{% endfor %}
				<a class="button button--block button-first u-pull-right" href="{{ t.introduccion.button.href }}">{{ t.introduccion.button.text }}</a>
			</div>
			{% if tablet or desktop %}
				<div class="four columns">
					{% include 'templates/_molecules/newsletter.volt'  %}
				</div>
			{% endif %}
		</div>
		{% if mobile %}
			{% set banner = true %}
			{% include 'templates/_molecules/discountCards.volt' %}
			{% include 'templates/_molecules/newsletter.volt'  %}
			{% include 'templates/_molecules/discountIcons.volt' %}
		{% endif %}
		{% if not mobile %}
			{% include  'templates/_organism/attractions.volt' %}
			{% include 'templates/_molecules/discountCards.volt' %}
		{% endif %}
		<div class="clear25"></div>
	</main>
    {% if not mobile %}

	    	<img class="img--responsive" src="/img/footer_01.png">

    {% endif %}
{% endblock %}

{# BLOQUE PARA SCRIPTS ESPECIFICOS #}
{% block scripts %}
    {% include 'constant/requireCart.volt' %}
{% endblock %}
{#{% include 'templates/_organism/navLateral.volt' %}#}

