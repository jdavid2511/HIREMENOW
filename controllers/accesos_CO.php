<?php
 
require_once "../models/accesos_MO.php";
require_once "../lib/conexion.php";
session_start();

class accesos_CO{

    function __construct(){}

    function iniciarSesion($usuario,$contrasena){

      $conexion=new conexion();

      $accesos_MO = new  accesos_MO ($conexion);
      
      if ( empty($usuario) or empty($contrasena)) {
          $arreglo_respuesta = [
            "estado" => "ERROR",
            "mensaje" => "Todos los campos son obligatorios"

          ];

          exit(json_encode($arreglo_respuesta));
        }
          if (strlen($usuario) > 30) {
            $arreglo_respuesta = [
              "estado" => "ERROR",
              "mensaje" => "el correo debe tener menos de 50 caracteres"

            ];

            exit(json_encode($arreglo_respuesta));
          }
          if (strlen($contrasena) > 20) {
            $arreglo_respuesta = [
              "estado" => "ERROR",
              "mensaje" => "la contraseña debe tener menos de 30 caracteres"

            ];

            exit(json_encode($arreglo_respuesta));
          }
          $accesos_MO=new accesos_MO($conexion);
          $arreglo=$accesos_MO->iniciarSesion($usuario,$contrasena);
        
          if($arreglo)
          { 
              
              $objeto_accesos=$arreglo[0];
              $documento=$objeto_accesos->documento;
              $_SESSION['documento']=$documento;
              $arreglo_respuesta = [
              "estado" => "EXITO",
              "mensaje" => "LOGIN EXITOSO ",
            
            ];
            
            exit(json_encode($arreglo_respuesta));

          }

        function salir(){
          session_destroy();
        }
      }
}
?>