<div id="{{ id }}" class="carousel slide" data-ride="carousel" data-interval="false">
    <!-- Indicators -->
    {% set count = 0 %}
    <ol class="carousel-indicators">
        {% for item in slider %}
            {% if((item.device == "mobile" and mobile) or (item.device == "desktop" and not mobile) or (item.device == "both")) %}
                <li data-target="#{{ id }}" data-slide-to="{{ count }}" {% if loop.first %}class="active"{% endif %}></li>
                {%  set count = count+1  %}
            {% endif %}
        {% endfor %}
    </ol>

    <!-- Wrapper for slides -->
    {% set count = 1 %}
    <div class="carousel-inner" role="listbox">
        {% for item in slider %}
            {% if((item.device == "mobile" and mobile) or (item.device == "desktop" and not mobile) or (item.device == "both")) %}
                {% if item.type == "img" %}
                    <div class="
                            item 
                            {% if count == 1 %} active {% endif %}
                            {% if item.promotion is defined %} slide-promotion {% endif %}
                        "
                        {# SI ES UN SLIDER DE PROMOCIONES SE IMPRIMEN LOS DATOS PARA DATALAYER GTM #}
                         {% if item.promotion is defined %}
                            data-promoId = "{{ item.promotion.id }}"
                            data-promoName = "{{ item.promotion.name }}"
                            data-promoDescription = "{{ item.promotion.description }}"
                            data-promoPosition ="Carrusel - {{ count }}"
                         {% endif %}
                        >
                        {% if item.link is defined %}
                            <a href="{{ item.link }}">
                        {% endif %}
                        {% if async is defined %}
                            <img {% if loop.first or loop.index == 2 %} src="{{ url(item.url) }}" {% else %} src="{{ url('img/blank.gif') }}" data-src="{{ url(item.url) }}" {% endif %}/>
                        {% else %}
                            <img src="{{ url(item.url) }}" />
                        {% endif %}
                        {% if item.link is defined %}
                            </a>
                        {% endif %}
                    </div>
                {% endif %}
                {% if item.type == "video" %}
                    <div class="
                    item
                    {% if loop.first %}active{% endif %}
                    {% if item.promotion is defined %} slide-promotion {% endif %}
                    "
                    {# SI ES UN SLIDER DE PROMOCIONES SE IMPRIMEN LOS DATOS PARA DATALAYER GTM #}
                    {% if item.promotion is defined %}
                        data-promoId = "{{ item.promotion.id }}"
                        data-promoName = "{{ item.promotion.name }}"
                        data-promoDescription = "{{ item.promotion.description }}"
                        data-promoPosition ="Carrusel - {{ count }}"
                    {% endif %}
                    >
                        <a {#href="#modalsVideo"#} data-modal="{{ item.codigo }}" class="toModalS" {#data-toggle="modal"#}
                        
                        {% if dataProduct is defined %}
                            onclick="dataLayer.push({
                                'action': 'ver videos', 
                                'label': '{{ dataProduct.dsDescripciones }}', 
                                'event': 'verDetalles'
                            });"
                        {% endif %}

                        >
                            <img src="{{ url(item.url) }}" />
                        </a>
                    </div>
                {% endif %}
                {%  set count = count+1  %}
            {% endif %}
        {% endfor %}
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#{{ id }}" role="button" data-slide="prev">
        <span class="icon icon-angle-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#{{ id }}" role="button" data-slide="next">
        <span class="icon icon-angle-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    {% if classn is defined and classn == "home" %}
        <div class="cenefa"></div>
    {% endif %}
</div>