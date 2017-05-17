<?php
/**
 * Created by PhpStorm.
 * User: frontend
 * Date: 8/26/16
 * Time: 12:23 PM
 */

use Phalcon\Mvc\Router;

// Create the router
$router = new Router(false);
//$router->removeExtraSlashes(true);

$urls = new Urls();
foreach ($urls->urls as $url){
    foreach ($url["rutas"] as $ruta){
        $router->add(
            (substr($ruta, -1) == "/") ? $ruta: $ruta."/",
            array(
                "controller" => $url["controller"],
                "action" => $url["action"],
                "language" => 1
            )
        );
    }
}



// Redirect raiz
$router->add(
    "/",
    array(
        "controller" => "home",
        "action" => "raiz",
    )
);

// Set 404 paths
$router->notFound(
    array(
        "controller" => "home",
        "action"     => "error404"
    )
);

$router->add(
    "/helpers/currency/{currency}",
    array(
        "controller" => "home",
        "action" => "currency",
        "currency" => 1
    )
);

/*
 * MODALS AJAX
 */

$router->add(
    "/helpers/video/{video}",
    array(
        "controller" => "ajax",
        "action" => "video",
        "video" => 1
    )
);

$router->add(
    "/helpers/fancy",
    array(
        "controller" => "ajax",
        "action" => "fancy"
    )
);

$router->add(
    "/helpers/msi",
    array(
        "controller" => "ajax",
        "action" => "msi"
    )
);

$router->add(
    "/helpers/news",
    array(
        "controller" => "ajax",
        "action" => "news"
    )
);

$router->add(
    "/helpers/mailchimp",
    array(
        "controller" => "ajax",
        "action" => "mailchimp"
    )
);

$router->add(
    "/helpers/why",
    array(
        "controller" => "ajax",
        "action" => "why"
    )
);

$router->add(
    "/helpers/discounts",
    array(
        "controller" => "ajax",
        "action" => "discounts"
    )
);

$router->add(
    "/helpers/paquete-info",
    array(
        "controller" => "ajax",
        "action" => "paqueteinfo"
    )
);

$router->add(
    "/api",
    array(
        "controller" => "home",
        "action" => "api"
    )
);
/*
$router->add(
    "/api",
    array(
        "controller" => "home",
        "action" => "api"
    )
);
*/

$router->add(
    "/(es)/sitemap.xml",
    array(
        "controller" => "home",
        "action" => "sitemapxml",
        "language" => 1
    )
);

$router->add(
    "/(en)/sitemap.xml",
    array(
        "controller" => "home",
        "action" => "sitemapxml",
        "language" => 1
    )
);


$router->handle();