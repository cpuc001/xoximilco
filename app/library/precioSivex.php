<?php
/**
 * Created by PhpStorm.
 * User: frontend
 * Date: 06/09/16
 * Time: 1:36 PM
 */
class Sivex
{
    /*
     * Manuel Vazquez
     * Enero 2014
     * Obtener los precios del Producto.
     *
     * Return: devuelve un array con los precios en pesos y dolares
     *
     * lista de parametros aceptados para idUbicacionGeografica:
     *  0 cuando NO es TOUR
     *  Si es Tour entonces:
     *  1 Cancun
        2 Riviera
        3 Playacar
        4 Cozumel
        5 Cruceros
        6 Zona Sur
        14 Sin Procedencia
        15 Merida
     *
     * *************
     * lista de parametros aceptados para idUnidadNegocio
     * 1 Parque Xcaret
       2 Parque Xplor
       3 Parque Xel-Ha
       4 La Casona
       5 Xtours
       10 Parque Xoximilco Noche
       11 Xenotes
       12 Parque Xplor Fuego
       13 Experiencias Xcaret
       14 Parque Xoximilco Dia
     */

    /*
     * mvazquezs 9 jul 2015
     * se agrego nuevo parametro $arrayClaveMoneda
     * para que la funcion retorne el precio en las monedas solicitadas
     * ejemplo:
     * getPrice(305,0,3,array('JPY','RUB'))
     */
    function getPrice($idProducto,$idUbicacionGeografica,$idUnidadNegocio,$arrayClaveMoneda=array()){

        $datos = array(
            "idProducto" => (int)$idProducto,
            "idUbicacionGeografica" => (int)$idUbicacionGeografica,
            "idUnidadNegocio" => (int)$idUnidadNegocio
        );

        $res = getPrecioServicio($datos);

        //serializar para crear array
        $dataProducto = unserialize(trim($res));
        $result = new stdClass;

        /* INICIA seccion que segmenta pesos y centavos
           aqui no se concatena el ISO ni el simbolo de la moneda
         */
        //ADULTO
        $price = number_format((float)$dataProducto['Adulto']['mnPrecioUSD'], 2, '.', ',') . "";
        $parts = explode('.', $price);
        $result->adultoPrecioRegularPesos = $parts[0];
        $result->adultoPrecioRegularCentavos = $parts[1];
        $price = number_format((float)$dataProducto['Adulto']['mnPrecioDescuentoUSD'], 2, '.', ',') . "";
        $parts = explode('.', $price);
        $result->adultoPrecioUnitarioPesos = $parts[0];
        $result->adultoPrecioUnitarioCentavos = $parts[1];
        $price = number_format((float)$dataProducto['Adulto']['mnAhorroUSD'], 2, '.', ',') . "";
        $parts = explode('.', $price);
        $result->adultoAhorroPesos = $parts[0];
        $result->adultoAhorroCentavos = $parts[1];
        //MENOR USD
        $price = number_format((float)$dataProducto['Menor']['mnPrecioUSD'], 2, '.', ',') . "";
        $parts = explode('.', $price);
        $result->menoresPrecioRegularPesos = $parts[0];
        $result->menoresPrecioRegularCentavos = $parts[1];
        $price = number_format((float)$dataProducto['Menor']['mnPrecioDescuentoUSD'], 2, '.', ',') . "";
        $parts = explode('.', $price);
        $result->menoresPrecioUnitarioPesos = $parts[0];
        $result->menoresPrecioUnitarioCentavos = $parts[1];
        $price = number_format((float)$dataProducto['Menor']['mnAhorroUSD'], 2, '.', ',') . "";
        $parts = explode('.', $price);
        $result->menoresAhorroPesos = $parts[0];
        $result->menoresAhorroCentavos = $parts[1];

        if ((int)$result->adultoPrecioRegularPesos === 0) { $result->adultoPrecioRegularPesos = "00"; }
        if ((int)$result->adultoPrecioRegularCentavos === 0) { $result->adultoPrecioRegularCentavos = "00"; }
        if ((int)$result->adultoPrecioUnitarioPesos === 0) { $result->adultoPrecioUnitarioPesos = "00"; }
        if ((int)$result->adultoPrecioUnitarioCentavos === 0) { $result->adultoPrecioUnitarioCentavos = "00"; }
        if ((int)$result->adultoAhorroPesos === 0) { $result->adultoAhorroPesos = "00"; }
        if ((int)$result->adultoAhorroCentavos === 0) { $result->adultoAhorroCentavos = "00"; }
        if ((int)$result->menoresPrecioRegularPesos === 0) { $result->menoresPrecioRegularPesos = "00"; }
        if ((int)$result->menoresPrecioRegularCentavos === 0) { $result->menoresPrecioRegularCentavos = "00"; }
        if ((int)$result->menoresPrecioUnitarioPesos === 0) { $result->menoresPrecioUnitarioPesos = "00"; }
        if ((int)$result->menoresPrecioUnitarioCentavos === 0) { $result->menoresPrecioUnitarioCentavos = "00"; }
        if ((int)$result->menoresAhorroPesos === 0) { $result->menoresAhorroPesos = "00"; }
        if ((int)$result->menoresAhorroCentavos === 0) { $result->menoresAhorroCentavos = "00"; }
        /* FINAL seccion que segmenta pesos y centavos*/

        /*
         * Por default los atributos  'adultoPrecioRegularMoneda'
         * guardan el precio en dolares
         */

        $dsSimbolo = $dataProducto['Adulto']['dsSimbolo_MSUSD'];
        if(trim($dsSimbolo)==''){$dsSimbolo = trim($dataProducto['Menor']['dsSimbolo_MSUSD']);}
        if(trim($dsSimbolo)==''){$dsSimbolo = trim($dataProducto['Individuales']['dsSimbolo_MSUSD']);}
        $dsClaveMoneda = $dataProducto['Adulto']['ClaveMoneda_MSUSD'];
        $result->adultoPrecioRegularMoneda = $dsSimbolo." ".truncateFloat($dataProducto['Adulto']['mnPrecioUSD'],2)." ".$dsClaveMoneda;
        $result->adultoPrecioRegularUnitarioMoneda = $dsSimbolo." ".truncateFloat($dataProducto['Adulto']['mnPrecioDescuentoUSD'],2)." ".$dsClaveMoneda;
        $result->adultoPrecioRegularAhorroMoneda = $dsSimbolo." ".truncateFloat($dataProducto['Adulto']['mnAhorroUSD'],2)." ".$dsClaveMoneda;

        $result->menoresPrecioRegularMoneda = $dsSimbolo." ".truncateFloat($dataProducto['Menor']['mnPrecioUSD'],2)." ".$dsClaveMoneda;
        $result->menoresPrecioUnitarioMoneda = $dsSimbolo." ".truncateFloat($dataProducto['Menor']['mnPrecioDescuentoUSD'],2)." ".$dsClaveMoneda;
        $result->menoresAhorroMoneda = $dsSimbolo." ".truncateFloat($dataProducto['Menor']['mnAhorroUSD'],2)." ".$dsClaveMoneda;

        $result->individualPrecioRegularMoneda = $dsSimbolo." ".truncateFloat($dataProducto['Individuales']['mnPrecioUSD'],2)." ".$dsClaveMoneda;
        $result->individualPrecioUnitarioMoneda = $dsSimbolo." ".truncateFloat($dataProducto['Individuales']['mnPrecioDescuentoUSD'],2)." ".$dsClaveMoneda;
        $result->individualAhorroMoneda = $dsSimbolo." ".truncateFloat($dataProducto['Individuales']['mnAhorroUSD'],2)." ".$dsClaveMoneda;

        //variables para validacion de precio
        $result->adultoPrecioRegularMonedaNumber = (float)$dataProducto['Adulto']['mnPrecioUSD'];
        $result->menoresPrecioRegularMonedaNumber = (float)$dataProducto['Menor']['mnPrecioUSD'];
        $result->individualPrecioRegularMonedaNumber = (float)$dataProducto['Individuales']['mnPrecioUSD'];

        /*si el ARRAY de clave moneda esta vacio
        cargar por default MXN Y USD*/
        if(count($arrayClaveMoneda)==0){
            $arrayClaveMoneda = array('USD','MXN');
        }
        foreach($arrayClaveMoneda as $dsClaveMoneda)
        {
            if(trim($dsClaveMoneda)!=''){
                $result = getPricePorClaveMoneda($dsClaveMoneda,$result,$dataProducto);
            }
        }
        $result->idProducto = $idProducto; // jmaldonado 9 diciembre 2016
        $result->dsDescripciones = $dataProducto["Menor"]["dsDescripciones"]; //jmaldonado 25 agosto 2016
        $result->dsUnidadNegocio = $dataProducto["Menor"]["dsUnidadNegocio"]; //jmaldonado 25 agosto 2016
        $resultReturn = validaPrecio($result);//mvazquezs 05 septiembre 2015
        return $resultReturn;
    }

    /*
     * mvazquezs 9 jul 2015
     * dar formato al precio de la moneda pasada como parametro array()
     * retorna el precio en el formato requerido por el equipo de disenio
     */
    function getPricePorClaveMoneda($dsClaveMoneda,$result,$dataProducto)
    {
        //ADULTO
        $regular = "adultoPrecioRegular".$dsClaveMoneda;
        $regularpesos = "adultoPrecioRegularPesos".$dsClaveMoneda;
        $regularcentavos = "adultoPrecioRegularCentavos".$dsClaveMoneda;
        $unitario = "adultoPrecioUnitario".$dsClaveMoneda;
        $unitariopesos='adultoPrecioUnitarioPesos'.$dsClaveMoneda;
        $unitariocentavos = 'adultoPrecioUnitarioCentavos'.$dsClaveMoneda;
        $ahorro = "adultoAhorro".$dsClaveMoneda;
        $ahorropesos='adultoAhorroPesos'.$dsClaveMoneda;
        $ahorrocentavos='adultoAhorroCentavos'.$dsClaveMoneda;
        // $dsSimbolo = utf8_decode($dataProducto['Adulto']['dsSimbolo_MS'.$dsClaveMoneda]);
        $dsSimbolo = trim($dataProducto['Adulto']['dsSimbolo_MS'.$dsClaveMoneda]);
        if(trim($dsSimbolo)==''){$dsSimbolo = trim($dataProducto['Menor']['dsSimbolo_MS'.$dsClaveMoneda]);}
        if(trim($dsSimbolo)==''){$dsSimbolo = trim($dataProducto['Individuales']['dsSimbolo_MS'.$dsClaveMoneda]);}

        $result->$regular = (float)$dataProducto['Adulto']['mnPrecio'.$dsClaveMoneda];
        $result->$unitario = (float)$dataProducto['Adulto']['mnPrecioDescuento'.$dsClaveMoneda];
        $result->$ahorro = (float)$dataProducto['Adulto']['mnAhorro'.$dsClaveMoneda];

        $price = number_format($result->$regular, 2, '.', ',') . "";
        $parts = explode('.', $price);
        $result->$regularpesos = $parts[0];
        $result->$regularcentavos = $parts[1];

        $price = number_format($result->$unitario, 2, '.', ',') . "";
        $parts = explode('.', $price);
        $result->$unitariopesos = $parts[0];
        $result->$unitariocentavos = $parts[1];

        $price = number_format($result->$ahorro, 2, '.', ',') . "";
        $parts = explode('.', $price);
        $result->$ahorropesos = $parts[0];
        $result->$ahorrocentavos = $parts[1];

        if ((int)$result->$regularpesos === 0) { $result->$regularpesos = "00"; }
        if ((int)$result->$regularcentavos === 0) { $result->$regularcentavos = "00"; }
        if ((int)$result->$unitariopesos === 0) { $result->$unitariopesos = "00"; }
        if ((int)$result->$unitariocentavos === 0) { $result->$unitariocentavos = "00"; }
        if ((int)$result->$ahorropesos === 0) { $result->$ahorropesos = "00"; }
        if ((int)$result->$ahorrocentavos === 0) { $result->$ahorrocentavos = "00"; }

        //asignacion de simbolo e iso de la moneda
        $result->$regular = $dsSimbolo." ".truncateFloat($dataProducto['Adulto']['mnPrecio'.$dsClaveMoneda],2)." ".$dsClaveMoneda;
        $result->$unitario = $dsSimbolo." ".truncateFloat($dataProducto['Adulto']['mnPrecioDescuento'.$dsClaveMoneda],2)." ".$dsClaveMoneda;
        $result->$ahorro = $dsSimbolo." ".truncateFloat($dataProducto['Adulto']['mnAhorro'.$dsClaveMoneda],2)." ".$dsClaveMoneda;

        //MENOR
        $regular = "menoresPrecioRegular".$dsClaveMoneda;
        $regularpesos = "menoresPrecioRegularPesos".$dsClaveMoneda;
        $regularcentavos = "menoresPrecioRegularCentavos".$dsClaveMoneda;
        $unitario = "menoresPrecioUnitario".$dsClaveMoneda;
        $unitariopesos='menoresPrecioUnitarioPesos'.$dsClaveMoneda;
        $unitariocentavos = 'menoresPrecioUnitarioCentavos'.$dsClaveMoneda;
        $ahorro = "menoresAhorro".$dsClaveMoneda;
        $ahorropesos='menoresAhorroPesos'.$dsClaveMoneda;
        $ahorrocentavos='menoresAhorroCentavos'.$dsClaveMoneda;

        $result->$regular = (float)$dataProducto['Menor']['mnPrecio'.$dsClaveMoneda];
        $result->$unitario = (float)$dataProducto['Menor']['mnPrecioDescuento'.$dsClaveMoneda];
        $result->$ahorro = (float)$dataProducto['Menor']['mnAhorro'.$dsClaveMoneda];

        $price = number_format($result->$regular, 2, '.', ',') . "";
        $parts = explode('.', $price);
        $result->$regularpesos = $parts[0];
        $result->$regularcentavos = $parts[1];

        $price = number_format($result->$unitario, 2, '.', ',') . "";
        $parts = explode('.', $price);
        $result->$unitariopesos = $parts[0];
        $result->$unitariocentavos = $parts[1];

        $price = number_format($result->$ahorro, 2, '.', ',') . "";
        $parts = explode('.', $price);
        $result->$ahorropesos = $parts[0];
        $result->$ahorrocentavos = $parts[1];

        if ((int)$result->$regularpesos === 0) { $result->$regularpesos = "00"; }
        if ((int)$result->$regularcentavos === 0) { $result->$regularcentavos = "00"; }
        if ((int)$result->$unitariopesos === 0) { $result->$unitariopesos = "00"; }
        if ((int)$result->$unitariocentavos === 0) { $result->$unitariocentavos = "00"; }
        if ((int)$result->$ahorropesos === 0) { $result->$ahorropesos = "00"; }
        if ((int)$result->$ahorrocentavos === 0) { $result->$ahorrocentavos = "00"; }

        //asignacion de simbolo e iso de la moneda
        $result->$regular = $dsSimbolo." ".truncateFloat($dataProducto['Menor']['mnPrecio'.$dsClaveMoneda],2)." ".$dsClaveMoneda;
        $result->$unitario = $dsSimbolo." ".truncateFloat($dataProducto['Menor']['mnPrecioDescuento'.$dsClaveMoneda],2)." ".$dsClaveMoneda;
        $result->$ahorro = $dsSimbolo." ".truncateFloat($dataProducto['Menor']['mnAhorro'.$dsClaveMoneda],2)." ".$dsClaveMoneda;

        //INDIVIDUAL
        $regular = "individualPrecioRegular".$dsClaveMoneda;
        $regularpesos = "individualPrecioRegularPesos".$dsClaveMoneda;
        $regularcentavos = "individualPrecioRegularCentavos".$dsClaveMoneda;
        $unitario = "individualPrecioUnitario".$dsClaveMoneda;
        $unitariopesos='individualPrecioUnitarioPesos'.$dsClaveMoneda;
        $unitariocentavos = 'individualPrecioUnitarioCentavos'.$dsClaveMoneda;
        $ahorro = "individualAhorro".$dsClaveMoneda;
        $ahorropesos='individualAhorroPesos'.$dsClaveMoneda;
        $ahorrocentavos='individualAhorroCentavos'.$dsClaveMoneda;
        $result->$regular = (float)$dataProducto['Individuales']['mnPrecio'.$dsClaveMoneda];
        $result->$unitario = (float)$dataProducto['Individuales']['mnPrecioDescuento'.$dsClaveMoneda];
        $result->$ahorro = (float)$dataProducto['Individuales']['mnAhorro'.$dsClaveMoneda];

        $price = number_format($result->$regular, 2, '.', ',') . "";
        $parts = explode('.', $price);
        $result->$regularpesos = $parts[0];
        $result->$regularcentavos = $parts[1];

        $price = number_format($result->$unitario, 2, '.', ',') . "";
        $parts = explode('.', $price);
        $result->$unitariopesos = $parts[0];
        $result->$unitariocentavos = $parts[1];

        $price = number_format($result->$ahorro, 2, '.', ',') . "";
        $parts = explode('.', $price);
        $result->$ahorropesos = $parts[0];
        $result->$ahorrocentavos = $parts[1];

        if ($result->$regularpesos === 0) { $result->$regularpesos = "00"; }
        if ($result->$regularcentavos === 0) { $result->$regularcentavos = "00"; }
        if ($result->$unitariopesos === 0) { $result->$unitariopesos = "00"; }
        if ($result->$unitariocentavos === 0) { $result->$unitariocentavos = "00"; }
        if ($result->$ahorropesos === 0) { $result->$ahorropesos = "00"; }
        if ($result->$ahorrocentavos === 0) { $result->$ahorrocentavos = "00"; }

        //asignacion de simbolo e iso de la moneda
        $result->$regular = $dsSimbolo." ".truncateFloat($dataProducto['Individuales']['mnPrecio'.$dsClaveMoneda],2)." ".$dsClaveMoneda;
        $result->$unitario = $dsSimbolo." ".truncateFloat($dataProducto['Individuales']['mnPrecioDescuento'.$dsClaveMoneda],2)." ".$dsClaveMoneda;
        $result->$ahorro = $dsSimbolo." ".truncateFloat($dataProducto['Individuales']['mnAhorro'.$dsClaveMoneda],2)." ".$dsClaveMoneda;

        return $result;

    }

    /*
     * mvazquezs 9 jul 2015
     * dar formato al precio de la moneda pasada como parametro array()
     * retorna el precio en el formato requerido por el equipo de disenio
     */
    function getPriceFormatoPorClaveMoneda($dsClaveMoneda,$result,$dataProducto)
    {
        //ADULTO
        $regular = "adultoPrecioRegular".$dsClaveMoneda;
        $unitario = "adultoPrecioUnitario".$dsClaveMoneda;
        $ahorro = "adultoAhorro".$dsClaveMoneda;
        $tipoCambio = "tipoCambio".$dsClaveMoneda;

        // $dsSimbolo = utf8_decode($dataProducto['Adulto']['dsSimbolo_MS'.$dsClaveMoneda]);
        $dsSimbolo = trim($dataProducto['Adulto']['dsSimbolo_MS'.$dsClaveMoneda]);
        if(trim($dsSimbolo)==''){$dsSimbolo = trim($dataProducto['Menor']['dsSimbolo_MS'.$dsClaveMoneda]);}
        if(trim($dsSimbolo)==''){$dsSimbolo = trim($dataProducto['Individuales']['dsSimbolo_MS'.$dsClaveMoneda]);}

        $result->$regular = (float)$dataProducto['Adulto']['mnPrecio'.$dsClaveMoneda];
        $result->$unitario = (float)$dataProducto['Adulto']['mnPrecioDescuento'.$dsClaveMoneda];
        $result->$ahorro = (float)$dataProducto['Adulto']['mnAhorro'.$dsClaveMoneda];

        $price = number_format($result->$regular, 2, '.', ',') . "";
        $parts = explode('.', $price);
        $result->$regular = $dsSimbolo." ".$parts[0] . "<sup><u>" . $parts[1] . "</u></sup> <small> ".$dsClaveMoneda."</small>";

        $price = number_format($result->$unitario, 2, '.', ',') . "";
        $parts = explode('.', $price);
        $result->$unitario = $dsSimbolo." ".$parts[0] . "<sup><u>" . $parts[1] . "</u></sup> <small> ".$dsClaveMoneda."</small>";

        $price = number_format($result->$ahorro, 2, '.', ',') . "";
        $parts = explode('.', $price);
        $result->$ahorro = $dsSimbolo." ".$parts[0] . "<sup><u>" . $parts[1] . "</u></sup> <small> ".$dsClaveMoneda."</small>";

        //INDIVIDUAL
        $regular = "individualPrecioRegular".$dsClaveMoneda;
        $unitario = "individualPrecioUnitario".$dsClaveMoneda;
        $ahorro = "individualAhorro".$dsClaveMoneda;

        $result->$regular = (float)$dataProducto['Individuales']['mnPrecio'.$dsClaveMoneda];
        $result->$unitario = (float)$dataProducto['Individuales']['mnPrecioDescuento'.$dsClaveMoneda];
        $result->$ahorro = (float)$dataProducto['Individuales']['mnAhorro'.$dsClaveMoneda];

        $price = number_format($result->$regular, 2, '.', ',') . "";
        $parts = explode('.', $price);
        $result->$regular = $dsSimbolo." ".$parts[0] . "<sup><u>" . $parts[1] . "</u></sup> <small> ".$dsClaveMoneda."</small>";

        $price = number_format($result->$unitario, 2, '.', ',') . "";
        $parts = explode('.', $price);
        $result->$unitario = $dsSimbolo." ".$parts[0] . "<sup><u>" . $parts[1] . "</u></sup> <small> ".$dsClaveMoneda."</small>";

        $price = number_format($result->$ahorro, 2, '.', ',') . "";
        $parts = explode('.', $price);
        $result->$ahorro = $dsSimbolo." ".$parts[0] . "<sup><u>" . $parts[1] . "</u></sup> <small> ".$dsClaveMoneda."</small>";

        //MENOR
        $regular = "menoresPrecioRegular".$dsClaveMoneda;
        $unitario = "menoresPrecioUnitario".$dsClaveMoneda;
        $ahorro = "menoresAhorro".$dsClaveMoneda;

        $result->$regular = (float)$dataProducto['Menor']['mnPrecio'.$dsClaveMoneda];
        $result->$unitario = (float)$dataProducto['Menor']['mnPrecioDescuento'.$dsClaveMoneda];
        $result->$ahorro = (float)$dataProducto['Menor']['mnAhorro'.$dsClaveMoneda];

        $price = number_format($result->$regular, 2, '.', ',') . "";
        $parts = explode('.', $price);
        $result->$regular = $dsSimbolo." ".$parts[0] . "<sup><u>" . $parts[1] . "</u></sup> <small> ".$dsClaveMoneda."</small>";

        $price = number_format($result->$unitario, 2, '.', ',') . "";
        $parts = explode('.', $price);
        $result->$unitario = $dsSimbolo." ".$parts[0] . "<sup><u>" . $parts[1] . "</u></sup> <small> ".$dsClaveMoneda."</small>";

        $price = number_format($result->$ahorro, 2, '.', ',') . "";
        $parts = explode('.', $price);
        $result->$ahorro = $dsSimbolo." ".$parts[0] . "<sup><u>" . $parts[1] . "</u></sup> <small> ".$dsClaveMoneda."</small>";


        $result->$tipoCambio = (float)$dataProducto['Adulto']['mnTipoCambio'.$dsClaveMoneda];

        return $result;
    }

    /*
     * mvazquezs 9 jul 2015
     * se agrego nuevo parametro $arrayClaveMoneda
     * para que la funcion retorne el precio en las monedas solicitadas
     * ejemplo:
     * getPriceFormato(305,0,3,array('JPY','RUB'))
     */
    function getPriceFormato($idProducto,$idUbicacionGeografica,$idUnidadNegocio,$arrayClaveMoneda){

        $datos = array(
            "idProducto" => (int)$idProducto,
            "idUbicacionGeografica" => (int)$idUbicacionGeografica,
            "idUnidadNegocio" => (int)$idUnidadNegocio
        );

        $res = $this->getPrecioServicio($datos);

        //serializar para crear array
        $dataProducto = unserialize(trim($res));
        $result = new stdClass;

        /*
         * Por default los atributos  'adultoPrecioRegularMoneda'
         * guardan el precio en dolares
         */
        $dsSimbolo = $dataProducto['Adulto']['dsSimbolo_MSUSD'];
        if(trim($dsSimbolo)==''){$dsSimbolo = trim($dataProducto['Menor']['dsSimbolo_MSUSD']);}
        if(trim($dsSimbolo)==''){$dsSimbolo = trim($dataProducto['Individuales']['dsSimbolo_MSUSD']);}
        $dsClaveMoneda = $dataProducto['Adulto']['ClaveMoneda_MSUSD'];

        $price = number_format((float)$dataProducto['Adulto']['mnPrecioUSD'], 2, '.', ',') . "";
        $parts = explode('.', $price);
        $result->adultoPrecioRegularMoneda = $dsSimbolo." ".$parts[0] . "<sup><u>" . $parts[1] . "</u></sup> <small> ".$dsClaveMoneda."</small>";

        $price = number_format((float)$dataProducto['Adulto']['mnPrecioDescuentoUSD'], 2, '.', ',') . "";
        $parts = explode('.', $price);
        $result->adultoPrecioUnitarioMoneda = $dsSimbolo." ".$parts[0] . "<sup><u>" . $parts[1] . "</u></sup> <small> ".$dsClaveMoneda."</small>";

        $price = number_format((float)$dataProducto['Adulto']['mnAhorroUSD'], 2, '.', ',') . "";
        $parts = explode('.', $price);
        $result->adultoAhorroMoneda = $dsSimbolo." ".$parts[0] . "<sup><u>" . $parts[1] . "</u></sup> <small> ".$dsClaveMoneda."</small>";

        //MENOR
        $price = number_format((float)$dataProducto['Menor']['mnPrecioUSD'], 2, '.', ',') . "";
        $parts = explode('.', $price);
        $result->menoresPrecioRegularMoneda = $dsSimbolo." ".$parts[0] . "<sup><u>" . $parts[1] . "</u></sup> <small> ".$dsClaveMoneda."</small>";

        $price = number_format((float)$dataProducto['Menor']['mnPrecioDescuentoUSD'], 2, '.', ',') . "";
        $parts = explode('.', $price);
        $result->menoresPrecioUnitarioMoneda = $dsSimbolo." ".$parts[0] . "<sup><u>" . $parts[1] . "</u></sup> <small> ".$dsClaveMoneda."</small>";

        $price = number_format((float)$dataProducto['Menor']['mnAhorroUSD'], 2, '.', ',') . "";
        $parts = explode('.', $price);
        $result->menoresAhorroMoneda = $dsSimbolo." ".$parts[0] . "<sup><u>" . $parts[1] . "</u></sup> <small> ".$dsClaveMoneda."</small>";

        //INDIVIDUAL
        $price = number_format((float)$dataProducto['Individuales']['mnPrecioUSD'], 2, '.', ',') . "";
        $parts = explode('.', $price);
        $result->individualPrecioRegularMoneda = $dsSimbolo." ".$parts[0] . "<sup><u>" . $parts[1] . "</u></sup> <small> ".$dsClaveMoneda."</small>";

        $price = number_format((float)$dataProducto['Individuales']['mnPrecioDescuentoUSD'], 2, '.', ',') . "";
        $parts = explode('.', $price);
        $result->individualPrecioUnitarioMoneda = $dsSimbolo." ".$parts[0] . "<sup><u>" . $parts[1] . "</u></sup> <small> ".$dsClaveMoneda."</small>";

        $price = number_format((float)$dataProducto['Individuales']['mnAhorroUSD'], 2, '.', ',') . "";
        $parts = explode('.', $price);
        $result->individualAhorroMoneda = $dsSimbolo." ".$parts[0] . "<sup><u>" . $parts[1] . "</u></sup> <small> ".$dsClaveMoneda."</small>";

        /*si el ARRAY de clave moneda esta vacio
         cargar por default MXN Y USD*/
        if(count($arrayClaveMoneda)==0){
            $arrayClaveMoneda = array('USD','MXN');
        }
        foreach($arrayClaveMoneda as $dsClaveMoneda)
        {
            if(trim($dsClaveMoneda)!=''){
                $result = $this->getPriceFormatoPorClaveMoneda($dsClaveMoneda,$result,$dataProducto);
            }
        }

        foreach($arrayClaveMoneda as $dsClaveMoneda)
        {
            if(trim($dsClaveMoneda)!=''){
                //variables para validacion de precio
                $result->adultoPrecioRegularMonedaNumber = (float)$dataProducto['Adulto']['mnPrecioUSD'];
                $result->menoresPrecioRegularMonedaNumber = (float)$dataProducto['Menor']['mnPrecioUSD'];
                $result->individualPrecioRegularMonedaNumber = (float)$dataProducto['Individuales']['mnPrecioUSD'];
                if((int)$dataProducto['Adulto']['mnPrecioUSD']==0){break;}
            }
        }
        $result->idProducto = $idProducto; // jmaldonado 9 diciembre 2016
        $result->dsDescripciones = $dataProducto["Menor"]["dsDescripciones"]; //jmaldonado 25 agosto 2016
        $result->dsUnidadNegocio = $dataProducto["Menor"]["dsUnidadNegocio"]; //jmaldonado 25 agosto 2016
        $resultReturn = $this->validaPrecio($result);//mvazquezs 05 septiembre 2015
        return $resultReturn;
    }

    /*
     * Obtener el ahorro mediante la comparacion del precio del producto
     * principal contra el precio de cada uno de los productos que forman el paquete
     *
     * @params
     * $idProductoProductoPrincipal similar a idProducto de la funcion getPrice
     * $idUbicacionGeograficaProductoPrincipal similar a idUbicacionGeografica de la funcion getPrice
     * $idUnidadNegocioProductoPrincipal similar a idUnidadNegocio de la funcion getPrice
     *
     * $combinacionProductos array que debera tener una estructura parecida a la siguiente
     * array(
     *   'xcaret' => array (
     *          'idProducto' => 1,
     *          'idUbicacionGeografica' => 2,
     *          'idUnidadNegocio' => 3,
     *      ),
     *   'xcaret' => array (
     *          'idProducto' => 4,
     *          'idUbicacionGeografica' => 5,
     *          'idUnidadNegocio' => 6,
     *      )
     * )
     */
    function getPriceCombinacionProductos($idProductoProductoPrincipal,$idUbicacionGeograficaProductoPrincipal,$idUnidadNegocioProductoPrincipal,$combinacionProductos=array(),$arrayClaveMoneda=array())
    {
        /*default USD*/
        if(count($arrayClaveMoneda)<1){
            $arrayClaveMoneda = array('USD');
        }
        /*obtener precio del producto principal*/
        $res = getPrice($idProductoProductoPrincipal,$idUbicacionGeograficaProductoPrincipal,$idUnidadNegocioProductoPrincipal,$arrayClaveMoneda);

        //validar que el array de productos no este vacio
        if(count($combinacionProductos)>0){
            //obtener el precio de cada uno de los componentes
            $precioComponente = array();
            foreach($combinacionProductos as $producto)
            {
                $precioComponente[] = getPrice((int)$producto['idProducto'],(int)$producto['idUbicacionGeografica'],(int)$producto['idUnidadNegocio'],$arrayClaveMoneda);
            }

            //hacer la sumatoria de precios de cada uno de los componentes
            $precioSumatoria = array();
            $simboloMoneda = array();
            foreach($precioComponente as $item){
                foreach($arrayClaveMoneda as $moneda){
                    $precio = "adultoPrecioRegular".$moneda;
                    $cantidad = explode(" ", $item->$precio);
                    $precioSumatoria[$moneda] += (float) str_replace(',', '',$cantidad[1]);
                    $simboloMoneda[$moneda] = $cantidad[0];
                }
            }

            //set precios
            foreach($arrayClaveMoneda as $moneda){
                $adultAhorro = "adultoAhorro".$moneda;
                $adultPrecioRegular = "adultoPrecioRegular".$moneda;
                $precioUnitario = "adultoPrecioUnitario".$moneda;
                $cantidad = explode(" ", $res->$precioUnitario);
                if(trim($cantidad[1]) == 'no'){
                    $res->$adultAhorro =  "<strong>Precio no disponible</strong>";
                    $res->$adultPrecioRegular = "<strong>Precio no disponible</strong>";
                }else{
                    $resultadoResta = (float)$precioSumatoria[$moneda] - (float) str_replace(',', '',$cantidad[1]);
                    $res->$adultAhorro =  $simboloMoneda[$moneda]." ".truncateFloat($resultadoResta,2)." ".$moneda;
                    $res->$adultPrecioRegular = $simboloMoneda[$moneda]." ".truncateFloat($precioSumatoria[$moneda],2)." ".$moneda;
                }
            }
        }
        return $res;
    }
    function getPriceFormatoDescuento($idProducto,$idUbicacionGeografica,$idUnidadNegocio,$descuento,$arrayClaveMoneda=array()){

        $datos = array(
            "idProducto" => (int)$idProducto,
            "idUbicacionGeografica" => (int)$idUbicacionGeografica,
            "idUnidadNegocio" => (int)$idUnidadNegocio
        );

        $res = $this->getPrecioServicio($datos);

        //serializar para crear array
        $dataProducto = unserialize(trim($res));
        $result = new stdClass;

        if(!isset($descuento)) {
            $descuento = 0;
        }

        if(count($dataProducto)>0){//aqui todo va bien

            //variables para validacion de precio
            $result->adultoPrecioRegularMonedaNumber = (float)$dataProducto['Adulto']['mnPrecioUSD'];
            $result->menoresPrecioRegularMonedaNumber = (float)$dataProducto['Menor']['mnPrecioUSD'];
            $result->individualPrecioRegularMonedaNumber = (float)$dataProducto['Individuales']['mnPrecioUSD'];

            /*si el ARRAY de clave moneda esta vacio
            cargar por default MXN Y USD*/
            if(count($arrayClaveMoneda)==0){
                $arrayClaveMoneda = array('USD','MXN');
            }

            foreach($arrayClaveMoneda as $moneda){
                //ADULTO
                $precioRegular = "adultoPrecioRegular".$moneda;
                $precioUnitario = "adultoPrecioUnitario".$moneda;
                $ahorro = "adultoAhorro".$moneda;
                $dsSimbolo = $dataProducto['Adulto']['dsSimbolo_MS'.$moneda];
                if(trim($dsSimbolo)==''){$dsSimbolo = trim($dataProducto['Menor']['dsSimbolo_MS'.$moneda]);}
                if(trim($dsSimbolo)==''){$dsSimbolo = trim($dataProducto['Individuales']['dsSimbolo_MS'.$moneda]);}
                $result->$precioRegular = (1-($descuento/100)) * (float)$dataProducto['Adulto']['mnPrecio'.$moneda];
                $result->$precioUnitario = (1-($descuento/100)) * (float)$dataProducto['Adulto']['mnPrecioDescuento'.$moneda];
                $result->$ahorro = (1-($descuento/100)) * (float)$dataProducto['Adulto']['mnAhorro'.$moneda];
                $price = number_format($result->$precioRegular, 2, '.', ',') . "";
                $parts = explode('.', $price);
                $result->$precioRegular = $dsSimbolo." ".$parts[0] . "<sup><u>" . $parts[1] . "</u></sup> ".$moneda;
                $price = number_format($result->$precioUnitario, 2, '.', ',') . "";
                $parts = explode('.', $price);
                $result->$precioUnitario = $dsSimbolo." ".$parts[0] . "<sup><u>" . $parts[1] . "</u></sup> ".$moneda;
                $price = number_format($result->$ahorro, 2, '.', ',') . "";
                $parts = explode('.', $price);
                $result->$ahorro = $dsSimbolo." ".$parts[0] . "<sup><u>" . $parts[1] . "</u></sup> ".$moneda;

                //MENOR
                $precioRegular = "menoresPrecioRegular".$moneda;
                $precioUnitario = "menoresPrecioUnitario".$moneda;
                $ahorro = "menoresAhorro".$moneda;
                $result->$precioRegular = (1-($descuento/100)) * (float)$dataProducto['Menor']['mnPrecio'.$moneda];
                $result->$precioUnitario = (1-($descuento/100)) * (float)$dataProducto['Menor']['mnPrecioDescuento'.$moneda];
                $result->$ahorro = (1-($descuento/100)) * (float)$dataProducto['Menor']['mnAhorro'.$moneda];
                $price = number_format($result->$precioRegular, 2, '.', ',') . "";
                $parts = explode('.', $price);
                $result->$precioRegular = $dsSimbolo." ".$parts[0] . "<sup><u>" . $parts[1] . "</u></sup> ".$moneda;
                $price = number_format($result->$precioUnitario, 2, '.', ',') . "";
                $parts = explode('.', $price);
                $result->$precioUnitario = $dsSimbolo." ".$parts[0] . "<sup><u>" . $parts[1] . "</u></sup> ".$moneda;
                $price = number_format($result->$ahorro, 2, '.', ',') . "";
                $parts = explode('.', $price);
                $result->$ahorro = $dsSimbolo." ".$parts[0] . "<sup><u>" . $parts[1] . "</u></sup> ".$moneda;

                //Individual
                $precioRegular = "individualPrecioRegular".$moneda;
                $precioUnitario = "individualPrecioUnitario".$moneda;
                $ahorro = "individualAhorro".$moneda;
                $result->$precioRegular = (1-($descuento/100)) * (float)$dataProducto['Individuales']['mnPrecio'.$moneda];
                $result->$precioUnitario = (1-($descuento/100)) * (float)$dataProducto['Individuales']['mnPrecioDescuento'.$moneda];
                $result->$ahorro = (1-($descuento/100)) * (float)$dataProducto['Individuales']['mnAhorro'.$moneda];
                $price = number_format($result->$precioRegular, 2, '.', ',') . "";
                $parts = explode('.', $price);
                $result->$precioRegular = $dsSimbolo." ".$parts[0] . "<sup><u>" . $parts[1] . "</u></sup> ".$moneda;
                $price = number_format($result->$precioUnitario, 2, '.', ',') . "";
                $parts = explode('.', $price);
                $result->$precioUnitario = $dsSimbolo." ".$parts[0] . "<sup><u>" . $parts[1] . "</u></sup> ".$moneda;
                $price = number_format($result->$ahorro, 2, '.', ',') . "";
                $parts = explode('.', $price);
                $result->$ahorro = $dsSimbolo." ".$parts[0] . "<sup><u>" . $parts[1] . "</u></sup> ".$moneda;
            }
        }else{
            $result->adultoPrecioRegularMonedaNumber = 0;
            $result->menoresPrecioRegularMonedaNumber = 0;
            $result->individualPrecioRegularMonedaNumber = 0;
        }
        $result->idProducto = $idProducto; // jmaldonado 9 diciembre 2016
        $result->dsDescripciones = $dataProducto["Menor"]["dsDescripciones"]; //jmaldonado 25 agosto 2016
        $result->dsUnidadNegocio = $dataProducto["Menor"]["dsUnidadNegocio"]; //jmaldonado 25 agosto 2016
        $resultReturn = $this->validaPrecio($result);//mvazquezs 05 septiembre 2015
        return $resultReturn;
    }
    function getPriceFormatoDescuentoMex($idProducto,$idUbicacionGeografica,$idUnidadNegocio,$descuento,$arrayClaveMoneda=array()){

        $datos = array(
            "idProducto" => (int)$idProducto,
            "idUbicacionGeografica" => (int)$idUbicacionGeografica,
            "idUnidadNegocio" => (int)$idUnidadNegocio
        );

        $res = getPrecioServicio($datos);

        //serializar para crear array
        $dataProducto = unserialize(trim($res));
        $result = new stdClass;

        if(!isset($descuento)) {
            $descuento = 0;
        }

        if(count($dataProducto)>0){//aqui todo va bien

            //variables para validacion de precio
            $result->adultoPrecioRegularMonedaNumber = (float)$dataProducto['Adulto']['mnPrecioUSD'];
            $result->menoresPrecioRegularMonedaNumber = (float)$dataProducto['Menor']['mnPrecioUSD'];
            $result->individualPrecioRegularMonedaNumber = (float)$dataProducto['Individuales']['mnPrecioUSD'];

            /*si el ARRAY de clave moneda esta vacio
            cargar por default MXN Y USD*/
            if(count($arrayClaveMoneda)==0){
                $arrayClaveMoneda = array('USD','MXN');
            }

            foreach($arrayClaveMoneda as $moneda){
                //ADULTO
                $precioRegular = "adultoPrecioRegular".$moneda;
                $precioUnitario = "adultoPrecioUnitario".$moneda;
                $ahorro = "adultoAhorro".$moneda;
                $dsSimbolo = $dataProducto['Adulto']['dsSimbolo_MS'.$moneda];
                if(trim($dsSimbolo)==''){$dsSimbolo = trim($dataProducto['Menor']['dsSimbolo_MS'.$moneda]);}
                if(trim($dsSimbolo)==''){$dsSimbolo = trim($dataProducto['Individuales']['dsSimbolo_MS'.$moneda]);}
                $result->$precioRegular = (float)$dataProducto['Adulto']['mnPrecio'.$moneda];
                $result->$precioUnitario = (1-($descuento/100)) * (float)$dataProducto['Adulto']['mnPrecio'.$moneda];;
                $result->$ahorro =  $result->$precioRegular - $result->$precioUnitario;
                $price = number_format($result->$precioRegular, 2, '.', ',') . "";
                $parts = explode('.', $price);
                $result->$precioRegular = $dsSimbolo." ".$parts[0] . "<sup><u>" . $parts[1] . "</u></sup> ".$moneda;
                $price = number_format($result->$precioUnitario, 2, '.', ',') . "";
                $parts = explode('.', $price);
                $result->$precioUnitario = $dsSimbolo." ".$parts[0] . "<sup><u>" . $parts[1] . "</u></sup> ".$moneda;
                $price = number_format($result->$ahorro, 2, '.', ',') . "";
                $parts = explode('.', $price);
                $result->$ahorro = $dsSimbolo." ".$parts[0] . "<sup><u>" . $parts[1] . "</u></sup> ".$moneda;

                //MENOR
                $precioRegular = "menoresPrecioRegular".$moneda;
                $precioUnitario = "menoresPrecioUnitario".$moneda;
                $ahorro = "menoresAhorro".$moneda;
                $result->$precioRegular = (float)$dataProducto['Menor']['mnPrecio'.$moneda];
                $result->$precioUnitario = (1-($descuento/100)) * (float)$dataProducto['Menor']['mnPrecio'.$moneda];
                $result->$ahorro =  $result->$precioRegular -  $result->$precioUnitario;
                $price = number_format($result->$precioRegular, 2, '.', ',') . "";
                $parts = explode('.', $price);
                $result->$precioRegular = $dsSimbolo." ".$parts[0] . "<sup><u>" . $parts[1] . "</u></sup> ".$moneda;
                $price = number_format($result->$precioUnitario, 2, '.', ',') . "";
                $parts = explode('.', $price);
                $result->$precioUnitario = $dsSimbolo." ".$parts[0] . "<sup><u>" . $parts[1] . "</u></sup> ".$moneda;
                $price = number_format($result->$ahorro, 2, '.', ',') . "";
                $parts = explode('.', $price);
                $result->$ahorro = $dsSimbolo." ".$parts[0] . "<sup><u>" . $parts[1] . "</u></sup> ".$moneda;

                //Individual
                $precioRegular = "individualPrecioRegular".$moneda;
                $precioUnitario = "individualPrecioUnitario".$moneda;
                $ahorro = "individualAhorro".$moneda;
                $result->$precioRegular = (float)$dataProducto['Individuales']['mnPrecio'.$moneda];
                $result->$precioUnitario = (1-($descuento/100)) * (float)$dataProducto['Individuales']['mnPrecio'.$moneda];
                $result->$ahorro = $result->$precioRegular - $result->$precioUnitario;
                $price = number_format($result->$precioRegular, 2, '.', ',') . "";
                $parts = explode('.', $price);
                $result->$precioRegular = $dsSimbolo." ".$parts[0] . "<sup><u>" . $parts[1] . "</u></sup> ".$moneda;
                $price = number_format($result->$precioUnitario, 2, '.', ',') . "";
                $parts = explode('.', $price);
                $result->$precioUnitario = $dsSimbolo." ".$parts[0] . "<sup><u>" . $parts[1] . "</u></sup> ".$moneda;
                $price = number_format($result->$ahorro, 2, '.', ',') . "";
                $parts = explode('.', $price);
                $result->$ahorro = $dsSimbolo." ".$parts[0] . "<sup><u>" . $parts[1] . "</u></sup> ".$moneda;
            }
        }else{
            $result->adultoPrecioRegularMonedaNumber = 0;
            $result->menoresPrecioRegularMonedaNumber = 0;
            $result->individualPrecioRegularMonedaNumber = 0;
        }
        $result->idProducto = $idProducto; // jmaldonado 9 diciembre 2016
        $result->dsDescripciones = $dataProducto["Menor"]["dsDescripciones"]; //jmaldonado 25 agosto 2016
        $result->dsUnidadNegocio = $dataProducto["Menor"]["dsUnidadNegocio"]; //jmaldonado 25 agosto 2016
        $resultReturn = validaPrecio($result);//mvazquezs 05 septiembre 2015
        return $resultReturn;
    }


    /*
     * nueva funcion :: mvazquezs 10 / julio / 2014
     * para obtener el array de precios a partir un archivo de texto local
     */
  function getArrayFromArchivo()
{
   try
   {              
       $rootDir = explode('/',$_SERVER['DOCUMENT_ROOT']);
       $rutaPrecio = '';
       for($i=0;$i< sizeof($rootDir)-1; $i++){
           $rutaPrecio .= $rootDir[$i]."/";
       }       
       if(file_exists($rutaPrecio."/httpdocs/precios_sivex/listPrecioProducto".date("Ymd").".txt")){//obtener datos del archivo del dia actual
       // if(file_exists($rutaPrecio."EXX-INGLES/booking/precios.txt")){//obtener datos del archivo del dia actual
           $texto = "";
           // $file= fopen($rutaPrecio."EXX-INGLES/booking/precios.txt","r");
           $file= fopen($rutaPrecio."/httpdocs/precios_sivex/listPrecioProducto".date("Ymd").".txt","r");
           while ($linea= fgets($file,4000)){
               $texto .= $linea;
           }
           fclose($file);
           
           if(trim($texto)!=''){
               return unserialize(trim($texto));
           }else{
               return array();
           }
       }else{//en caso de no existir el del dia actual, buscar el de la fecha anterior
           
           if(file_exists($rutaPrecio."/httpdocs/precios_sivex/listPrecioProducto".date("Ymd",strtotime("-1 day")).".txt")){
               $texto = "";
               $file= fopen($rutaPrecio."/httpdocs/precios_sivex/listPrecioProducto".date("Ymd",strtotime("-1 day")).".txt","r");
               while ($linea= fgets($file,4000)){
                   $texto .= $linea;
               }
               fclose($file);
               if(trim($texto)!=''){
                   return unserialize(trim($texto));
               }else{
                   return array();
               }
           }else{
               return array();
           }                
       }   
   }
   catch(Exception $e)
   {
       throw new Exception($e->getMessage());
   }
}
    /*
     * nueva funcion :: mvazquezs 10 / julio / 2014
     * devuelve el catalogo de precios del idProducto solicitado
     */
    function getPrecioServicio ($data)
    {
        $idProducto = (int)$data['idProducto'];
        $idUbicacionGeografica = (int)$data['idUbicacionGeografica'];
        $idUnidadNegocio= (int)$data['idUnidadNegocio'];

        if((int)$idProducto == 0){
            echo serialize(array());
        }

        //obtener precios del archivo
        $listPrecioServicio = $this->getArrayFromArchivo();

        //obtener info en base al idProducto
        $data= $listPrecioServicio[$idProducto."_".$idUbicacionGeografica."_".$idUnidadNegocio];
        if(count($data)>0){
            return serialize($data);
        }else{
            return serialize(array());
        }
    }

    /**
     * funcion para convertir un numero a decimal con X digitos
     */
    function truncateFloat($cantidad, $decimales)
    {
        $dividir = explode(".", $cantidad);
        if((int)$dividir[1] == 0) {
            return number_format($cantidad, $decimales);
        }else{
            $monto = number_format($dividir[0]);
            $decimaltruncado=substr($dividir[1], 0, $decimales);
            if(strlen($decimaltruncado)==1){$decimaltruncado.='0';}

            return $monto.".".$decimaltruncado;
        }
    }

    /*
     * mvazquezs 05 septiembre 2015
     * Checa si el precio es igual a 0
     * devuelve codigo de error.
     */
    function validaPrecio($result)
    {
        if(is_object($result)){
            if((int)$result->individualPrecioRegularMonedaNumber === 0  and (int)$result->adultoPrecioRegularMonedaNumber === 0
                and (int)$result->menoresPrecioRegularMonedaNumber === 0 ){
                $resultError = new stdClass;
                foreach($result as $item=>$value){
                    $resultError->$item = "<strong>Precio no disponible</strong>";
                }
                return $resultError;
            }else{
                return $result;
            }
        }else{
            return $result;
        }
    }

}