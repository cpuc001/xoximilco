<?php

/**
 * Created by PhpStorm.
 * User: frontend
 * Date: 04/11/16
 * Time: 10:41 AM
 */
use Phalcon\Mvc\Controller;
use Phalcon\Http\Response;

class AhorramasController extends ControllerBase
{
    public function onConstruct(){
        $this->view->section = 4;
    }
    public function promocionesAction(){
        //Declaramos hreflangs para la página
        $this->setPath("ahorramas/promociones");
        $hreflangs = $this->urls->getUrls($this->path);
        $this->setHreflangs($hreflangs);

        //Valores para datalayer
        $this->view->seccion = "Información del Tour";

        //Obtenemos textos de acuerdo al path
        $this->getTranslation($this->path);
    }

    public function paquetesAction(){
        //Declaramos hreflangs para la página
        $this->setPath("ahorramas/paquetes");
        $hreflangs = $this->urls->getUrls($this->path);
        $this->setHreflangs($hreflangs);

        //Valores para datalayer
        $this->view->seccion = "Información del Tour";

        //Obtenemos textos de acuerdo al path
        $this->getTranslation($this->path);
    }
    public function guiapreciosAction(){
        //Declaramos hreflangs para la página
        $this->setPath("ahorramas/guiaprecios");
        $hreflangs = $this->urls->getUrls($this->path);
        $this->setHreflangs($hreflangs);

        //Valores para datalayer
        $this->view->seccion = "Información del Tour";

        //Obtenemos textos de acuerdo al path
        $this->getTranslation($this->path);
    }

    public function quintanarroensesAction(){
        //Declaramos hreflangs para la página
        $this->setPath("ahorramas/quintanarroenses");
        $hreflangs = $this->urls->getUrls($this->path);
        $this->setHreflangs($hreflangs);

        //Valores para datalayer
        $this->view->seccion = "Información del Tour";

        //Obtenemos textos de acuerdo al path
        $this->getTranslation($this->path);
    }
}