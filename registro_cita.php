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
                                <h2 class="page-title"><i class="ion-ios7-paw-outline"></i><span> Cita </span></h2>
                                <br>
                                <!--<ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Ubold</a></li>
                                    <li class="breadcrumb-item"><a href="#">Forms</a></li>
                                    <li class="breadcrumb-item active">Form elements</li>
                                </ol>-->

                            </div>
                        </div>


                        <div class="row">
                            <div class="col-10">
                                <div class="card-box p-1">
                                    <h4 class="m-t-0 header-title"><i class=" ti-id-badge"></i><span> Agendar Cita </span></h4>    
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="p-20">
                                                <form role="form">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            
                                                            <h6><b>Cliente</b></h6>
                                                            <div class="d-flex align-items-center">
                                                                    <img src="static/img/avatar-3.jpg" alt="contact-img" title="contact-img" class="rounded-circle thumb-md mr-2 mb-4">
                                                                    
                                                                            <form role="form">
                                                                                <div class="input-group contact-search m-b-30">
                                                                                    <input type="text" id="search" class="form-control ml-3" placeholder="Buscar...">
                                                                                    <button type="submit" class="btn btn-dark"><i class="fa fa-search"></i></button>
                                                                                </div>
                                                                            </form>
                                                                    
                                                            
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            
                                                            <h6><b>Paciente</b></h6>
                                                            <div class="d-flex align-items-center">
                                                                    <img src="static/img/avatar-3.jpg" alt="contact-img" title="contact-img" class="rounded-circle thumb-md mr-2 mb-4">
                                                                    
                                                                            <form role="form">
                                                                                <div class="input-group contact-search m-b-30">
                                                                                    <input type="text" id="search" class="form-control ml-3" placeholder="Buscar..." >
                                                                                    <button type="submit" class="btn btn-dark"><i class="fa fa-search"></i></button>
                                                                                </div>
                                                                            </form>
                                                                            
                                                                    
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <div class="col-md-6">
                                                            <label>Fecha</label>
                                                            <input type="date" class="form-control" placeholder="">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label>Hora</label>
                                                            <input type="time" class="form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-12">
                                                            <label>Motivo de Consulta</label>
                                                            <input type="text" class="form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                    <button type="button" class="btn btn-block btn-lg btn-inverse btn-custom waves-effect waves-light mt-4" id="primary-alert">Guardar</button>

                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- end row -->

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