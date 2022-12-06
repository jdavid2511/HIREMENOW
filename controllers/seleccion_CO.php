<?php
 
require_once "../models/seleccionar_MO.php";
require_once "../lib/conexion.php";
session_start();


      $conexion=new conexion();
      $seleccionar_MO = new  seleccionar_MO ($conexion);

      $fecha_ini = htmlentities($_POST['fecha_ini'], ENT_QUOTES);
      $documento = htmlentities($_POST['documento'], ENT_QUOTES);
      $fecha_fin = htmlentities($_POST['fecha_fin'], ENT_QUOTES);
      $fecha_aplicacion = htmlentities($_POST['fecha_ini'], ENT_QUOTES);
      $id_vacante = htmlentities($_POST['id_vacante'], ENT_QUOTES);
      $id_categoria = htmlentities($_POST['id_categoria'], ENT_QUOTES);
      $id_estado = htmlentities($_POST['id_estado'], ENT_QUOTES);

      $seleccionar_MO -> seleccion($id_vacante, $fecha_aplicacion, $docuemnto, $id_vacante, $id_categoria, $id_estado);

      $arreglo_respuesta=[
          
        "documento" => $documento,
        "estado" => "EXITO",
        "mensaje"=> "Registro agregado"

    ];
      
?>