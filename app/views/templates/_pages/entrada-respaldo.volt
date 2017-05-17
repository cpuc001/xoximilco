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
            {% include 'templates/_organism/slider.volt' %}
            {% if mobile %}
                {% include 'templates/_organism/buybox.volt' %}
            {% endif %}
            <blockquote class="block no-margin text--align-center">
                ¡Un reto en la oscuridad como nunca imaginaste!
            </blockquote>
            <h1>XPLOR</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur a tellus cursus, rhoncus ante sed, condimentum est. Aenean ut justo ut mi elementum rhoncus at a velit. In viverra mauris sit amet dolor gravida, sit amet fermentum purus tincidunt. Phasellus sed eros nulla. Integer id enim cursus, lobortis nunc vel, accumsan nisi.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis varius sem lectus, convallis malesuada nulla condimentum ac. Fusce in nisi eu leo fringilla consequat. Suspendisse pellentesque mi non rhoncus pretium. </p>
            {% include 'templates/_molecules/accordion.volt' %}
            <button class="button button--block button-first-pay u-pull-right">Comprar Ahora</button>
            {% include 'templates/_molecules/cross.volt' %}
            {% include 'templates/_molecules/discountCards.volt' %}
        </section>
        <aside class="one-third column">
            {% if not mobile %}
                {% include 'templates/_organism/buybox.volt' %}
                <div class="block">
                    <button class="button button--block button-ghost">Ver formas de pago</button>
                </div>
                {%  include 'templates/_molecules/discountTabs.volt' %}
            {% endif %}
            {% include 'templates/_molecules/discountIcons.volt' %}
        </aside>
    </div>
</main>
{% include 'templates/_general/footer.volt' %}
