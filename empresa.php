v<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="coderthemes.com/ubold/light/assets/images/favicon.ico">

        <title>Veterinaria GO</title>
        <!-- Plugins css Botton-->
        <link href="coderthemes.com/ubold/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css" rel="stylesheet" />
        <link href="coderthemes.com/ubold/plugins/switchery/css/switchery.min.css" rel="stylesheet" />
        <link href="coderthemes.com/ubold/plugins/multiselect/css/multi-select.css"  rel="stylesheet" type="text/css" />
        <link href="coderthemes.com/ubold/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="coderthemes.com/ubold/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" />
        <link href="coderthemes.com/ubold/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
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
                                <h2 class="page-title"><i class=" ti-bag"></i><span> Empresa </span></h2>
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
                                    <h4 class="m-t-0 header-title"><i class=" ti-id-badge"></i><span> Infomacion de Empresa </span></h4>    
                                    <div class="p-20"> 
                                            <form role="form">
                                                <div class="d-md-flex">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" value="" placeholder="RUC">
                                                            </div>                               
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="text" id="example-email" name="Nombre" class="form-control" value="" placeholder="Nombre">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" value="" placeholder="Correo">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" value="" placeholder="Direccion">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <div class="form-group">
                                                                <h4 class="m-t-0 header-title"><i class=""></i><span>Estado</span></h4>                                                               
                                                                <div class="form-group row mt-4 d-flex justify-content-center">
                                                                    <div class="custom-control custom-radio">
                                                                    <span class="mr-3">Demo</span>
                                                                        <input type="checkbox" data-plugin="switchery" data-color="#81c868" data-secondary-color="#5d9cec" />
                                                                    <span class="ml-3">Produccion</span>
                                                                    </div>                                                                                                       
                                                                </div>
                                                            </div>
                                                        </div>
                                                            
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <h5 class="text-center text-uppercase"><b>Logo de Empresa</b></h5>

                                                            <div>
                                                                <div class="d-flex justify-content-center align-items-center">
                                                                    <img src="static/img/logo_vet.jpg" class="thumb-lg rounded-circle"  style="border: 5px solid" alt="img">
                                                                </div>
                                                            </div>

                                                            <div class="text-center mt-4">
                                                                <div class="fileupload btn btn-primary btn-md w-md waves-effect waves-light">
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
                                    <!-- end P-20 -->

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

        <!-- Advance Form  -->
        <script src="coderthemes.com/ubold/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
        <script src="coderthemes.com/ubold/plugins/switchery/js/switchery.min.js"></script>
        <script type="text/javascript" src="coderthemes.com/ubold/plugins/multiselect/js/jquery.multi-select.js"></script>
        <script type="text/javascript" src="coderthemes.com/ubold/plugins/jquery-quicksearch/jquery.quicksearch.js"></script>
        <script src="coderthemes.com/ubold/plugins/select2/js/select2.min.js" type="text/javascript"></script>
        <script src="coderthemes.com/ubold/plugins/bootstrap-select/js/bootstrap-select.min.js" type="text/javascript"></script>
        <script src="coderthemes.com/ubold/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>
        <script src="coderthemes.com/ubold/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
        <script src="coderthemes.com/ubold/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>

        <script type="text/javascript" src="coderthemes.com/ubold/light/assets/pages/jquery.form-advanced.init.js"></script>
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