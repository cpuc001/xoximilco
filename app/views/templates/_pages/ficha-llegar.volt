{% include 'templates/_general/head.volt' %}

{% if mobile %}
	{% include  'templates/_organism/header.volt' %}
{% else %}
	{% include 'templates/_organism/header-desktop.volt' %}
{% endif %}

<main class="container">
	{% include 'templates/_organism/breadcrumb.volt' %}
	{% include 'templates/_organism/map.volt' %}
	<h1>Nunc faucibus placerat nisl</h1>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur a tellus cursus, rhoncus ante sed, condimentum est. Aenean ut justo ut mi elementum rhoncus at a velit. In viverra mauris sit amet dolor gravida, sit amet fermentum purus tincidunt. Phasellus sed eros nulla. Integer id enim cursus, lobortis nunc vel, accumsan nisi.</p>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at porttitor sem. Aliquam erat volutpat. Donec placerat nisl magna, et faucibus arcu condimentum sed.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at porttitor sem. Aliquam erat volutpat. Donec placerat nisl magna, et faucibus arcu condimentum sed.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at porttitor sem. Aliquam erat volutpat. Donec placerat nisl magna, et faucibus arcu condimentum sed.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at porttitor sem. Aliquam erat volutpat. Donec placerat nisl magna, et faucibus arcu condimentum sed.</p>
	{% include 'templates/_molecules/activity.volt' %}
	{% include 'templates/_molecules/activity.volt' %}
	{% include 'templates/_molecules/activity.volt' %}
	<button class="button button--block button-first">Link a ficha de producto Xenses  »</button>
	{% include 'templates/_molecules/discountCards.volt' %}
</main>
{% include 'templates/_general/footer.volt' %}