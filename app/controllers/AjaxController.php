<?php
/**
 * Created by PhpStorm.
 * User: frontend
 * Date: 8/26/16
 * Time: 10:09 AM
 */
use Phalcon\Mvc\Controller;

class AjaxController extends ControllerBase
{
    public function videoAction(){
        $this->view->video = $this->dispatcher->getParam("video");
    }

    public function fancyAction(){
        $slider = json_decode(json_encode($this->request->getPost("slider")));
        $this->view->slider = $slider;
    }

    public function msiAction(){
        $msi = json_decode(json_encode($this->request->getPost("msi")));
        $this->view->msi = $msi;
    }

    public function newsAction(){
        $newsletter = json_decode(json_encode($this->request->getPost("newsletter")));
        $mailchimpid = json_decode(json_encode($this->request->getPost("mailchimpid")));
        $this->view->newsletter = $newsletter;
        $this->view->mailchimpid = $mailchimpid;
    }
    public function whyAction(){
        $why = json_decode(json_encode($this->request->getPost("why")));
        $this->view->why = $why;
    }
    public function discountsAction(){
        $discounts = json_decode(json_encode($this->request->getPost("discounts")));
        $this->view->discounts = $discounts;
    }
    public function paqueteinfoAction(){
        $info = json_decode(json_encode($this->request->getPost("info")));
        $this->view->info = $info;
    }

    public function mailchimpAction(){
        $email = $this->request->getPost("EMAIL");
        $nombre = $this->request->getPost("MMERGE3");
        $pais = $this->request->getPost("MMERGE5");
        $respuesta = array();

        /* Inicio validación Email */
        if($email != NULL){
            $email = filter_var($email, FILTER_SANITIZE_EMAIL);
            if(! $email = filter_var($email, FILTER_VALIDATE_EMAIL))
                $respuesta["email"] = "Email no valido";
        }
        else
            $respuesta["email"] = "Email requerido";
        /* Fin validación Email */

        /* Inicio validación Nombre */
        if($nombre != NULL){
            $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
        }
        else
            $respuesta["name"] = "Nombre requerido";
        /* Fin validación Nombre */

        /* Inicio validación Pais */
        if($pais != NULL){
            $pais = filter_var($pais, FILTER_SANITIZE_STRING);
        }
        else
            $respuesta["country"] = "Pais requerido";
        /* Fin validación Pais */

        //Si no hay error en los datos recibidos, se hace la consulta a la API de mailchimp
        if(empty($respuesta)){

            $api = new MCAPI($this->mailchimp_config["api_key"],true);
            $listId = $this->mailchimp_config[$this->language]["listId"];
            //print_r($api->listLocations($listId));
            $merge_vars = array("MMERGE3"=> "Sergio", "MMERGE5" => $pais);
            $resultado = $api->listSubscribe( $listId, $email, $merge_vars );
            if($api->errorCode)
                $respuesta["mailchimp"] = $api->errorMessage."Lo sentimos, estamos teniendo problemas con el servidor. Intente más tarde.";
            else
                $respuesta["mailchimp"] = "Registrado con éxito, confirma tu registro revisando tu bandeja de entrada.";
        }
        echo json_encode($respuesta);
    }
}