<?php
 
class accesos_MO{
    private $conexion;
    function __construct($conexion){

      $this->conexion=$conexion;
    }
    function iniciarSesion($usuario,$contrasena){

      $sql="select * from acceso where usuario='$usuario' and contrasena='$contrasena'";
     
      $this -> conexion -> consultar($sql);
    
      $arreglo = $this -> conexion -> extraerRegistro();

      return $arreglo; 
    }

   
}
?>