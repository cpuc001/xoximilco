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

