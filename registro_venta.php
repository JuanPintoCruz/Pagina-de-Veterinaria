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
        <!--Plugin numero + -->
        <link href="coderthemes.com/ubold/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
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
                                <h2 class="page-title"><i class="md md-attach-money"></i></i><span> Venta </span></h2>
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
                                <div class="card-box p-1">
                                    <h4 class="m-t-0 header-title"><i class=" ti-id-badge"></i><span> Nueva Venta </span></h4>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="p-2">
                                                <form class="form-horizontal" role="form">
                                                    <hr>
                                                    <div class="form-group row d-flex justify-content-between">
                                                        <div class="col-md-8">
                                                            <label>Cliente</label>
                                                            <div class="row">
                                                                <div class="col-xl-1 col-2 mr-xl-3">
                                                                <img src="static/img/avatar-3.jpg" alt="contact-img" title="contact-img" class="rounded-circle thumb-md mr-3 mb-4">
                                                                </div>
                                                                <div class="col-md-10 row">
                                                                        <form role="form">
                                                                            <div class="form-group contact-search m-b-30" style="margin-left: 25px;">
                                                                                <input type="text" class="form-control" placeholder="Buscar..." >

                                                                            </div>
                                                                            <button type="submit" class="btn btn-white mr-3 mb-5"><i class="fa fa-search"></i></button>
                                                                        </form>
                                                                </div>


                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <label>Comprobante</label>
                                                            <div class="form-group row">
                                                                <div class="custom-control custom-radio ml-4 mt-1" >
                                                                    <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                                                    <label class="custom-control-label" for="customRadio1">Recibo</label>
                                                                </div>
                                                                <div class="custom-control custom-radio ml-4 mt-1">
                                                                    <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                                    <label class="custom-control-label" for="customRadio2">Boleta</label>
                                                                </div>
                                                                <div class="custom-control custom-radio ml-4 mt-1">
                                                                    <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                                                                    <label class="custom-control-label" for="customRadio3">Factura</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>

                                                    <div class="form-group row">
                                                        <div class="col-12">
                                                            <h6><b>Agregar Producto/Servicio</b></h6>

                                                            <table class="table table-responsive-lg">
                                                                <thead class="thead-light">
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>Codigo</th>
                                                                    <th>Descripcion</th>
                                                                    <th>Tipo</th>
                                                                    <th>Stock</th>
                                                                    <th style="min-width: 150px;">Cantidad</th>
                                                                    <th>Precio</th>
                                                                    <th>Precio Total</th>
                                                                    <th>Acciones</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                    <th scope="row">#</th>
                                                                    <td><input type="text" id="search" class="form-control" placeholder="Buscar..."></td>
                                                                    <td>Vacuna para pulgas</td>
                                                                    <td>Producto</td>
                                                                    <td>15</td>
                                                                    <td>
                                                                        <div class="input-group bootstrap-touchspin">
                                                                            <span class="input-group-btn">
                                                                                <button class="btn btn-default bootstrap-touchspin-down" type="button">-</button>
                                                                            </span>
                                                                            <span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;">

                                                                            </span>
                                                                            <input id="demo0" type="text" value="5" name="demo0" data-bts-min="0" data-bts-max="50" data-bts-init-val="" data-bts-step="1" data-bts-decimal="0" data-bts-step-interval="100" data-bts-force-step-divisibility="round" data-bts-step-interval-delay="500" data-bts-prefix="" data-bts-postfix="" data-bts-prefix-extra-class="" data-bts-postfix-extra-class="" data-bts-booster="true" data-bts-boostat="10" data-bts-max-boosted-step="false" data-bts-mousewheel="true" data-bts-button-down-class="btn btn-default" data-bts-button-up-class="btn btn-default" class="form-control" style="display: block;width: 50px;">
                                                                            <span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;">

                                                                            </span>
                                                                            <span class="input-group-btn">
                                                                                <button class="btn btn-default bootstrap-touchspin-up" type="button">+</button>
                                                                            </span>
                                                                        </div>
                                                                    </td>
                                                                    <td>S/.150</td>
                                                                    <td>S/.550</td>
                                                                    <td><button type="button" class="btn btn-block btn-sm btn-inverse btn-custom waves-effect waves-light" id="primary-alert">Agregar</button></td>

                                                                </tr>

                                                                </tbody>
                                                            </table>
                                                        </div>

                                                        <div class="col-12 mt-5">
                                                                <table class="table table-bordered table table-responsive-md">
                                                                    <thead class="thead-light">
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>Codigo</th>
                                                                        <th>Producto/Servicio</th>
                                                                        <th>Precio</th>
                                                                        <th>Cantidad</th>
                                                                        <th>Total</th>
                                                                        <th>Accion</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <th scope="row">1</th>
                                                                        <td>CS-49621-1</td>
                                                                        <td>Consulta Basura</td>
                                                                        <td>S/.3000</td>
                                                                        <td>3</td>
                                                                        <td>S/.9000</td>
                                                                        <td class="text-center"><a href="#" class="table-action-btn text-danger"><i class="md md-close"></i></a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">2</th>
                                                                        <td>CS-49621-1</td>
                                                                        <td>Vacuna Pulga</td>
                                                                        <td>S/.500</td>
                                                                        <td>2</td>
                                                                        <td>S/.1000</td>
                                                                        <td class="text-center"><a href="#" class="table-action-btn text-danger"><i class="md md-close"></i></a></td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                        </div>

                                                    </div>


                                                    <div class="row justify-content-between mt-5">
                                                        <div class="col-3">
                                                            <label>Metodo de pago:</label>
                                                            <div class="form-group row">
                                                                <div class="custom-control custom-radio ml-4 mt-1" >
                                                                    <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
                                                                    <label class="custom-control-label" for="customRadio4">Efectivo</label>
                                                                </div>
                                                                <div class="custom-control custom-radio ml-4 mt-1">
                                                                    <input type="radio" id="customRadio5" name="customRadio" class="custom-control-input">
                                                                    <label class="custom-control-label" for="customRadio5">Debito</label>
                                                                </div>
                                                                <div class="custom-control custom-radio ml-4 mt-1">
                                                                    <input type="radio" id="customRadio6" name="customRadio" class="custom-control-input">
                                                                    <label class="custom-control-label" for="customRadio6">Credito</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <input type="text" class="form-control" placeholder="S/." style="width: 60px;">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <p class="text-right"><b>Sub-total:</b> 2930.00</p>
                                                            <p class="text-right">Discout: 12.9%</p>
                                                            <p class="text-right">IGV: 18.9%</p>
                                                            <hr>
                                                            <h3 class="text-right">S/. 2930.00</h3>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="d-print-none">
                                                        <div class="text-right">
                                                            <a href="javascript:window.print()" class="btn btn-inverse waves-effect waves-light"><i class="fa fa-print"></i></a>
                                                            <a href="#" class="btn btn-primary waves-effect waves-light">Realizar</a>
                                                        </div>
                                                    </div>
                                    </div>
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

        <script src="coderthemes.com/ubold/plugins/ladda-buttons/js/spin.min.js"></script>
        <script src="coderthemes.com/ubold/plugins/ladda-buttons/js/ladda.min.js"></script>
        <!-- Plugin numero +  -->
        <script src="coderthemes.com/ubold/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
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