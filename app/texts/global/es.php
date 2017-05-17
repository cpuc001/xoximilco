<?php
/**
 * Created by PhpStorm.
 * User: frontend
 * Date: 8/26/16
 * Time: 12:58 PM
 */
$messages_global = array(
    "logo" => array("src" => "img/xoximilco-home.png", "title" => "XOXIMILCO - Donde el folclor de México se combina con la fiesta", "alt" => "XOXIMILCO - The magic of folklore and a true Mexican fiesta."),
    "header"  => array(
        "atencion" => array("texto"  => "ATENCIÓN A CLIENTES", "footer" => "Atención a Clientes", "sub" => array(
            array("texto" => "<strong>Lada sin costo en México</strong>"),
            array("texto" => "Cancún: 998-883-3143", "href" => "Tel:998-883-3143"),
            array("texto" => "Playa del Carmen: 984-206-0038", "href" => "Tel:984-206-0038"),
            array("texto" => "USA-CAN: 1-855-326-0682", "href" => "Tel:1-855-326-0682"),
            array("texto" => "Brasil: 0-800-892-3371", "href" => "Tel:0-800-892-3371"),
            array("texto" => "Argentina: 0800-122-0384", "href" => "Tel:0800-122-0384"),
            array("texto" => "Venezuela: 0-800-162-7384", "href" => "Tel:0-800-162-7384"),
            array("texto" => "Colombia: 01-800-952-0705", "href" => "Tel:01-800-952-0705"),
            array("texto" => "España: 900-965-224", "href" => "Tel:900-965-224"),
            array("texto" => "Chile: 0-800-835-016", "href" => "Tel:0-800-835-016")
            // array("texto" => "México: 01-800-292-2738", "href" => "Tel:01-800-292-2738"),
            ),
        ),
        "superior" => array(
            "usuario"   => "Acceder / Registrar",
            "carrito"   => "Carrito",
            "language" => "IDIOMA",
        )
    ),
    "social" => array(
        array("href" => "https://www.facebook.com/xoximilcocancun", "class" => "icon-facebook", "red" => "facebook"),
        array("href" => "https://twitter.com/XoximilcoCancun", "class" => "icon-twitter", "red" => "twitter"),
        array("href" => "https://www.youtube.com/user/xoximilcopark", "class" => "icon-youtube", "red" => "youtube"),
        array("href" => "https://plus.google.com/+XoximilcoCancun", "class" => "icon-google-plus", "red" => "google plus"),
    ),
    "nav"   => array(
        "desktop" => array(
            "main" => array(
                array("menu"  => "QUIERO", "href" => "", "section" => ""),
                array("menu"  => "Saber más de XOXIMILCO", "href" => "", "section"=>"1", "submenus" => array(
                    array("menu" => "¿Qué es Xoximilco?", "href" => "acerca-de-xoximilco"),
                    array("menu" => "Patrimonio de la humanidad", "href" => "xoximilco"),
                    array("menu" => "Alimentos y Bebidas", "href" => "cena-cancun"),
                    array("menu" => "Instalaciones y Servicios", "href" => "instalaciones-xoximilco"),
                    array("menu" => "¿Cómo llegar a Xoximilco?", "href" => "ubicacion-xoximilco"),
                    array("menu" => "Eventos Especiales", "href" => "eventos-especiales"),
                    array("menu" => "Tu Boda en Xoximilco", "href" => "bodas-xoximilco"),
                )),
                array("menu"  => "Comprar mi entrada a XOXIMILCO", "href" => "", "section"=>"2", "submenus" => array(
                    array("menu" => "Entrada al Parque", "href" => "entrada-xoximilco"),
                    array("menu" => "Noches de Juan Gabriel", "href" => "noches-de-juan-gabriel"),
                    )
                ),
                array("menu"  => "AHORRAR MÁS", "href" => "", "section"=>"4", "submenus" => array(
                    array("menu" => "Promociones Especiales", "href" => "promociones"),
                    //array("menu" => "Paquetes 2 o más Parques", "href" => "paquetes"),
                    array("menu" => "Quintanarroenses", "href" => "quintanarroense"),
                )),
                array("menu"  => "Ver la galería de XOXIMILCO", "href" => "", "section" => "5", "submenus" => array(
                    array("menu" => "Imágenes", "href" => "galeria"),
                    array("menu" => "Videos", "href" => "https://www.youtube.com/user/xoximilcopark", "ext" => true),
                ))
            ),
            "secundario" => array(
                array("menu"  => "Inicio", "href" => "", "icon" => "icon-home"),
                /*array("menu"  => "Mis Fotos", "href" => "", "icon" => "icon-camera"),*/
                array("menu"  => "Preguntas Frecuentes", "href" => "preguntas-frecuentes", "icon" => "icon-question")
            )
        ),
        "mobile" => array(
            "lateral" => array(
                array("menu"  => "Saber más de XOXIMILCO", "href" => "", "submenus" => array(
                    array("menu" => "¿Qué es Xoximilco?", "href" => "acerca-de-xoximilco"),
                    array("menu" => "Patrimonio de la humanidad", "href" => "xoximilco"),
                    array("menu" => "Alimentos y Bebidas", "href" => "cena-cancun"),
                    array("menu" => "Instalaciones y Servicios", "href" => "instalaciones-xoximilco"),
                    array("menu" => "¿Cómo llegar a Xoximilco?", "href" => "ubicacion-xoximilco"),
                    array("menu" => "Eventos Especiales", "href" => "eventos-especiales"),
                    array("menu" => "Tu Boda en Xoximilco", "href" => "bodas-xoximilco"),
                )),
                array("menu"  => "AHORRAR MÁS", "href" => "", "submenus" => array(
                    array("menu" => "Promociones Especiales", "href" => "promociones"),
                    //array("menu" => "Paquetes 2 o más Parques", "href" => "paquetes"),
                    array("menu" => "Quintanarroenses", "href" => "quintanarroense"),
                )),
                array("menu"  => "Ver la galería de XOXIMILCO", "href" => "", "submenus" => array(
                    array("menu" => "Imágenes", "href" => "galeria"),
                    array("menu" => "Videos", "href" => "https://www.youtube.com/user/xoximilcopark", "ext" => true),
                )),
                array("menu"  => "OTROS LINKS", "href" => "", "submenus" => array(
                    array("menu" => "Preguntas frecuentes", "href" => "preguntas-frecuentes")
                ))
            ),
            "header" => array(
                array("menu" => "Comprar mi entrada a XOXIMILCO", "href" => "entrada-xoximilco"),
                array("menu" => "Promociones especiales", "href" => "promociones"),
            )
        )
    ),
    "msi" => array(
        "title" => "Hasta <span>9</span> Meses sin intereses",
        "text"  => "Con los principales bancos y tarjetas emitidas en México. No aplica con Paypal. Ver opciones »",
        "modal" => array(
            "title" => "Opciones de pago",
            "parrafos" => array(
                "Te ofrecemos múltiples opciones al momento de pagar tu reservación. Aplican restricciones.",
                "Promoción válida solo en Sitios Web y Centro de Atención a Clientes."
            ),
            "bancos" => array(
                array("descripcion" => "3, 6 y 9 meses sin intereses", "img" => array("src" => "/img/bancos/banamex.svg", "alt" => "Banamex")),
                array("descripcion" => "3 y 6 meses sin intereses", "img" => array("src" => "/img/bancos/bancomer.svg", "alt" => "Bancomer")),
                array("descripcion" => "3 y 6 meses sin intereses", "img" => array("src" => "/img/bancos/santander.svg", "alt" => "Santander")),
                array("descripcion" => "3 y 6 meses sin intereses", "img" => array("src" => "/img/bancos/amex.png", "alt" => "American Express")),
                array("descripcion" => "3 y 6 meses sin intereses", "img" => array("src" => "/img/bancos/hsbc.svg", "alt" => "HSBC")),
                array("descripcion" => "3 y 6 meses sin intereses", "img" => array("src" => "/img/bancos/banorte.svg", "alt" => "Banorte")),
                array("descripcion" => "3 y 6 meses sin intereses", "img" => array("src" => "/img/bancos/scotiabank.svg", "alt" => "Scotiabank")),
                array("descripcion" => "3 y 6 meses sin intereses", "img" => array("src" => "/img/bancos/itaucard.jpg", "alt" => "Itaucard")),
                array("descripcion" => "3 y 6 meses sin intereses", "img" => array("src" => "/img/bancos/inbursa.svg", "alt" => "Inbursa")),
                array("descripcion" => "3 y 6 meses sin intereses", "img" => array("src" => "/img/bancos/ixe.svg", "alt" => "IXE")),
                array("descripcion" => "3 y 6 meses sin intereses", "img" => array("src" => "/img/bancos/banbajio.svg", "alt" => "Banbajio")),
                array("descripcion" => "3 y 6 meses sin intereses", "img" => array("src" => "/img/bancos/afirme.svg", "alt" => "Afirme")),
                array("descripcion" => "No aplica con Paypal", "img" => array("src" => "/img/bancos/paypal.svg", "alt" => "Paypal")),
            ),
            "close" => "Close"
        )
    ),
    "why" => array(
        "title" => "¿Por qué reservar con nosotros?",
        "benefits" => array(
            array("name" => "MESES SIN INTERESES", "title" => "Meses sin intereses", "img" => "img/svg/meses.svg", "description" => "Paga a meses sin intereses con tarjetas de crédito participantes y disfruta de las promociones que Experiencias Xcaret tiene para ti. AMEX, Bancomer, Banamex. Válido exclusivamente para tarjetas emitidas en México."),
            array("name" => "COMPRA SEGURA", "title" => "Compra segura", "img" => "img/svg/seguridad.svg", "description" => 'Te ofrecemos una experiencia de compra en línea segura y confiable. Además, ahora puedes contar con asistencia durante todo tu viaje. Para más información, <a href="http://www.asistenciaiketotal.com/" target="_blank" class="anchors">click aquí.</a>'),
            array("name" => "PRECIO + BAJO GARANTIZADO", "title" => "Precios más bajos", "img" => "img/svg/precios.svg", "description" => "Solo en nuestros sitios oficiales encontrarás los precios más bajos garantizados. ¡Compra en línea y ahorra más!"),
            array("name" => "TAQUILLAS ESPECIALES", "title" => "Taquillas especiales", "img" => "img/svg/taquillas.svg", "description" => "Al llegar al parque podrás entregar tu cupón en las taquillas especiales para que tu acceso sea más ágil."),
            array("name" => "GARANTIA MAL CLIMA", "title" => "Garantía por mal clima", "img" => "img/svg/garantia.svg", "description" => "Tu cupón tiene validez por 1 año y garantía contra mal clima que podrás hacer válida exclusivamente con 24 horas de anticipación. No se permiten realizar cambios de fecha el mismo día de tu visita. Aplican restricciones."),
            array("name" => "SEGURO DE VIAJE", "img" => "img/svg/seguro.svg"),
        )
    ),
    "footer"    => array(
        "logos" => array(
            array("href" => "http://www.xcaretexperiencias.com/", "src" => "img/logos/exx.png", "alt" => "Experiencias Xcaret"),
            array("href" => "http://www.xcaret.com.mx/", "src" => "img/logos/xcaret.png", "alt" => "Xcaret"),
            array("href" => "http://es.xelha.com/", "src" => "img/logos/xelha.png", "alt" => "Xel-Há"),
            array("href" => "http://www.xichen.com.mx/", "src" => "img/logos/xichen.png", "alt" => "Xichén"),
            array("href" => "http://www.xenotes.com.mx/", "src" => "img/logos/xenotes.png", "alt" => "Xenotes"),
            array("href" => "http://es.xplor.travel/tour-xplor-fuego-cancun.php", "src" => "img/logos/xplor-fuego.png", "alt" => "Xplor Fuego"),
            array("href" => "http://www.parquexenses.com/", "src" => "img/logos/xenses.png", "alt" => "Xenses"),
        ),
        "links" => "Más links",
        "superior" => array(
            "principal" => array(
                array("title" => "ACERCA DE", "links" => array(
                    array("text" => "Mapa de sitio", "href" => "mapa-de-sitio/"),
                    array("text" => "Conoce Cancún y Riviera Maya", "href" => "cancun-y-riviera-maya/"),
                    array("text" => "Soy Quintanarroense", "href" => "quintanarroense/"),
                )),
                array("title" => "SITIOS XOXIMILCO", "links" => array(
                    array("text" => "Blog Xoximilco", "href" => "http://www.xoximilcoblog.com/", "ext" => true),
                    array("text" => "Bodas", "href" => "http://www.bodasxcaret.com/?_ga=1.172782307.1554401711.1479482372", "ext" => true),
                    array("text" => "Grupos", "href" => "http://www.xcaretgrupos.com/", "ext" => true),
                )),
                array("title" => "DE INTERÉS", "links" => array(
                    array("text" => "¿Ya nos visitaste?", "href" => "http://www.tuexperiencia.travel/ya-visite/xcaret.php", "ext" => true),
                    array("text" => "¿Aún no nos visitas?", "href" => "http://www.tuexperiencia.travel/proximo-a-visitar/xcaret.php", "ext" => true),
                    array("text" => "Responsabilidad Social", "href" => "http://www.grupoexperienciasxcaret.com/la-responsabilidad-social-empresarial-en-experiencias-xcaret/", "ext" => true),
                )),
            ),
            "secundario" => array(
                array("text" => "Acerca de Experiencias Xcaret", "href" => "http://www.xcaretexperiencias.com/acerca-de-experiencias.php","rel" => "nofollow", "ext" => true),
                array("text" => "Aviso de privacidad", "href" => "aviso-privacidad/", "rel" => "nofollow"),
                array("text" => "Contáctanos", "href" => "http://www.xcaretexperiencias.com/contacto-xcaretexperiencias.php","rel" => "nofollow", "ext" => true),
                array("text" => "Términos de uso", "href" => "terminos-de-uso/","rel" => "nofollow"),
                array("text" => "Afiliados", "href" => "http://www.xcaretexperiencias.com/afiliados.php","rel" => "nofollow", "ext" => true),
                array("text" => "Agencias Online", "href" => "https://www.aolxcaret.com/?_ga=1.172782307.1554401711.1479482372","rel" => "nofollow", "ext" => true),
                array("text" => "Sala de Prensa", "href" => "http://www.grupoexperienciasxcaret.com/sobre-sala-de-prensa-experiencias-xcaret/?_ga=1.172782307.1554401711.1479482372", "ext" => true),
                array("text" => "Bolsa de trabajo", "href" => "http://www.grupoexperienciasxcaret.com/talento-experiencias-xcaret/","rel" => "nofollow", "ext" => true),
            ),
        )
    ),
    "slider" => array(
        "buttons" => array(
            "images" => "Ver imágenes",
            "view" => "Vista 360º"
        )
    ),
    "booking" => array(
        "transportacion" => "Agregar Transportación",
        "legales" => "*Precios sujetos a cambio sin previo aviso. Aplican restricciones.",
        "button" => "COMPRAR"
    ),
    "buybox" => array(
        "banner" => array("title" => "COMPRA TU ENTRADA AQUÍ", "text" => "Y obtén hasta un 15% de descuento"),
        "regular" => "Precio regular :",
        "online" => "Precio online :",
        "transportacion" => "Más Transportación :",
        "foto" => "Agregar Photo pase :",
        "button" => "COMPRAR",
    ),
    "discounts" => array(
        "inline" => array(
            array("title" => "-10%", "intro" => "DE DESCUENTO", "text" => "comprando con 7-20 días de anticipación."),
            array("title" => "-15%", "intro" => "DE DESCUENTO", "text" => "comprando con 21 o más días de anticipación."),
            array("title" => "-50% ", "intro" => "NIÑOS DE 5 A 11 AÑOS.", "text" => "De 0 a 4 años entran gratis."),
        ),
        "tabs" => array(
            "title" => "¿Cómo Ahorrar?",
            "items" => array(
                array("title" => "<strong>-10%</strong>", "text" => "<h5>-Obtén 10% de descuento</h5><strong>Comprando con 7-20 días de anticipación.</strong><br>No aplica en Paquetes ni Pasaporte Xperience.* "),
                array("title" => "<strong>-15%</strong>", "text" => "<h5>-Obtén 15% de descuento</h5><strong>Comprando con 21 o más de anticipación.</strong><br>No aplica en Paquetes ni Pasaporte Xperience.* "),
                array("title" => "<strong>Niños</strong>", "text" => "<h5>-Obtén 50% de descuento</h5>En niños de<strong>5 a 11 años</strong><br>Niños de<strong>0 a 4 años de edad</strong>entran gratis.<br>No aplica en actividades opcionales. "),
            )
        )
    ),
    "schemas" => array(
        "footer" => array(
            "organization" => array("tag" => "div", "attributes" => array("itemscope" => "", "itemtype" => "http://schema.org/Organization", "class" => "schema-footer"), "items" => array(
                array("tag" => "span", "attributes" => array("itemprop" => "name") , "text" => "Xoximilco - México"),
                array("tag" => "span", "attributes" => array("class" => "address", "itemprop" => "address", "itemscope" => "", "itemtype" => "http://schema.org/PostalAddress"), "items" => array(
                        array("tag" => "span", "attributes" => array("itemprop" => "streetAddress"), "text" => "Carretera Cancún-Puerto Morelos, Km. 307. Mza. 01 Lote 01-02."),
                        array("tag" => "span", "attributes" => array("itemprop" => "addressLocality"), "text" => "Puerto Morelos,"),
                        array("tag" => "span", "attributes" => array("itemprop" => "addressRegion"), "text" => "Quintana Roo."),
                        array("tag" => "span", "attributes" => array("itemprop" => "addressCountry"), "text" => "México."),
                        array("tag" => "span", "attributes" => array("itemprop" => "postalCode"), "text" => "CP 77580."),
                )),
                array("tag" => "div", "attributes" => array("itemscope" => "", "itemtype" => "http://schema.org/Park"), "items" => array(
                    array("tag" => "span", "text" => "Teléfono Cancún:"),
                    array("tag" => "span", "attributes" => array("itemprop" => "telephone"), "text" => "998-883-3143"),
                    array("tag" => "span", "attributes" => array("itemprop" => "url"), "text" => "www.xoximilco.com/es/"),
                    array("tag" => "span    ", "text" => "Abierto : ", "items" => array(
                        array("tag" => "span", "attributes" => array("itemprop" => "openingHours", "content" => "Lu,Ma,Mi,Ju,Vi,Sa 19:30-00:00"), "text" => "Lunes a Sábado. 7:30 pm to 12:00 am")
                    )),
                    array("tag" => "div", "text" => "© Copyright 2016 Experiencias Xcaret Parque, S.A.P.I. de C.V"),
                ))
            )
            )
        )
    )
);