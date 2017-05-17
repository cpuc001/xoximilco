<?php

/**
 * Created by PhpStorm.
 * User: frontend
 * Date: 12/12/16
 * Time: 9:48 AM
 */
use Phalcon\Mvc\Controller;
use Phalcon\Http\Response;
class PromocionesController extends ControllerBase
{
    public function onConstruct(){
        $this->view->section = 6;
    }

    public function gruposAction(){
        //Declaramos hreflangs para la página
        $this->setPath("promociones/grupos");
        $hreflangs = $this->urls->getUrls($this->path);
        $this->setHreflangs($hreflangs);

        //Valores para datalayer
        $this->view->seccion = "Promociones";

        //Obtenemos textos de acuerdo al path
        $this->getTranslation($this->path);
    }

    public function quintanarroenseAction(){
        //Declaramos hreflangs para la página
        $this->setPath("promociones/quintanarroense");
        $hreflangs = $this->urls->getUrls($this->path);
        $this->setHreflangs($hreflangs);

        //Valores para datalayer
        $this->view->seccion = "Promociones";

        //Obtenemos textos de acuerdo al path
        $this->getTranslation($this->path);
    }
}