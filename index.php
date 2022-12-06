<?php
session_start();
require_once "lib/conexion.php";
require_once "lib/front_controller.php";
     if(isset($_SESSION['documento'])){
        
          require_once "lib/front_controller.php";
          
          if(isset($_GET['ruta'])){
            
            $ruta=$_GET['ruta'];

          }else{
            $ruta='';

          }
          $front_controller=new front_controller($ruta);
 

      }else if( isset( $_POST['usuario']) and isset( $_POST['contrasena'])){

          $usuario=$_POST['usuario'];

          $contrasena=$_POST['contrasena']; 

          require_once "controllers/accesos_CO.php";

          $accesos_CO = new  accesos_CO ();

          $accesos_CO -> iniciarSesion($usuario,$contrasena);

      } else{

        require_once "views/accesos_VI.php";

          $accesos_VI = new accesos_VI();

          $accesos_VI -> iniciarSesion();
      }
?>