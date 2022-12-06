<?php

class accesos_VI
{
    function __construct(){}
   
    function iniciarSesion()
    {
      require_once "./lib/front_controller.php";
      require_once "./models/departamento_MO.php"; 
      require_once "./models/estado_civil_MO.php";

      $conexion = new conexion();

        $departamento_MO = new departamento_MO($conexion);
        $arreglo_departamento= $departamento_MO->seleccionar();
        
        $estado_civil_MO = new estado_civil_MO($conexion);
        $arreglo_estado_civil= $estado_civil_MO->seleccionar();
      
        ?>

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="" />
    <title>HIREMENOW-LOGIN </title>

    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <link href="vendors/animate.css/animate.min.css" rel="stylesheet">
    <link href="build/css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css"
        media="all" />
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->


</head>

<body class="login">
    <div class="login">
        <a class="hiddenanchor" id="signup"></a>
        <a class="hiddenanchor" id="signin"></a>


        <div class="login_wrapper ">
            <div class="animate form login_form">
                <div class="login_area login-s2">
                    <div class="container">
                        <div class="login-box ptb--100">
                            <form action="index.php" id="login" method="post">
                                <div class="login-form-head">
                                    <h4>INICIA SESION</h4>
                                </div>
                                <div class="login-form-body">
                                    <div class="form-gp">
                                        <label for="exampleInputEmail1">Usuario</label>
                                        <input type="text" name="usuario">
                                        <i class="ti-user"></i>
                                        <div class="text-danger"></div>
                                    </div>
                                    <div class="form-gp">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" name="contrasena" id="exampleInputPassword1">
                                        <i class="ti-lock"></i>
                                        <div class="text-danger"></div>
                                    </div>
                                    <div class="row mb-4 rmber-area">
                                        <div class="col-6">
                                            <div class="custom-control custom-checkbox mr-sm-2">
                                                <input type="checkbox" class="custom-control-input"
                                                    id="customControlAutosizing">
                                                <label class="custom-control-label" for="">Remember Me</label>
                                            </div>
                                        </div>
                                        <div class="col-6 text-right">
                                            <a href="#">Forgot Password?</a>
                                        </div>
                                    </div>
                                    <div class="submit-btn-area">
                                        <button type="button" onclick="iniciarSesion();">Iniciar Sesi&oacute;n
                                            <i class=" ti-arrow-right"></i></button>
                                    </div>
                                    <div class="form-footer text-center mt-5">
                                        <p class="change_link">Aun no tienes cuenta? <a href="#signup"
                                                class="to_register">Resgistrate</a></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <div id=" register" class="animate registration_form">
                <div class="login-area login-s2">
                    <div class="container">
                        <div class="login-box ptb--100">
                            <section class="login_content">
                                <form method="post" id="formulario_registrarse">
                                    <div class="login-form-head">
                                        <h4>REGISTRO</h4>
                                    </div>
                                    <div class="login-form-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-gp">
                                                    <label for="nombre1">Primer Nombre</label>
                                                    <input type="text" name="nombre1">
                                                    <div class="text-danger"></div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-gp">
                                                    <label for="nombre2">Segundo Nombre</label>
                                                    <input type="text" name="nombre2">
                                                    <div class="text-danger"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-gp">
                                                    <label for="apellido1">Primer Apellido</label>
                                                    <input type="text" name="apellido1">

                                                    <div class="text-danger"></div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-gp">
                                                    <label for="apellido2">Segundo Apellido</label>
                                                    <input type="text" name="apellido2">

                                                    <div class="text-danger"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-gp">
                                                    <label for="usuario">Usuario</label>
                                                    <input type="text" name="usuario">

                                                    <div class="text-danger"></div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-gp">
                                                    <label for="correo">Correo</label>
                                                    <input type="email" name="correo">

                                                    <div class="text-danger"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-gp">
                                                    <label for="documento">Documento</label>
                                                    <input type="number" name="documento">
                                                    <div class="text-danger"></div>
                                                </div>
                                            </div>
                                            <div class="form-gp">
                                                <label for="telefono">Telefono</label>
                                                <input type="number" name="telefono">
                                                <div class="text-danger"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-gp">
                                                <label for="huella_digital">huella digital</label>
                                                <input type="text" name="huella_digital">

                                                <div class="text-danger"></div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-gp">
                                                <label for="hoja_vida">hoja de vida</label>
                                                <input type="text" name="hoja_vida">

                                                <div class="text-danger"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-gp">
                                                <label for="fecha_nto">Fecha de Nacimiento</label>
                                                <input type="date" name="fecha_nto">
                                                <div class="text-danger"></div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-gp">
                                                <select class="form-control" id="sexo" name="sexo">
                                                    <option value="">Seleccione Sexo</option>
                                                    <option value="M">M</option>
                                                    <option value="F">F</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-gp">
                                                <label for="exampleInputName4">direccion</label>
                                                <input type="text" name="direccion">
                                                <div class="text-danger"></div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-gp">
                                                <label for="constrasena">Contraseña</label>
                                                <input type="password" name="contrasena">
                                                <div class="text-danger"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-gp">
                                        <label for="estado_civil"></label>
                                        <select class="form-control" name="id_estado_civil" id="">
                                            <option value="">Seleccione Estado Civil</option>
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
                                    <div class="form-gp">
                                        <label for="departamento"></label>
                                        <select onchange="departamento1()" class="form-control" name="cod_dpto"
                                            id="departamento">
                                            <option value="">Seleccione Departamento</option>
                                            <?php
                                                    if ($arreglo_departamento) {

                                                        foreach ($arreglo_departamento as $objeto_departamento) {
                                                            $nombre = $objeto_departamento->nombre;
                                                            $cod_dpto = $objeto_departamento->cod_dpto;

                                                    ?>

                                            <option value="<?php echo $cod_dpto; ?>"><?php echo  $nombre; ?> </option>
                                            <?php
                                                        }
                                                    }
                                                    ?>
                                        </select>
                                    </div>

                                    <div class="form-gp">
                                        <label for="ciudad"></label>
                                        <select class="form-control" name="cod_ciudad" id="ciudad">


                                        </select>
                                    </div>
                                    <div class="submit-btn-area">
                                        <button type="button" onclick="registrar()">Registrar <i
                                                class="ti-arrow-right"></i></button>
                                    </div>
                                    <div class="form-footer text-center mt-5">
                                        <p class="change_link">Ya tienes cuenta? <a href="#signin"
                                                class="to_register">Inicia Sesion</a></p>
                                    </div>
                        </div>
                        </form>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

</body>

</html>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/metisMenu.min.js"></script>
<script src="assets/js/jquery.slimscroll.min.js"></script>
<script src="assets/js/jquery.slicknav.min.js"></script>

<script src="assets/js/plugins.js"></script>
<script src="assets/js/scripts.js"></script>


<script>
function departamento1() {
    var cod_depto = document.getElementById('departamento').value;
    console.log(cod_depto);
    let ciudad = document.querySelector('#ciudad');
    var object = new FormData();
    object.append("departamento", cod_depto);
    fetch("./controllers/departamento_CO.php", {
            method: "POST",
            body: object,
        })
        .then((respuesta) => respuesta.text())
        .then(function(response) {

            const ciudades = JSON.parse(response);
            let template = '<option class="FORM-CONTROL" selected disable value="">Seleccione Ciudad</option>'
            ciudades.forEach(ciuda => {
                template += "<option value=" + ciuda.cod_ciudad + ">" + ciuda.nombre + "</option>"
            });
            ciudad.innerHTML = template
        })
        .catch(function(error) {
            console.log(error);
        });

}

function registrar() {
    var cadena = new FormData(document.querySelector('#formulario_registrarse'));

    fetch("./controllers/postulantes_CO.php", {
            method: 'POST',
            body: cadena
        })
        .then(respuesta => respuesta.json())
        .then(respuesta => {

            if (respuesta.estado == 'EXITO') {
                document.querySelector('#formulario_registrarse').reset();
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    text: respuesta.mensaje,
                    showConfirmButton: false,
                    timer: 1500
                });

            } else if (respuesta.estado = 'ERROR') {
                Swal.fire({
                    position: 'top-end',
                    icon: 'error',
                    text: respuesta.mensaje,
                    showConfirmButton: false,
                    timer: 1500
                });
            } else if (respuesta.estado = 'ADVERTENCIA') {
                Swal.fire({
                    position: 'top-end',
                    icon: 'warning',
                    text: respuesta.mensaje,
                    showConfirmButton: false,
                    timer: 1500
                });
                toastr.error(respuesta.mensaje);

            } else {

                toastr.error('No se devolvio un estado');
            }
        });
}

function iniciarSesion() {

    var cadena = new FormData(document.querySelector('#login'));

    fetch('./controllers/accesos1_CO.php', {
            method: 'POST',
            body: cadena
        })
        .then(respuesta => respuesta.json())
        .then(respuesta => {

            if (respuesta.estado == 'EXITO') {
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    text: respuesta.mensaje,
                    showConfirmButton: false,
                    timer: 1500
                });
                setTimeout(function() {
                    location.href = "index.php";
                }, 1500);

            } else if (respuesta.estado = 'ERROR') {
                Swal.fire({
                    position: 'top-end',
                    icon: 'error',
                    text: respuesta.mensaje,
                    showConfirmButton: false,
                    timer: 1500
                });
            } else if (respuesta.estado = 'ADVERTENCIA') {
                Swal.fire({
                    position: 'top-end',
                    icon: 'warning',
                    text: respuesta.mensaje,
                    showConfirmButton: false,
                    timer: 1500
                });
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