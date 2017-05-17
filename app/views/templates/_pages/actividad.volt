{% extends "templates/_templates/ficha-buybox.volt" %}

{% block section %}
    {% include 'templates/_organism/slider-buttons.volt' %}
    <h1>asd</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur a tellus cursus, rhoncus ante sed, condimentum est. Aenean ut justo ut mi elementum rhoncus at a velit. In viverra mauris sit amet dolor gravida, sit amet fermentum purus tincidunt. Phasellus sed eros nulla. Integer id enim cursus, lobortis nunc vel, accumsan nisi.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis varius sem lectus, convallis malesuada nulla condimentum ac. Fusce in nisi eu leo fringilla consequat. Suspendisse pellentesque mi non rhoncus pretium. </p>
    {% include 'templates/_molecules/accordion' with ['accordion' : t.introduccion.accordion] %}
    {% include 'templates/_molecules/activities-nav.volt' %}

    <button class="button button--block button-second u-pull-right">Link a ficha de producto Xenses  »</button>
{% endblock %}