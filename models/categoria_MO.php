<?php
class categoria_MO
{
  private $conexion;
  function __construct($conexion)
  {

    $this->conexion = $conexion;
  }
 

  function seleccionar($id_categoria= '')
  {

    if (empty($id_categoria)) {

      $sql = "select * from categoria";
    } else {

      $sql = "select * from categoria where id_categoria='$id_categoria'";
    }

    $this->conexion->consultar($sql);

    $arreglo = $this->conexion->extraerRegistro();

    return $arreglo;
  }
  function showVacante($id_categoria)
    {

        $sql = "select * from ciudad where id_categoria='$id_categoria'";

        $this->conexion->consultar($sql);

        $arreglo = $this->conexion->extraerRegistro();
    
         return $arreglo;
    }
 
}