{# CODIGO PARA DATALAYER #}
{#
{% if not nofollow %}
    {% if precios %}
        {% set pageType = "productSheet" %}
    {% endif %}
    {% if not pageType %}
        {% set pageType = "informative" %}
    {% endif %}
    <script>
        //Definicion de variables de para dataLayer
        dataLayer = [{
            'pageType': '{{ pageType }}',
            {% if pageType == "home" %}
            'event': 'homeVisit',
            {% endif %}
            {% if pageType == "productSheet" %}
            'event': 'productVisit',
            'productName': '{{ precios.dsDescripciones }}',
            'productFamily': '{{ precios.dsUnidadNegocio }}',
            'regularPrice': {{attribute(precios,"adultoPrecioRegular" ~ moneda.1 ) | getFloatPrice }},
            'productPrice': {{attribute(precios,"adultoPrecioUnitario" ~ moneda.1 ) | getFloatPrice }},
            'currency': '{{ moneda.1 }}',
            {% endif %}
            'userCurrency': '{{ moneda.0 }}',
            'siteDomain': '{{ host | replace({'//' : ""}) }}'
        }];
    </script>
    #}
    {# FIN CODIGO PARA DATALAYER #}
    {# Código GTM ANALITYCS #}
{# {% if domain == "http://www.xoximilco.com" %} #}


{# variables dataLayer - abaco 1.0 #}

<script> dataLayer = [{
        'idioma': '{{ lang }}', 
        'userCurrency': '{{ moneda[0] }}', 
        'seccion': '{{ seccion }}'
}]; </script>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TDHHR4J');</script>
<!-- End Google Tag Manager -->
{# {% endif %} #}
{#
{% endif %}
#}