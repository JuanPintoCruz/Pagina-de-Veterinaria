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
                                <h2 class="page-title"><i class=" ti-files"></i><span> Lista de Mascota </span></h2>
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
                                                    <input type="text" id="search" class="form-control" placeholder="Search...">
                                                    <button type="submit" class="btn btn-white"><i class="fa fa-search"></i></button>
                                                </div> <!-- form-group -->
                                            </form>
                                        </div>
                                        <!-- MODAL NUEVA MASCOTA -->
                                         <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="myLargeModalLabel">Registrar Mascota</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                </div>
                                                <div class="modal-body d-md-flex">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="field-1" class="control-label">Nombres</label>
                                                                <input type="text" class="form-control" id="field-1" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label>Fecha de Nacimiento</label>
                                                            <input type="date" id="" name="" class="form-control" placeholder="00/00/0000">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                    <h6><b>Especie</b></h6>

                                                                    <select class="form-control select2">
                                                                        <option>canino</option>
                                                                            <option value="">felino</option>
                                                                            <option value="">roedores</option>
                                                                            <option>exoticos</option>
                                                                        </optgroup>
                                                                    </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group"> 
                                                                <h6><b>Raza</b></h6>
                                                                    <select class="form-control select2">
                                                                        <optgroup label="Caninos">
                                                                            <option value="AK">pastor aleman</option>
                                                                            <option value="HI">pitbull</option>
                                                                        </optgroup>
                                                                        <optgroup label="FELINOS">
                                                                            <option>americano pelo corto</option>
                                                                            <option>britanico</option>
                                                                            <optgroup label="ROEDORES">
                                                                                <OPTION>hanster</OPTION>
                                                                                <option>conejo</option>
                                                                                <option>cuy</option>
                                                                            </optgroup>                            
                                                                        </optgroup>
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
                                                        
                                                        
                                                                <div class="col-lg-6">
                                                                <h4 class="m-t-0 header-title"><i class=""></i><span> Genero</span></h4> 
                                                                    <div class="mt-3">
                                                                    <div class="form-group row">
                                                                        <div class="custom-control custom-radio"style="left:20px" >
                                                                            <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                                                            <label class="custom-control-label" for="customRadio1">Hembra</label>
                                                                        </div>
                                                                        <div class="custom-control custom-radio" style="left:30px">
                                                                            <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                                            <label class="custom-control-label" for="customRadio2">Macho</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group" >
                                                                <label>Dueño</label>
                                                                    <div class="d-flex justify-content-center align-items-center">
                                                                    <img src="static/img/avatar-3.jpg" alt="contact-img" title="contact-img" class="rounded-circle thumb-md mr-2 mb-4">
                                                                            <form role="form">
                                                                                <div class="input-group contact-search m-b-30">
                                                                                    <input type="text" id="search" class="form-control" placeholder="Buscar...">
                                                                                    <button type="submit" class="btn btn-default" style="top: 32px; right: 10px"><i class="fa fa-search"></i></button>
                                                                                </div>
                                                                            </form> 
                                                                    </div> 
                                                                </div>
                                                            </div>
                                                        
                                                    </div>
                                                    <div class="col-md-4">
                                                        
                                                            <p class="text-center"><b>Foto Perfil</b></p>
                                                            <div class="form-group d-flex justify-content-center align-items-center">
                                                                <img src="static/img/mascota_2.jpg" class="thumb-lg"  style="border: 5px solid">
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
                                                    <button type="button" class="btn btn-secondary waves-effect waves-light" data-dismiss="modal">Cerrar</button>
                                                    <button type="button" class="btn btn-info waves-effect waves-light" id="sa-success">Guardar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.modal -->
                                    <div class="col-sm-4">
                                        <!-- Responsive modal -->
                                        <button type="button" class="btn btn-info waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-lg">+ Nueva Mascota</button>
                                        </div>
                                    </div>

                                    <div class="table-responsive">
                                        <table class="table table-hover mails m-2 table table-actions-bar">
                                            <thead>
                                            <tr>
                                                <th style="width: 120px;">
                                                    #
                                                </th>
                                                <th>COD</th>
                                                <th>MASCOTA</th>
                                                <th>DUEÑO</th>
                                                <th>EDAD</th>
                                                <th>SEXO</th>
                                                <TH>PESO</TH>
                                                <td>COLOR</td>
                                                <td>ACTION</td>
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
                                                    M-001
                                                </td>

                                                <td>
                                                <img src="static/img/mascota_2.jpg" alt="contact-img" title="contact-img" class="rounded-circle thumb-sm">
                                                    REYNA
                                                </td>

                                                <td>
                                                <img src="static/img/avatar-3.jpg" alt="contact-img" title="contact-img" class="rounded-circle thumb-sm">
                                                    Gonzalo Moccho Crisostomo Miguel
                                                </td>
                                                <td>2 AÑOS</td>
                                                <td>MACHO</td>
                                                <td>800gr</td>
                                                <td>negro</td>
                                                <td style="min-width: 150px;">
                                                    <a href="mascota_perfil.php" class="table-action-btn"><i class="fa fa-eye"></i></a>
                                                    <a href="Registro_mascota.php" class="table-action-btn"><i class="md md-edit"></i></a>
                                                    <a href="Registro_mascota.php" class="table-action-btn"><i class="md md-close"></i></a>
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
                                                    M-002
                                                </td>

                                                <td>
                                                <img src="static/img/mascota-1.jpg" alt="contact-img" title="contact-img" class="rounded-circle thumb-sm">
                                                    luffi
                                                </td>

                                                <td>
                                                <img src="static/img/avatar-3.jpg" alt="contact-img" title="contact-img" class="rounded-circle thumb-sm">
                                                    Perez Choque Alejando David
                                                </td>
                                                <td>5 AÑOS</td>
                                                <td>hembra</td>
                                                <td>800gr</td>
                                                <td>negro</td>
                                                <td style="min-width: 150px;">
                                                    <a href="mascota_perfil.php" class="table-action-btn"><i class="fa fa-eye"></i></a>
                                                    <a href="Registro_mascota.php" class="table-action-btn"><i class="md md-edit"></i></a>
                                                    <a href="Registro_mascota.php" class="table-action-btn"><i class="md md-close"></i></a>
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
                                                    M-003
                                                </td>

                                                <td>
                                                <img src="static/img/mascota_2.jpg" alt="contact-img" title="contact-img" class="rounded-circle thumb-sm">
                                                    BOBY
                                                </td>

                                                <td>
                                                <img src="static/img/avatar-3.jpg" alt="contact-img" title="contact-img" class="rounded-circle thumb-sm">
                                                    Quispe Palomino Michael Steve
                                                </td>
                                                <td>3 AÑOS</td>
                                                <td>hembra</td>
                                                <td>800gr</td>
                                                <td>negro</td>
                                                <td style="min-width: 150px;">
                                                    <a href="mascota_perfil.php" class="table-action-btn"><i class="fa fa-eye"></i></a>
                                                    <a href="Registro_mascota.php" class="table-action-btn"><i class="md md-edit"></i></a>
                                                    <a href="Registro_mascota.php" class="table-action-btn"><i class="md md-close"></i></a>
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