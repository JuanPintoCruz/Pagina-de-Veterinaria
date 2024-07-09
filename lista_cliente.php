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
                                <h2 class="page-title"><i class=" ti-files"></i><span> Lista de Clientess </span></h2>
                                <br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card-box p-1">
                                    <div class="row">
                                        <!-- MODAL NUEVO CLIENTE -->
                                        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="myLargeModalLabel">Registrar Cliente</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                </div>
                                                <div class="modal-body d-md-flex">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="field-1" class="control-label">DNI/PASAPORTE</label>
                                                                <input type="text" class="form-control" id="field-1" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label>Nombres y Apellidos</label>
                                                            <input type="text" id="" name="" class="form-control" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Telefono</label>
                                                            <input type="text" id="" name="" class="form-control" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Domilicio</label>
                                                                <input type="text" class="form-control" placeholder="">
                                                                </div>
                                                        </div>
                                                        <div class="col-12">
                                                                <div class="form-group">
                                                                    <label>Correo</label>
                                                                <input type="Fecha" id="" name="" class="form-control" placeholder="">
                                                                </div>
                                                        </div>
                                                        
                                                        
                                                                <div class="col-lg-6">
                                                                <h4 class="m-t-0 header-title"><i class=""></i><span> Genero</span></h4> 
                                                                    <div class="mt-3">
                                                                    <div class="form-group row">
                                                                        <div class="custom-control custom-radio"style="left:20px" >
                                                                            <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                                                            <label class="custom-control-label" for="customRadio1">Masculino</label>
                                                                        </div>
                                                                        <div class="custom-control custom-radio" style="left:30px">
                                                                            <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                                            <label class="custom-control-label" for="customRadio2">Femenino</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                        
                                                    </div>
                                                    <div class="col-md-4">
                                                        
                                                            <p class="text-center"><b>Foto Perfil</b></p>
                                                            <div class="form-group d-flex justify-content-center align-items-center">
                                                                <img src="static/img/mujer.jpg" class="thumb-lg"  style="border: 5px solid">
                                                            </div>
                                                            <div class="text-center" >
                                                                <div class="fileupload btn btn-purple btn-md w-md waves-effect waves-light">
                                                                    <span><i class="ion-upload m-r-5"></i>Cargar foto</span>
                                                                    <input type="file" class="upload">
                                                                </div>
                                                            </div>
                                                        
                                                    </div>   
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Cerrar</button>
                                                    <button type="button" class="btn btn-info waves-effect waves-light" id="sa-success">Guardar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.modal -->
                                        <div class="col-sm-8">
                                                <form role="form">
                                                    <div class="form-group contact-search m-b-30">
                                                        <input type="text" id="search" class="form-control" placeholder="Buscar...">
                                                        <button type="submit" class="btn btn-white"><i class="fa fa-search"></i></button>
                                                    </div> <!-- form-group -->
                                                </form>
                                        </div>
                                        <div class="col-sm-4">
                                            <!-- Responsive modal -->
                                            <button type="button" class="btn btn-info waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-lg">+ Nuevo Cliente</button>
                                        </div>
                                    </div>

                                    <div class="table-responsive">
                                        <table class="table table-hover mails m-2 table table-actions-bar">
                                            <thead>
                                            <tr>
                                                <th style="width: 120px;">
                                                    #
                                                </th>
                                                <th>DNI/PAS</th>
                                                <th>CLIENTE</th>
                                                <th>TELEFONO</th>
                                                <th>DOMICILIO</th>
                                                <th>CORREO</th>
                                                <th>ACCIONES</th>
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
                                                    75036732
                                                </td>

                                                <td>
                                                <img src="static/img/calvo_2.webp" alt="contact-img" title="contact-img" class="rounded-circle thumb-sm">

                                                    Gonzalo Mochco Crisostomo Miguel
                                                </td>

                                                <td>
                                                    987654321
                                                </td>
                                                <td>Mz A3 Lt 10 Virgen del Morro</td>
                                                <td>
                                                    gonzalo@gmail.com
                                                </td>
                                                <td>
                                                    <a href="registro_cliente.php" class="table-action-btn"><i class="md md-edit"></i></a>
                                                    <a href="#" class="table-action-btn" id="sa-warning"><i class="md md-close"></i></a>
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
                                                    28314593
                                                </td>

                                                <td>
                                                <img src="static/img/avatar-3.jpg" alt="contact-img" title="contact-img" class="rounded-circle thumb-sm">

                                                    Mendez Rivera Juan Alberto
                                                </td>

                                                <td>
                                                    987654321
                                                </td>
                                                <td>Mz I3 Lt 25 San Genaro II</td>
                                                <td>
                                                    alberto@gmail.com
                                                </td>
                                                <td>
                                                    <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                                    <a href="#" class="table-action-btn" id="sa-warning"><i class="md md-close"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="checkbox checkbox-primary m-r-15">
                                                        <input id="checkbox3" type="checkbox">
                                                        <label for="checkbox3"></label>
                                                    </div>
                                                </td>

                                               
                                                <td>
                                                    45893329
                                                </td>

                                                <td>
                                                <img src="static/img/avatar-6.jpg" alt="contact-img" title="contact-img" class="rounded-circle thumb-sm">

                                                    Cambista Domingues Perez Julio
                                                </td>

                                                <td>
                                                    987654321
                                                </td>
                                                <td>Mz K3 Lt 23 Bella Vista</td>
                                                <td>
                                                    perez@gmail.com
                                                </td>
                                                <td>
                                                    <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                                    <a href="#" class="table-action-btn" id="sa-warning"><i class="md md-close"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="checkbox checkbox-primary m-r-15">
                                                        <input id="checkbox4" type="checkbox">
                                                        <label for="checkbox4"></label>
                                                    </div>
                                                </td>

                                                
                                                <td>
                                                    12345788
                                                </td>

                                                <td>
                                                <img src="static/img/mujer.jpg" alt="contact-img" title="contact-img" class="rounded-circle thumb-sm">

                                                    Choque Jimenez Roberto Luis
                                                </td>

                                                <td>
                                                    987654321
                                                </td>
                                                <td>Mz K3 Lt 23 Los Sauces</td>
                                                <td>
                                                    roberto@gmail.com
                                                </td>
                                                <td>
                                                    <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                                    <a href="#" class="table-action-btn" id="sa-warning"><i class="md md-close"></i></a>
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
                                                    25345788
                                                </td>

                                                <td>
                                                <img src="static/img/calvo.jpg" alt="contact-img" title="contact-img" class="rounded-circle thumb-sm">

                                                    Flores Espinoza Alejandro John
                                                </td>

                                                <td>
                                                    987654321
                                                </td>
                                                <td>Mz K3 Lt 23 La Encantada</td>
                                                <td>
                                                    johncalua@gmail.com
                                                </td>
                                                <td>
                                                    <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                                    <a href="#" class="table-action-btn" id="sa-warning"><i class="md md-close"></i></a>
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