<?php

require_once "../models/departamento_MO.php";
require_once "../lib/conexion.php";

    $conexion = new conexion();

    $departamento_MO = new  departamento_MO($conexion);
   
    $cod_dpto = htmlentities($_POST['departamento'], ENT_QUOTES);
    
    $arreglo = $departamento_MO->showCiudad($cod_dpto);

    if (!$arreglo) {
        $response = ["message" => 'ERROR LAS CIUDADES NO SE ENCUENTRAN DISPONIBLES'];
        exit(json_encode($response));
    }
    exit(json_encode($arreglo));
  