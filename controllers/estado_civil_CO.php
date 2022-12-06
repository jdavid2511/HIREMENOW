<?php

require_once "../models/estado_civil_MO.php";
require_once "../lib/conexion.php";
 
 

    $conexion = new conexion();

    $estado_civil_MO = new  estado_civil_MO($conexion);
   
    $id_estado_civil = htmlentities($_POST['id_estado_civil'], ENT_QUOTES);
    
    $arreglo = $estado_civil_MO->seleccionar($id_estado_civil);

    if (!$arreglo) {
        $response = ["message" => 'EL ESTADO CIVIL NO SE ENCUNETRA DISPONIBLE'];
        exit(json_encode($response));
    }
    exit(json_encode($arreglo));
  