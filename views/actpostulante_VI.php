<?php

class actpostulante_VI{

    function __construct(){}

    function actualizarPostulante()
    {
        require_once "models/postulante_MO.php";
        require_once "models/departamento_MO.php"; 

        $conexion = new conexion();
        $postulante_MO = new postulante_MO($conexion);
        $arreglo=$postulante_MO->seleccionar($_SESSION['documento']);
        $arreglo1=$postulante_MO->seleccionar1($_SESSION['documento']);
        
        $objeto_postulante=$arreglo[0];
        $objeto_postulante1=$arreglo1[0];
        
        $documento = $objeto_postulante -> documento;
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
                    <label for="direccion">Direccion</label>
                    <input type="text" class="form-control" name="direccion" value="<?php echo $direccion ?>">
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