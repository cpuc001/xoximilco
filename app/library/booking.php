<?php

/**
 * Created by PhpStorm.
 * User: frontend
 * Date: 11/10/16
 * Time: 10:47 AM
 */
use Phalcon\Mvc\User\Plugin;

class Booking extends Plugin
{
    public $token;
    function __construct(){
        //Buscamos el token en la cache
        $this->token = $this->cache->getData("apiParquesToken");
        //Si no existe el token generamos uno nuevo
        if ($this->token === null) {
            $this->generateToken();
           
        }
    }
    public function generateToken(){
        $options = ["http" => [
            "method" => "POST",
            "ignore_errors" => true,
            "header" => ["Accept: application/json",
                "Content-Type: application/x-www-form-urlencoded"],
            "content" => "grant_type=password&client_id=304727&client_secret=7D5C720055D48EDA04DEDA0CB0DD57FF"
        ]];
        $context = stream_context_create($options);
        // make the request
        $response_token = file_get_contents("http://prueba.bexcaret.com/api/Token", false, $context);
        $response_token = json_decode($response_token);
        // echo print_r($response_token).'<hr>';
        $this->token = $response_token->access_token;
        //Guardamos el token en la cache
        // file_put_contents($this->file,$this->token);
        $this->cache->setData("apiParquesToken", $this->token);
    }

    public function callBooking($postdata, $control = 0){
        $options = ["http" => [
            "method" => "Post",
            "ignore_errors" => true,
            "content" => json_encode($postdata),
            "header" => ["Accept: application/json",
                "Content-Type: application/json",
                "Authorization: Bearer " . $this->token]
        ]];

        $context = stream_context_create($options);

        $response = file_get_contents('http://prueba.bexcaret.com/api/booking/catalog', false, $context);
        $response = json_decode($response);

        //Si existe el mensaje de error se genera un nuevo token y se vuelve a llamar al booking con los mismos datos, llevando un control de 3 intentos,
        //para evitar un bucle en caso de que la API no responda
        if(property_exists($response, 'message') && $control < 3){
            $control ++;
            $this->generateToken();
            $response = $this->callBooking($postdata, $control);
        }
        return $response;
    }
}