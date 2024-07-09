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


            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h2 class="page-title"><i class=" ti-files"></i><span> Lista de Usuarios </span></h2>
                                <br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card-box ">
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <form role="form">
                                                <div class="form-group contact-search m-b-30">
                                                    <input type="text" id="search" class="form-control" placeholder="Search...">
                                                    <button type="submit" class="btn btn-white"><i class="fa fa-search"></i></button>
                                                </div> <!-- form-group -->
                                            </form>
                                        </div>
                                        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="myLargeModalLabel">Registrar Cliente</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group row">
                                                        <div class="col-4">
                                                            <input type="text" class="form-control" placeholder="DNI/PASAPORTE">
                                                        </div>
                                                        <div class="col-4">
                                                            <input type="text" id="example-email" name="Nombre" class="form-control" placeholder="Nombre">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-4">
                                                            <input type="text" class="form-control" value="Apellido" placeholder="Apellido">
                                                        </div>
                                                        <div class="col-4">
                                                            <input type="text" class="form-control" placeholder="telefono">
                                                        </div>
                                                <div class="col-4" >
                                                <h5 class="text-center text-uppercase"><b>l</b></h5>

                                                <div class="table-box" style="margin-top: -100px ;">
                                                    <div class="table-detail">
                                                        <img src="static/img/calvo_2.webp" class="thumb-lg rounded-circle mr-auto ml-auto d-block" alt="img">
                                                    </div>
                                                </div>

                                                <div class="text-center mt-3">
                                                    <div class="fileupload btn btn-purple btn-md  waves-effect waves-light">
                                                        <span><i class="ion-upload m-r-5"></i>Cargar foto</span>
                                                        <input type="file" class="upload">
                                                    </div>
                                                </div>
                                            </div>
                                                     </div>
                                                    <div class="form-group row">
                                                        <div class="col-8">
                                                            <input type="text" class="form-control" placeholder="Domicilio">
                                                        </div>
                                                    </div>
                                        <br>
                                    <h4 class="m-t-0 header-title"><i class=" ti-id-badge"></i><span> Datos de la Cuenta </span></h4> 
                                           <div class="form-group row">
                                                <div class="col-6">
                                                    <input type="text" class="form-control" placeholder="Nombre de Usuario">
                                                </div>
                                                <div class="col-6">
                                                    <input type="E-mail" id="example-email" name="Nombre" class="form-control" placeholder="E-mail">
                                                </div>
                                            </div> 
                                           <div class="form-group row">
                                                <div class="col-6">
                                                    <input type="Password" class="form-control" placeholder="Contraseña">
                                                </div>
                                                <div class="col-6">
                                                    <input type="Password" id="example-email" class="form-control" placeholder="Repetir Contraseña">
                                                </div>
                                            </div>
                                        <div class="col-md-6">
                                           <h4 class="m-t-0 header-title"><i class=" ti-crown"></i><span> Datos de la Cuenta </span></h4> 
                                            <div class="mt-3">
                                            <div class="form-group row">
                                                <div>
                                                    <p>Nivel 1 control total de Sistema</p>
                                                </div>
                                                <div class="custom-control custom-radio" style="left: 100px">
                                                    <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadio1">Nivel 1</label>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div >
                                                    <p>Nivel 2 Permiso de registro y actualizacion</p>
                                                </div>
                                                <div class="custom-control custom-radio" style="left: 26px">
                                                    <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadio2">Nivel 2</label>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div>
                                                    <p>Nivel 3 Permiso para registrar</p>
                                                </div>
                                                <div class="custom-control custom-radio" style="left: 108px">
                                                    <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadio2">Nivel 3</label>
                                                </div>
                                            </div>    
                                            </div>
                                        </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary waves-effect waves-light" data-dismiss="modal">Cerrar</button>
                                                    <button type="button" class="btn btn-info waves-effect waves-light">Guardar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.modal -->
                                    <div class="col-sm-4">
                                        <!-- Responsive modal -->
                                        <button type="button" class="btn btn-info waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-lg">+ Nuevo Usuario</button>
                                        </div>
                                    </div>

                                    <div class="table-responsive p-2">
                                        <table class="table table-hover mails m-0 table table-actions-bar">
                                            <thead class="thead-light">
                                            <tr>
                                                <th style="width: 120px;">#</th>
                                                <th>DNI/PAS</th>
                                                <th>NOMBRE</th>
                                                <th>TELEFONO</th>
                                                <th>DOMICILIO</th>
                                                <th>USUARIO</th>
                                                <th>ESTADO</th>
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
                                                    <img src="static/img/avatar-3.jpg" alt="contact-img" title="contact-img" class="rounded-circle thumb-sm">
                                                </td>

                                                <td>
                                                    12345788
                                                </td>

                                                <td>
                                                    juan gonsales
                                                </td>

                                                <td>
                                                    987654321
                                                </td>
                                                <td>calle 989</td>
                                                <td>juan123</td>
                                                <td>activo</td>
                                                <td>
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
                                                    <img src="static/img/avatar-6.jpg" alt="contact-img" title="contact-img" class="rounded-circle thumb-sm">
                                                </td>

                                                
                                                <td>
                                                    12345788
                                                </td>

                                                <td>
                                                    juan gonsales
                                                </td>

                                                <td>
                                                    987654321
                                                </td>
                                                <td>calle 989</td>
                                                <td>juan123</td>
                                                <td>activo</td>
                                                <td>
                                                    <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                                    <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="checkbox checkbox-primary m-r-15">
                                                        <input id="checkbox3" type="checkbox">
                                                        <label for="checkbox3"></label>
                                                    </div>
                                                    <img src="static/img/avatar-3.jpg" alt="contact-img" title="contact-img" class="rounded-circle thumb-sm">
                                                </td>

                                               
                                                <td>
                                                    12345788
                                                </td>

                                                <td>
                                                    juan gonsales
                                                </td>

                                                <td>
                                                    987654321
                                                </td>
                                                <td>calle 989</td>
                                                <td>juan123</td>
                                                <td>activo</td>
                                                <td>
                                                    <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                                    <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="checkbox checkbox-primary m-r-15">
                                                        <input id="checkbox4" type="checkbox">
                                                        <label for="checkbox4"></label>
                                                    </div>
                                                    <img src="static/img/avatar-6.jpg" alt="contact-img" title="contact-img" class="rounded-circle thumb-sm">
                                                </td>

                                                
                                                <td>
                                                    12345788
                                                </td>

                                                <td>
                                                    juan gonsales
                                                </td>

                                                <td>
                                                    987654321
                                                </td>
                                                <td>calle 989</td>
                                                <td>juan123</td>
                                                <td>activo</td>
                                                <td>
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
                                                    <img src="static/img/avatar-3.jpg" alt="contact-img" title="contact-img" class="rounded-circle thumb-sm">
                                                </td>

                                                
                                                <td>
                                                    12345788
                                                </td>

                                                <td>
                                                    juan gonsales
                                                </td>

                                                <td>
                                                    987654321
                                                </td>
                                                <td>calle 989</td>
                                                <td>juan123</td>
                                                <td>activo</td>
                                                <td>
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