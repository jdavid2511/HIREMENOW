<?php

class actpostulante_VI{

    function __construct(){}

    function actualizarPostulante()
    {
        require_once "models/postulante_MO.php";
        require_once "models/departamento_MO.php"; 
        require_once "models/estado_civil_MO.php";

        $conexion = new conexion();
        $postulante_MO = new postulante_MO($conexion);
        $arreglo=$postulante_MO->seleccionar($_SESSION['documento']);
        $arreglo1=$postulante_MO->seleccionar1($_SESSION['documento']);
        
        $departamento_MO = new departamento_MO($conexion);
        $arreglo_departamento= $departamento_MO->seleccionar();
        
        $estado_civil_MO = new estado_civil_MO($conexion);
        $arreglo_estado_civil= $estado_civil_MO->seleccionar();

        $objeto_postulante=$arreglo[0];
        $objeto_postulante1=$arreglo1[0];
        $objeto_estado_civil=$arreglo_estado_civil[0]; 
        $objeto_departamento=$arreglo_departamento[0];
      
        $nombre_estadocivil = $objeto_estado_civil -> nombre_estado_civil;
        $nombre_departamento = $objeto_departamento -> nombre;
        $nombre1= $objeto_postulante -> nombre1;
        $nombre2= $objeto_postulante -> nombre2;
        $apellido1= $objeto_postulante -> apellido1;
        $apellido2= $objeto_postulante -> apellido2;
        $telefono= $objeto_postulante -> telefono;
        $correo= $objeto_postulante -> correo;
        $huella_digital = $objeto_postulante -> huella_digital;
        $hoja_vida = $objeto_postulante -> hoja_vida;
        $fecha_nto = $objeto_postulante -> fecha_nto;
        $direccion = $objeto_postulante -> direccion;
        $sexo = $objeto_postulante -> sexo;
        $id_estado_civi = $objeto_postulante -> id_estado_civil;
        $cod_ciudad = $objeto_postulante ->cod_ciudad;
        $cod_dpto = $objeto_postulante -> cod_dpto;
        $contrasena = $objeto_postulante1 -> contrasena;
        $usuario = $objeto_postulante1 -> usuario;

?>
<div class="main-content-inner">
    <div class="card-area">
        <div class="card-header">
            Actualizar Datos de la postulante
        </div>
        <div class="card-body">
            <form id="formulario_actualizar_postulante">

                <div class="form-group">
                    <label for="nombre1">Primer nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre1" value="<?php echo $nombre1 ?>">
                </div>
                <div class="form-group">
                    <label for="apellidos">Segundo nombre</label>
                    <input type="text" class="form-control" id="tipo" name="nombre2" value="<?php echo $nombre2 ?>">
                </div>
                <div class="form-group">
                    <label for="nombre1">Primer Apellido</label>
                    <input type="text" class="form-control" id="apellido" name="apellido1"
                        value="<?php echo $apellido1 ?>">
                </div>
                <div class="form-group">
                    <label for="apellidos">Segundo Apellido</label>
                    <input type="text" class="form-control" id="apellido2" name="apellido2"
                        value="<?php echo $apellido2 ?>">
                </div>
                <div class="form-group">
                    <label for="telefono">Telefono</label>
                    <input type="number" class="form-control" id="telefono" name="telefono"
                        value="<?php echo $telefono ?>">
                </div>
                <div class="form-group">
                    <label for="correo">Correo</label>
                    <input type="email" class="form-control" id="correo" name="correo" value="<?php echo $correo ?>">
                </div>
                <div class="form-group">
                    <label for="usuario">Usuario</label>
                    <input type="text" class="form-control" id="usuario" name="usuario" value="<?php echo $usuario ?>">
                </div>
                <div class="form-group">
                    <label for="contrasena">Contraseña</label>
                    <input type="password" class="form-control" id="contrasena" name="contrasena"
                        value="<?php echo $contrasena ?>">
                </div>
                <div class="form-group">
                    <label for="huella_digital">Sexo</label>
                    <select class="form-control" id="sexo" name="sexo">
                        <option value="<?php echo $sexo ?>"><?php echo $sexo ?></option>
                        <option value="M">M (masculino)</option>
                        <option value="F">F (femenino)</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="direccion">Direccion</label>
                    <input type="text" class="form-control" name="direccion" value="<?php echo $direccion ?>">
                </div>
                <div class="form-group">
                    <label for="estado_civil">Estado Civil</label>
                    <select class="form-control" name="id_estado_civil">
                        <option value=""><?php echo $nombre_estadocivil; ?></option>
                        <?php
                            if ($arreglo_estado_civil) {

                                foreach ($arreglo_estado_civil as $objeto_estado_civil) {
                                    $nombre = $objeto_estado_civil->nombre_estado_civil;
                                    $id_estado_civil = $objeto_estado_civil->id_estado_civil;

                            ?>

                        <option value="<?php echo $id_estado_civil; ?>">
                            <?php echo  $nombre; ?> </option>
                        <?php
                                                        }
                                                    }
                                                    ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="hoja_vida">hoja de vida</label>
                    <input type="text" class="form-control" name="hoja_vida" value="<?php echo $hoja_vida ?>">
                </div>
                <div class="form-group">
                    <label for="huella_digital">Huella digital</label>
                    <input type="text" class="form-control" name="huella_digital" value="<?php echo $huella_digital ?>">
                </div>
                <div class="form-group">
                    <label for="fecha_nto">fecha De Nacimiento</label>
                    <input type="date" class="form-control" name="fecha_nto" value="<?php echo $fecha_nto ?>">
                </div>



                <input type="hidden" id="documento" name="documento" value="<?php echo $documento ?>">
                <button type="button" onclick="actualizarpostulante();"
                    class="btn btn-success float-right">Actualizar</button>
                <br>

            </form>
        </div>
    </div>
</div>
<script>
function actualizarpostulante() {

    var cadena = new FormData(document.querySelector('#formulario_actualizar_postulante'));

    fetch('postulante_CO/actualizarPostulante', {
            method: 'POST',
            body: cadena
        })
        .then(respuesta => respuesta.json())
        .then(respuesta => {

            if (respuesta.estado == 'EXITO') {

                toastr.success(respuesta.mensaje);

            } else if (respuesta.estado = 'ERROR') {

                toastr.error(respuesta.mensaje);

            } else if (respuesta.estado = 'ADVERTENCIA') {

                toastr.error(respuesta.mensaje);

            } else {

                toastr.error('No se devolvio un estado');
            }
        });

}
</script>
<?php
    }
}
?>