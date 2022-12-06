<?php
class departamento_MO
{
  private $conexion;
  function __construct($conexion)
  {

    $this->conexion = $conexion;
  }
 

  function seleccionar($cod_dpto= '')
  {

    if (empty($cod_dpto)) {

      $sql = "select * from departamento";
    } else {

      $sql = "select * from departamento where cod_dpto='$cod_dpto'";
    }

    $this->conexion->consultar($sql);

    $arreglo = $this->conexion->extraerRegistro();

    return $arreglo;
  }
  function showCiudad($cod_dpto)
    {

        $sql = "select * from ciudad where cod_dpto='$cod_dpto'";

        $this->conexion->consultar($sql);

        $arreglo = $this->conexion->extraerRegistro();
    
         return $arreglo;
    }
 
}