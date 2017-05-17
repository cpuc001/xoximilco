{% extends "templates/_templates/ficha-buybox.volt" %}

{% block section %}
    {% include 'templates/_organism/slider-buttons.volt' %}
    {% if mobile %}
        {% include 'templates/_organism/buybox.volt' %}
    {% endif %}
    <p>{{ t.introduccion.legal }}</p>
    <blockquote class="block u-cf text--align-center">
        {{ t.introduccion.subtitle }}
    </blockquote>
    {% for parrafo in t.introduccion.parrafos %}
        <p>{{ parrafo }}<p>
    {% endfor %}
    {% for descripcion in t.description.accordion %}
        <div class="row">
            <div class="block">
                <h5>{{ descripcion.title }}</h5>
                {% if descripcion.lista is defined %}
                <ul>
                        {% for item in descripcion.lista %}
                            <li>{{ item }}</li>
                        {% endfor %}
                </ul>
                {% endif %}
                {% if descripcion.figures is defined %}
                    <section class="flex--wrap" data-items="3">
                    {% for item in descripcion.figures %}
                        <figure class="flex--item square benefits">
                            <img class="icon--bullet" src="{{ item.icon }}" alt="">
                            <figcaption>
                                {{ item.text }}
                            </figcaption>
                        </figure>
                    {% endfor %}
                    </section>
                {% endif %}
            </div>
        </div>
    {% endfor %}

    <!--     {% include 'templates/_molecules/accordion' with ['accordion':t.description.accordion] %}
    <button class="button button--block button-first-pay u-pull-right">Comprar Ahora</button>
    {% include 'templates/_molecules/cross.volt' %} -->
    {#<div class="aside-hidden u-cf" style="width:40%;position:fixed;top:0;height:100vh;background:#fff;z-index:1000;right:0;display:none;padding:0.983rem;">
        <button class="button button--block" id="close">close</button>
        {% include 'ajax/msi' with ['msi':g.msi] %}
    </div>#}
{% endblock %}