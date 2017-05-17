<!DOCTYPE html>
<html lang="{{ lang }}">
    <head>
        {% include  'templates/_general/head.volt' %}
        {% block head %}
        {% endblock %}
        {% include  'constant/heatmap.volt' %}
    </head>
    <body>
    {# {% if domain == "http://www.xoximilco.com" %} #}
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TDHHR4J" height="0" width="0" style="display:none;visibility:hidden;"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
    {# {% endif %} #}
        {% if mobile or tablet %}
            <div class="backdrop"></div>
        {% endif %}
            {% if mobile or tablet %}
                <header id="toolbar">
                    {% include  'templates/_organism/header.volt' %}
                </header>
            {% else %}
                <header>
                    {% include 'templates/_organism/header-desktop.volt' %}
                </header>
            {% endif %}

        {% block content %}
        {% endblock %}

        {% if mobile %}
            <div class="block text--align-center">
                <button class="button button--inline go-top up-bottom" href="#"><i class="icon icon-angle-up"></i></button>
            </div>
        {% endif %}
        <footer>
            {% block footer %}
                {% include  'templates/_general/footer.volt' %}
            {% endblock %}
        </footer>
        <div id="modals" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">

            </div>
          </div>
        </div>
        {% include 'constant/scripts.volt' %}
        {% block scripts %}
        {% endblock %}
        <div class="clearfix" id="pinbot"></div>
    </body>
</html>