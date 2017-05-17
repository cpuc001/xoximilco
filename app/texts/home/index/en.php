<?php
/**
 * Created by PhpStorm.
 * User: frontend
 * Date: 06/09/16
 * Time: 1:33 PM
 */
$messages = array(
    "meta" => array(
        "title" => "Authentic Mexican Fiesta in Cancun | Xoximilco Cancun",
        "keywords" => "",
        "description" => "Music and Mexican traditions are combined in a fun boat ride aboard trajineras. Book your tour to Xoximilco Cancun park!"
    ),
    "slider" => array(
         array(
            "type" => "video", 
            "device" => "both", 
            "url" => "img/slider/".$mobile_path."slide.jpg", 
            "codigo" => "-5THhz_Ap78",

            //VARIALBES PARA DATALAYER GTM
            "promotion" => array(
            //si es mobile toma el primer id, si no el segundo
                "id" => ($mobile_path == "mobile/") ? "M0007": "D0040",
                "name" => "Video (Floating with joy)",
                "description" => "Video Floating with Joy",
            )
        ),

        
        // array(
        //     "type" => "img",
        //     "device" => "both",
        //     "url" => "img/slider/".$mobile_path."xox.jpg",
        //     "link" => "http://www.xensespark.com/xoximilco-xenses.php",
        //     //VARIALBES PARA DATALAYER GTM
        //     "promotion" => array(
        //         //si es mobile toma el primer id, si no el segundo
        //         "id" => ($mobile_path == "mobile/") ? "M0008": "D0038",
        //         "name" => "Xenses + Xoximilco",
        //         "description" => "Paquete Xenses + Xoximilco a precio especial"
        //     )
        // ),
        array(
            "type" => "img",
            "device" => "desktop",
            "url" => "img/slider/".$mobile_path."xox5x4.jpg",
            "link"=> "http://www.xoximilco.com/promotions/xoximilco-group/",
            //VARIALBES PARA DATALAYER GTM
            "promotion" => array(
                "id" => "D0010",
                "name" => "Xoximilco 5x4",
                "description" => "Promo de 5to pax gratis (5x4)"
            )
        ),

        array(
            "type" => "img",
            "device" => "both",
            "url" => "img/slider/".$mobile_path."flexi-paq.jpg",
            "link" => "http://en.xcaretexperiencias.com/cancun-tours-packages.php",
            //VARIALBES PARA DATALAYER GTM
            "promotion" => array(
                //si es mobile toma el primer id, si no el segundo
                "id" => ($mobile_path == "mobile/") ? "M0014": "D0005",
                "name" => "Nuevos Paquetes y Experiences",
                "description" => "Descuentos en paquetes y experiencies con hasta 25%"
            )
        ),

        array(
            "type" => "img",
            "device" => "desktop",
            "url" => "img/slider/".$mobile_path."tequila.jpg",
            //VARIALBES PARA DATALAYER GTM
            "promotion" => array(
                "id" => "D0036",
                "name" => "Xoximilco Tripadvisor",
                "description" => "Imagen Xoximilco / TripAdvisor Trajineras"
            )
        )
    ),
    "introduccion" => array(
        "h"    => "To discover the festive and<br> fun side of Mexico, everyone’s invited!",
        "parrafos"     => array(
            "Xoximilco is from start to finish the most traditional Mexican party in Cancun and Riviera Maya. The night begins by having fun with family and friends in a traditional Mexican carnival with amusing games, esquites (corn snacks) to build up your appetite, and an entertaining musical surprise. The perfect send-off to a very special night.",
            "The party is on board, get in!",
            "The night continues along incredible canals on board colorful party barges that take you through the natural scenery of Xoximilco Cancun, where you will enjoy the delicious flavors of Mexican cuisine and the tequila, beer, soft drinks and fresh flavored water open bar, accompanied by live music with the most popular rhythms of Mexico that will make you sing and dance. Turn your night into a celebration of culture and traditions!",
            "All the folklore and passion of Mexico in a great celebration."
        ),
        "button"   => array("text" => "More about Xoximilco", "href" => "xoximilco-tour"),
        "newsletter" => array(
            "img" => "img/newsletter_english.svg",
            "button" => "Subscribe!"
        )
    ),
    "secciones" => array(
        "titulo" => "More",
        "secciones" => array(
            array(
                "a" => array("href" => "gastronomy-in-xoximilco/"),
                "img" => array("src" => "img/atracciones/food_drinks-min.png", "alt" => ""),
                "nombre" => "",
                /*** VARIALBES PARA DATALAYER GTM ***/
                "promotion" => array(
                    "id" => "BS0001",
                    "name" => "Alimentos y bebidas",
                    "description" => "Imagen sección alimentos y bebidas"
                )
            ),
            array(
                "a" => array("href" => "specials-events-in-xoximilco"),
                "img" => array("src" => "img/atracciones/special_events-min.png", "alt" => ""),
                "nombre" => "",
                /*** VARIALBES PARA DATALAYER GTM ***/
                "promotion" => array(
                    "id" => "BS0002",
                    "name" => "Eventos especiales",
                    "description" => "Imagen sección eventos especiales"
                )
            ),
            array(
                "a" => array("href" => "xoximilco-cancun-weddings/"),
                "img" => array("src" => "img/atracciones/xoximilco-weddings.png", "alt" => ""),
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
            "title" => "NEWSLETTER",
            "required" => "Required fields",
            "form" => array(
                "email" => "Email",
                "name" => "Name",
                "country" => "Country",
            ),
            "subscribe" => "Subscribe",
            "close" => "Close"
        )
    ),

);