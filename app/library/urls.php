<?php

/**
 * Created by PhpStorm.
 * User: frontend
 * Date: 03/10/16
 * Time: 1:08 PM
 */
class Urls
{
    public $urls = array(
        "home/index" => array("controller" => "home", "action" => "index", "rutas" => array(
            "es" => "/(es)",
            "en" => "/(en)"
        )),
        "home/preguntasfrecuentes" => array("controller" => "home", "action" => "preguntasfrecuentes", "rutas" => array(
            "es" => "/(es)/preguntas-frecuentes",
            "en" => "/(en)/faqs"
        )),
        "home/conoce" => array("controller" => "home", "action" => "conoce", "rutas" => array(
            "es" => "/(es)/cancun-y-riviera-maya",
            "en" => "/(en)/cancun-riviera-maya"
        )),
        "home/avisoprivacidad" => array("controller" => "home", "action" => "avisoprivacidad", "rutas" => array(
            "es" => "/(es)/aviso-privacidad",
            "en" => "/(en)/privacy-notice"
        )),
        "home/terminosuso" => array("controller" => "home", "action" => "terminosuso", "rutas" => array(
            "es" => "/(es)/terminos-de-uso",
            "en" => "/(en)/terms-of-use"
        )),
        "home/sitemap" => array("controller" => "home", "action" => "sitemap", "rutas" => array(
            "es" => "/(es)/mapa-de-sitio",
            "en" => "/(en)/site-map"
        )),
        "sabermas/xoximilco" => array("controller" => "sabermas", "action" => "xoximilco", "rutas" => array(
            "es" => "/(es)/xoximilco",
            "en" => "/(en)/xoximilco-cancun"
        )),
        "sabermas/quees" => array("controller" => "sabermas", "action" => "quees", "rutas" => array(
            "es" => "/(es)/acerca-de-xoximilco",
            "en" => "/(en)/about-xoximilco"
        )),
        "sabermas/gastronomia" => array("controller" => "sabermas","action" => "gastronomia", "rutas" => array(
            "es" => "/(es)/cena-cancun",
            "en" => "/(en)/gastronomy-in-xoximilco"
        )),
        "sabermas/instalaciones" => array("controller" => "sabermas", "action" => "instalaciones", "rutas" => array(
            "es" => "/(es)/instalaciones-xoximilco",
            "en" => "/(en)/xoximilco-facilities"
        )),
        "sabermas/comollegar" => array("controller"=> "sabermas", "action" => "comollegar", "rutas" => array(
            "es" => "/(es)/ubicacion-xoximilco",
            "en" => "/(en)/how-to-get-to-xoximilco"
        )),
        "sabermas/eventos" => array("controller" => "sabermas", "action" => "eventos", "rutas" => array(
            "es" => "/(es)/eventos-especiales",
            "en" => "/(en)/specials-events-in-xoximilco"
        )),
        "sabermas/bodas" => array("controller" => "sabermas", "action" => "bodas", "rutas" => array(
            "es" => "/(es)/bodas-xoximilco",
            "en" => "/(en)/xoximilco-cancun-weddings"
        )),
        "xoximilco/entrada" => array("controller" => "xoximilco", "action" => "entrada", "rutas" => array(
            "es" => "/(es)/entrada-xoximilco",
            "en" => "/(en)/xoximilco-tour"
        )),
        "xoximilco/juangabriel" => array("controller" => "xoximilco", "action" => "juangabriel", "rutas" => array(
            "es" => "/(es)/noches-de-juan-gabriel",
        )),
        "ahorramas/promociones" => array("controller" => "ahorramas", "action" => "promociones", "rutas" => array(
            "es" => "/(es)/promociones",
            "en" => "/(en)/xoximilco-cancun-promotions"
        )),
        "ahorramas/paquetes" => array("controller" => "ahorramas", "action" => "paquetes", "rutas" => array(
            "es" => "/(es)/paquetes",
            "en" => "/(en)/xoximilco-cancun-packages"
        )),
        "ahorramas/quintanarroenses" => array("controller" => "ahorramas", "action" => "quintanarroenses", "rutas" => array(
            "es" => "/(es)/quintanarroense",
        )),
        "media/galeria" => array("controller" => "media", "action" => "galeria", "rutas" => array(
            "es" => "/(es)/galeria",
            "en" => "/(en)/gallery"
        )),
        "promociones/grupos" => array("controller" => "promociones", "action" => "grupos", "rutas" => array(
            "es" => "/(es)/promociones/xoximilco-grupo",
            "en" => "/(en)/promotions/xoximilco-group"
        )),
        "promociones/quintanarroense" => array("controller" => "promociones", "action" => "quintanarroense", "rutas" => array(
            "es" => "/(es)/promociones/quintanarroense-6x5",
        )),
        "xoximilco/test" => array("controller" => "xoximilco", "action" => "test", "rutas" => array(
            "es" => "/(es)/_test-entrada-xoximilco",
            "en" => "/(en)/_test-xoximilco-tour"
        )),
    );
    public function getUrls($url){
        $rutas = $this->urls[$url]["rutas"];
        foreach ($rutas as $lang=>$ruta){
            $clean = str_replace(['/(',')'],"",$ruta);
            $rutas[$lang] = $clean;
        }
        return $rutas;
    }

    public function existUrlSlashed($url){
        foreach ($this->urls as $pagina){
            foreach ($pagina["rutas"] as $lang=>$ruta){
                $clean = str_replace(['/(',')'],"",$ruta);
                //var_dump($clean);
                echo $url. "=" ."/".$clean. "?" ;
                if($url == "/".$clean)
                    return true;
            }
        }
        return false;
    }
}