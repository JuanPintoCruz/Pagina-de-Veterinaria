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
        <!--Alerts -->
        <link href="coderthemes.com/ubold/plugins/bootstrap-sweetalert/sweet-alert.css" rel="stylesheet" type="text/css">
        <!--Custombox -->
        <link href="coderthemes.com/ubold/plugins/custombox/css/custombox.css" rel="stylesheet">
        <!-- Table-->
        <link rel="stylesheet" href="coderthemes.com/ubold/plugins/magnific-popup/css/magnific-popup.css" />
        <link rel="stylesheet" href="coderthemes.com/ubold/plugins/jquery-datatables-editable/dataTables.bootstrap4.min.css" />

        <link href="coderthemes.com/ubold/light/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="coderthemes.com/ubold/light/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="coderthemes.com/ubold/light/assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="coderthemes.com/ubold/light/assets/js/modernizr.min.js"></script>
        <style type="text/css">
            .pagination{
                padding: 10px !important;
            }
        </style>
</head>

 <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <?php 
            include "principal.php";
            ?>


            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h2 class="page-title"><i class=" ti-files"></i><span> Lista de Especie </span></h2>
                                <br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card-box p-1">
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <form role="form">
                                                <div class="form-group contact-search m-b-30">
                                                    <input type="text" id="search" class="form-control" placeholder="Buscar...">
                                                    <button type="submit" class="btn btn-white"><i class="fa fa-search"></i></button>
                                                </div> <!-- form-group -->
                                            </form>
                                        </div>
                                        <div class="col-sm-4">
                                            <a href="#custom-modala" class="btn btn-default btn-md waves-effect waves-light m-b-30" data-animation="fadein" data-plugin="custommodal"
                                               data-overlaySpeed="200" data-overlayColor="#36404a"><i class="md md-add"></i>Nueva Raza</a>
                                        </div>
                                    </div>
                                    <!-- Modal RAZA-->
                                    <div id="custom-modala" class="modal-demo">
                                            <button type="button" class="close" onclick="Custombox.close();">
                                                <span>&times;</span><span class="sr-only">Close</span>
                                            </button>
                                            <h4 class="custom-modal-title">Nueva Raza</h4>
                                            <div class="custom-modal-text">
                                                <div class="col-12 mb-4">
                                                    <p class="text-left">Raza</p>
                                                    <input type="text" class="form-control" placeholder="">
                                                    <p class="text-left mt-3">Especie</p>
                                                    <select class="form-control select2">
                                                                <option>Canino</option>
                                                                <option value="AK">Felino</option>
                                                                <option value="HI">Exotico</option>
                                                            </select>
                                                </div>
                                                <div class="text-right">
                                                    <button type="button" class="btn btn-inverse btn-rounded waves-effect waves-light" onclick="Custombox.close();">Cerrar</button>
                                                    <button type="button" class="btn btn-success btn-rounded waves-effect waves-light" onclick="Custombox.close();" id="primary-alert">
                                                    <span class="btn-label"><i class="fa fa-check"></i></span>
                                                    Guardar
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                    <div class="table-responsive">
                                        <table class="table table-hover mails m-0 table table-actions-bar"  id="datatable-editable">
                                            <thead>
                                            <tr>
                                                
                                                <th>#</th>
                                                <th>RAZA</th>
                                                <th>ESPECIE</th>
                                                <td>ACCION</td>
                                            </tr>
                                            </thead>

                                            <tbody>
                                            <tr class="active">
                                                

                                                <td>
                                                    1
                                                </td>

                                                <td>
                                                    Pastor aleman
                                                </td>
                                                <td>
                                                    Canino
                                                </td>
                                                <td class="actions">
                                                <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                                                <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                

                                                
                                                <td>
                                                    2
                                                </td>

                                                <td>
                                                    San Bernardo
                                                </td>
                                                <td>
                                                    Felino
                                                </td>
                                                <td class="actions">
                                                <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                                                <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                

                                                
                                                <td>
                                                    3
                                                </td>

                                                <td>
                                                    Chusco
                                                </td>
                                                <td>
                                                    Canino
                                                </td>
                                                <td class="actions">
                                                <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                                                <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
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

        <!-- Examples table -->
        <script src="coderthemes.com/ubold/plugins/magnific-popup/js/jquery.magnific-popup.min.js"></script>
        <script src="coderthemes.com/ubold/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="coderthemes.com/ubold/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <script src="coderthemes.com/ubold/plugins/tiny-editable/mindmup-editabletable.js"></script>
        <script src="coderthemes.com/ubold/plugins/tiny-editable/numeric-input-example.js"></script>

        <script src="coderthemes.com/ubold/light/assets/pages/datatables.editable.init.js"></script>
        <!-- jQuery  -->
        <script src="coderthemes.com/ubold/plugins/waypoints/lib/jquery.waypoints.min.js"></script>
        <script src="coderthemes.com/ubold/plugins/counterup/jquery.counterup.min.js"></script>

        <script src="coderthemes.com/ubold/plugins/morris/morris.min.js"></script>
        <script src="coderthemes.com/ubold/plugins/raphael/raphael-min.js"></script>

        <script src="coderthemes.com/ubold/plugins/jquery-knob/jquery.knob.js"></script>

        <script src="coderthemes.com/ubold/light/assets/pages/jquery.dashboard.js"></script>

        <script src="coderthemes.com/ubold/light/assets/js/jquery.core.js"></script>
        <script src="coderthemes.com/ubold/light/assets/js/jquery.app.js"></script>
        <!-- Alerts  -->
        <script src="coderthemes.com/ubold/plugins/bootstrap-sweetalert/sweet-alert.min.js"></script>
        <script src="coderthemes.com/ubold/light/assets/pages/jquery.sweet-alert.init.js"></script>
        
        <!-- Modal-Effect -->
        <script src="coderthemes.com/ubold/plugins/custombox/js/custombox.min.js"></script>
        <script src="coderthemes.com/ubold/plugins/custombox/js/legacy.min.js"></script>
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