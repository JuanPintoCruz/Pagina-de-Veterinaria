<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="coderthemes.com/ubold/light/assets/images/favicon.ico">

        <title>Veterinaria GO</title>
        <!--PICKER -->
        <link href="coderthemes.com/ubold/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
        <link href="coderthemes.com/ubold/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
        <link href="coderthemes.com/ubold/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
        <link href="coderthemes.com/ubold/plugins/clockpicker/css/bootstrap-clockpicker.min.css" rel="stylesheet">
        <link href="coderthemes.com/ubold/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
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


                <!-- Modal ListaVenta-->
                <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="modal_detalle_venta" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myLargeModalLabel">Detalle Factura</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                <table class="table">
                                        <thead class="thead-light">
                                        <tr>
                                            <th>#</th>
                                            <th>Codigo</th>
                                            <th>Descripcion</th>
                                            <th>Precio</th>
                                            <th>Cantidad</th>
                                            <th>Total</th>                                           
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>CS-46621-1</td>
                                            <td>Consulta</td>
                                            <td>S/. 100</td>
                                            <td>4</td>
                                            <td>S/. 400</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>CS-74621-1</td>
                                            <td>Atencion</td>
                                            <td>S/. 400</td>
                                            <td>3</td>
                                            <td>S/. 1200</td>
                                        </tr>                                       
                                        </tbody>
                                </table>                  
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary waves-effect waves-light" data-dismiss="modal">Cerrar</button>
                                
                            </div>
                        </div>
                    </div>
                </div><!-- End Modal-->



            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h2 class="page-title"><i class=" ti-files"></i><span> Lista de Ventas </span></h2>
                                <br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card-box p-1">
                                    <div class="row justify-content-between">
                                        <div class="col-sm-5">
                                            <form role="form">
                                                <label>Buscar por fecha</label>
                                                <div class="input-daterange input-group" id="date-range">
                                                    <input type="text" class="form-control" name="start" placeholder="Fecha de inicio"/>
                                                    <input type="text" class="form-control" name="end" placeholder="Fecha final"/>
                                                    <button type="submit" class="btn btn-default btn-md"><i class="fa fa-search"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-sm-4">
                                            <label>Nuevo</label>
                                            <div>
                                                <a href="registro_venta.php" class="btn btn-default btn-md waves-effect waves-light m-b-30" data-animation="fadein" data-plugin="custommodal"
                                                data-overlaySpeed="200" data-overlayColor="#36404a"><i class="md md-add"></i> Nueva Venta</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="table-responsive p-2">
                                        <table class="table table-hover mails m-0 table table-actions-bar">
                                            <thead>
                                            <tr>
                                                <th style="width: 120px;">
                                                    #
                                                </th>
                                                <th>#</th>
                                                <th>Numero Factura</th>
                                                <th>Cliente</th>
                                                <th>Fecha</th>
                                                <th>Metodo</th>
                                                <th>Total</th>
                                                <th style="width: 150px;">ACCION</th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                            <tr class="active">
                                                <td>
                                                    <div class="checkbox checkbox-primary m-r-15">
                                                        <input id="checkbox2" type="checkbox" checked="">
                                                        <label for="checkbox2"></label>
                                                    </div>
                                                </td>

                                                <td>
                                                    1
                                                </td>
                                                <td>0001</td>
                                                <td>
                                                <img src="static/img/calvo.jpg" alt="contact-img" title="contact-img" class="rounded-circle thumb-sm">
                                                    Alferez Quintana Miguel Angel
                                                </td>
                                                <td> 12/12/12</td>
                                                <td>Efectivo</td>
                                                <td>S/100</td>
                                                <td>
                                                    <a href="#" data-toggle="modal" data-target="#modal_detalle_venta" class="table-action-btn"><i class="md md-remove-red-eye"></i></a>                         
                                                    <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                                    <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="checkbox checkbox-primary m-r-15">
                                                        <input id="checkbox1" type="checkbox">
                                                        <label for="checkbox1"></label>
                                                    </div>
                                                </td>

                                                
                                                 <td>
                                                    2
                                                </td>
                                                <td>002</td>
                                                <td>
                                                <img src="static/img/calvo_2.webp" alt="contact-img" title="contact-img" class="rounded-circle thumb-sm">
                                                    Gonzalo Moccho Crisostomo Miguel
                                                </td>
                                                <td> 12/11/21</td>
                                                <td>Recibo</td>   
                                                <td>s/30</td>                                             
                                                <td>
                                                    <a href="#" data-toggle="modal" data-target="#modal_detalle_venta" class="table-action-btn"><i class="md md-remove-red-eye"></i></a>                         
                                                    <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                                    <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox checkbox-primary m-r-15">
                                                        <input id="checkbox5" type="checkbox">
                                                        <label for="checkbox5"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    3
                                                </td>
                                                <td>0003</td>
                                                <td>
                                                <img src="static/img/mujer.jpg" alt="contact-img" title="contact-img" class="rounded-circle thumb-sm">
                                                    Fernandez Rodriguez Maria Leticia
                                                </td>
                                                <td> 03/02/20</td>
                                                <td>Credito</td>
                                                <td>$200</td>
                                                <td>
                                                    <a href="#" data-toggle="modal" data-target="#modal_detalle_venta" class="table-action-btn"><i class="md md-remove-red-eye"></i></a>                         
                                                    <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                                    <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                                </td>
                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div> <!-- end col -->

                        </div>

                    </div> <!-- container -->

                </div> <!-- content -->
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

        <script src="coderthemes.com/ubold/plugins/moment/moment.js"></script>
        <script src="coderthemes.com/ubold/plugins/timepicker/bootstrap-timepicker.js"></script>
        <script src="coderthemes.com/ubold/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
        <script src="coderthemes.com/ubold/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
        <script src="coderthemes.com/ubold/plugins/clockpicker/js/bootstrap-clockpicker.min.js"></script>
        <script src="coderthemes.com/ubold/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
        <script src="coderthemes.com/ubold/light/assets/pages/jquery.form-pickers.init.js"></script>

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