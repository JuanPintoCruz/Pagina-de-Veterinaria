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
                                <h2 class="page-title"><i class="ion-ios7-paw-outline"></i><span> Perfil Mascota </span></h2>
                                <br>
                                <!--<ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Ubold</a></li>
                                    <li class="breadcrumb-item"><a href="#">Forms</a></li>
                                    <li class="breadcrumb-item active">Form elements</li>
                                </ol>-->

                            </div>
                        </div>


                        <div class="row">
                            <div class="col-8">
                                <div class="card-box row">
                                    <div class="card col-3" style="border: none">                                   
                                        <img src="static/img/mascota-1.jpg" class="card-img-top img-fluid" alt="Card image cap">
                                            <div class="text-center mt-4">
                                                <div class="member-info">
                                                    <h4 class="m-t-0 m-b-5 header-title"><b>Lucky</b></h4>
                                                    <p class="text-muted font-14"><span>Edad :</span><strong class="m-l-15">1 año 2 meses</strong></p>
                                                </div>   
                                            </div>                                                                                       
                                    </div>                                    
                                    <div class="col-9">        
                                        <h4 class="m-t-0 header-title text-center"><i class=" ti-id-badge"></i><span> Infomacion General </span></h4>
                                        <hr>                                                          
                                            <div class="row">                                               
                                                <div class="col-4">
                                                    <div class="form-group" >
                                                        <div class="member-info pl-3 m-b-30">
                                                            <p class="text-muted font-14"><span>Codigo :</span><strong class="m-l-15">CML45674211</strong></p>                               
                                                        </div>
                                                        <div class="member-info pl-3 m-b-30">                                      
                                                            <p class="text-muted font-14"><span>Sexo :</span><strong class="m-l-15">Masculino</strong></p>
                                                        </div>
                                                        <div class="member-info pl-3 m-b-30">                                      
                                                            <p class="text-muted font-14"><span>Color :</span><strong class="m-l-15">Blanco</strong></p>
                                                        </div>
                                                        <div class="member-info pl-3 m-b-30">                                      
                                                            <p class="text-muted font-14"><span>Inf. Adicional :</span><strong class="m-l-15">Lorem</strong></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <div class="member-info pl-3 m-b-30">
                                                            <p class="text-muted font-14"><span>Fecha N :</span><strong class="m-l-15">2020-12-24</strong></p>                               
                                                        </div>
                                                        <div class="member-info pl-3 m-b-30">
                                                            <p class="text-muted font-14"><span>Especie :</span><strong class="m-l-15">Canino</strong></p>                               
                                                        </div>
                                                        <div class="member-info pl-3 m-b-30">
                                                            <p class="text-muted font-14"><span>Dueño :</span><strong class="m-l-15">Sofia Lopez</strong></p>                               
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <div class="member-info pl-3 m-b-30">
                                                            <p class="text-muted font-14"><span>Peso :</span><strong class="m-l-15">6 Kg</strong></p>                               
                                                        </div>
                                                        <div class="member-info pl-3 m-b-30">
                                                            <p class="text-muted font-14"><span>Raza :</span><strong class="m-l-15">Chihuawa</strong></p>                               
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                                                                      
                                </div> <!-- end Card Box -->
                            </div>
                            <div class="col-4">
                                <div class="card-box">
                                    <div class="d-flex justify-content-between">
                                        <h4 class="m-t-0 header-title"><i class=" ti-id-badge"></i><span> Nota </span></h4>
                                        <button type="button" class="btn btn-lg btn-pink btn-custom waves-effect waves-light"><i class="fa fa-plus  mr-2"></i>Nuevo</button>
                                    </div>
                                    <hr>                          
                                    <div class="mt-3">                                          
                                        <div class="p-20">
                                            <div class="nicescroll p-l-r-10" style="max-height: 210px;">
                                                <div class="timeline-2">
                                                    <div class="time-item">
                                                        <div class="item-info">
                                                            <div class="text-muted"><small>5 minutes ago</small></div>
                                                            <p><strong><a href="#" class="text-info">John Doe</a></strong> Uploaded a photo <strong>"DSC000586.jpg"</strong></p>
                                                        </div>
                                                    </div>

                                                    <div class="time-item">
                                                        <div class="item-info">
                                                            <div class="text-muted"><small>Hace 30 minutos</small></div>
                                                            <p><a href="#" class="text-info">Alergia</a> Fecha 14-06-2020.</p>
                                                            <p><em>"Este perrito no puede tomar algunas pastillas por que tiene alergias a las anestecias. "</em></p>
                                                        </div>
                                                    </div>

                                                    <div class="time-item">
                                                        <div class="item-info">
                                                            <div class="text-muted"><small>Hace 40 minutos</small></div>
                                                            <p><a href="#" class="text-info">Agresivo</a> siempre tener cuidado por que puede <a href="#" class="text-danger">morder</a>.</p>
                                                            <p><em>"Este perrito no puede tomar algunas pastillas por que tiene alergias a las anestecias. "</em></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                                                                            
                                    </div>
                                </div><!-- end Card Box -->
                            </div>
                            <div class="col-12">
                                <div class="card-box">
                                <div class="d-flex justify-content-between">                                   
                                        <h4 class="m-t-0 header-title"><i class="fa fa-list-alt"></i><span> Historial </span></h4>                  
                                        <button type="button" class="btn btn-lg btn-inverse btn-custom waves-effect waves-light" id="primary-alert"><i class="fa fa-plus  mr-2"></i>Nuevo</button>
                                    </div>
                                        
                                    <div class="">
                                        <div class="p-20">
                                            <h4 class="m-b-20 header-title"><b>Consulta General</b></h4>
                                            <div class="nicescroll p-l-r-10" style="max-height: 300px;">
                                                <div class="timeline-2">
                                                    <div class="time-item">
                                                        <div class="col-12">
                                                            <div class="portlet">
                                                                <div class="portlet-heading bg-custom">
                                                                    <div class="portlet-widgets">
                                                                        <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
                                                                        <span class="divider"></span>
                                                                        <a data-toggle="collapse" data-parent="#accordion1" href="#historial-1"><i class="ion-minus-round"></i></a>
                                                                        <span class="divider"></span>
                                                                        <a href="#" data-toggle="remove"><i class="ion-close-round"></i></a>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                    <div class="d-flex justify-content-around">
                                                                        <div>
                                                                            <h1 class="text-center">
                                                                                23
                                                                            </h1>
                                                                            <h4>
                                                                                8:30pm
                                                                            </h4>
                                                                        </div>
                                                                        <div>
                                                                            <div class="text-left m-b-30">
                                                                                <p class="text-muted font-16"><strong class="text-white">Pago N°:</strong> <span class="m-l-15 text-white">HMF12415512</span></p>
                                                                                <p class="text-muted font-14"><strong class="text-white">Monto:</strong> <span class="m-l-15 text-white">S/. 4000</span></p>
                                                                                <p class="text-muted font-14"><strong class="text-white">Metodo:</strong> <span class="m-l-15 text-white">Debito</span></p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                </div>
                                                                <div id="historial-1" class="panel-collapse collapse show">
                                                                    <div class="portlet-body">
                                                                        <div class="text-left  m-b-30">
                                                                            <p class="text-muted font-16"><strong>N° Historia :</strong> <span class="m-l-15">HMF12415512</span></p>
                                                                            <hr>
                                                                            <p class="text-muted font-14"><strong>Sintoma:</strong> <span class="m-l-15">Dolor de pata</span></p>

                                                                            <p class="text-muted font-14"><strong>Diagnostico:</strong><span class="m-l-15">Fracturacion de hueso</span></p>

                                                                            <p class="text-muted font-14"><strong>Tratamiento :</strong> <span class="m-l-15">Operacion urgente y descanso medico</span></p>
                                                                        </div>
                                                                        <hr>
                                                                        <div class="text-left  m-b-30">
                                                                            <p class="text-muted font-14"><i class="fa fa-paperclip m-r-10 m-b-10"></i><strong>Archivos adjuntos :</strong></p>
                                                                            <div class="d-flex justify-content-between">
                                                                                <p class="text-muted font-14"><strong>Imagenes:</strong> <span class="m-l-15">Sin imagenes</span></p>
                                                                                <i class="fa fa-upload " style="cursor: pointer;"></i>                                                                            
                                                                        </div>            
                                                                           
                                                                            <p class="text-muted font-14"><strong>Archivos PDF:</strong><span class="m-l-15">Sin archivos PDF</span></p>
                                                                        </div>
                                                                    </div>                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                
                                                    <div class="time-item">
                                                        <div class="col-12">
                                                            <div class="portlet">
                                                                <div class="portlet-heading bg-primary">
                                                                    <h3 class="portlet-title">
                                                                        Dr Gonzalo 15-05-2021
                                                                    </h3>
                                                                    <div class="portlet-widgets">
                                                                        <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
                                                                        <span class="divider"></span>
                                                                        <a data-toggle="collapse" data-parent="#accordion2" href="#historial-2"><i class="ion-minus-round"></i></a>
                                                                        <span class="divider"></span>
                                                                        <a href="#" data-toggle="remove"><i class="ion-close-round"></i></a>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                                <div id="historial-2" class="panel-collapse collapse show">
                                                                    <div class="portlet-body">
                                                                        <div class="text-left  m-b-30">
                                                                            <p class="text-muted font-16"><strong>N° Historia :</strong> <span class="m-l-15">HMF12415512</span></p>
                                                                            <hr>
                                                                            <p class="text-muted font-14"><strong>Sintoma:</strong> <span class="m-l-15">Dolor de pata</span></p>

                                                                            <p class="text-muted font-14"><strong>Diagnostico:</strong><span class="m-l-15">Fracturacion de hueso</span></p>

                                                                            <p class="text-muted font-14"><strong>Tratamiento :</strong> <span class="m-l-15">Operacion urgente y descanso medico</span></p>

                                                                        </div>                                                                    </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="time-item">
                                                        <div class="col-12">
                                                            <div class="portlet">
                                                                <div class="portlet-heading bg-success">
                                                                    <h3 class="portlet-title">
                                                                        Dr Gonzalo 15-05-2021
                                                                    </h3>
                                                                    <div class="portlet-widgets">
                                                                        <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
                                                                        <span class="divider"></span>
                                                                        <a data-toggle="collapse" data-parent="#accordion2" href="#historial-3"><i class="ion-minus-round"></i></a>
                                                                        <span class="divider"></span>
                                                                        <a href="#" data-toggle="remove"><i class="ion-close-round"></i></a>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                                <div id="historial-3" class="panel-collapse collapse show">
                                                                    <div class="portlet-body">
                                                                        <div class="text-left  m-b-30">
                                                                            <p class="text-muted font-16"><strong>N° Historia :</strong> <span class="m-l-15">HMF12415512</span></p>
                                                                            <hr>
                                                                            <p class="text-muted font-14"><strong>Sintoma:</strong> <span class="m-l-15">Dolor de pata</span></p>

                                                                            <p class="text-muted font-14"><strong>Diagnostico:</strong><span class="m-l-15">Fracturacion de hueso</span></p>

                                                                            <p class="text-muted font-14"><strong>Tratamiento :</strong> <span class="m-l-15">Operacion urgente y descanso medico</span></p>

                                                                        </div>                                                                    </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                        </div>
                                    </div>
                                    
                                    <div class="">
                                        <div class="p-20">
                                            <h4 class="m-b-20 header-title"><b>Archivos</b></h4>
                                            <div class="nicescroll p-l-r-10" style="max-height: 300px;">
                                                <div class="timeline-2">
                                                    <div class="time-item">
                                                        <div class="col-6">
                                                            <div class="portlet">
                                                                <div class="portlet-heading bg-custom">
                                                                    <h3 class="portlet-title">
                                                                        Dr john Calua 15-05-2021
                                                                    </h3>
                                                                    <div class="portlet-widgets">
                                                                        <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
                                                                        <span class="divider"></span>
                                                                        <a data-toggle="collapse" data-parent="#accordion1" href="#historial-4"><i class="ion-minus-round"></i></a>
                                                                        <span class="divider"></span>
                                                                        <a href="#" data-toggle="remove"><i class="ion-close-round"></i></a>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                                <div id="historial-4" class="panel-collapse collapse show">
                                                                    <div class="portlet-body">
                                                                        <div class="text-left  m-b-30">
                                                                            <p class="text-muted font-14"><i class="fa fa-paperclip m-r-10 m-b-10"></i><strong>Archivos adjuntos :</strong></p>
                                                                            <div class="d-flex justify-content-between">
                                                                                <p class="text-muted font-14"><strong>Imagenes:</strong> <span class="m-l-15">Sin imagenes</span></p>
                                                                                <i class="fa fa-upload " style="cursor: pointer;"></i>                                                                            
                                                                        </div>            
                                                                           
                                                                            <p class="text-muted font-14"><strong>Archivos PDF:</strong><span class="m-l-15">Sin archivos PDF</span></p>
                                                                        </div>
                                                                    </div>                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                
                                                    <div class="time-item">
                                                        <div class="col-6">
                                                            <div class="portlet">
                                                                <div class="portlet-heading bg-primary">
                                                                    <h3 class="portlet-title">
                                                                        Dr Gonzalo 15-05-2021
                                                                    </h3>
                                                                    <div class="portlet-widgets">
                                                                        <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
                                                                        <span class="divider"></span>
                                                                        <a data-toggle="collapse" data-parent="#accordion2" href="#historial-5"><i class="ion-minus-round"></i></a>
                                                                        <span class="divider"></span>
                                                                        <a href="#" data-toggle="remove"><i class="ion-close-round"></i></a>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                                <div id="historial-5" class="panel-collapse collapse show">
                                                                    <div class="portlet-body">
                                                                        <div class="text-left  m-b-30">
                                                                            <p class="text-muted font-16"><strong>N° Historia :</strong> <span class="m-l-15">HMF12415512</span></p>
                                                                            <hr>
                                                                            <p class="text-muted font-14"><strong>Sintoma:</strong> <span class="m-l-15">Dolor de pata</span></p>

                                                                            <p class="text-muted font-14"><strong>Diagnostico:</strong><span class="m-l-15">Fracturacion de hueso</span></p>

                                                                            <p class="text-muted font-14"><strong>Tratamiento :</strong> <span class="m-l-15">Operacion urgente y descanso medico</span></p>

                                                                        </div>                                                                    </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="time-item">
                                                        <div class="col-6">
                                                            <div class="portlet">
                                                                <div class="portlet-heading bg-success">
                                                                    <h3 class="portlet-title">
                                                                        Dr Gonzalo 15-05-2021
                                                                    </h3>
                                                                    <div class="portlet-widgets">
                                                                        <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
                                                                        <span class="divider"></span>
                                                                        <a data-toggle="collapse" data-parent="#accordion2" href="#historial-6"><i class="ion-minus-round"></i></a>
                                                                        <span class="divider"></span>
                                                                        <a href="#" data-toggle="remove"><i class="ion-close-round"></i></a>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                                <div id="historial-6" class="panel-collapse collapse show">
                                                                    <div class="portlet-body">
                                                                        <div class="text-left  m-b-30">
                                                                            <p class="text-muted font-16"><strong>N° Historia :</strong> <span class="m-l-15">HMF12415512</span></p>
                                                                            <hr>
                                                                            <p class="text-muted font-14"><strong>Sintoma:</strong> <span class="m-l-15">Dolor de pata</span></p>

                                                                            <p class="text-muted font-14"><strong>Diagnostico:</strong><span class="m-l-15">Fracturacion de hueso</span></p>

                                                                            <p class="text-muted font-14"><strong>Tratamiento :</strong> <span class="m-l-15">Operacion urgente y descanso medico</span></p>
                                                                            </div>
                                                                        </div>                                                                
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                            </div><!-- end debajo de card Box -->            
                                                
                                </div>
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