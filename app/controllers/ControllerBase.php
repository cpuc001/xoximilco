<?php
/**
 * Created by PhpStorm.
 * User: frontend
 * Date: 8/26/16
 * Time: 1:23 PM
 */
use Phalcon\Mvc\Controller;
use Phalcon\Translate\Adapter\NativeArray;

class ControllerBase extends Controller
{
    /**
     * This action is available for multiple controllers
     */

    //idiomas disponibles
    protected $_avalaibleLangs = array(
        "en" => array("href" => "", "texto" => "Inglés", "img" => "img/flags/english.png", "hreflang" => "en", "flag" => "us"),
        "es" => array("href" => "", "texto" => "Español", "img" => "img/flags/espaniol.png", "hreflang" => "es", "flag" => "mx"),
        //"fr" => array("href" => "fr", "texto" => "Francais", "img" => "//en.xcaretexperiencias.com/img/flags/frances.png", "hreflang" => "fr")
    );
    protected $_avalaibledivisas; // divisas disponibles
    protected $_avalaibledivisasPais; //divisas asiganas a pais
    protected $moneda = array("MXN","USD"); //moneda por default
    protected $detect;
    protected $urls;
    protected $path;
    protected $path_last;
    protected $domain;
    protected $current_page;
    protected $paisSitio;

    //CREDENCIALES PARA LA API DE TWITTER
    protected $twitter = array(
        "APP_CONSUMER_KEY" => "xVchol4zITnQvCp2xjwiekj6W",
        "APP_CONSUMER_SECRET" => "w3ditZN1VFx5IcqBiWdbNpUIBOEwqLqj1WQ5iuMfEpknEQM4SB",
        "ACCESS_TOKEN" => "117913131-RqY4nPZHRa9ROH9GeOLUQwcTWDjnM7BRmvy943gF",
        "ACCESS_TOKEN_SECRET" => "Hh9jpjPnkX2pyPzBf98899KMeS0T2D7wSY87VpwLJfsqZ"
    );

    protected $mailchimp_config = array(
        "api_key" => "41ef9adbe2560c0a630fdefd89046830-us5",
        "en" => array("listId" => "22cbb3fbcf"),
        "es" => array("listId" => "8cfb15cb92")
    );

    protected $language; //idioma del sitio

    //Se ejecuta al inicializar un controlador
    public function initialize(){
        // error_reporting(E_ALL);
        // ini_set("display_errors", 1);

        $this->view->domain = 'http://' . $_SERVER['SERVER_NAME'];
        $this->current_page = $this->router->getRewriteUri();
        $this->view->current_page = $this->current_page;

        $this->detect = new MobileDetect();
        //$this->view->mobile = $this->detect->isMobile();
        $this->view->mobile = $this->detect->isMobile() && !$this->detect->isTablet();
        $this->view->tablet = $this->detect->isTablet();
        $this->view->desktop = !($this->detect->isMobile());

        $this->urls = new Urls();

        $this->language = ($this->dispatcher->getParam("language") != "") ? $this->dispatcher->getParam("language"): "en";
        $this->view->lang = $this->language;
        $this->view->flag = $this->_avalaibleLangs[$this->language]["img"];
        $this->view->mailchimpid = $this->mailchimp_config[$this->language]["listId"];
        $this->getDivisas();
        $this->getPaisSitio();
        $this->getCurrency();
    }

    /** Obtiene el texto de la página según el idioma
     * @param path_textos Cadena de texto que indica la ruta de la carpeta en donde se encuentran
     * los textos de la página
     */
    protected function getTranslation($path_textos = "")
    {
        $moneda = $this->moneda;
        $mobile_path = ($this->detect->isMobile() && !$this->detect->isTablet())? "mobile/" : "";
        // Revisamos si se tiene el archivo del texto de acuerdo al lenguaje.
        if (file_exists("app/texts/" . $path_textos . "/" . $this->language . ".php")) {
            require "app/texts/global/" . $this->language . ".php"; //arhivo con los textos que comparten todas las páginas

            require "app/texts/" . $path_textos . "/". $this->language . ".php"; //archivo con los textos especificos de la página

        } else {
            // Si no regresamos el idioma por default
            require "app/texts/global/en.php";//arhivo con los textos que comparten todas las páginas

            require "app/texts/" .$path_textos. "/en.php";//archivo con los textos especificos de la página
        }
        /*
         * $messages_global es el array en donde se guardan los textos compartidos en todas las páginas
         * $messages es el array en donde se guardan los textos especificos de la página
        //Se asignan los textos a sus respectivas variables en la vista
        */
        $this->view->g = json_decode(json_encode($messages_global));
        $this->view->t = json_decode(json_encode($messages));
    }

    /*
     * Recibe un arreglo con las url y el texto a mostrar en la sección de cambio de idioma
     */
    public function setHreflangs($hreflangs){
        foreach ($hreflangs as $idioma => $hreflang){
            $this->_avalaibleLangs[$idioma]["href"].= $hreflang;
        }
        unset($this->_avalaibleLangs[$this->language]); //Elimina el idioma actual de la lista
        $this->view->languages = json_decode(json_encode($this->_avalaibleLangs)); //Se asigna a una variable dentro de la vista
    }

    /**
     * ---PENDIENTE POR MODIFICAR---
     * @desc permite escoger y establecer el idioma de la aplicación
     */
    public function setLanguageAction($language='')
    {
        //comprobamos si $language es uno de los lenguajes disponibles
        if(in_array($language,$this->_avalaibleLangs))
        {
            $this->session->set('language', $language);
        }
        else
        {
            $this->session->set('language', 'es');
        }

        //obtenemos la variable HTTP_REFERER
        $referer = $this->request->getHTTPReferer();

        //si existe la variable HTTP_REFERER redirigimos a la url anterior
        if(strpos($referer, $this->request->getHttpHost()."/")!==false)
        {
            return $this->response->setHeader("Location", $referer);
        }
        //en otro caso mostramos el contenido de la acción index del controlador index
        else
        {
            return $this->dispatcher->forward(array('controller' => 'index', 'action' => 'index'));
        }
    }

    /*
     * Funcion para el futuro
    protected function setCurrency($request='')
    {
        if(isset($_COOKIE["currency"])){
            $url_request = parse_url($request);
            if ($url_request["host"] == $_SERVER['SERVER_NAME']) {
                $path_request = explode("/", $url_request["path"]);
                if ($path_request[1] != $this->language) {
                    if ($this->language == "es") {
                        $currency = "MXN";
                    } else {
                        $currency = "USD";
                    }
                    setcookie("currency", $currency);
                    $this->view->cookie = $_COOKIE["currency"];
                }
            }
        }
    }
    */

    /*
     * Obtiene el arreglo de las divisas disponibles
     */
    protected function getDivisas(){
        require "app/texts/config/divisas.php";
        $this->_avalaibledivisas = $divisas;
        $this->_avalaibledivisasPais = $divisasPais;
        //Se asigna a una variable dentro de la vista
        $this->view->divisas = json_decode(json_encode($this->_avalaibledivisas));
    }

    /**
     * Redirige a la página anterior
     */
    protected function redirectBack() {
        return $this->response->redirect($_SERVER['HTTP_REFERER']);
    }

    /*
     * --PENDIENTE POR ADAPTAR A AKAMAI
     */
    protected function getCurrency(){
        //Establecer la moneda y pais para el sitio en sesion

            //Si esta el pais en la lista de paises configurados con moneda, se establece la moneda para ese pais
        if (array_key_exists($this->paisSitio, $this->_avalaibledivisasPais)) {
            $defaultMoneda = $this->_avalaibledivisasPais[$this->paisSitio];
            $this->moneda[0] = $defaultMoneda;
        }
        //$this->moneda[0] = (isset($_COOKIE["currency"])) ? $_COOKIE["currency"]: $defaultMoneda;

        //CREAR COOKIE CON MONEDA PRINCIPAL PARA SU USO EN ARCHIVOS JS
        //setcookie('moneda', $this->moneda[0]);

        $this->view->moneda = $this->moneda;
    }

    protected function getPaisSitio(){
        if(isset($_SERVER["HTTP_X_AKAMAI_EDGESCAPE"])){
            $akamaiEdgescape = explode(",",$_SERVER["HTTP_X_AKAMAI_EDGESCAPE"]);
            $countryISO =  explode("=",$akamaiEdgescape[1]);
            if (is_string($countryISO[1])) {
                $this->paisSitio = $countryISO[1];
            }
        }else{
            if($this->language == "es"){
                $this->paisSitio = "MX";
            }else{
                $this->paisSitio = "US";
            }
        }
    }

    protected function setPath($path){
        $this->path = $path;
        $this->view->path = $path;
        $this->path_last = explode("/",$path)[1];
        $this->view->path_last = $this->path_last;
        $this->getCritical();
    }

    protected function getCritical(){
        $crtical_file = "app/texts/" . $this->path . "/" . $this->path_last . ".volt";
        if (file_exists($crtical_file)) {
            $this->view->criticalcss = file_get_contents($crtical_file, true);
        }else
            $this->view->criticalcss = "";
    }
}