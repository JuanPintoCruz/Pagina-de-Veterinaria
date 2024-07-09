<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="coderthemes.com/ubold/light/assets/images/favicon.ico">

        <title>Veterinaria GO</title>

        
        <!--Custombox -->
        <link href="coderthemes.com/ubold/plugins/custombox/css/custombox.css" rel="stylesheet">
        <!--Morris Chart CSS -->
		<link rel="stylesheet" href="coderthemes.com/ubold/plugins/morris/morris.css">
        

        <!-- Plugins css Botton-->
        <link href="coderthemes.com/ubold/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css" rel="stylesheet" />
        <link href="coderthemes.com/ubold/plugins/switchery/css/switchery.min.css" rel="stylesheet" />
        <link href="coderthemes.com/ubold/plugins/multiselect/css/multi-select.css"  rel="stylesheet" type="text/css" />
        <link href="coderthemes.com/ubold/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="coderthemes.com/ubold/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" />
        <link href="coderthemes.com/ubold/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
        <!-- Table-->
        <link rel="stylesheet" href="coderthemes.com/ubold/plugins/magnific-popup/css/magnific-popup.css" />
        <link rel="stylesheet" href="coderthemes.com/ubold/plugins/jquery-datatables-editable/dataTables.bootstrap4.min.css" />

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


    <style>
        .el-badge {
            position: relative;
            vertical-align: middle;
            display: inline-block;
        }
        

.el-badge__content.is-fixed {
    position: absolute;
    top: 0;
    right: 10px;
    -webkit-transform: translateY(-50%) translateX(100%);
    transform: translateY(-50%) translateX(100%);
}
.el-badge__content {
    background-color: #f56c6c;
    border-radius: 10px;
    color: #fff;
    display: inline-block;
    font-size: 12px;
    height: 18px;
    line-height: 18px;
    padding: 0 6px;
    text-align: center;
    white-space: nowrap;
    border: 1px solid #fff;
}

    </style>

            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h2 class="page-title"><i class=" ti-files"></i><span> Lista de Empresas </span></h2>
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
                                        <!-- MODAL NUEVA EMPRESA -->
                                        <div class="modal fade bs-example-modal-lg"  id="modal_empresa" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myLargeModalLabel">Registrar Empresa</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="pb-4"> 
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
                                                            </form>
                                                        </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary waves-effect waves-light" data-dismiss="modal">Cerrar</button>
                                                        <button type="button" class="btn btn-info waves-effect waves-light" id="sa-success" >Guardar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.modal -->

                                        <div class="col-sm-4">
                                        <!-- Responsive modal -->
                                            <button type="button" class="btn btn-info waves-effect waves-light" data-toggle="modal" data-target="#modal_empresa">+ Nueva Empresa</button>
                                        </div>
                                    </div>

                                    <div class="table-responsive pt-2">
                                        <table class="table table-hover mails m-0 table table-actions-bar">
                                            <thead>
                                            <tr>
                                                <th style="width: 50px;">
                                                    #
                                                </th>
                                                
                                                <th>NOMBRE</th>
                                                <th>RUC</th>
                                                <th>CORREO</th>
                                                
                                                <th>ESTADO</th>
                                                <th class="text-center">TOTAL COMPROBANTE</th>
                                                <th class="text-center">NOTIFICACION</th>
                                                
                                                <th>F-CREACION</th>

                                                <th>ACTION</th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                            <tr class="active">
                                                <td>
                                                    1
                                                </td>                                              
                                                
                                                <td>
                                                    Gonzalo Moccho Crisostomo Miguel
                                                </td>
                                                <td>10434109723</td>
                                                <td>gonzaloMochcco@gmail.com</td>
                                                
                                                <td><span class="label label-success">Produccion</span></td>
                                                <td class="text-center">610</td>
                                                <td class="text-center">
                                                    <div class="el-badge"><i class="md md-notifications-none md-2x text-secondary"></i><sup class="el-badge__content el-badge__content--undefined is-fixed">5</sup></div>
                                                    <div class="el-badge ml-4"><i class="md md-warning md-2x text-secondary"></i><sup class="el-badge__content el-badge__content--undefined is-fixed">1</sup></div>
                                                </td>
                                                <td>30/08/2021</td>
                                                <td>
                                                    <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                                    <a href="#" class="table-action-btn" id="sa-warning"><i class="md md-close" ></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    2
                                                </td>                                              
                                                
                                                <td>                                                   
                                                    Apaza Mamni Gladyz Marisol
                                                </td>
                                                <td>10434109723</td>
                                                <td>gladys@gmail.com</td>
                                                
                                                <td><span class="label label-primary">Demo</span></td>
                                                <td class="text-center">610</td>
                                                <td class="text-center">
                                                    <div class="el-badge"><i class="md md-notifications-none md-2x text-secondary"></i><sup class="el-badge__content el-badge__content--undefined is-fixed">0</sup></div>
                                                    <div class="el-badge ml-4"><i class="md md-warning md-2x text-secondary"></i><sup class="el-badge__content el-badge__content--undefined is-fixed">0</sup></div>
                                                </td>
                                                <td>30/08/2021</td>
                                                <td>
                                                    <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                                    <a href="#" class="table-action-btn" id="sa-warning"><i class="md md-close" ></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    3
                                                </td>                                              
                                                
                                                <td>
                                                    Gonzalo Moccho Crisostomo Miguel
                                                </td>
                                                <td>10434109723</td>
                                                <td>gonzaloMochcco@gmail.com</td>
                                                
                                                <td><span class="label label-success">Produccion</span></td>
                                                <td class="text-center">610</td>
                                                <td class="text-center">
                                                    <div class="el-badge"><i class="md md-notifications-none md-2x text-secondary"></i><sup class="el-badge__content el-badge__content--undefined is-fixed">5</sup></div>
                                                    <div class="el-badge ml-4"><i class="md md-warning md-2x text-secondary"></i><sup class="el-badge__content el-badge__content--undefined is-fixed">1</sup></div>
                                                </td>
                                                <td>30/08/2021</td>
                                                <td>
                                                    <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                                    <a href="#" class="table-action-btn" id="sa-warning"><i class="md md-close" ></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    4
                                                </td>                                              
                                                
                                                <td>
                                                    Gonzalo Moccho Crisostomo Miguel
                                                </td>
                                                <td>10434109723</td>
                                                <td>gonzaloMochcco@gmail.com</td>
                                                
                                                <td><span class="label label-success">Produccion</span></td>
                                                <td class="text-center">610</td>
                                                <td class="text-center">
                                                    <div class="el-badge"><i class="md md-notifications-none md-2x text-secondary"></i><sup class="el-badge__content el-badge__content--undefined is-fixed">5</sup></div>
                                                    <div class="el-badge ml-4"><i class="md md-warning md-2x text-secondary"></i><sup class="el-badge__content el-badge__content--undefined is-fixed">1</sup></div>
                                                </td>
                                                <td>30/08/2021</td>
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