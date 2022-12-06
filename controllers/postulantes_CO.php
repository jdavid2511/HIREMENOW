<?php

require_once "../models/postulante_MO.php";
require_once "../lib/conexion.php";

      $conexion = new conexion();

      $postulante_MO = new  postulante_MO ($conexion);

      $documento =  $_POST['documento'];
      $nombre1 = htmlentities($_POST['nombre1'], ENT_QUOTES);
      $nombre2 = htmlentities($_POST['nombre2'], ENT_QUOTES);
      $apellido1 = htmlentities($_POST['apellido1'], ENT_QUOTES); 
      $apellido2 = htmlentities($_POST['apellido2'], ENT_QUOTES);
      $telefono = htmlentities($_POST['telefono'], ENT_QUOTES);
      $correo = htmlentities($_POST['correo'], ENT_QUOTES);
      $huella_digital = htmlentities($_POST['huella_digital'], ENT_QUOTES);
      $hoja_vida = htmlentities($_POST['hoja_vida'], ENT_QUOTES);
      $fecha_nto = htmlentities($_POST['fecha_nto'], ENT_QUOTES);
      $direccion = htmlentities($_POST['direccion'], ENT_QUOTES);
      $sexo = htmlentities($_POST['sexo'], ENT_QUOTES);
      $id_estado_civil = htmlentities($_POST['id_estado_civil'], ENT_QUOTES);
      $cod_ciudad = htmlentities($_POST['cod_ciudad']);
      $cod_dpto = htmlentities($_POST['cod_dpto']);
      $usuario = htmlentities($_POST['usuario'], ENT_QUOTES);
      $contrasena = htmlentities($_POST['contrasena'], ENT_QUOTES);

      if(empty($nombre1) or empty($apellido1) or empty($telefono) or empty($correo) or empty($hoja_vida) or empty($fecha_nto) or empty($direccion) or empty($id_estado_civil) or empty($cod_ciudad) or empty($cod_dpto)){
            
        $arreglo_respuesta=[
          
            "estado" => "ERROR",
            "mensaje"=> "HAY CAMPOS VACIOS"
    
        ];
    
            exit(json_encode($arreglo_respuesta));
      }
      if(strlen($documento) > 11 ){
            
        $arreglo_respuesta=[
          
            "estado" => "ERROR",
            "mensaje"=> "DOCUMENTO NO VALIDO"
    
        ];
    
            exit(json_encode($arreglo_respuesta));
      }
     
      if(strlen($nombre1) > 45 ){
            
        $arreglo_respuesta=[
          
            "estado" => "ERROR",
            "mensaje"=> "Nombre no valido"
    
        ];
    
            exit(json_encode($arreglo_respuesta));
      }
      if(strlen($nombre2) > 45 ){
            
        $arreglo_respuesta=[
          
            "estado" => "ERROR",
            "mensaje"=> "Nombre no valido"
    
        ];
    
            exit(json_encode($arreglo_respuesta));
      }
      if(strlen($apellido1) > 45 ){
            
        $arreglo_respuesta=[
          
            "estado" => "ERROR",
            "mensaje"=> "Apellido no valido"
    
        ];
    
            exit(json_encode($arreglo_respuesta));
      }
      if(strlen($apellido2) > 45 ){
            
        $arreglo_respuesta=[
          
            "estado" => "ERROR",
            "mensaje"=> "Apellido no valido"
    
        ];
    
            exit(json_encode($arreglo_respuesta));
      }
      if(strlen($telefono) != 10 ){
            
        $arreglo_respuesta=[
          
            "estado" => "ERROR",
            "mensaje"=> "Numero de telefono no valido"
    
        ];
    
            exit(json_encode($arreglo_respuesta));
      }
      if(!(filter_var($correo, FILTER_VALIDATE_EMAIL))){
            
        $arreglo_respuesta=[
          
            "estado" => "ERROR",
            "mensaje"=> "Correo no valido"
    
        ];
    
            exit(json_encode($arreglo_respuesta));
      }
      
      $arreglo_postulantes = $postulante_MO -> seleccionar($documento);

      if($arreglo_postulantes){
            
        $arreglo_respuesta=[
          
            "estado" => "ERROR",
            "mensaje"=> "Este documento ya esta resgistrado"
    
        ];
    
            exit(json_encode($arreglo_respuesta));
      }

      $postulante_MO -> agregarpostulantes($documento,$nombre1, $nombre2,$apellido1,$apellido2,$telefono,$correo,$huella_digital,$hoja_vida,$fecha_nto,$direccion,$sexo,$id_estado_civil,$cod_ciudad,$cod_dpto);
      $postulante_MO -> agregaracceso($documento,$usuario,$contrasena);
      $arreglo_respuesta=[
          
        "documento" => $documento,
        "estado" => "EXITO",
        "mensaje"=> "Registro agregado"

    ];
     

?>