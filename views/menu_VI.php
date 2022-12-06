<?php
class menu_VI
{
    function __construct()
    {
    }
    function verMenu()
    {
        require_once "models/postulante_MO.php";
        require_once "models/vacante_MO.php";
        require_once "models/seleccionar_MO.php";
        
        $conexion = new conexion();
        $postulante_MO = new postulante_MO($conexion);
        $arreglo=$postulante_MO->seleccionar($_SESSION['documento']);

        $vacante_MO = new vacante_MO($conexion);
        $arreglo_vacante = $vacante_MO->seleccionar();
        
        $objeto_postulante=$arreglo[0];
        
        $nombre1= $objeto_postulante -> nombre1;
        $apellido1= $objeto_postulante -> apellido1;
        
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>HIREMENOW</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <link rel="stylesheet" href="vendors/toastr/toastr.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">

    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css"
        media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="index.php"><img src="assets/images/icon/logo.png" alt="logo"></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li class="active">
                                <a href="#" onclick="verModulo('postulacion_VI/postulacion');" aria-expanded="true"><i
                                        class="ti-pin2"></i><span>POSTULACIONES</span></a>

                            </li>
                        </ul>
                        <ul class="metismenu" id="menu">
                            <li class="active">
                                <a href="#" onclick="verModulo('actpostulante_VI/actualizarPostulante');"
                                    aria-expanded="true"><i class="ti-user"></i><span>DATOS PERSONALES</span></a>

                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="search-box pull-left">
                            <form action="#">
                                <input type="text" name="search" placeholder="Search..." required>
                                <i class="ti-search"></i>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php 
            if ($arreglo_vacante) {

                foreach ($arreglo_vacante as $objeto_vacante) {
                $nombre_vacante = $objeto_vacante->nombre;
                $detalle = $objeto_vacante -> detalles;
                $id_vacante = $objeto_vacante->id_vacante;
            }}
            ?>
            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Dashboard</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.php">Home</a></li>
                                <li><span>Vacantes</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class=" col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="assets/images/author/avatar.png" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown">
                                <?php echo $nombre1,' ', $apellido1 ?> <i class="fa fa-angle-down"></i>
                            </h4>
                            <div class="dropdown-menu">
                                <a class="dropdown-item"
                                    onclick="verModulo('actpostulante_VI/actualizarPostulante');">Visualizar/Editar
                                    Datos</a>
                                <a class="dropdown-item" href="#" onclick="salir()">CERRAR SESION</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" main-content-inner">
                <div class="card-area">
                    <div class="tile_count" id="contenido">
                        <div class="row" id="form_postular">
                            <?php   
                                    if ($arreglo_vacante) {

                                        foreach ($arreglo_vacante as $objeto_vacante) {
                                            $nombre_vacante = $objeto_vacante->nombre;
                                            $detalle = $objeto_vacante -> detalles;
                                            $id_vacante = $objeto_vacante->id_vacante;
                                            
                                    ?>
                            <div class="col-lg-4 col-md-6 mt-5">
                                <div class="card card-bordered">

                                    <img class="card-img-top img-fluid" src="assets/images/card/card-img1.jpg"
                                        alt="image">
                                    <div class="card-body">

                                        <h5 class="title"><?php echo $nombre_vacante; ?></h5>
                                        <p class="card-text"><?php echo $detalle; ?></p>
                                        <input type="hidden" name="fecha_ini" value="<?php echo $fecha_ini ?>">
                                        <input type="hidden" name="fecha_fin" value="<?php echo $fecha_fin ?>">
                                        <input type="hidden" name="documento" value="<?php echo $documento ?>">
                                        <input type="hidden" name="id_vacante" value="<?php echo $id_vacante ?>">
                                        <a href="#" onclick="postular();" class="btn btn-primary">postularme</a>
                                    </div>
                                </div>
                            </div>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page container area end -->
    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>
    <script src="vendors/toastr/toastr.min.js"></script>

    <script type="text/javascript" src="datatables/datatables/datatables.min.js"></script>
    <script type="text/javascript" src="datatables/main.js"></script>

    <script src="datatables/datatables/Buttons-1.5.6/js/dataTables.buttons.min.js"></script>
    <script src="datatables/datatables/JSZip-2.5.0/jszip.min.js"></script>
    <script src="datatables/datatables/pdfmake-0.1.36/pdfmake.min.js"></script>
    <script src="datatables/datatables/pdfmake-0.1.36/vfs_fonts.js"></script>
    <script src="datatables/datatables/Buttons-1.5.6/js/buttons.html5.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>

    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- start zingchart js -->
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script>
    zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>
    <!-- all line chart activation -->
    <script src="assets/js/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="assets/js/pie-chart.js"></script>
    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>

    <script>
    function salir() {
        $.post('accesos_CO/salir', function() {
            location.href = "index.php";
        });
    }

    function verModulo(ruta) {
        $.post(ruta, function(respuesta) {
            $('#contenido').html(respuesta);
        });
    }

    function postular() {
        var cadena = new FormData(document.querySelector('#form_posatular'));

        fetch("./controllers/seleccion_CO.php", {
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
                }

            });
    }
    </script>
    </sbody>

</html>




<?php
    }
}

?>