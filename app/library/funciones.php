<?php

/**
 * Created by PhpStorm.
 * User: frontend
 * Date: 01/11/16
 * Time: 1:44 PM
 */
class funciones
{
//FUNCIONES GENERALES DEL SITIO
    function formatPrice($number)
    {
        $price = number_format($number, 2, '.', ',') . "";
        $parts = explode('.', $price);
        return $parts[0] . "<sup>" . $parts[1] . "</sup>";
    }

// Elimina el formateado html de un precio,
//se presupone que los centavos estan en cerrados en una etiqueta <sup>
//Entrada: Precio formateado
//Salida: Array de 3 elementos : Signo de moneda, valor, divisa
    function removeFormatPrice($price='')
    {
        //Agregamos el punto decimal
        $price = str_replace("<sup>", "<sup>.", $price);
        //removemos etiquetas html y espacios duplicados
        $price = preg_replace('/\s+/', ' ',strip_tags($price));
        //
        //Extraemos el valor numerico de la divisa y signo de moneda
        $arrayNum = explode(" ", $price);
        //Eliminamos las comas de las cifras de miles, millones, etc
        $arrayNum[1] = str_replace(",", "", $arrayNum[1]);

        return $arrayNum;
    }


    /*
    * Suma 2 o 3 precios con signo de moneda y divisa
    */

    function sumaValoresFormato($num1, $num2,$num3=null)
    {
        //Validamos si la cadena "no disponible" esta presente en alguno de los valores
        //esta puede estar formateada en html
        $novalid1 = strpos($num1, "no disponible");
        $novalid2 = strpos($num2, "no disponible");
        if ($novalid1 !== false || $novalid2 !== false ) {
            return "Price not available";
        }

        else{
            $arrayNum1 = $this->removeFormatPrice($num1);
            $arrayNum2 = $this->removeFormatPrice($num2);
            $result = (float)$arrayNum1[1] + (float)$arrayNum2[1];

            if ($num3 != null) {
                $novalid1 = strpos($num1, "no disponible");
                if ($novalid1 !== false) {
                    return "Price not available";
                }
                else{
                    $arrayNum3 = $this->removeFormatPrice($num3);
                    $result += (float)$arrayNum3[1];
                }

            }

            return $arrayNum1[0] ." ". $this->formatPrice($result)." ".$arrayNum1[2];
        }
    }
    function restaValoresFormato($num1, $num2)
    {
        //Validamos si la cadena "no disponible" esta presente en alguno de los valores
        //esta puede estar formateada en html
        $novalid1 = strpos($num1, "no disponible");
        $novalid2 = strpos($num2, "no disponible");
        if ($novalid1 !== false || $novalid2 !== false ) {
            return "Price not available";
        }
        else{
            $arrayNum1 = $this->removeFormatPrice($num1);
            $arrayNum2 = $this->removeFormatPrice($num2);
            $result = (float)$arrayNum1[1] - (float)$arrayNum2[1];
            return $arrayNum1[0] ." ". $this->formatPrice($result)." ".$arrayNum1[2];
        }
    }


    function convertirPrecioFormato($precio, $objPrice, $dsClaveMoneda, $precioAhorro=null){

        $infoPrecios = removeFormatPrice($objPrice->{"adultoPrecioRegular".$dsClaveMoneda});
        $dsSimbolo = $infoPrecios[0];
        $tipoCambio = (float)$objPrice->{"tipoCambio".$dsClaveMoneda};

        $result = new stdClass;
        //ADULTO
        $regular = "adultoPrecioRegular".$dsClaveMoneda;
        $unitario = "adultoPrecioUnitario".$dsClaveMoneda;
        $ahorro = "adultoAhorro".$dsClaveMoneda;

        $result->$unitario = (float)trim($precio) * (float)trim($tipoCambio);

        $result->$unitario = $dsSimbolo." ".formatPrice($result->$unitario) . $dsClaveMoneda;

        if (!is_null($precioAhorro)) {
            $result->$ahorro = (float)trim($precioAhorro) * (float)trim($tipoCambio);
            $result->$ahorro = $dsSimbolo." ".formatPrice($result->$ahorro) . $dsClaveMoneda;
        }

        if ((float)$tipoCambio <= 0) {
            $result->$unitario = "Price not available";

            if (!is_null($precioAhorro)) {
                $result->$ahorro = "Price not available";
            }

        }

        return $result;

    }
}