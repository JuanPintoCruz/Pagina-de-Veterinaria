<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="coderthemes.com/ubold/light/assets/images/favicon.ico">

        <title>Veterinaria GO</title>

        <!--Morris Chart CSS -->
		<link rel="stylesheet" href="coderthemes.com/ubold/plugins/morris/morris.css">

        <link href="coderthemes.com/ubold/light/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="coderthemes.com/ubold/light/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="coderthemes.com/ubold/light/assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="coderthemes.com/ubold/light/assets/js/modernizr.min.js"></script>
</head>

 <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <?php 
            include "principal.php";
            ?>


            <!--formulario-->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h2 class="page-title"><i class=" ti-user"></i><span> Editar Usuario </span></h2>
                                <br>
                                <!--<ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Ubold</a></li>
                                    <li class="breadcrumb-item"><a href="#">Forms</a></li>
                                    <li class="breadcrumb-item active">Form elements</li>
                                </ol>-->

                            </div>
                        </div>


                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title"><i class=" ti-id-badge"></i><span> Infomacion General </span></h4> 
                                        <div class="p-20"> 
                                            <form role="form">
                                                <div class="d-md-flex">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" value="75036732" placeholder="DNI/PASAPORTE">
                                                            </div>                               
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="text" id="example-email" name="Nombre" class="form-control" value="Gonzalo Mochco Crisostomo Miguel" placeholder="Nombres y Apellidos">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" value="987654321" placeholder="Telefono">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" value="Mz A3 Lt 10 Virgen del Morro" placeholder="Domilicio">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <h4 class="m-t-0 header-title"><i class=""></i><span> Genero</span></h4>                                                               
                                                                <div class="form-group row">
                                                                    <div class="custom-control custom-radio" style="left:30px">
                                                                        <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                                                        <label class="custom-control-label" for="customRadio1">Femenino</label>
                                                                    </div>
                                                                    <div class="custom-control custom-radio" style="left:70px">
                                                                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                                        <label class="custom-control-label" for="customRadio2">Masculino</label>
                                                                    </div>                                                               
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" value="gonzalo@gmail.com" placeholder="Correo">
                                                            </div>
                                                        </div>    
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <h5 class="text-center text-uppercase"><b>Foto de Perfil</b></h5>

                                                            <div class="table-box">
                                                                <div class="table-detail d-flex justify-content-center align-items-center">
                                                                    <img src="static/img/calvo_2.webp" class="thumb-lg rounded-circle"  style="border: 5px solid" alt="img">
                                                                </div>
                                                            </div>

                                                            <div class="text-center mt-4">
                                                                <div class="fileupload btn btn-purple btn-md w-md waves-effect waves-light">
                                                                    <span><i class="ion-upload m-r-5"></i>Cargar foto</span>
                                                                    <input type="file" class="upload">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="button" class="btn btn-block btn-inverse btn-custom waves-effect waves-light mt-5" style="margin-left: 50%;transform: translateX(-50%);" onclick="location.href='lista_mascota.php'">Guardar</button>
                                            </form>
                                        </div>
                                    </div> <!-- end card-box -->
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->


                                    </div>

                                </div> <!-- end card-box -->
                            </div> <!-- end col -->
                        </div>

 <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="coderthemes.com/ubold/light/assets/js/jquery.min.js"></script>
        <script src="coderthemes.com/ubold/light/assets/js/popper.min.js"></script><!-- Popper for Bootstrap -->
        <script src="coderthemes.com/ubold/light/assets/js/bootstrap.min.js"></script>
        <script src="coderthemes.com/ubold/light/assets/js/detect.js"></script>
        <script src="coderthemes.com/ubold/light/assets/js/fastclick.js"></script>
        <script src="coderthemes.com/ubold/light/assets/js/jquery.slimscroll.js"></script>
        <script src="coderthemes.com/ubold/light/assets/js/jquery.blockUI.js"></script>
        <script src="coderthemes.com/ubold/light/assets/js/waves.js"></script>
        <script src="coderthemes.com/ubold/light/assets/js/wow.min.js"></script>
        <script src="coderthemes.com/ubold/light/assets/js/jquery.nicescroll.js"></script>
        <script src="coderthemes.com/ubold/light/assets/js/jquery.scrollTo.min.js"></script>

        <script src="coderthemes.com/ubold/plugins/peity/jquery.peity.min.js"></script>

        <!-- jQuery  -->
        <script src="coderthemes.com/ubold/plugins/waypoints/lib/jquery.waypoints.min.js"></script>
        <script src="coderthemes.com/ubold/plugins/counterup/jquery.counterup.min.js"></script>

        <script src="coderthemes.com/ubold/plugins/morris/morris.min.js"></script>
        <script src="coderthemes.com/ubold/plugins/raphael/raphael-min.js"></script>

        <script src="coderthemes.com/ubold/plugins/jquery-knob/jquery.knob.js"></script>

        <script src="coderthemes.com/ubold/light/assets/pages/jquery.dashboard.js"></script>

        <script src="coderthemes.com/ubold/light/assets/js/jquery.core.js"></script>
        <script src="coderthemes.com/ubold/light/assets/js/jquery.app.js"></script>

        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });

                $(".knob").knob();

            });
        </script>


</body>
</html>