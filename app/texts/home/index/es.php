<?php
/**
 * Created by PhpStorm.
 * User: frontend
 * Date: 06/09/16
 * Time: 1:33 PM
 */
$messages = array(
    "seccion" => "Home",
    "meta" => array(
        "title" => "Verdadera Fiesta Mexicana | Xoximilco Cancún",
        "keywords" => "",
        "description" => "Auténtica fiesta mexicana en Cancún, llena de música y tradición. ¡Una versión moderna del Xochimilco de Ciudad de México!"
    ),
    "slider" => array(
        array("type" => "video",
            "device" => "both",
            "url" => "img/slider/".$mobile_path."slide.jpg",
            "codigo" => "Hc8WLc-EYvE",
            //VARIALBES PARA DATALAYER GTM
            "promotion" => array(
            //si es mobile toma el primer id, si no el segundo
                "id" => ($mobile_path == "mobile/") ? "M0007": "D0040",
                "name" => "Video (Floating with joy)",
                "description" => "Video Floating with Joy",
            )),

        array("type" => "img",
        "device" => "both",
        "url" => "img/slider/".$mobile_path."mexico-te-llama-xoxi.jpg",
        "link" => "http://www.xcaretexperiencias.com/mexicanos.php",
        //VARIALBES PARA DATALAYER GTM
            "promotion" => array(
                //si es mobile toma el primer id, si no el segundo
                "id" => ($mobile_path == "mobile/") ? "M0001": "D0001",
                "name" => "México te llama/25% Mexicanos",
                "description" => "Campaña México te llama 25% Mexicanos",
            )),

         array("type" => "img",
            "device" => "both",
            "url" => "img/slider/".$mobile_path."juangabriel.jpg",
            "link" => "http://www.xoximilco.com.mx/entrada-xoximilco.php",
        //VARIALBES PARA DATALAYER GTM
            "promotion" => array(
                //si es mobile toma el primer id, si no el segundo
                "id" => ($mobile_path == "mobile/") ? "M0002": "D0004",
                "name" => "Homenaje Juan Gabriel",
                "description" => "Campaña Noches de Juan Gabriel",
            )),
         
        // array("type" => "img", "device" => "desktop", "url" => "img/slider/".$mobile_path."xox-xen.jpg", "link" => "http://www.parquexenses.com/xoximilco-xenses.php",
        // //VARIALBES PARA DATALAYER GTM
        //     "promotion" => array(
        //         "id" => "D0038",
        //         "name" => "Xenses + Xoximilco",
        //         "description" => "Paquete Xenses + Xoximilco a precio especial",
        //     )),
        array("type" => "img", "device" => "desktop", "url" => "img/slider/".$mobile_path."tequila.jpg",
        //VARIALBES PARA DATALAYER GTM
            "promotion" => array(
                "id" => "D0036",
                "name" => "Xoximilco Tripadvisor",
                "description" => "Imagen Xoximilco / TripAdvisor Trajineras",
            ))
    ),
    "introduccion" => array(
        "h"    => "A conocer el lado festivo y divertido de México, ¡están todos invitados!",
        "parrafos"     => array(
            "Xoximilco es de principio a fin la más tradicional fiesta mexicana en Cancún y la Riviera Maya. Comienza la noche divirtiéndote con familia y amigos en una típica kermés con juegos, esquites para abrir el apetito y una entretenida sorpresa musical. El banderazo de salida perfecto hacia una noche muy especial.",
            "La fiesta es a bordo, ¡sube!",
            "La noche continúa recorriendo los increíbles canales a bordo de pintorescas trajineras, a lo largo de los escenarios naturales de Xoximilco Cancún, donde disfrutarás de los exquisitos sabores de la gastronomía mexicana y la barra libre de tequila, cerveza, refresco y aguas frescas acompañado de música en vivo con los ritmos más populares de México, que te pondrán a bailar y cantar, pero sobre todo, convertirán tu noche en un festejo lleno de alegría, cultura y tradición.",
            "Todo el folclor y la pasión de México en una gran celebración."
        ),
        "button"   => array("text" => "Más información sobre Xoximilco", "href" => "entrada-xoximilco"),
        "newsletter" => array(
            "img" => "img/newsletter.svg",
            "button" => "¡Suscríbete!"
        )
    ),
    "secciones" => array(
        "titulo" => "Más",
        "secciones" => array(
            array(
                "a" => array("href" => "cena-cancun/"),
                "img" => array("src" => "img/atracciones/alimentos y bebidas.png", "alt" => ""),
                "nombre" => "",
                /*** VARIALBES PARA DATALAYER GTM ***/
                "promotion" => array(
                    "id" => "BS0001",
                    "name" => "Alimentos y bebidas",
                    "description" => "Imagen sección alimentos y bebidas"
                )
            ),
            array(
                "a" => array("href" => "eventos-especiales/"),
                "img" => array("src" => "img/atracciones/eventos-especiales.png", "alt" => ""),
                "nombre" => "",
                /*** VARIALBES PARA DATALAYER GTM ***/
                "promotion" => array(
                    "id" => "BS0002",
                    "name" => "Eventos especiales",
                    "description" => "Imagen sección eventos especiales"
                )
            ),
            array(
                "a" => array("href" => "bodas-xoximilco/"),
                "img" => array("src" => "img/atracciones/boda_xoximilco.png", "alt" => ""),
                "nombre" => "",
                /*** VARIALBES PARA DATALAYER GTM ***/
                "promotion" => array(
                    "id" => "BS0003",
                    "name" => "Tu boda en xoximilco",
                    "description" => "Imagen Boda en Xoximilco"
                )
            ),

        )
    ),
    "modal" => array(
        "newsletter" => array(
            "required" => "Campos requeridos",
            "title" => "NEWSLETTER",
            "form" => array(
                "email" => "Email",
                "name" => "Nombre",
                "country" => "País",
            ),
            "subscribe" => "Suscribir",
            "close" => "Close"
        )
    ),

);