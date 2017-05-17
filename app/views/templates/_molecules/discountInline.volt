    <div class="savings saving--inline u-cf">
        {#<div class="savings--header text--align-center">
            <h4>AHORRA</h4>
        </div>#}
        <div class="flex--wrap">
            {% for discount in g.discounts.inline %}
                <div class="flex--item savings--item">
                    <span class="title u-pull-left"><strong>{{ discount.title }}</strong> </span>
                    <p><strong>{{ discount.intro }}</strong> </p>
                    <small>{{ discount.text }}</small>
                </div>
            {% endfor %}
        </div>
    </div>