<?php
class ciudad_MO
{
  private $conexion;
  function __construct($conexion)
  {

    $this->conexion = $conexion;
  }
 

  function seleccionar($cod_ciudad= '')
  {

    if (empty($cod_ciudad)) {

      $sql = "select * from ciudad";
    } else {

      $sql = "select * from ciudad where cod_ciudad='$cod_ciudad'";
    }

    $this->conexion->consultar($sql);

    $arreglo = $this->conexion->extraerRegistro();

    return $arreglo;
  }
 
 
}