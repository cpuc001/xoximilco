<div class="{{ wallop }} Wallop--slide u-cf">
    <div class="Wallop-list">
        {% for item in slider %}
            {% if((item.device == "mobile" and mobile) or (item.device == "desktop" and not mobile) or (item.device == "both")) %}
                {% if item.type == "img" %}
                    <div class="Wallop-item slider--item" style="background-image:url('{{ url(item.url) }}');">
                    </div>
                {% endif %}
                {% if item.type == "video" %}
                    <div class="Wallop-item Wallop-item--current slider--item" style="background-image:url('{{ url(item.url) }}');"><a style="width:100%;height:100%;display:block;" href="#modalsVideo" data-modal="{{ url("helpers/video/"~item.codigo) }}" class="toModal" data-toggle="modal" ></a>
                    </div>
                {% endif %}
            {% endif %}
        {% endfor %}
    </div>
    <button class="slider--button slider--button_left Wallop-buttonPrevious"><i class="icon icon-arrow-left"></i></button>
    <button class="slider--button slider--button_right Wallop-buttonNext"><i class="icon icon-arrow-right"></i></button>
    <div class="pagination Wallop-pagination">
        {% for item in slider %}
            {% if((item.device == "mobile" and mobile) or (item.device == "desktop" and not mobile) or (item.device == "both")) %}
                <button class="pagination--item {{ dot }}"></button>
            {% endif %}
        {% endfor %}
    </div>
</div>