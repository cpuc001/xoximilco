<?php
/**
 * Created by PhpStorm.
 * User: frontend
 * Date: 8/26/16
 * Time: 12:59 PM
 xxx
 */
$messages_global = array(
    "logo" => array("src" => "img/xoximilco-home.png", "title" => "XOXIMILCO - Donde el folclor de México se combina con la fiesta", "alt" => "XOXIMILCO - The magic of folklore and a true Mexican fiesta."),
    "header"  => array(
        "atencion" => array("texto"  => "CUSTOMER SERVICE", "footer" => "Customer Service / Sales:", "sub" => array(
            array("texto" => "<strong>Toll free number within Mexico</strong>"),
            array("texto" => "Cancun: 998-883-3143", "href" => "Tel:998-883-3143"),
            array("texto" => "Playa del Carmen: 984-206-0038", "href" => "Tel:984-206-0038"),
            array("texto" => "USA-CAN: 1-855-326-0682", "href" => "Tel:1-855-326-0682"),
            array("texto" => "Brazil: 0-800-892-3371", "href" => "Tel:0-800-892-3371"),
            array("texto" => "Argentina: 0800-122-0384", "href" => "Tel:0800-122-0384"),
            array("texto" => "Venezuela: 0-800-162-7384", "href" => "Tel:0-800-162-7384"),
            array("texto" => "Colombia: 01-800-952-0705", "href" => "Tel:01-800-952-0705"),
            array("texto" => "Spain: 900-965-224", "href" => "Tel:900-965-224"),
            array("texto" => "Chile: 0-800-835-016", "href" => "Tel:0-800-835-016")
            // array("texto" => "México: 01-800-292-2738", "href" => "Tel:01-800-292-2738"),
            ),
        ),
        "superior" => array(
            "usuario"   => "Acceder / Registrar",
            "carrito"   => "Carrito",
            "language" => "LANGUAGE",
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
                array("menu"  => "I WANT TO", "href" => "", "section" => ""),
                array("menu"  => "Know about Xoximilco", "href" => "", "section"=>"1", "submenus" => array(
                    array("menu" => "About Xoximilco", "href" => "about-xoximilco"),
                    array("menu" => "Xochimilco World Cultural Heritage", "href" => "xoximilco-cancun"),
                    array("menu" => "Food and Drinks", "href" => "gastronomy-in-xoximilco"),
                    array("menu" => "Xoximilco Facilities", "href" => "xoximilco-facilities"),
                    array("menu" => "How to get to Xoximilco?", "href" => "how-to-get-to-xoximilco"),
                    array("menu" => "Special events", "href" => "specials-events-in-xoximilco"),
                    array("menu" => "Xoximilco Weddings", "href" => "xoximilco-cancun-weddings"),
                )),
                array("menu"  => "Buy my ticket to Xoximilco", "href" => "xoximilco-tour", "section"=>"2"),
                array("menu"  => "Save more", "href" => "", "section"=>"4", "submenus" => array(
                    array("menu" => "Special Promotions", "href" => "xoximilco-cancun-promotions"),
                    //array("menu" => "Create a Package", "href" => "xoximilco-cancun-packages"),
                )),
                array("menu"  => "See Xoximilco gallery", "href" => "", "section" => "5", "submenus" => array(
                    array("menu" => "Images", "href" => "gallery"),
                    array("menu" => "Videos", "href" => "https://www.youtube.com/user/xoximilcopark", "ext" => true),
                ))
            ),
            "secundario" => array(
                array("menu"  => "Home", "href" => "", "icon" => "icon-home"),
                /*array("menu"  => "My Photos", "href" => "", "icon" => "icon-camera"),*/
                array("menu"  => "FAQs", "href" => "faqs", "icon" => "icon-question")
            )
        ),
        "mobile" => array(
            "lateral" => array(
                array("menu"  => "Know about Xoximilco", "href" => "", "submenus" => array(
                    array("menu" => "About Xoximilco", "href" => "about-xoximilco"),
                    array("menu" => "Xochimilco World Cultural Heritage", "href" => "xoximilco-cancun"),
                    array("menu" => "Food and Drinks", "href" => "gastronomy-in-xoximilco"),
                    array("menu" => "Xoximilco Facilities", "href" => "xoximilco-facilities"),
                    array("menu" => "How to get to Xoximilco?", "href" => "how-to-get-to-xoximilco"),
                    array("menu" => "Special events", "href" => "specials-events-in-xoximilco"),
                    array("menu" => "Xoximilco’s Weddings", "href" => "xoximilco-cancun-weddings"),
                )),
                array("menu"  => "Save more", "href" => "", "submenus" => array(
                    array("menu" => "Special Promotions", "href" => "xoximilco-cancun-promotions"),
                    //array("menu" => "Create a Package", "href" => "xoximilco-cancun-packages"),
                )),
                array("menu"  => "See Xoximilco gallery", "href" => "", "submenus" => array(
                    array("menu" => "Images", "href" => "gallery"),
                    array("menu" => "Videos", "href" => "https://www.youtube.com/user/xoximilcopark", "ext" => true),
                )),
                array("menu"  => "MORE LINKS", "href" => "", "submenus" => array(
                      array("menu" => "FAQS", "href" => "faqs")
                ))
            ),
            "header" => array(
                array("menu" => "Buy my ticket to Xoximilco", "href" => "xoximilco-tour"),
                array("menu" => "Special promotions", "href" => "xoximilco-cancun-promotions"),
            )
        )
    ),
    "msi" => array(
        "title" => "PAYMENT OPTIONS",
    ),
    "why" => array(
        "title" => "Why book with us?",
        "benefits" => array(
            array("name" => "SECURE SHOPPING", "title" => "Secure Shopping", "img" => "img/svg/seguridad.svg", "description" => 'We offer you an online shopping experience that is safe and secure. In addition, you may have assistance during your trip, <a href="http://www.asistenciaiketotal.com/" target="_blank" class="anchors">More Info.</a>'),
            array("name" => "THE LOWEST RATES ON THE MARKET", "title" => "The lowest rates on the market", "img" => "img/svg/precios.svg", "description" => "You will find the lowest prices guaranteed only on our websites. Book online and save more with us!"),
            array("name" => "SPECIAL COUNTERS", "title" => "Special counters for pre-paid customers", "img" => "img/svg/taquillas.svg", "description" => "When you arrive at our parks, you can give your ticket to one of our special counters for a faster access."),
            array("name" => "WEATHER GUARANTEE", "title" => "Weather guarantee", "img" => "img/svg/garantia.svg", "description" => "Your purchase has a weather guarantee that is valid before using your coupon (not refundable). Your coupon is good for 1 year from date of purchase. Schedule change must be made 24 hours before your visit. Any change in dates cannot be made on the same day of the expected visit. Terms and Conditions apply."),
            array("name" => "TRAVEL INSURANCE", "img" => "img/svg/seguro.svg"),
            )
    ),
    "footer"    => array(
        "logos" => array(
            array("href" => "http://en.xcaretexperiencias.com/", "src" => "img/logos/exx.png", "alt" => "Experiencias Xcaret"),
            array("href" => "http://www.xcaret.com/", "src" =>"img/logos/xcaret.png", "alt" => "Xcaret"),
            array("href" => "http://www.xelha.com/", "src" => "img/logos/xelha.png", "alt" => "Xel-Há"),
            array("href" => "http://en.xichen.com.mx/", "src" => "img/logos/xichen.png", "alt" => "Xichén"),
            array("href" => "http://www.xenotes.com/", "src" => "img/logos/xenotes.png", "alt" => "Xenotes"),
            array("href" => "http://www.xplor.travel/", "src" => "img/logos/xplor-fuego.png", "alt" => "Xplor"),
            // array("href" => "http://www.xplor.travel/xplor-fuego-tour.php", "src" => "img/logos/xplor-fuego.png", "alt" => "Xplor Fuego"),
            array("href" => "http://www.xensespark.com/", "src" => "img/logos/xenses.png", "alt" => "Xenses"),
        ),
        "links" => "More links",
        "superior" => array(
            "principal" => array(
                array("title" => "ABOUT US", "links" => array(
                    array("text" => " Sitemap", "href" => "site-map/"),
                    array("text" => "Cancun and Riviera Maya", "href" => "cancun-riviera-maya/"),
                )),
                array("title" => "XOXIMILCO SITES", "links" => array(
                    array("text" => "Blog Xoximilco", "href" => "http://en.xoximilcoblog.com/", "ext" => true),
                    array("text" => "Weddings", "href" => "http://www.xcaretweddings.com/", "ext" => true),
                    array("text" => "Groups", "href" => "http://en.xcaretgrupos.com/", "ext" => true),
                )),
                array("title" => "OF INTEREST", "links" => array(
                    array("text" => "Have you visited us?", "href" => "http://www.yourexperience.travel/already-visited/xcaret.php", "ext" => true),
                    array("text" => "Haven´t you visited us yet?", "href" => "http://www.yourexperience.travel/next-visit/xcaret.php", "ext" => true),
                    array("text" => "Social Responsability", "href" => "http://en.grupoexperienciasxcaret.com/corporate-citizenship/", "ext" => true),
                )),
            ),
            "secundario" => array(
                array("text" => "About Experiencias Xcaret", "href" => "http://en.xcaretexperiencias.com/about-experiencias.php?_ga=1.132103759.1554401711.1479482372","rel" => "nofollow", "ext" => true),
                array("text" => "Privacy Notice", "href" => "privacy-notice/","rel" => "nofollow"),
                array("text" => "Contact Us", "href" => "http://en.xcaretexperiencias.com/contact-us.php?_ga=1.191175274.1554401711.1479482372","rel" => "nofollow", "ext" => true),
                array("text" => "Terms of use", "href" => "terms-of-use/","rel" => "nofollow"),
                array("text" => "Affiliates", "href" => "http://en.xcaretexperiencias.com/affiliates.php?_ga=1.232741471.1554401711.1479482372","rel" => "nofollow", "ext" => true),
                array("text" => "Online Agencies", "href" => "https://www.aolxcaret.com/Index.php?dsLang=en_US&_ga=1.232741471.1554401711.1479482372","rel" => "nofollow", "ext" => true),
                array("text" => "Press Room", "href" => "http://en.grupoexperienciasxcaret.com/experiencias-xcarets-press-room/?_ga=1.123557835.1554401711.1479482372", "ext" => true),
            ),
        )
    ),
    "slider" => array(
        "buttons" => array(
            "images" => "Gallery",
            "view" => "Vista 360º"
        )
    ),
    "booking" => array(
        "transportacion" => "Add Transportation",
        "legales" => "*Prices subject to change without prior notice and restrictions apply.",
        "button" => "BUY"
    ),
    "buybox" => array(
        "banner" => array("title" => "BOOK NOW!", "text" => "And get up to 15% Off*"),
        "regular" => "Regular Price:",
        "online" => "Online Price:",
        "transportacion" => " Add Transportation:",
        "foto" => " Add Photo pase :",
        "button" => "BUY NOW",
    ),
    "discounts" => array(
        "inline" => array(
            array("title" => "10%", "intro" => "OFF PURCHASING", "text" => "7-20 days in advance."),
            array("title" => "15%", "intro" => "OFF PURCHASING", "text" => "with at least 21 days in advance."),
            array("title" => "50%", "intro" => "OFF FOR CHILDREN 5 TO 11", "text" => "From 0 to 4 have free admission."),
        ),
        "tabs" => array(
            "title" => "How to save?",
            "items" => array(
                array("title" => "<strong>-10%</strong>", "text" => "<h5>* - 10% OFF</h5><strong>purchasing 7-20 days in advance.</strong><br>Does not apply for Packages or Xperience Passport. "),
                array("title" => "<strong>-15%</strong>", "text" => "<h5>* - 15% OFF</h5><strong>purchasing at least 21 days in advance.</strong><br>Does not apply for Packages or Xperience Passport. "),
                array("title" => "<strong>Children -50%</strong>", "text" => "<h5>-50% OFF</h5><strong>Children 0-4 years free admission.</strong><br>Does not apply to Optional Activities. "),
            )
        )
    ),
    "schemas" => array(
        "footer" => array(
            "organization" => array("tag" => "div", "attributes" => array("itemscope" => "", "itemtype" => "http://schema.org/Organization", "class" => "schema-footer"), "items" => array(
                array("tag" => "span", "attributes" => array("itemprop" => "name") , "text" => "Xoximilco - México"),
                array("tag" => "span", "attributes" => array("class" => "address", "itemprop" => "address", "itemscope" => "", "itemtype" => "http://schema.org/PostalAddress"), "items" => array(
                    array("tag" => "span", "attributes" => array("itemprop" => "streetAddress"), "text" => "Cancún-Puerto Morelos Federal Highway, Km. 307. Mza. 01 Lote 01-02."),
                    array("tag" => "span", "attributes" => array("itemprop" => "addressLocality"), "text" => "Puerto Morelos,"),
                    array("tag" => "span", "attributes" => array("itemprop" => "addressRegion"), "text" => "Quintana Roo."),
                    array("tag" => "span", "attributes" => array("itemprop" => "addressCountry"), "text" => "México."),
                    array("tag" => "span", "attributes" => array("itemprop" => "postalCode"), "text" => "CP 77580"),
                )),
                array("tag" => "div", "attributes" => array("itemscope" => "", "itemtype" => "http://schema.org/Park"), "items" => array(
                    array("tag" => "span", "text" => "Telephone USA/Canadá:"),
                    array("tag" => "span", "attributes" => array("itemprop" => "telephone"), "text" => "1-855-332-2130"),
                    array("tag" => "span", "attributes" => array("itemprop" => "url"), "text" => "www.xoximilco.com/en"),
                    array("tag" => "span", "text" => "Open : ", "items" => array(
                        array("tag" => "span", "attributes" => array("itemprop" => "openingHours", "content" => "Mo,Tu,We,Th,Fr,Sa 19:30-00:00"), "text" => "Open: Monday to Saturday from 7:30 p.m. to 12:00 a.m.")
                    )),
                    array("tag" => "div", "text" => "© Copyright 2016 Experiencias Xcaret Parque, S.A.P.I. de C.V"),
                ))
                )
            )
        )
    )
);