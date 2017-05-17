{% extends "templates/_templates/base.volt" %}
{% block content %}
    <main class="container">
        {% include 'templates/_organism/breadcrumb.volt' %}
        <h1>{{ t.introduccion.h }}</h1>
        {% for menu in g.nav.desktop.main %}
            {% if not loop.first %}
                {% if menu.submenus is defined %}
                    <h4>{{ menu.menu }}</h4>
                    <ul>
                    {% for submenu in menu.submenus %}
                        <li>
                            <a href="{{ url(lang ~ "/" ~ submenu.href) }}">{{ submenu.menu }}</a>
                        </li>
                    {% endfor %}
                    </ul>
                {% else %}
                    <h4><a href="{{ url(lang ~ "/" ~ menu.href) }}">{{ menu.menu }}</a></h4>
                {% endif %}
            {% endif %}
        {% endfor %}
        <h2>Footer</h2>
        {% for seccion_footer in g.footer.superior.principal %}
            <h4>{{ seccion_footer.title }}</h4>
            <ul>
            {% for link in seccion_footer.links %}
                <li>
                    <a {{ (link.ext is defined and link.ext == true) ? 'href="'~ link.href ~'" target="_blank"' : 'href="'~ url(lang ~ "/" ~ link.href) ~'"' }}>
                        <span>{{ link.text }}</span>
                    </a>
                </li>
            {% endfor %}
            </ul>
        {% endfor %}
    </main>
{% endblock %}
{# BLOQUE PARA SCRIPTS ESPECIFICOS #}
{% block scripts %}
{% endblock %}