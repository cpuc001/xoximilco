{% set buybox_script = true %}
<main class="container">
    {% include 'templates/_organism/breadcrumb.volt' %}
    <div class="row">
        <section class="two-thirds column" id="use">
            <h1>{{ t.introduccion.h }}</h1>
                {% include 'templates/_molecules/plecaAmarilla.volt' %}
            {% block section %}
            {% endblock %}
        </section>
        <aside class="one-third column">
            <div id="buybox">
                {% if not mobile %}
                    {#{% if is_ficha is defined %}#}
                        {% set banner = true %}
                        {% include 'templates/_organism/buybox.volt' %}
                    {#{% else %}
                        {% include 'templates/_organism/booking.volt'  %}
                    {% endif %}#}
                    {%  include 'templates/_molecules/discountTabs.volt' %}
                    {% if lang == "es" %}
                    <div class="block">
                        <button class="button button--block button-ghost toModal" href="#modals" data-json='{"msi" : {{ g.msi.modal|json_encode }} }' data-modal="{{ url("helpers/msi") }}" data-toggle="modal">Ver formas de pago</button>
                    </div>
                    {% endif %}
                {% endif %}
                {% include 'templates/_molecules/plecaAmarilla.volt' %}
                {% include 'templates/_molecules/discountIcons.volt' %}
            </div>
        </aside>
        {% include 'templates/_molecules/discountCards.volt' %}
    </div>
</main>