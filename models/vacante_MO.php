<?php
class vacante_MO
{
  private $conexion;
  function __construct($conexion)
  {

    $this->conexion = $conexion;
  }
 

  function seleccionar($id_vacante= '')
  {

    if (empty($id_vacante)) {

      $sql = "select * from vacante";
    } else {

      $sql = "select * from vacante where id_vacante='$id_vacante'";
    }

    $this->conexion->consultar($sql);

    $arreglo = $this->conexion->extraerRegistro();

    return $arreglo;
  }
}