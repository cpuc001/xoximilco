<?php

/**
 * Created by PhpStorm.
 * User: frontend
 * Date: 03/11/16
 * Time: 1:44 PM
 */
use Phalcon\Mvc\Controller;
use Phalcon\Http\Response;

class SabermasController extends ControllerBase
{
    public function onConstruct(){
        $this->view->section = 1;
    }
    public function XoximilcoAction(){
        //Declaramos hreflangs para la página
        $this->setPath("sabermas/xoximilco");
        $hreflangs = $this->urls->getUrls($this->path);
        $this->setHreflangs($hreflangs);

        //Valores para datalayer
        $this->view->seccion = "Información del Tour";

        //Obtenemos textos de acuerdo al path
        $this->getTranslation($this->path);
    }

    public function queEsAction(){
        //Declaramos hreflangs para la página
        $this->setPath("sabermas/quees");
        $hreflangs = $this->urls->getUrls($this->path);
        $this->setHreflangs($hreflangs);

        //Valores para datalayer
        $this->view->seccion = "Información del Tour";

        //Obtenemos textos de acuerdo al path
        $this->getTranslation($this->path);
    }

    public function gastronomiaAction(){
        //Declaramos hreflangs para la página
        $this->setPath("sabermas/gastronomia");
        $hreflangs = $this->urls->getUrls($this->path);
        $this->setHreflangs($hreflangs);

        //Valores para datalayer
        $this->view->seccion = "Información del Tour";

        //Obtenemos textos de acuerdo al path
        $this->getTranslation($this->path);
    }

    public function instalacionesAction(){
        //Declaramos hreflangs para la página
        $this->setPath("sabermas/instalaciones");
        $hreflangs = $this->urls->getUrls($this->path);
        $this->setHreflangs($hreflangs);

        //Valores para datalayer
        $this->view->seccion = "Información del Tour";

        //Obtenemos textos de acuerdo al path
        $this->getTranslation($this->path);
    }

    public function comoLlegarAction(){
        //Declaramos hreflangs para la página
        $this->setPath("sabermas/comollegar");
        $hreflangs = $this->urls->getUrls($this->path);
        $this->setHreflangs($hreflangs);

        //Valores para datalayer
        $this->view->seccion = "Información del Tour";

        //Obtenemos textos de acuerdo al path
        $this->getTranslation($this->path);
    }

    public function eventosAction(){
        //Declaramos hreflangs para la página
        $this->setPath("sabermas/eventos");
        $hreflangs = $this->urls->getUrls($this->path);
        $this->setHreflangs($hreflangs);

        //Valores para datalayer
        $this->view->seccion = "Información del Tour";

        //Obtenemos textos de acuerdo al path
        $this->getTranslation($this->path);
    }

    public function bodasAction(){
        //Declaramos hreflangs para la página
        $this->setPath("sabermas/bodas");
        $hreflangs = $this->urls->getUrls($this->path);
        $this->setHreflangs($hreflangs);

        //Valores para datalayer
        $this->view->seccion = "Información del Tour";

        //Obtenemos textos de acuerdo al path
        $this->getTranslation($this->path);
    }
}