<?php

/**
 * Created by PhpStorm.
 * User: frontend
 * Date: 02/12/16
 * Time: 10:03 AM
 */

use Phalcon\Mvc\Controller;
use Phalcon\Http\Response;

class MediaController extends ControllerBase
{
    public function onConstruct(){
        $this->view->section = 5;
    }
    public function GaleriaAction(){
        //Declaramos hreflangs para la página
        $this->setPath("media/galeria");
        $hreflangs = $this->urls->getUrls($this->path);
        $this->setHreflangs($hreflangs);

        //Obtenemos textos de acuerdo al path
        $this->getTranslation($this->path);
    }
}