<?php

/**
 * Created by PhpStorm.
 * User: frontend
 * Date: 11/11/16
 * Time: 3:40 PM
 */
use Phalcon\Mvc\Controller;
use Phalcon\Http\Response;
class XoximilcoController extends ControllerBase
{
    public function onConstruct(){
        $this->view->section = 2;
    }
    public function entradaAction(){
        //Objeto para info de productos
        $sivex = new Sivex();

        //Declaramos hreflangs para la página
        $this->setPath("xoximilco/entrada");
        $hreflangs = $this->urls->getUrls($this->path);
        $this->setHreflangs($hreflangs);

        //Valores para datalayer
        $this->view->seccion = "Información del Tour";

        //tomamos la info del producto para datalayer
        $this->view->dataProduct = $sivex->getPriceFormato(1576,0,10,$moneda);
        // var_dump($this->view->dataProduct);
        //Obtenemos textos de acuerdo al path
        $this->getTranslation($this->path);
    }
    public function testAction(){
        //Objeto para info de productos
        $sivex = new Sivex();

        //Declaramos hreflangs para la página
        $this->setPath("xoximilco/entrada");
        $hreflangs = $this->urls->getUrls($this->path);
        $this->setHreflangs($hreflangs);

        //Valores para datalayer
        $this->view->seccion = "Información del Tour";

        //tomamos la info del producto para datalayer
        $this->view->dataProduct = $sivex->getPriceFormato(1576,0,10,$moneda);
        // var_dump($this->view->dataProduct);
        //Obtenemos textos de acuerdo al path
        $this->getTranslation($this->path);

        $this->view->render("xoximilco","entrada_test");
    }
    public function juangabrielAction(){
        //Declaramos hreflangs para la página
        $this->setPath("xoximilco/juangabriel");
        $hreflangs = $this->urls->getUrls($this->path);
        $this->setHreflangs($hreflangs);

        //Valores para datalayer
        $this->view->seccion = "Información del Tour";

        //Obtenemos textos de acuerdo al path
        $this->getTranslation($this->path);
    }
}