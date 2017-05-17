{% include 'templates/_general/head.volt' %}

{% if mobile %}
	{% include  'templates/_organism/header.volt' %}
{% else %}
	{% include 'templates/_organism/header-desktop.volt' %}
{% endif %}

<main class="container">
	{% include 'templates/_organism/breadcrumb.volt' %}
	<div class="row">
		<section class="two-thirds column">
			{% include 'templates/_organism/slidera.volt' %}
			<h1>XPLOR</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur a tellus cursus, rhoncus ante sed, condimentum est. Aenean ut justo ut mi elementum rhoncus at a velit. In viverra mauris sit amet dolor gravida, sit amet fermentum purus tincidunt. Phasellus sed eros nulla. Integer id enim cursus, lobortis nunc vel, accumsan nisi.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis varius sem lectus, convallis malesuada nulla condimentum ac. Fusce in nisi eu leo fringilla consequat. Suspendisse pellentesque mi non rhoncus pretium. </p>
			{% include 'templates/_molecules/accordion.volt' %}
			{% include 'templates/_molecules/activities-nav.volt' %}
			
			<button class="button button--block button-second u-pull-right">Link a ficha de producto Xenses  »</button>

			{% include 'templates/_molecules/discountCards.volt' %}
		</section>
		<aside class="one-third column">
			{% include 'templates/_organism/buybox.volt' %}
			{% include 'templates/_molecules/discountIcons.volt' %}
		</aside>
	</div>
</main>
{% include 'templates/_general/footer.volt' %}