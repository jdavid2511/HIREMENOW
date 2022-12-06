<?php
class estado_MO
{
  private $conexion;
  function __construct($conexion)
  {

    $this->conexion = $conexion;
  }
 

  function seleccionar($id_estado= ''){

    if (empty($id_estado)) {

      $sql = "select * from estado";
    } else {

      $sql = "select * from estado where id_estado='$id_estado'";
    }

    $this->conexion->consultar($sql);

    $arreglo = $this->conexion->extraerRegistro();

    return $arreglo;
  }
}