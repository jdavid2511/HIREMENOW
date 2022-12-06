<?php
class seleccionar_MO
{
  private $conexion;
  function __construct($conexion)
  {

    $this->conexion = $conexion;
  }
 

  function seleccionar($id_seleccionar= '')
  {

    if (empty($id_seleccionar)) {

      $sql = "select * from seleccionar";
    } else {

      $sql = "select * from seleccionar where id_seleccionar='$id_seleccionar'";
    }

    $this->conexion->consultar($sql);

    $arreglo = $this->conexion->extraerRegistro();

    return $arreglo;
  }

  function seleccion($id_seleccionar, $fecha_aplicacion,$documento,$id_vacante,$id_categoria,$id_estado){
    $sql = "insert into (id_seleccionar,fecha_aplicacion,documento,id_vacante,id_categoria,id_estado) values ('$id_seleccionar','$fecha_aplicacion','$documento','$id_vacante','$id_categoria','$id_estado')";
  
    $this->conexion->consultar($sql);
  }
  }