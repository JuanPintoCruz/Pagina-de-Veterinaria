<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="coderthemes.com/ubold/light/assets/images/favicon.ico">

        <title>Veterinaria GO</title>
        <link href="coderthemes.com/ubold/plugins/ladda-buttons/css/ladda-themeless.min.css" rel="stylesheet" type="text/css" />
        <!--Alerts -->
        <link href="coderthemes.com/ubold/plugins/bootstrap-sweetalert/sweet-alert.css" rel="stylesheet" type="text/css">
        
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
                                <h2 class="page-title"><i class="ion-ios7-paw-outline"></i><span> Registro de Mascota </span></h2>
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
                                        <div class="d-md-flex">
                                            
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Nombre</label>
                                                            <input type="text" class="form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Fecha de Nacimiento</label>
                                                            <input type="date" id="" name="" class="form-control" placeholder="00/00/0000">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <h6><b>Especie</b></h6>
                                                            <select class="form-control select2">
                                                                <option>Canino</option>
                                                                <option value="AK">Felino</option>
                                                                <option value="HI">Exotico</option>
                                                            </select>
                                                        </div>   
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <h6><b>Raza</b></h6>
                                                            <select class="form-control select2">
                                                                <option>Dalmata</option>
                                                                <option value="AK">Pastor Aleman</option>
                                                                <option value="HI">Pitbull</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Peso (kg)</label>
                                                            <input type="text" class="form-control" placeholder="">
                                                        </div>
                                                    </div>                                              
                                                    <div class="col-md-6">                                                       
                                                        <div class="form-group">
                                                            <label>Color</label>
                                                            <input type="Fecha" id="" name="" class="form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h6 ><span> Genero</span></h6>                          
                                                            <div class="form-group row mt-4">
                                                                <div class="custom-control custom-radio"style="left:40px" >
                                                                    <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                                                    <label class="custom-control-label" for="customRadio1">Hembra</label>
                                                                </div>
                                                                <div class="custom-control custom-radio" style="left:70px">
                                                                    <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                                    <label class="custom-control-label" for="customRadio2">Macho</label>
                                                                </div>
                                                            </div>                                                              
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <h6><b>Dueño</b></h6>
                                                            <div class="d-flex justify-content-center align-items-center">
                                                                <img src="static/img/avatar-3.jpg" alt="contact-img" title="contact-img" class="rounded-circle thumb-md mr-2">
                                                                
                                                                <form role="form">
                                                                    <div class="input-group contact-search">
                                                                        <input type="text" id="search" class="form-control" placeholder="Buscar...">
                                                                        <button type="submit" class="btn btn-default btn-md"><i class="fa fa-search"></i></button>
                                                                    </div>
                                                                </form>
                                                                    
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label>Informacion adicional</label>
                                                            <input type="text" class="form-control" placeholder="Informacion adicional">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h5 class="text-center text-uppercase"><b>Foto de Mascota</b></h5>
                                                        <div class="table-box mt-3">
                                                            <div class="table-detail">
                                                                <img src="static/img/mascota-1.jpg" class="thumb-lg ml-auto mr-auto d-block"  style="border: 5px solid" alt="img">
                                                            </div>
                                                        </div>
                                                        <div class="text-center mt-4">
                                                            <div class="fileupload btn btn-purple btn-md waves-effect waves-light">
                                                                <span><i class="ion-upload m-r-5"></i>Cargar foto</span>
                                                                <input type="file" class="upload">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                        
                                                </div>
                                    </div>
                                    <button type="button" class="btn btn-block btn-lg btn-inverse btn-custom waves-effect waves-light mt-5" id="primary-alert">Guardar</button>
                                </div><!-- end Card Box -->
                            </div>
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

        <script src="coderthemes.com/ubold/plugins/ladda-buttons/js/spin.min.js"></script>
        <script src="coderthemes.com/ubold/plugins/ladda-buttons/js/ladda.min.js"></script>

        <!-- Alerts  -->
        <script src="coderthemes.com/ubold/plugins/bootstrap-sweetalert/sweet-alert.min.js"></script>
        <script src="coderthemes.com/ubold/light/assets/pages/jquery.sweet-alert.init.js"></script>

        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });

                $(".knob").knob();

            });
        </script>
        <script>

                // Bind normal buttons
                Ladda.bind( '.ladda-button', { timeout: 1000 } );

                // Bind progress buttons and simulate loading progress
                Ladda.bind( '.progress-demo .ladda-button', {
                    callback: function( instance ) {
                        var progress = 0;
                        var interval = setInterval( function() {
                            progress = Math.min( progress + Math.random() * 0.1, 1 );
                            instance.setProgress( progress );

                            if( progress === 1 ) {
                                instance.stop();
                                clearInterval( interval );
                            }
                        }, 200 );
                    }
                } );

                // You can control loading explicitly using the JavaScript API
                // as outlined below:

                // var l = Ladda.create( document.querySelector( 'button' ) );
                // l.start();
                // l.stop();
                // l.toggle();
                // l.isLoading();
                // l.setProgress( 0-1 );

</script>


</body>
</html>