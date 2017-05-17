<button type="button" class="button button--block button-ghost absolute" data-dismiss="modal"><i class="icon icon-times"></i></button>
<div class="modal-header">
   <button type="button" class="close u-pull-right" data-dismiss="modal" aria-hidden="true"><i class="icon icon-times"></i></button>
    <h4 class="modal-title" id="myModalLabel">{{ why.title }}</h4>
</div>
<div class="modal-body">
        {% for benefit in why.benefits %}
        <div class="row">
            {% if benefit.title is defined %}
                <div class="two columns">
                    <object  data="{{ url(benefit.img) }}" class="iconos"type="image/svg+xml"></object>
                </div>
                <div class="ten columns">
                    <p>
                        <strong>{{ benefit.title }}</strong>
                        <br>
                        {{ benefit.description }}
                    </p>
                </div>
                <div class="u-cf"></div>
            {% endif %}
        </div>
        {% endfor %}
</div>
<div class="modal-footer">
   <!--  <button type="button" class="button button--block button-ghost" data-dismiss="modal">Cerrar</button> -->
</div>
<div class="block">