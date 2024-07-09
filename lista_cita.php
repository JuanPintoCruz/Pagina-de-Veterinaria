<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="coderthemes.com/ubold/light/assets/images/favicon.ico">

        <title>Veterinaria GO</title>
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



            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h2 class="page-title"><i class=" ti-files"></i><span> Lista de Cita </span></h2>
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
                                        <!-- MODAL NUEVA CITA -->
                                        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="myLargeModalLabel">Registrar Cita</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="field-1" class="control-label">Nombre Cliente</label>
                                                                <div class="d-flex justify-content-center align-items-center">
                                                                    <img src="static/img/avatar-3.jpg" alt="contact-img" title="contact-img" class="rounded-circle thumb-md mr-2 mb-4">
                                                                            <form role="form">
                                                                                <div class="form-group contact-search m-b-30" style="width: 308px">
                                                                                    <input type="text" id="search" class="form-control" placeholder="Buscar...">
                                                                                    <button type="submit" class="btn btn-white" style="top: 32px; right: 10px"><i class="fa fa-search"></i></button>
                                                                                </div>
                                                                            </form> 
                                                                </div> 
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="field-1" class="control-label">Nombre Mascota</label>
                                                                <div class="d-flex justify-content-center align-items-center">
                                                                    <img src="static/img/mascota-1.jpg" alt="contact-img" title="contact-img" class="rounded-circle thumb-md mr-2 mb-4">
                                                                            <form role="form">
                                                                                <div class="form-group contact-search m-b-30" style="width: 308px">
                                                                                    <input type="text" id="search" class="form-control" placeholder="Buscar...">
                                                                                    <button type="submit" class="btn btn-white" style="top: 32px; right: 10px"><i class="fa fa-search"></i></button>
                                                                                </div>
                                                                            </form> 
                                                                </div> 
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                            
                                                    
                                                    <div class="row">
                                                        
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Fecha de Nacimiento</label>
                                                                <input type="date" id="" name="" class="form-control" placeholder="00/00/0000">
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Hora</label>
                                                                <input type="time" class="form-control" placeholder="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                   <div class="row">
                                                        
                                                        <div class="col-md-8">
                                                            <div class="form-group">
                                                                <label>Motivo de Consulta</label>
                                                                <input type="text" id="" name="" class="form-control" placeholder="">
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary waves-effect waves-light" data-dismiss="modal">Cerrar</button>
                                                    <button type="button" class="btn btn-info waves-effect waves-light" id="sa-success" >Guardar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.modal -->
                                    <div class="col-sm-4">
                                        <!-- Responsive modal -->
                                        <button type="button" class="btn btn-info waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-lg">+ Nueva Cita</button>
                                        </div>
                                    </div>

                                    <div class="table-responsive p-2">
                                        <table class="table table-hover mails m-0 table table-actions-bar">
                                            <thead>
                                            <tr>
                                                <th style="width: 120px;">
                                                    #
                                                </th>
                                                <th>COD</th>
                                                <th>MASCOTA</th>
                                                <th>CLIENTE</th>
                                                <th>FECHA</th>
                                                <th>MOTIVO</th>
                                                <TH >ESTADO</TH>
                                                <TH>HORA</TH>

                                                <th>ACTION</th>
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
                                                <td>LUFFY</td>
                                                <td>
                                                    Gonzalo Moccho Crisostomo Miguel
                                                </td>
                                                <td>12/12/12</td>
                                                <td>Consulta</td>
                                                <td><span class="label label-primary">Pendiente</span></td>
                                                <td>
                                                    15:00
                                                </td>
                                                <td>
                                                    <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                                    <a href="#" class="table-action-btn" id="sa-warning"><i class="md md-close" ></i></a>
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
                                                <td>reyna</td>
                                                <td>
                                                    Maria Perez
                                                </td>
                                                <td>12/12/12</td>
                                                <td>Consulta</td>
                                                <td><span class="label label-success">Completada</span></td>
                                                <td>
                                                13:00
                                                </td>
                                                <td>
                                                    <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                                    <a href="#" class="table-action-btn" id="sa-warning"><i class="md md-close" ></i></a>
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

        <script src="coderthemes.com/ubold/light/assets/js/jquery.core.js"></script>
        <script src="coderthemes.com/ubold/light/assets/js/jquery.app.js"></script>

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


</body>
</html>