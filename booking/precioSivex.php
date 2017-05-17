<?php
//error_reporting(E_ALL);
//ini_set("display_errors", 1);
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

function getPrice($idProducto,$idUbicacionGeografica,$idUnidadNegocio){
    
    $datos = array(
        "idProducto" => (int)$idProducto,
        "idUbicacionGeografica" => (int)$idUbicacionGeografica,  
        "idUnidadNegocio" => (int)$idUnidadNegocio
    );

    $res = getPrecioServicio($datos);

    //serializar para crear array
    $dataProducto = unserialize(trim($res));    
    $result = new stdClass;

    if(count($dataProducto)>0){//aqui todo va bien        
        //ADULTO USD
        $result->adultoPrecioRegular = (float)$dataProducto['Adulto']['mnPrecioUSD'];
        $result->adultoPrecioUnitario = (float)$dataProducto['Adulto']['mnPrecioDescuentoUSD'];
        $result->adultoAhorro = (float)$dataProducto['Adulto']['mnAhorroUSD'];
        //ADULTO MXN
        $result->adultoPrecioRegularMxn = (float)$dataProducto['Adulto']['mnPrecioMXN'];
        $result->adultoPrecioUnitarioMxn = (float)$dataProducto['Adulto']['mnPrecioDescuentoMXN'];
        $result->adultoAhorroMxn = (float)$dataProducto['Adulto']['mnAhorroMXN'];
        
        //MENOR USD
        $result->menoresPrecioRegular = (float)$dataProducto['Menor']['mnPrecioUSD'];
        $result->menoresPrecioUnitario = (float)$dataProducto['Menor']['mnPrecioDescuentoUSD'];
        $result->menoresAhorro = (float)$dataProducto['Menor']['mnAhorroUSD'];
        //MENOR MXN
        $result->menoresPrecioRegularMxn = (float)$dataProducto['Menor']['mnPrecioMXN'];
        $result->menoresPrecioUnitarioMxn = (float)$dataProducto['Menor']['mnPrecioDescuentoMXN'];
        $result->menoresAhorroMxn = (float)$dataProducto['Menor']['mnAhorroMXN'];

        $price = number_format($result->adultoPrecioRegular, 2, '.', ',') . "";
        $parts = explode('.', $price);
        $result->adultoPrecioRegularPesos = $parts[0];
        $result->adultoPrecioRegularCentavos = $parts[1];

        $price = number_format($result->adultoPrecioUnitario, 2, '.', ',') . "";
        $parts = explode('.', $price);
        $result->adultoPrecioUnitarioPesos = $parts[0];
        $result->adultoPrecioUnitarioCentavos = $parts[1];

        $price = number_format($result->adultoAhorro, 2, '.', ',') . "";
        $parts = explode('.', $price);
        $result->adultoAhorroPesos = $parts[0];
        $result->adultoAhorroCentavos = $parts[1];

        //ADULTO MXN
        $price = number_format($result->adultoPrecioRegularMxn, 2, '.', ',') . "";
        $parts = explode('.', $price);
        $result->adultoPrecioRegularMxnPesos = $parts[0];
        $result->adultoPrecioRegularMxnCentavos = $parts[1];

        $price = number_format($result->adultoPrecioUnitarioMxn, 2, '.', ',') . "";
        $parts = explode('.', $price);
        $result->adultoPrecioUnitarioMxnPesos = $parts[0];
        $result->adultoPrecioUnitarioMxnCentavos = $parts[1];

        $price = number_format($result->adultoAhorroMxn, 2, '.', ',') . "";
        $parts = explode('.', $price);
        $result->adultoAhorroMxnPesos = $parts[0];
        $result->adultoAhorroMxnCentavos = $parts[1];
        
        //MENOR USD
        $price = number_format($result->menoresPrecioRegular, 2, '.', ',') . "";
        $parts = explode('.', $price);
        $result->menoresPrecioRegularPesos = $parts[0];
        $result->menoresPrecioRegularCentavos = $parts[1];

        $price = number_format($result->menoresPrecioUnitario, 2, '.', ',') . "";
        $parts = explode('.', $price);
        $result->menoresPrecioUnitarioPesos = $parts[0];
        $result->menoresPrecioUnitarioCentavos = $parts[1];

        $price = number_format($result->menoresAhorro, 2, '.', ',') . "";
        $parts = explode('.', $price);
        $result->menoresAhorroPesos = $parts[0];
        $result->menoresAhorroCentavos = $parts[1];
        //MENOR MXN

        $price = number_format($result->menoresPrecioRegularMxn, 2, '.', ',') . "";
        $parts = explode('.', $price);
        $result->menoresPrecioRegularMxnPesos = $parts[0];
        $result->menoresPrecioRegularMxnCentavos = $parts[1];

        $price = number_format($result->menoresPrecioUnitarioMxn, 2, '.', ',') . "";
        $parts = explode('.', $price);
        $result->menoresPrecioUnitarioMxnPesos = $parts[0];
        $result->menoresPrecioUnitarioMxnCentavos = $parts[1];

        $price = number_format($result->menoresAhorroMxn, 2, '.', ',') . "";
        $parts = explode('.', $price);
        $result->menoresAhorroMxnPesos = $parts[0];
        $result->menoresAhorroMxnCentavos = $parts[1];

        if ($result->adultoPrecioRegularPesos == "" || $result->adultoPrecioRegularPesos == "0") { $result->adultoPrecioRegularPesos = "00"; } 
        if ($result->adultoPrecioRegularCentavos == "" || $result->adultoPrecioRegularCentavos == "0") { $result->adultoPrecioRegularCentavos = "00"; } 
        if ($result->adultoPrecioUnitarioPesos == "" || $result->adultoPrecioUnitarioPesos == "0") { $result->adultoPrecioUnitarioPesos = "00"; } 
        if ($result->adultoPrecioUnitarioCentavos == "" || $result->adultoPrecioUnitarioCentavos == "0") { $result->adultoPrecioUnitarioCentavos = "00"; } 
        if ($result->adultoAhorroPesos == "" || $result->adultoAhorroPesos == "0") { $result->adultoAhorroPesos = "00"; } 
        if ($result->adultoAhorroCentavos == "" || $result->adultoAhorroCentavos == "0") { $result->adultoAhorroCentavos = "00"; } 
        if ($result->adultoPrecioRegularMxnPesos == "" || $result->adultoPrecioRegularMxnPesos == "0") { $result->adultoPrecioRegularMxnPesos = "00"; } 
        if ($result->adultoPrecioRegularMxnCentavos == "" || $result->adultoPrecioRegularMxnCentavos == "0") { $result->adultoPrecioRegularMxnCentavos = "00"; } 
        if ($result->adultoPrecioUnitarioMxnPesos == "" || $result->adultoPrecioUnitarioMxnPesos == "0") { $result->adultoPrecioUnitarioMxnPesos = "00"; } 
        if ($result->adultoPrecioUnitarioMxnCentavos == "" || $result->adultoPrecioUnitarioMxnCentavos == "0") { $result->adultoPrecioUnitarioMxnCentavos = "00"; } 
        if ($result->adultoAhorroMxnPesos == "" || $result->adultoAhorroMxnPesos == "0") { $result->adultoAhorroMxnPesos = "00"; } 
        if ($result->adultoAhorroMxnCentavos == "" || $result->adultoAhorroMxnCentavos == "0") { $result->adultoAhorroMxnCentavos = "00"; } 
        if ($result->menoresPrecioRegularPesos == "" || $result->menoresPrecioRegularPesos == "0") { $result->menoresPrecioRegularPesos = "00"; } 
        if ($result->menoresPrecioRegularCentavos == "" || $result->menoresPrecioRegularCentavos == "0") { $result->menoresPrecioRegularCentavos = "00"; } 
        if ($result->menoresPrecioUnitarioPesos == "" || $result->menoresPrecioUnitarioPesos == "0") { $result->menoresPrecioUnitarioPesos = "00"; } 
        if ($result->menoresPrecioUnitarioCentavos == "" || $result->menoresPrecioUnitarioCentavos == "0") { $result->menoresPrecioUnitarioCentavos = "00"; } 
        if ($result->menoresAhorroPesos == "" || $result->menoresAhorroPesos == "0") { $result->menoresAhorroPesos = "00"; } 
        if ($result->menoresAhorroCentavos == "" || $result->menoresAhorroCentavos == "0") { $result->menoresAhorroCentavos = "00"; } 
        if ($result->menoresPrecioRegularMxnPesos == "" || $result->menoresPrecioRegularMxnPesos == "0") { $result->menoresPrecioRegularMxnPesos = "00"; } 
        if ($result->menoresPrecioRegularMxnCentavos == "" || $result->menoresPrecioRegularMxnCentavos == "0") { $result->menoresPrecioRegularMxnCentavos = "00"; } 
        if ($result->menoresPrecioUnitarioMxnPesos == "" || $result->menoresPrecioUnitarioMxnPesos == "0") { $result->menoresPrecioUnitarioMxnPesos = "00"; } 
        if ($result->menoresPrecioUnitarioMxnCentavos == "" || $result->menoresPrecioUnitarioMxnCentavos == "0") { $result->menoresPrecioUnitarioMxnCentavos = "00"; } 
        if ($result->menoresAhorroMxnPesos == "" || $result->menoresAhorroMxnPesos == "0") { $result->menoresAhorroMxnPesos = "00"; } 

    }else{
        $result->adultoPrecioRegular = 0;
        $result->adultoPrecioUnitario = 0;
        $result->adultoAhorro = 0;

        $result->adultoPrecioRegularMxn = 0;
        $result->adultoPrecioUnitarioMxn = 0;
        $result->adultoAhorroMxn = 0;
                
        $result->menoresPrecioRegular = 0;
        $result->menoresPrecioUnitario = 0;
        $result->menoresAhorro = 0;
        
        $result->menoresPrecioRegularMxn = 0;
        $result->menoresPrecioUnitarioMxn = 0;
        $result->menoresAhorroMxn = 0;

        $result->adultoPrecioRegularPesos = 0;
        $result->adultoPrecioRegularCentavos = 0;
        $result->adultoPrecioUnitarioPesos = 0;
        $result->adultoPrecioUnitarioCentavos = 0;
        $result->adultoAhorroPesos = 0;
        $result->adultoAhorroCentavos = 0;
        $result->adultoPrecioRegularMxnPesos = 0;
        $result->adultoPrecioRegularMxnCentavos = 0;
        $result->adultoPrecioUnitarioMxnPesos = 0;
        $result->adultoPrecioUnitarioMxnCentavos = 0;
        $result->adultoAhorroMxnPesos = 0;
        $result->adultoAhorroMxnCentavos = 0;
        $result->menoresPrecioRegularPesos = 0;
        $result->menoresPrecioRegularCentavos = 0;
        $result->menoresPrecioUnitarioPesos = 0;
        $result->menoresPrecioUnitarioCentavos = 0;
        $result->menoresAhorroPesos = 0;
        $result->menoresAhorroCentavos = 0;
        $result->menoresPrecioRegularMxnPesos = 0;
        $result->menoresPrecioRegularMxnCentavos = 0;
        $result->menoresPrecioUnitarioMxnPesos = 0;
        $result->menoresPrecioUnitarioMxnCentavos = 0;
        $result->menoresAhorroMxnPesos = 0;
        $result->menoresAhorroMxnCentavos = 0;

    }
    
    return $result;
}

function getPriceFormato($idProducto,$idUbicacionGeografica,$idUnidadNegocio){
    
    $datos = array(
        "idProducto" => (int)$idProducto,
        "idUbicacionGeografica" => (int)$idUbicacionGeografica,  
        "idUnidadNegocio" => (int)$idUnidadNegocio
    );

    $res = getPrecioServicio($datos);

    //serializar para crear array
    $dataProducto = unserialize(trim($res));    
    $result = new stdClass;
 
    if(count($dataProducto)>0){//aqui todo va bien        
        //ADULTO USD
        $result->adultoPrecioRegular = (float)$dataProducto['Adulto']['mnPrecioUSD'];
        $result->adultoPrecioUnitario = (float)$dataProducto['Adulto']['mnPrecioDescuentoUSD'];
        $result->adultoAhorro = (float)$dataProducto['Adulto']['mnAhorroUSD'];
        //ADULTO MXN
        $result->adultoPrecioRegularMxn = (float)$dataProducto['Adulto']['mnPrecioMXN'];
        $result->adultoPrecioUnitarioMxn = (float)$dataProducto['Adulto']['mnPrecioDescuentoMXN'];
        $result->adultoAhorroMxn = (float)$dataProducto['Adulto']['mnAhorroMXN'];
        
        //MENOR USD
        $result->menoresPrecioRegular = (float)$dataProducto['Menor']['mnPrecioUSD'];
        $result->menoresPrecioUnitario = (float)$dataProducto['Menor']['mnPrecioDescuentoUSD'];
        $result->menoresAhorro = (float)$dataProducto['Menor']['mnAhorroUSD'];
        //MENOR MXN
        $result->menoresPrecioRegularMxn = (float)$dataProducto['Menor']['mnPrecioMXN'];
        $result->menoresPrecioUnitarioMxn = (float)$dataProducto['Menor']['mnPrecioDescuentoMXN'];
        $result->menoresAhorroMxn = (float)$dataProducto['Menor']['mnAhorroMXN'];

        $price = number_format($result->adultoPrecioRegular, 2, '.', ',') . "";
        $parts = explode('.', $price);
        $result->adultoPrecioRegular = $parts[0] . "<sup>" . $parts[1] . "</sup>";

        $price = number_format($result->adultoPrecioUnitario, 2, '.', ',') . "";
        $parts = explode('.', $price);
        $result->adultoPrecioUnitario = $parts[0] . "<sup>" . $parts[1] . "</sup>";

        $price = number_format($result->adultoAhorro, 2, '.', ',') . "";
        $parts = explode('.', $price);
        $result->adultoAhorro = $parts[0] . "<sup>" . $parts[1] . "</sup>";

        //ADULTO MXN
        $price = number_format($result->adultoPrecioRegularMxn, 2, '.', ',') . "";
        $parts = explode('.', $price);
        $result->adultoPrecioRegularMxn = $parts[0] . "<sup>" . $parts[1] . "</sup>";

        $price = number_format($result->adultoPrecioUnitarioMxn, 2, '.', ',') . "";
        $parts = explode('.', $price);
        $result->adultoPrecioUnitarioMxn = $parts[0] . "<sup>" . $parts[1] . "</sup>";

        $price = number_format($result->adultoAhorroMxn, 2, '.', ',') . "";
        $parts = explode('.', $price);
        $result->adultoAhorroMxn = $parts[0] . "<sup>" . $parts[1] . "</sup>";
        
        //MENOR USD
        $price = number_format($result->menoresPrecioRegular, 2, '.', ',') . "";
        $parts = explode('.', $price);
        $result->menoresPrecioRegular = $parts[0] . "<sup>" . $parts[1] . "</sup>";

        $price = number_format($result->menoresPrecioUnitario, 2, '.', ',') . "";
        $parts = explode('.', $price);
        $result->menoresPrecioUnitario = $parts[0] . "<sup>" . $parts[1] . "</sup>";

        $price = number_format($result->menoresAhorro, 2, '.', ',') . "";
        $parts = explode('.', $price);
        $result->menoresAhorro = $parts[0] . "<sup>" . $parts[1] . "</sup>";
        //MENOR MXN

        $price = number_format($result->menoresPrecioRegularMxn, 2, '.', ',') . "";
        $parts = explode('.', $price);
        $result->menoresPrecioRegularMxn = $parts[0] . "<sup>" . $parts[1] . "</sup>";

        $price = number_format($result->menoresPrecioUnitarioMxn, 2, '.', ',') . "";
        $parts = explode('.', $price);
        $result->menoresPrecioUnitarioMxn = $parts[0] . "<sup>" . $parts[1] . "</sup>";

        $price = number_format($result->menoresAhorroMxn, 2, '.', ',') . "";
        $parts = explode('.', $price);
        $result->menoresAhorroMxn = $parts[0] . "<sup>" . $parts[1] . "</sup>";
    }else{
        $result->adultoPrecioRegular = 0;
        $result->adultoPrecioUnitario = 0;
        $result->adultoAhorro = 0;

        $result->adultoPrecioRegularMxn = 0;
        $result->adultoPrecioUnitarioMxn = 0;
        $result->adultoAhorroMxn = 0;
                
        $result->menoresPrecioRegular = 0;
        $result->menoresPrecioUnitario = 0;
        $result->menoresAhorro = 0;
        
        $result->menoresPrecioRegularMxn = 0;
        $result->menoresPrecioUnitarioMxn = 0;
        $result->menoresAhorroMxn = 0;
    }
    
    return $result;
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
function getPriceCombinacionProductos($idProductoProductoPrincipal,$idUbicacionGeograficaProductoPrincipal,$idUnidadNegocioProductoPrincipal,$combinacionProductos=array())
{
    /*obtener precio del producto principal*/
    $result = getPrice($idProductoProductoPrincipal,$idUbicacionGeograficaProductoPrincipal,$idUnidadNegocioProductoPrincipal);
    
    //validar que el array de productos no este vacio
    if(count($combinacionProductos)>0){
       //obtener el precio de cada uno de los compoentes
       $precioComponente = array();
       foreach($combinacionProductos as $producto)
       {
           $precioComponente[] = getPrice((int)$producto['idProducto'],(int)$producto['idUbicacionGeografica'],(int)$producto['idUnidadNegocio']);
       }
              
       //hacer la sumatoria de precios de cada uno de los componentes
       $precioSumatoria = array('MXN' => 0,
                                'USD' => 0);
       foreach($precioComponente as $item){
           $precioSumatoria['MXN'] += (float)$item->adultoPrecioRegularMxn;
           $precioSumatoria['USD'] += (float)$item->adultoPrecioRegular;
       }
       //echo "<pre>"; print_r($precioSumatoria); echo "</pre>";
       
        //set precios
       $result->adultoAhorro = (float)$precioSumatoria['USD'] - (float)$result->adultoPrecioUnitario;
       $result->adultoAhorroMxn = (float)$precioSumatoria['MXN'] - (float)$result->adultoPrecioUnitarioMxn;        
       $result->adultoPrecioRegular = (float)$precioSumatoria['USD'];
       $result->adultoPrecioRegularMxn = (float)$precioSumatoria['MXN'];
       
    }else{
        
       $result->adultoAhorro = 0;
       $result->adultoAhorroMxn =0;        
       $result->adultoPrecioRegular = 0;
       $result->adultoPrecioRegularMxn = 0;  
    }
    
    return $result;
}

/*
 * consume la funcion getPriceCombinacionProductos para obtener los precios
 * y posteriormente se le da formato HTML a cada uno de los atributos.
 * 
 * @params
 * Recibe los mismos params que la funcion getPriceCombinacionProductos
 */ 
function getPriceCombinacionProductosFormato($idProductoProductoPrincipal,$idUbicacionGeograficaProductoPrincipal,$idUnidadNegocioProductoPrincipal,$combinacionProductos=array())
{
    $result = getPriceCombinacionProductos($idProductoProductoPrincipal,$idUbicacionGeograficaProductoPrincipal,$idUnidadNegocioProductoPrincipal,$combinacionProductos);
    
    $price = number_format($result->adultoPrecioRegular, 2, '.', ',') . "";
    $parts = explode('.', $price);
    $result->adultoPrecioRegular = $parts[0] . "<sup>" . $parts[1] . "</sup>";

    $price = number_format($result->adultoPrecioUnitario, 2, '.', ',') . "";
    $parts = explode('.', $price);
    $result->adultoPrecioUnitario = $parts[0] . "<sup>" . $parts[1] . "</sup>";

    $price = number_format($result->adultoAhorro, 2, '.', ',') . "";
    $parts = explode('.', $price);
    $result->adultoAhorro = $parts[0] . "<sup>" . $parts[1] . "</sup>";

    //ADULTO MXN
    $price = number_format($result->adultoPrecioRegularMxn, 2, '.', ',') . "";
    $parts = explode('.', $price);
    $result->adultoPrecioRegularMxn = $parts[0] . "<sup>" . $parts[1] . "</sup>";

    $price = number_format($result->adultoPrecioUnitarioMxn, 2, '.', ',') . "";
    $parts = explode('.', $price);
    $result->adultoPrecioUnitarioMxn = $parts[0] . "<sup>" . $parts[1] . "</sup>";

    $price = number_format($result->adultoAhorroMxn, 2, '.', ',') . "";
    $parts = explode('.', $price);
    $result->adultoAhorroMxn = $parts[0] . "<sup>" . $parts[1] . "</sup>";

    //MENOR USD
    $price = number_format($result->menoresPrecioRegular, 2, '.', ',') . "";
    $parts = explode('.', $price);
    $result->menoresPrecioRegular = $parts[0] . "<sup>" . $parts[1] . "</sup>";

    $price = number_format($result->menoresPrecioUnitario, 2, '.', ',') . "";
    $parts = explode('.', $price);
    $result->menoresPrecioUnitario = $parts[0] . "<sup>" . $parts[1] . "</sup>";

    $price = number_format($result->menoresAhorro, 2, '.', ',') . "";
    $parts = explode('.', $price);
    $result->menoresAhorro = $parts[0] . "<sup>" . $parts[1] . "</sup>";
    //MENOR MXN

    $price = number_format($result->menoresPrecioRegularMxn, 2, '.', ',') . "";
    $parts = explode('.', $price);
    $result->menoresPrecioRegularMxn = $parts[0] . "<sup>" . $parts[1] . "</sup>";

    $price = number_format($result->menoresPrecioUnitarioMxn, 2, '.', ',') . "";
    $parts = explode('.', $price);
    $result->menoresPrecioUnitarioMxn = $parts[0] . "<sup>" . $parts[1] . "</sup>";

    $price = number_format($result->menoresAhorroMxn, 2, '.', ',') . "";
    $parts = explode('.', $price);
    $result->menoresAhorroMxn = $parts[0] . "<sup>" . $parts[1] . "</sup>";
    
    /*$price = number_format($result->regularSumatoria, 2, '.', ',') . "";
    $parts = explode('.', $price);
    $result->regularSumatoria = $parts[0] . "<sup>" . $parts[1] . "</sup>";
    
    $price = number_format($result->regularSumatoriaMxn, 2, '.', ',') . "";
    $parts = explode('.', $price);
    $result->regularSumatoriaMxn = $parts[0] . "<sup>" . $parts[1] . "</sup>";
    
    $price = number_format($result->ahorro, 2, '.', ',') . "";
    $parts = explode('.', $price);
    $result->ahorro = $parts[0] . "<sup>" . $parts[1] . "</sup>";
    
    $price = number_format($result->ahorroMxn, 2, '.', ',') . "";
    $parts = explode('.', $price);
    $result->ahorroMxn = $parts[0] . "<sup>" . $parts[1] . "</sup>";*/

    return $result;
}

function getPriceFormatoDescuento($idProducto,$idUbicacionGeografica,$idUnidadNegocio,$descuento){
    
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
        //ADULTO USD
        $result->adultoPrecioRegular = (float)$dataProducto['Adulto']['mnPrecioUSD'];
        $result->adultoPrecioUnitario = (float)$dataProducto['Adulto']['mnPrecioDescuentoUSD'];
        $result->adultoAhorro = (float)$dataProducto['Adulto']['mnAhorroUSD'];
        //ADULTO MXN
        $result->adultoPrecioRegularMxn = (float)$dataProducto['Adulto']['mnPrecioMXN'];
        $result->adultoPrecioUnitarioMxn = (float)$dataProducto['Adulto']['mnPrecioDescuentoMXN'];
        $result->adultoAhorroMxn = (float)$dataProducto['Adulto']['mnAhorroMXN'];
        
        //MENOR USD
        $result->menoresPrecioRegular = (float)$dataProducto['Menor']['mnPrecioUSD'];
        $result->menoresPrecioUnitario = (float)$dataProducto['Menor']['mnPrecioDescuentoUSD'];
        $result->menoresAhorro = (float)$dataProducto['Menor']['mnAhorroUSD'];
        //MENOR MXN
        $result->menoresPrecioRegularMxn = (float)$dataProducto['Menor']['mnPrecioMXN'];
        $result->menoresPrecioUnitarioMxn = (float)$dataProducto['Menor']['mnPrecioDescuentoMXN'];
        $result->menoresAhorroMxn = (float)$dataProducto['Menor']['mnAhorroMXN'];

        //ADULTO USD
        $result->adultoPrecioRegular = (1-($descuento/100)) * $result->adultoPrecioRegular;
        $result->adultoPrecioUnitario = (1-($descuento/100)) * $result->adultoPrecioUnitario;
        $result->adultoAhorro = (1-($descuento/100)) * $result->adultoAhorro;
        //ADULTO MXN
        $result->adultoPrecioRegularMxn = (1-($descuento/100)) * $result->adultoPrecioRegularMxn;
        $result->adultoPrecioUnitarioMxn = (1-($descuento/100)) * $result->adultoPrecioUnitarioMxn;
        $result->adultoAhorroMxn = (1-($descuento/100)) * $result->adultoAhorroMxn;
        
        //MENOR USD
        $result->menoresPrecioRegular = (1-($descuento/100)) * $result->menoresPrecioRegular;
        $result->menoresPrecioUnitario = (1-($descuento/100)) * $result->menoresPrecioUnitario;
        $result->menoresAhorro = (1-($descuento/100)) * $result->menoresAhorro;
        //MENOR MXN
        $result->menoresPrecioRegularMxn = (1-($descuento/100)) * $result->menoresPrecioRegularMxn;
        $result->menoresPrecioUnitarioMxn = (1-($descuento/100)) * $result->menoresPrecioUnitarioMxn;
        $result->menoresAhorroMxn = (1-($descuento/100)) * $result->menoresAhorroMxn;

        $price = number_format($result->adultoPrecioRegular, 2, '.', ',') . "";
        $parts = explode('.', $price);
        $result->adultoPrecioRegular = $parts[0] . "<sup>" . $parts[1] . "</sup>";

        $price = number_format($result->adultoPrecioUnitario, 2, '.', ',') . "";
        $parts = explode('.', $price);
        $result->adultoPrecioUnitario = $parts[0] . "<sup>" . $parts[1] . "</sup>";

        $price = number_format($result->adultoAhorro, 2, '.', ',') . "";
        $parts = explode('.', $price);
        $result->adultoAhorro = $parts[0] . "<sup>" . $parts[1] . "</sup>";

        //ADULTO MXN
        $price = number_format($result->adultoPrecioRegularMxn, 2, '.', ',') . "";
        $parts = explode('.', $price);
        $result->adultoPrecioRegularMxn = $parts[0] . "<sup>" . $parts[1] . "</sup>";

        $price = number_format($result->adultoPrecioUnitarioMxn, 2, '.', ',') . "";
        $parts = explode('.', $price);
        $result->adultoPrecioUnitarioMxn = $parts[0] . "<sup>" . $parts[1] . "</sup>";

        $price = number_format($result->adultoAhorroMxn, 2, '.', ',') . "";
        $parts = explode('.', $price);
        $result->adultoAhorroMxn = $parts[0] . "<sup>" . $parts[1] . "</sup>";
        
        //MENOR USD
        $price = number_format($result->menoresPrecioRegular, 2, '.', ',') . "";
        $parts = explode('.', $price);
        $result->menoresPrecioRegular = $parts[0] . "<sup>" . $parts[1] . "</sup>";

        $price = number_format($result->menoresPrecioUnitario, 2, '.', ',') . "";
        $parts = explode('.', $price);
        $result->menoresPrecioUnitario = $parts[0] . "<sup>" . $parts[1] . "</sup>";

        $price = number_format($result->menoresAhorro, 2, '.', ',') . "";
        $parts = explode('.', $price);
        $result->menoresAhorro = $parts[0] . "<sup>" . $parts[1] . "</sup>";
        //MENOR MXN

        $price = number_format($result->menoresPrecioRegularMxn, 2, '.', ',') . "";
        $parts = explode('.', $price);
        $result->menoresPrecioRegularMxn = $parts[0] . "<sup>" . $parts[1] . "</sup>";

        $price = number_format($result->menoresPrecioUnitarioMxn, 2, '.', ',') . "";
        $parts = explode('.', $price);
        $result->menoresPrecioUnitarioMxn = $parts[0] . "<sup>" . $parts[1] . "</sup>";

        $price = number_format($result->menoresAhorroMxn, 2, '.', ',') . "";
        $parts = explode('.', $price);
        $result->menoresAhorroMxn = $parts[0] . "<sup>" . $parts[1] . "</sup>";
    }else{
        $result->adultoPrecioRegular = 0;
        $result->adultoPrecioUnitario = 0;
        $result->adultoAhorro = 0;

        $result->adultoPrecioRegularMxn = 0;
        $result->adultoPrecioUnitarioMxn = 0;
        $result->adultoAhorroMxn = 0;
                
        $result->menoresPrecioRegular = 0;
        $result->menoresPrecioUnitario = 0;
        $result->menoresAhorro = 0;
        
        $result->menoresPrecioRegularMxn = 0;
        $result->menoresPrecioUnitarioMxn = 0;
        $result->menoresAhorroMxn = 0;
    }
    
    return $result;
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

           $texto = "";
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
    $listPrecioServicio = getArrayFromArchivo();
    
    //obtener info en base al idProducto
    $data= $listPrecioServicio[$idProducto."_".$idUbicacionGeografica."_".$idUnidadNegocio];    
    if(count($data)>0){
        return serialize($data);
    }else{
        return serialize(array());
    }
}


function getPricePrueba($idProducto,$idUbicacionGeografica,$idUnidadNegocio){
    
    $datos = array(
        "idProducto" => (int)$idProducto,
        "idUbicacionGeografica" => (int)$idUbicacionGeografica,  
        "idUnidadNegocio" => (int)$idUnidadNegocio
    );

    $res = getPrecioServicio($datos);
    
    //serializar para crear array
    $dataProducto = unserialize(trim($res));    
    $result = new stdClass;

    if(count($dataProducto)>0){//aqui todo va bien        
        //ADULTO USD
        $result->adultoPrecioRegular = (float)$dataProducto['Adulto']['mnPrecioUSD'];
        $result->adultoPrecioUnitario = (float)$dataProducto['Adulto']['mnPrecioDescuentoUSD'];
        $result->adultoAhorro = (float)$dataProducto['Adulto']['mnAhorroUSD'];
        //ADULTO MXN
        $result->adultoPrecioRegularMxn = (float)$dataProducto['Adulto']['mnPrecioMXN'];
        $result->adultoPrecioUnitarioMxn = (float)$dataProducto['Adulto']['mnPrecioDescuentoMXN'];
        $result->adultoAhorroMxn = (float)$dataProducto['Adulto']['mnAhorroMXN'];
        
        //MENOR USD
        $result->menoresPrecioRegular = (float)$dataProducto['Menor']['mnPrecioUSD'];
        $result->menoresPrecioUnitario = (float)$dataProducto['Menor']['mnPrecioDescuentoUSD'];
        $result->menoresAhorro = (float)$dataProducto['Menor']['mnAhorroUSD'];
        //MENOR MXN
        $result->menoresPrecioRegularMxn = (float)$dataProducto['Menor']['mnPrecioMXN'];
        $result->menoresPrecioUnitarioMxn = (float)$dataProducto['Menor']['mnPrecioDescuentoMXN'];
        $result->menoresAhorroMxn = (float)$dataProducto['Menor']['mnAhorroMXN'];

        $price = number_format($result->adultoPrecioRegular, 2, '.', ',') . "";
        $parts = explode('.', $price);
        $result->adultoPrecioRegularPesos = $parts[0];
        $result->adultoPrecioRegularCentavos = $parts[1];

        $price = number_format($result->adultoPrecioUnitario, 2, '.', ',') . "";
        $parts = explode('.', $price);
        $result->adultoPrecioUnitarioPesos = $parts[0];
        $result->adultoPrecioUnitarioCentavos = $parts[1];

        $price = number_format($result->adultoAhorro, 2, '.', ',') . "";
        $parts = explode('.', $price);
        $result->adultoAhorroPesos = $parts[0];
        $result->adultoAhorroCentavos = $parts[1];

        //ADULTO MXN
        $price = number_format($result->adultoPrecioRegularMxn, 2, '.', ',') . "";
        $parts = explode('.', $price);
        $result->adultoPrecioRegularMxnPesos = $parts[0];
        $result->adultoPrecioRegularMxnCentavos = $parts[1];

        $price = number_format($result->adultoPrecioUnitarioMxn, 2, '.', ',') . "";
        $parts = explode('.', $price);
        $result->adultoPrecioUnitarioMxnPesos = $parts[0];
        $result->adultoPrecioUnitarioMxnCentavos = $parts[1];

        $price = number_format($result->adultoAhorroMxn, 2, '.', ',') . "";
        $parts = explode('.', $price);
        $result->adultoAhorroMxnPesos = $parts[0];
        $result->adultoAhorroMxnCentavos = $parts[1];
        
        //MENOR USD
        $price = number_format($result->menoresPrecioRegular, 2, '.', ',') . "";
        $parts = explode('.', $price);
        $result->menoresPrecioRegularPesos = $parts[0];
        $result->menoresPrecioRegularCentavos = $parts[1];

        $price = number_format($result->menoresPrecioUnitario, 2, '.', ',') . "";
        $parts = explode('.', $price);
        $result->menoresPrecioUnitarioPesos = $parts[0];
        $result->menoresPrecioUnitarioCentavos = $parts[1];

        $price = number_format($result->menoresAhorro, 2, '.', ',') . "";
        $parts = explode('.', $price);
        $result->menoresAhorroPesos = $parts[0];
        $result->menoresAhorroCentavos = $parts[1];
        //MENOR MXN

        $price = number_format($result->menoresPrecioRegularMxn, 2, '.', ',') . "";
        $parts = explode('.', $price);
        $result->menoresPrecioRegularMxnPesos = $parts[0];
        $result->menoresPrecioRegularMxnCentavos = $parts[1];

        $price = number_format($result->menoresPrecioUnitarioMxn, 2, '.', ',') . "";
        $parts = explode('.', $price);
        $result->menoresPrecioUnitarioMxnPesos = $parts[0];
        $result->menoresPrecioUnitarioMxnCentavos = $parts[1];

        $price = number_format($result->menoresAhorroMxn, 2, '.', ',') . "";
        $parts = explode('.', $price);
        $result->menoresAhorroMxnPesos = $parts[0];
        $result->menoresAhorroMxnCentavos = $parts[1];

        if ($result->adultoPrecioRegularPesos == "" || $result->adultoPrecioRegularPesos == "0") { $result->adultoPrecioRegularPesos = "00"; } 
        if ($result->adultoPrecioRegularCentavos == "" || $result->adultoPrecioRegularCentavos == "0") { $result->adultoPrecioRegularCentavos = "00"; } 
        if ($result->adultoPrecioUnitarioPesos == "" || $result->adultoPrecioUnitarioPesos == "0") { $result->adultoPrecioUnitarioPesos = "00"; } 
        if ($result->adultoPrecioUnitarioCentavos == "" || $result->adultoPrecioUnitarioCentavos == "0") { $result->adultoPrecioUnitarioCentavos = "00"; } 
        if ($result->adultoAhorroPesos == "" || $result->adultoAhorroPesos == "0") { $result->adultoAhorroPesos = "00"; } 
        if ($result->adultoAhorroCentavos == "" || $result->adultoAhorroCentavos == "0") { $result->adultoAhorroCentavos = "00"; } 
        if ($result->adultoPrecioRegularMxnPesos == "" || $result->adultoPrecioRegularMxnPesos == "0") { $result->adultoPrecioRegularMxnPesos = "00"; } 
        if ($result->adultoPrecioRegularMxnCentavos == "" || $result->adultoPrecioRegularMxnCentavos == "0") { $result->adultoPrecioRegularMxnCentavos = "00"; } 
        if ($result->adultoPrecioUnitarioMxnPesos == "" || $result->adultoPrecioUnitarioMxnPesos == "0") { $result->adultoPrecioUnitarioMxnPesos = "00"; } 
        if ($result->adultoPrecioUnitarioMxnCentavos == "" || $result->adultoPrecioUnitarioMxnCentavos == "0") { $result->adultoPrecioUnitarioMxnCentavos = "00"; } 
        if ($result->adultoAhorroMxnPesos == "" || $result->adultoAhorroMxnPesos == "0") { $result->adultoAhorroMxnPesos = "00"; } 
        if ($result->adultoAhorroMxnCentavos == "" || $result->adultoAhorroMxnCentavos == "0") { $result->adultoAhorroMxnCentavos = "00"; } 
        if ($result->menoresPrecioRegularPesos == "" || $result->menoresPrecioRegularPesos == "0") { $result->menoresPrecioRegularPesos = "00"; } 
        if ($result->menoresPrecioRegularCentavos == "" || $result->menoresPrecioRegularCentavos == "0") { $result->menoresPrecioRegularCentavos = "00"; } 
        if ($result->menoresPrecioUnitarioPesos == "" || $result->menoresPrecioUnitarioPesos == "0") { $result->menoresPrecioUnitarioPesos = "00"; } 
        if ($result->menoresPrecioUnitarioCentavos == "" || $result->menoresPrecioUnitarioCentavos == "0") { $result->menoresPrecioUnitarioCentavos = "00"; } 
        if ($result->menoresAhorroPesos == "" || $result->menoresAhorroPesos == "0") { $result->menoresAhorroPesos = "00"; } 
        if ($result->menoresAhorroCentavos == "" || $result->menoresAhorroCentavos == "0") { $result->menoresAhorroCentavos = "00"; } 
        if ($result->menoresPrecioRegularMxnPesos == "" || $result->menoresPrecioRegularMxnPesos == "0") { $result->menoresPrecioRegularMxnPesos = "00"; } 
        if ($result->menoresPrecioRegularMxnCentavos == "" || $result->menoresPrecioRegularMxnCentavos == "0") { $result->menoresPrecioRegularMxnCentavos = "00"; } 
        if ($result->menoresPrecioUnitarioMxnPesos == "" || $result->menoresPrecioUnitarioMxnPesos == "0") { $result->menoresPrecioUnitarioMxnPesos = "00"; } 
        if ($result->menoresPrecioUnitarioMxnCentavos == "" || $result->menoresPrecioUnitarioMxnCentavos == "0") { $result->menoresPrecioUnitarioMxnCentavos = "00"; } 
        if ($result->menoresAhorroMxnPesos == "" || $result->menoresAhorroMxnPesos == "0") { $result->menoresAhorroMxnPesos = "00"; } 

    }else{
        $result->adultoPrecioRegular = 0;
        $result->adultoPrecioUnitario = 0;
        $result->adultoAhorro = 0;

        $result->adultoPrecioRegularMxn = 0;
        $result->adultoPrecioUnitarioMxn = 0;
        $result->adultoAhorroMxn = 0;
                
        $result->menoresPrecioRegular = 0;
        $result->menoresPrecioUnitario = 0;
        $result->menoresAhorro = 0;
        
        $result->menoresPrecioRegularMxn = 0;
        $result->menoresPrecioUnitarioMxn = 0;
        $result->menoresAhorroMxn = 0;

        $result->adultoPrecioRegularPesos = 0;
        $result->adultoPrecioRegularCentavos = 0;
        $result->adultoPrecioUnitarioPesos = 0;
        $result->adultoPrecioUnitarioCentavos = 0;
        $result->adultoAhorroPesos = 0;
        $result->adultoAhorroCentavos = 0;
        $result->adultoPrecioRegularMxnPesos = 0;
        $result->adultoPrecioRegularMxnCentavos = 0;
        $result->adultoPrecioUnitarioMxnPesos = 0;
        $result->adultoPrecioUnitarioMxnCentavos = 0;
        $result->adultoAhorroMxnPesos = 0;
        $result->adultoAhorroMxnCentavos = 0;
        $result->menoresPrecioRegularPesos = 0;
        $result->menoresPrecioRegularCentavos = 0;
        $result->menoresPrecioUnitarioPesos = 0;
        $result->menoresPrecioUnitarioCentavos = 0;
        $result->menoresAhorroPesos = 0;
        $result->menoresAhorroCentavos = 0;
        $result->menoresPrecioRegularMxnPesos = 0;
        $result->menoresPrecioRegularMxnCentavos = 0;
        $result->menoresPrecioUnitarioMxnPesos = 0;
        $result->menoresPrecioUnitarioMxnCentavos = 0;
        $result->menoresAhorroMxnPesos = 0;
        $result->menoresAhorroMxnCentavos = 0;

    }
    
    return $result;
}

?>
