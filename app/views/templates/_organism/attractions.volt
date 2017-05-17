<div class="block block--attractions text--align-center">
    <h3>{{ t.secciones.titulo }}</h3>
    <div class="flex--wrap" data-items="{{ t.secciones.secciones|length }}">
        {% for seccion in t.secciones.secciones %}
            <div class="flex--item {{ seccion.nombre | lower}}"
            {% if seccion.promotion is defined %}
                data-promoId = "{{ seccion.promotion.id }}"
                data-promoName = "{{ seccion.promotion.name }}"
                data-promoDescription = "{{ seccion.promotion.description }}"
                data-promoPosition ="Promo home bottom - {{ loop.index }}"
            {% endif %}
            >
                <a href="{{ url(lang ~ "/" ~ seccion.a.href) }}" class="{% if seccion.promotion is defined %} home-atraction-promotion {% endif %}">
                <div class="block--attractions-thumb">
                    <img class="img--responsive" src="{{ url(seccion.img.src) }}" alt="{{ seccion.img.alt }}">
                </div>
                <div class="block--attractions-footer">
                    <h5>{{ seccion.nombre }}</h5>
                </div>
                </a>
            </div>
        {% endfor %}
    </div>
</div>