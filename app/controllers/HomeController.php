<?php

/**
 * Created by PhpStorm.
 * User: frontend
 * Date: 03/11/16
 * Time: 12:41 PM
 */
use Phalcon\Mvc\Controller;
use Phalcon\Http\Response;

class HomeController extends ControllerBase
{
    public function onConstruct(){
        $this->view->section = 0;
    }
    public function raizAction(){
        $response = new Response();
        $redirect = [
          "MX" => "es/",
          "ES" => "es/",
          "BR" => "es/",
          "CO" => "es/",
          "AR" => "es/",
          "VE" => "es/",
          "PE" => "es/",
          "CL" => "es/",
          "GT" => "es/",
          "EC" => "es/",
          "CU" => "es/",
          "BO" => "es/",
          "DO" => "es/",
          "HN" => "es/",
          "SV" => "es/",
          "PY" => "es/",
          "NI" => "es/",
          "CR" => "es/",
          "PR" => "es/",
          "PA" => "es/",
          "UY" => "es/",
          "US" => "en/",
          "CA" => "en/",
          "GB" => "en/",
          "DE" => "en/",
          "NL" => "en/",
          "FR" => "en/",
          "PT" => "en/",
          "RU" => "en/",
          "BE" => "en/",
          "IT" => "en/",
          "JP" => "en/",
          "FI" => "en/",
          "AU" => "en/",
          "IN" => "en/",
          "IE" => "en/",
          "ZA" => "en/",
          "NZ" => "en/",
          "JM" => "en/",
          "CN" => "en/",
          "KR" => "en/",
          "CH" => "en/",
          "SE" => "en/",
        ];
        if (array_key_exists($this->paisSitio, $redirect)) {
            return $response->redirect($redirect[$this->paisSitio]);
        }else{
            return $response->redirect("en/");
        }
    }

    public function indexAction()
    {
        //Declaramos hreflangs para la página
        $this->setPath("home/index");
        $hreflangs = $this->urls->getUrls($this->path);
        $this->setHreflangs($hreflangs);
        //Valores para dataLayer
        $this->view->seccion = "Home";
        //Obtenemos textos de acuerdo al path
        $this->getTranslation($this->path);
    }
    public function preguntasFrecuentesAction(){
        //Declaramos hreflangs para la página
        $this->setPath("home/preguntasfrecuentes");
        $hreflangs = $this->urls->getUrls($this->path);
        $this->setHreflangs($hreflangs);

        //Valores para datalayer
        $this->view->seccion = "Footer";

        //Obtenemos textos de acuerdo al path
        $this->getTranslation($this->path);
    }
    public function conoceAction(){
        //Declaramos hreflangs para la página
        $this->setPath("home/conoce");
        $hreflangs = $this->urls->getUrls($this->path);
        $this->setHreflangs($hreflangs);

        //Valores para datalayer
        $this->view->seccion = "Footer";

        //Obtenemos textos de acuerdo al path
        $this->getTranslation($this->path);
    }

    public function avisoPrivacidadAction(){
        //Declaramos hreflangs para la página
        $this->setPath("home/avisoprivacidad");
        $hreflangs = $this->urls->getUrls($this->path);
        $this->setHreflangs($hreflangs);

        //Valores para datalayer
        $this->view->seccion = "Footer";

        //Obtenemos textos de acuerdo al path
        $this->getTranslation($this->path);
    }

    public function terminosUsoAction(){
        //Declaramos hreflangs para la página
        $this->setPath("home/terminosuso");
        $hreflangs = $this->urls->getUrls($this->path);
        $this->setHreflangs($hreflangs);

        //Valores para datalayer
        $this->view->seccion = "Footer";

        //Obtenemos textos de acuerdo al path
        $this->getTranslation($this->path);
    }

    public function siteMapAction(){
        //Declaramos hreflangs para la página
        $this->setPath("home/sitemap");
        $hreflangs = $this->urls->getUrls($this->path);
        $this->setHreflangs($hreflangs);

        //Valores para datalayer
        $this->view->seccion = "Footer";

        //Obtenemos textos de acuerdo al path
        $this->getTranslation($this->path);
    }

    public function siteMapxmlAction(){
        //Declaramos hreflangs para la página
        $this->response->setHeader('Content-Type', 'application/xml');
        $this->setPath("home/sitemapxml");
        $hreflangs = $this->urls->getUrls($this->path);
        $this->setHreflangs($hreflangs);

        //Obtenemos textos de acuerdo al path
        $this->getTranslation($this->path);
    }

    /*
 * Errores 404
 */
    public function error404Action(){
        //Si existe la url con slash al final entonces redirigimos
        if($this->urls->existUrlSlashed($this->current_page)){
            $response = new Response();
            return $response->redirect(substr($this->current_page, 1)."/");
        }
        //Si no se muestra error 404
        else{
            //Declaramos hreflangs para la página
            $this->setPath("home/error404");
            $hreflangs = $this->urls->getUrls($this->path);
            $this->setHreflangs($hreflangs);
            //Obtenemos textos de acuerdo al path
            $this->getTranslation($this->path);
            $this->response->setStatusCode(404, 'Not Found');
        }
    }

    /*
     * Cambio de divisa
     */
    public function currencyAction(){
        $currency = $this->dispatcher->getParam("currency");
        if(array_key_exists($currency,$this->_avalaibledivisas)){
            $this->session->set("currency", $currency);
        }
        $this->redirectBack();
    }
}