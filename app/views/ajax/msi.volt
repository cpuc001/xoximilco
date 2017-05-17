<button type="button" class="button button--block button-ghost absolute" data-dismiss="modal"><i class="icon icon-times"></i></button>
<div class="modal-header">
    <button type="button" class="close u-pull-right" data-dismiss="modal" aria-hidden="true"><i class="icon icon-times"></i></button>
    <h4 class="meses-intereses">{{ msi.title }}</h4>
</div>
<div class="modal-body">
    {% for parrafo in msi.parrafos %}
        <p>{{ parrafo }}</p>
    {% endfor %}
    {% for banco in msi.bancos %}
        <div class="formas-pago row">
            <div class="five columns">
                {% if loop.index == 4 %}
                    <img width="70" src="{{ url(banco.img.src) }}" alt="{{ banco.img.alt }}">
                {% else %}
                    <img width="160" src="{{ url(banco.img.src) }}" alt="{{ banco.img.alt }}">
                {% endif %}
            </div>
            <div class="seven columns text--align-center">
                <p class="descripcion-tarjeta">{{ banco.descripcion }}</p>
            </div>

        </div>
        <hr>
    {% endfor %}
</div>
<div class="modal-footer">
</div>