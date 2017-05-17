{% extends "templates/_templates/base.volt" %}

{% block content %}
    <main class="container">
        {% include 'templates/_organism/breadcrumb.volt' %}
        <div class="row">
            <section class="two-thirds column">
                {% block section %}
                {% endblock %}
            </section>
            <aside class="one-third column">
                {%  include 'templates/_organism/buybox.volt' %}
                {%  include 'templates/_molecules/discountIcons.volt' %}
            </aside>
        </div>
    </main>
{% endblock %}