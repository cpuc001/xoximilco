<button type="button" class="button button--block button-ghost absolute" data-dismiss="modal"><i class="icon icon-times"></i></button>
<div class="modal-header">
    <button type="button" class="close u-pull-right" data-dismiss="modal" aria-hidden="true"><i class="icon icon-times"></i></button>
    <h4 class="meses-intereses">{{ discounts.title }}</h4>
</div>
<div class="modal-body">
    {#
    {% for discount in discounts %}
        <div class="flex--item savings--item text--align-center">
            <button role="button" class="button button--square dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">{{ discount.title }}</button>
            <ul class="dropdown-menu dropdown-menu-{{ loop.last ? "right":"left" }}">
                <li><p>{{ discount.text }}</p></li>
            </ul>
        </div>
    {% endfor %}
    #}
    {% for discount in discounts.items %}
        <div class="formas-pago row">
            <div class="twelve columns text--align-center">
                {{ discount.text }}
            </div>
        </div>
        <hr>
    {% endfor %}

</div>