{# Macro "display a list of links to related topics" #}
{%- macro attributes(data) %}
	{%- for attribute, value in data  %}
		{{ attribute }}
		{%- if(value is not "")  %}
			="{{ value }}"
		{%- endif  %}
		{{ " " }}
	{%- endfor %}
{%- endmacro %}

{# Macro "display a list of links to related topics" #}
{%- macro schema(data) %}
	<{{ data.tag }}  {% if data.attributes is defined %} {{ attributes(data.attributes) }} {% endif %} >
	{% if data.text is defined %}
		{{ data.text }}
	{% endif %}
	{% if data.items is defined %}
		{%- for item in data.items %}
			{{ schema(item) ~ " " }}
		{%- endfor %}
	{% endif %}
	{% if data.textafter is defined %}
		{{ data.textafter }}
	{% endif %}
	</{{ data.tag }}>
{%- endmacro %}


<div class="border pleca_1"></div>
<div class="upperfooter">
    <div class="container">
        <div class="parks">
            {% for logo in g.footer.logos %}
                <div class="parks--logo"><a class="lazy" href="{{ logo.href }}"><img class="img--responsive" src="{{ url("img/blank.gif") }}" data-src="{{ url(logo.src) }}" alt="{{ logo.alt }}"></a></div>
            {% endfor %}
        </div>
        {% if not desktop %}
            <div class="social u-cf">
                <ul class="nav nav--inline nav-icon">
                    {% for social in g.social %}
                        <li class="nav--item"><a class="link-social" href="{{ social.href }}" target="_blank" data-red="{{ social.red }}"><i class="icon {{ social.class }}"></i></a></li>
                    {% endfor %}
                </ul>
            </div>
        {% endif %}
        <div class="accordion u-cf">
            <div class="accordion--item is_close">
                <div class="accordion-header"><i class="icon icon-plus-circled icon-mark"></i><h6>{{ g.footer.links }}<i class="icon icon-angle-down"></i></h6></div>
                <div class="accordion-content">
                    <div class="flex--wrap" data-items="{% if mobile %}2{% else %}3{% endif %}">
                        {% for seccion in g.footer.superior.principal %}
                        <div class="flex--item">
                            <h5>{{ seccion.title }}</h5>
                            <ul class="list {{ mobile ? 'list-mobile':'' }} u-cf">
                            {% for link in seccion.links %}
                                <li>
                                    <a class="text--align-left" title="{{ link.text }}" {{ (link.ext is defined and link.ext == true) ? 'href="'~ link.href ~'" target="_blank"' : 'href="'~ url(lang ~ "/" ~ link.href) ~'"' }}>
                                        <span>{{ link.text }}</span>
                                    </a>
                                </li>
                            {% endfor %}
                            </ul>
                        </div>
                        {% endfor %}
                    </div>
                    <ul class="list list-columns list-bars {{ mobile ? 'list-mobile':'' }}">
                        {% for link in g.footer.superior.secundario %}
                            <li>
                                <a class="text--align-left" title="{{ link.text }}" {{ (link.ext is defined and link.ext == true) ? 'href="'~ link.href ~'" target="_blank"' : 'href="'~ url(lang ~ "/" ~ link.href) ~'"' }} {{ link.rel is defined ? 'rel="nofollow"':'' }}>
                                    <span>{{ link.text }}</span>
                                </a>
                            </li>
                        {% endfor %}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="border pleca_2"></div>
<div class="bottomfooter">
    <div class="container">
        <div class="accordion u-cf">
            <div class="accordion--item is_close">
                <div class="accordion-header"><i class="icon icon-phone icon-mark"></i><h6>{{ g.header.atencion.footer }}<i class="icon icon-angle-down"></i></h6></div>
                <div class="accordion-content">
                    <h5>{{ g.header.atencion.footer }}</h5>
                    <ul class="list list-columns phones" data-column="3">
                        {% for s in g.header.atencion.sub %}
                            <li><a class="num-phone-footer" href="{{ s.href }}"><span>{{ s.texto }}</span></a></li>
                        {% endfor %}
                    </ul>
                </div>
            </div>
        </div>

        {{ schema(g.schemas.footer.organization) }}
    </div>
</div>
