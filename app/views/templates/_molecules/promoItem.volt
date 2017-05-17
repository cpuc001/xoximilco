 <div class="listing--item">
    <div class="row">
        <div class="one-half column listing--img">
            <img class="img--responsive" src="{{ url(item.img) }}" alt="">
        </div>
        <div class="one-half column listing--content"
            {% if item.promotion is defined %}
                data-promoId = "{{ item.promotion.id }}"
                data-promoName = "{{ item.promotion.name }}"
                data-promoDescription = "{{ item.promotion.description }}"
                data-promoPosition ="{{ position }}"
            {% endif %}
        >
            <h3>{{ item.name }}</h3>
            {% for p in item.upper %}
            <p>{{ p }}</p>
            {% endfor %}
            <hr>
            {% if item.bottom is defined %}
                {% for p in item.bottom %}
                    <p><small>{{ p }}</small></p>
                {% endfor %}
            {% endif %}
            {% if item.href is defined %}
            <a {{ item.ext is defined ? 'href="' ~ item.href ~ '" target="_blank"' : 'href="' ~ url(lang ~ "/" ~ item.href) ~ '"'  }}  class="button button--block button-first u-pull-right {% if item.promotion is defined %} promo-register {% endif %}">{{ button }}</a>
            {% endif %}

        </div>
    </div>
 </div>
