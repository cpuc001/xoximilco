

    
    





<script> dataLayer = [{
        'idioma': '<?= $lang ?>', 
        'userCurrency': '<?= $moneda[0] ?>', 
        'seccion': '<?= $seccion ?>'
}]; </script>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TDHHR4J');</script>
<!-- End Google Tag Manager -->


<meta charset="utf-8" />
<title><?= $t->meta->title ?></title>
<meta http-equiv="x-ua-compatible" content="ie=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
<meta name="copyright" content="Experiencias Xcaret S.A. de C.V" />
<meta name="keywords" content="<?= $t->meta->keywords ?>"/>
<meta name="description" content="<?= $t->meta->description ?>"/>
<link rel="icon" href="<?= $this->url->get('favicon.ico') ?>" type="image/x-icon" />
<!-- Icons Reel -->
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= $this->url->get('apple-touch-icon-72x72-precomposed.png') ?>" />
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= $this->url->get('apple-touch-icon-114x114-precomposed.png') ?>" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= $this->url->get('apple-touch-icon-144x144-precomposed.png') ?>" />
<meta name="msapplication-TileImage" content="<?= $this->url->get('windows.png') ?>" />
<meta name="msapplication-TileColor" content="#990066" />
<link rel="fluid-icon" href="<?= $this->url->get('iTunesArtwork.png') ?>" title="Experiencias Xcaret" />

<!-- NO FOLLOW  -->
<?php if (isset($t->meta->nofollow)) { ?>
    <meta name="robots" content="noindex, nofollow">
<?php } ?>

<?php if (isset($t->opengraph)) { ?>
    <!-- OG Reel -->
    <?php if (isset($t->opengraph->title)) { ?>
        <meta property="og:title" content="<?= $t->opengraph->title ?>">
    <?php } else { ?>
        <meta property="og:title" content="<?= $t->meta->title ?>">
    <?php } ?>
    <meta property="og:type" content="article">
    <meta property="og:url" content="<?= $domain . $current_page ?>">
    <?php if ($t->opengraph->img) { ?>
        <meta property="og:image" content="<?= $domain ?>/img/<?= $t->opengraph->img ?>">
    <?php } else { ?>
        <meta property="og:image" content="<?= $domain ?>/img/og/xelha-inlet.jpg">
    <?php } ?>
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="300">
    <meta property="og:image:height" content="300">
    <?php if ($t->opengraph->description) { ?>
        <meta property="og:description" content="<?= $t->opengraph->description ?>">
    <?php } else { ?>
        <meta property="og:description" content="<?= $t->meta->description ?>">
    <?php } ?>
<?php } ?>


<?php if (isset($t->twitter)) { ?>
    <meta name="twitter:card" value="summary">
    <meta name="twitter:creator" value="<?= $t->twitter->creator ?>">
    <meta name="twitter:url" value="<?= $url ?>">
    <?php if ($t->twitter->title) { ?>
        <meta name="twitter:title" value="<?= $t->twitter->title ?>">
    <?php } else { ?>
        <meta name="twitter:title" value="<?= $t->meta->title ?>">
    <?php } ?>
    <?php if ($t->twitter->description) { ?>
        <meta name="twitter:description" value="<?= $t->twitter->description ?>">
    <?php } else { ?>
        <meta name="twitter:description" value="<?= $t->meta->description ?>">
    <?php } ?>
    <?php if ($twitter->img) { ?>
        <meta name="twitter:image" value="<?= $domain ?>/img/<?= $t->twitter->img ?>" />
    <?php } else { ?>
        <meta name="twitter:image" value="<?= $domain ?>/img/og/xelha-inlet.jpg" />
    <?php } ?>
<?php } ?>
<link rel="canonical" href="<?= $domain ?>" />


<style type="text/css"><?= $criticalcss ?></style>

<script async defer>
(function(w){"use strict";var loadCSS=function(href,before,media){var doc=w.document;var ss=doc.createElement("link");var ref;if(before){ref=before;}else{var refs=(doc.body||doc.getElementsByTagName("head")[0]).childNodes;ref=refs[refs.length-1];}var sheets=doc.styleSheets;ss.rel="stylesheet";ss.href=href;ss.media="only x";function ready(cb){if(doc.body){return cb();}setTimeout(function(){ready(cb);});}ready(function(){ref.parentNode.insertBefore(ss,(before?ref:ref.nextSibling));});var onloadcssdefined=function(cb){var resolvedHref=ss.href;var i=sheets.length;while(i--){if(sheets[i].href===resolvedHref){return cb();}}setTimeout(function(){onloadcssdefined(cb);});};function loadCB(){if(ss.addEventListener){ss.removeEventListener("load",loadCB);}ss.media=media||"all";}if(ss.addEventListener){ss.addEventListener("load",loadCB);}ss.onloadcssdefined=onloadcssdefined;onloadcssdefined(loadCB);return ss;};if(typeof exports!=="undefined"){exports.loadCSS=loadCSS;}else{w.loadCSS=loadCSS;}}(typeof global!=="undefined"?global:this));(function(w){if(!w.loadCSS){return;}var rp=loadCSS.relpreload={};rp.support=function(){try{return w.document.createElement("link").relList.supports("preload");}catch(e){return false;}};rp.poly=function(){var links=w.document.getElementsByTagName("link");for(var i=0;i<links.length;i++){var link=links[i];if(link.rel==="preload"&&link.getAttribute("as")==="style"){w.loadCSS(link.href,link);link.rel=null;}}};if(!rp.support()){rp.poly();var run=w.setInterval(rp.poly,300);if(w.addEventListener){w.addEventListener("load",function(){w.clearInterval(run);});}if(w.attachEvent){w.attachEvent("onload",function(){w.clearInterval(run);})}}}(this));
</script>
<script id="loadcss">loadCSS( "<?= $this->url->get('assets/output/css/main.min.css') ?>", document.getElementById("loadcss") );</script>