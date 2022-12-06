<?php
class postulante_MO{
  
  private $conexion;
  function __construct($conexion){

    $this->conexion = $conexion;
  }


  function seleccionar ($documento=''){

    if (empty($documento)) {

      $sql = "select * from postulante";

    }else{

      $sql = "SELECT * FROM postulante WHERE documento='$documento'";

    }

    $this->conexion->consultar($sql);

    $arreglo = $this->conexion->extraerRegistro();

    return $arreglo;
  }
  function seleccionar1 ($documento='' ){

    if (empty($documento)) {

      $sql = "select * from acceso";

    }else{

      $sql = "SELECT * FROM acceso WHERE documento='$documento'";

    }

    $this->conexion->consultar($sql);

    $arreglo = $this->conexion->extraerRegistro();

    return $arreglo;
  }
  function agregarpostulantes($documento,$nombre1, $nombre2,$apellido1,$apellido2,$telefono,$correo,$huella_digital,$hoja_vida,$fecha_nto,$direccion, $sexo,$id_estado_civil,$cod_ciudad,$cod_dpto){
    $sql = "insert into postulante(documento,nombre1,nombre2,apellido1,apellido2,telefono,correo,huella_digital,hoja_vida,fecha_nto,direccion,sexo,id_estado_civil,cod_ciudad,cod_dpto) values ('$documento','$nombre1','$nombre2','$apellido1','$apellido2','$telefono','$correo','$huella_digital','$hoja_vida','$fecha_nto','$direccion','$sexo','$id_estado_civil','$cod_ciudad','$cod_dpto')";
  
    $this->conexion->consultar($sql);
  }
  function agregaracceso($documento,$usuario,$contrasena){
    $sql = "insert into acceso(documento,usuario,contrasena) values ('$documento','$usuario','$contrasena')";
  
    $this->conexion->consultar($sql);
  }
  
  function actualizarpostulante($documento, $nombre1, $nombre2,$apellido1,$apellido2,$telefono,$correo,$huella_digital,$hoja_vida,$fecha_nto,$direccion,$id_estado_civil)
  {

    $sql = "update postulante set nombre1='$nombre1',nombre2='$nombre2', apellido1='$apellido1',apellido2='$apellido2',telefono='$telefono',huella_digital='$huella_digital',hoja_vida='$hoja_vida',fecha_nto='$fecha_nto',direccion='$direccion',id_estado_civil='$id_estado_civil',correo='$correo'  where documento='$documento'";

    $this->conexion->consultar($sql);
  }
  function actualizaracceso($documento,$usuario,$contrasena){
    $sql = "uptade acceso set usuario='$usuario',contrasena='$contrasena' where documento='$documento'";
  
    $this->conexion->consultar($sql);
  }
}