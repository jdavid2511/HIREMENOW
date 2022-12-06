<?php
class menu_VI
{
    function __construct()
    {
    }
    function verMenu()
    {
        require_once "models/postulante_MO.php";
        $conexion = new conexion();
        $postulante_MO = new postulante_MO($conexion);
        $arreglo=$postulante_MO->seleccionar($_SESSION['documento']);
        
        $objeto_postulante=$arreglo[0];
    
        $documento= $objeto_postulante -> documento;
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
        $id_estado_civi = $objeto_postulante -> id_estado_civil;
        $cod_ciudad = $objeto_postulante ->cod_ciudad;
        $cod_dpto = $objeto_postulante -> cod_dpto;
        
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
                    <a href="index.html"><img src="assets/images/icon/logo.png" alt="logo"></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li class="active">
                                <a href="javascript:void(0)" aria-expanded="true"><i
                                        class="ti-dashboard"></i><span>dashboard</span></a>
                                <ul class="collapse">
                                    <li class="active"><a href="index.html">ICO dashboard</a></li>
                                    <li><a href="index2.html">Ecommerce dashboard</a></li>
                                    <li><a href="index3.html">SEO dashboard</a></li>
                                </ul>
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
            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Dashboard</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="#" onclick="verModulo('menu_VI/verMenu');">Home</a></li>
                                <li><span>Dashboard</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="assets/images/author/avatar.png" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown">
                                <?php echo $nombre1,' ', $apellido1 ?> <i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                <a class="dropdown-item"
                                    onclick="verModulo('actpostulante_VI/actualizarPostulante');">Visualizar/Editar
                                    Datos</a>
                                <a class="dropdown-item" href="#">CERRAR SESION</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-content-inner">
                <div class="card-area">
                    <div class="tile_count" id="contenido">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 mt-5">
                                <div class="card card-bordered">
                                    <img class="card-img-top img-fluid" src="assets/images/card/card-img1.jpg"
                                        alt="image">
                                    <div class="card-body">
                                        <h5 class="title">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Harum,
                                            dicta.</h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Mollitia adipisci quidem, quam nam reiciendis facere blanditiis atque neque
                                            architecto omnis magni totam, voluptate maiores, iusto molestias incidunt
                                            unde
                                            nesciunt cum.
                                        </p>
                                        <a href="#" class="btn btn-primary">Go More....</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mt-5">
                                <div class="card card-bordered">
                                    <img class="card-img-top img-fluid" src="assets/images/card/card-img2.jpg"
                                        alt="image">
                                    <div class="card-body">
                                        <h5 class="title">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Harum,
                                            dicta.</h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Mollitia adipisci quidem, quam nam reiciendis facere blanditiis atque neque
                                            architecto omnis magni totam, voluptate maiores, iusto molestias incidunt
                                            unde
                                            nesciunt cum.
                                        </p>
                                        <a href="#" class="btn btn-primary">Go More....</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mt-5">
                                <div class="card card-bordered">
                                    <img class="card-img-top img-fluid" src="assets/images/card/card-img3.jpg"
                                        alt="image">
                                    <div class="card-body">
                                        <h5 class="title">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Harum,
                                            dicta.</h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Mollitia adipisci quidem, quam nam reiciendis facere blanditiis atque neque
                                            architecto omnis magni totam, voluptate maiores, iusto molestias incidunt
                                            unde
                                            nesciunt cum.
                                        </p>
                                        <a href="#" class="btn btn-primary">Go More....</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mt-5">
                                <div class="card card-bordered">
                                    <img class="card-img-top img-fluid" src="assets/images/card/card-img4.jpg"
                                        alt="image">
                                    <div class="card-body">
                                        <h5 class="title">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Harum,
                                            dicta.</h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Mollitia adipisci quidem, quam nam reiciendis facere blanditiis atque neque
                                            architecto omnis magni totam, voluptate maiores, iusto molestias incidunt
                                            unde
                                            nesciunt cum.
                                        </p>
                                        <a href="#" class="btn btn-primary">Go More....</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mt-5">
                                <div class="card card-bordered">
                                    <img class="card-img-top img-fluid" src="assets/images/card/card-img5.jpg"
                                        alt="image">
                                    <div class="card-body">
                                        <h5 class="title">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Harum,
                                            dicta.</h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Mollitia adipisci quidem, quam nam reiciendis facere blanditiis atque neque
                                            architecto omnis magni totam, voluptate maiores, iusto molestias incidunt
                                            unde
                                            nesciunt cum.
                                        </p>
                                        <a href="#" class="btn btn-primary">Go More....</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mt-5">
                                <div class="card card-bordered">
                                    <img class="card-img-top img-fluid" src="assets/images/card/card-img6.jpg"
                                        alt="image">
                                    <div class="card-body">
                                        <h5 class="title">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Harum,
                                            dicta.</h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Mollitia adipisci quidem, quam nam reiciendis facere blanditiis atque neque
                                            architecto omnis magni totam, voluptate maiores, iusto molestias incidunt
                                            unde
                                            nesciunt cum.
                                        </p>
                                        <a href="#" class="btn btn-primary">Go More....</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mt-5">
                                <div class="card card-bordered">
                                    <img class="card-img-top img-fluid" src="assets/images/card/card-img7.jpg"
                                        alt="image">
                                    <div class="card-body">
                                        <h5 class="title">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Harum,
                                            dicta.</h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Mollitia adipisci quidem, quam nam reiciendis facere blanditiis atque neque
                                            architecto omnis magni totam, voluptate maiores, iusto molestias incidunt
                                            unde
                                            nesciunt cum.
                                        </p>
                                        <a href="#" class="btn btn-primary">Go More....</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mt-5">
                                <div class="card card-bordered">
                                    <img class="card-img-top img-fluid" src="assets/images/card/card-img8.jpg"
                                        alt="image">
                                    <div class="card-body">
                                        <h5 class="title">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Harum,
                                            dicta.</h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Mollitia adipisci quidem, quam nam reiciendis facere blanditiis atque neque
                                            architecto omnis magni totam, voluptate maiores, iusto molestias incidunt
                                            unde
                                            nesciunt cum.
                                        </p>
                                        <a href="#" class="btn btn-primary">Go More....</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mt-5">
                                <div class="card card-bordered">
                                    <img class="card-img-top img-fluid" src="assets/images/card/card-img9.jpg"
                                        alt="image">
                                    <div class="card-body">
                                        <h5 class="title">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Harum,
                                            dicta.</h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Mollitia adipisci quidem, quam nam reiciendis facere blanditiis atque neque
                                            architecto omnis magni totam, voluptate maiores, iusto molestias incidunt
                                            unde
                                            nesciunt cum.
                                        </p>
                                        <a href="#" class="btn btn-primary">Go More....</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page container area end -->
    <!-- offset area start -->
    <div class="offset-area">
        <div class="offset-close"><i class="ti-close"></i></div>
        <ul class="nav offset-menu-tab">
            <li><a class="active" data-toggle="tab" href="#activity">Activity</a></li>
            <li><a data-toggle="tab" href="#settings">Settings</a></li>
        </ul>
        <div class="offset-content tab-content">
            <div id="activity" class="tab-pane fade in show active">
                <div class="recent-activity">
                    <div class="timeline-task">
                        <div class="icon bg1">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg2">
                            <i class="fa fa-check"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Added</h4>
                            <span class="time"><i class="ti-time"></i>7 Minutes Ago</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg2">
                            <i class="fa fa-exclamation-triangle"></i>
                        </div>
                        <div class="tm-title">
                            <h4>You missed you Password!</h4>
                            <span class="time"><i class="ti-time"></i>09:20 Am</span>
                        </div>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg3">
                            <i class="fa fa-bomb"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Member waiting for you Attention</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg3">
                            <i class="ti-signal"></i>
                        </div>
                        <div class="tm-title">
                            <h4>You Added Kaji Patha few minutes ago</h4>
                            <span class="time"><i class="ti-time"></i>01 minutes ago</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg1">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Ratul Hamba sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Hello sir , where are you, i am egerly waiting for you.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg2">
                            <i class="fa fa-exclamation-triangle"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg2">
                            <i class="fa fa-exclamation-triangle"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg3">
                            <i class="fa fa-bomb"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg3">
                            <i class="ti-signal"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                </div>
            </div>
            <div id="settings" class="tab-pane fade">
                <div class="offset-settings">
                    <h4>General Settings</h4>
                    <div class="settings-list">
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Notifications</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch1" />
                                    <label for="switch1">Toggle</label>
                                </div>
                            </div>
                            <p>Keep it 'On' When you want to get all the notification.</p>
                        </div>
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Show recent activity</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch2" />
                                    <label for="switch2">Toggle</label>
                                </div>
                            </div>
                            <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                        </div>
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Show your emails</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch3" />
                                    <label for="switch3">Toggle</label>
                                </div>
                            </div>
                            <p>Show email so that easily find you.</p>
                        </div>
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Show Task statistics</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch4" />
                                    <label for="switch4">Toggle</label>
                                </div>
                            </div>
                            <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                        </div>
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Notifications</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch5" />
                                    <label for="switch5">Toggle</label>
                                </div>
                            </div>
                            <p>Use checkboxes when looking for yes or no answers.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- offset area end -->
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
    function verModulo(ruta) {

        $.post(ruta, function(respuesta) {
            $('#contenido').html(respuesta);
        });
    }
    </script>
    </sbody>

</html>




<?php
    }
}

?>