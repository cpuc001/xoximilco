<meta charset="utf-8" />
<title>{{ t.meta.title }}</title>
<meta http-equiv="x-ua-compatible" content="ie=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
<meta name="copyright" content="Experiencias Xcaret S.A. de C.V" />
<meta name="keywords" content="{{ t.meta.keywords }}"/>
<meta name="description" content="{{ t.meta.description }}"/>
<link rel="icon" href="{{ url("favicon.ico") }}" type="image/x-icon" />
<!-- Icons Reel -->
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ url("apple-touch-icon-72x72-precomposed.png") }}" />
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ url("apple-touch-icon-114x114-precomposed.png") }}" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ url("apple-touch-icon-144x144-precomposed.png") }}" />
<meta name="msapplication-TileImage" content="{{ url("windows.png") }}" />
<meta name="msapplication-TileColor" content="#990066" />
<link rel="fluid-icon" href="{{ url("iTunesArtwork.png") }}" title="Experiencias Xcaret" />
{#<link rel="manifest" href="{{ url("manifest.json") }}" />#}
<!-- NO FOLLOW  -->
{% if t.meta.nofollow is defined %}
    <meta name="robots" content="noindex, nofollow">
{% endif %}

{% if t.opengraph is defined %}
    <!-- OG Reel -->
    {% if t.opengraph.title is defined %}
        <meta property="og:title" content="{{ t.opengraph.title }}">
    {% else %}
        <meta property="og:title" content="{{ t.meta.title }}">
    {% endif %}
    <meta property="og:type" content="article">
    <meta property="og:url" content="{{ domain ~ current_page }}">
    {% if t.opengraph.img %}
        <meta property="og:image" content="{{ domain }}/img/{{ t.opengraph.img }}">
    {% else %}
        <meta property="og:image" content="{{ domain }}/img/og/xelha-inlet.jpg">
    {% endif %}
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="300">
    <meta property="og:image:height" content="300">
    {% if t.opengraph.description %}
        <meta property="og:description" content="{{ t.opengraph.description }}">
    {% else %}
        <meta property="og:description" content="{{ t.meta.description }}">
    {% endif %}
{% endif %}

{# Twitter Card #}
{% if t.twitter is defined %}
    <meta name="twitter:card" value="summary">
    <meta name="twitter:creator" value="{{ t.twitter.creator }}">
    <meta name="twitter:url" value="{{ url }}">
    {% if t.twitter.title %}
        <meta name="twitter:title" value="{{ t.twitter.title }}">
    {% else %}
        <meta name="twitter:title" value="{{ t.meta.title }}">
    {% endif %}
    {% if t.twitter.description %}
        <meta name="twitter:description" value="{{ t.twitter.description }}">
    {% else %}
        <meta name="twitter:description" value="{{ t.meta.description }}">
    {% endif %}
    {% if twitter.img %}
        <meta name="twitter:image" value="{{ domain }}/img/{{ t.twitter.img }}" />
    {% else %}
        <meta name="twitter:image" value="{{ domain }}/img/og/xelha-inlet.jpg" />
    {% endif %}
{% endif %}
<link rel="canonical" href="{{ domain }}" />

{# SCRIPTS
<!-- Mitch B2B-->
<script>(function(a){var d=document,c=d.createElement("script");c.async=!0,c.defer=!0,c.src=a,d.getElementsByTagName("head")[0].appendChild(c)})((iatDev=(window.location.href.indexOf("iatDev=1")>-1||document.cookie.indexOf("iatDev=1")>-1),"//"+(window.location.protocol=="http:"&&!iatDev?"h":"")+"fp.gdmdigital.com/424191.js?r="+Math.random()*1e16+"&m=992&a=424191"+(iatDev?"&d=1":"")))</script>

<!-- Start of Yieldify Code -->
<script>
    (function(d) {
        var e = d.createElement('script');
        e.src = d.location.protocol + '//app.yieldify.com/yieldify/code.js?yieldify_id=324&loca='+window.location.href;
        e.async = true;
        d.getElementsByTagName("head")[0].appendChild(e);
    }(document));
</script>
<!-- End of Yieldify Code -->

 inicia codigo de hotjar
<script>
    (function(f,b){
        var c;
        f.hj=f.hj||function(){(f.hj.q=f.hj.q||[]).push(arguments)};
        f._hjSettings={hjid:19287, hjsv:3};
        c=b.createElement("script");c.async=1;
        c.src="//static.hotjar.com/c/hotjar-19287.js?sv=3";
        b.getElementsByTagName("head")[0].appendChild(c);
    })(window,document);
</script>
{# termina codigo de hotjar

<!-- End of Optimizely Code -->
<script src="https://cdn.optimizely.com/js/215654396.js"></script>
<!-- End of Optimizely Code -->
#}