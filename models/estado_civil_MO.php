<?php
class estado_civil_MO
{
  private $conexion;
  function __construct($conexion){

    $this->conexion = $conexion;
  }
 

  function seleccionar($id_estado_civil= ''){

    if (empty($id_estado_civil)) {

      $sql = "select * from estado_civil";
    } else {

      $sql = "select * from estado_civil where id_estado_civil='$id_estado_civil'";
    }

    $this->conexion->consultar($sql);

    $arreglo = $this->conexion->extraerRegistro();

    return $arreglo;
  }
  }