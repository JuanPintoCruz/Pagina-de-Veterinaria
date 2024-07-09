<!DOCTYPE html>
<html>
    
<!-- Mirrored from coderthemes.com/ubold/light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Nov 2018 20:23:01 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="coderthemes.com/ubold/light/assets/images/favicon.ico">

        <title>Ubold - Responsive Admin Dashboard Template</title>
        
        <link href="coderthemes.com/ubold/plugins/c3/c3.min.css" rel="stylesheet" type="text/css"  />
        <!--Morris Chart CSS -->
		<link rel="stylesheet" href="coderthemes.com/ubold/plugins/morris/morris.css">
        <link href="coderthemes.com/ubold/plugins/nvd3/nv.d3.min.css" rel="stylesheet" type="text/css" />

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
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="btn-group pull-right m-t-15">
                                    <button type="button" class="btn btn-default dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">Settings</button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="btnGroupDrop1">
                                        <a class="dropdown-item" href="#">Dropdown One</a>
                                        <a class="dropdown-item" href="#">Dropdown Two</a>
                                        <a class="dropdown-item" href="#">Dropdown Three</a>
                                        <a class="dropdown-item" href="#">Dropdown Four</a>
                                    </div>
                                </div>

                                <h4 class="page-title">Dashboard</h4>
                                <p class="text-muted page-title-alt">Welcome to Ubold admin panel !</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-lg-6 col-xl-3">
                                <div class="widget-bg-color-icon card-box fadeInDown animated">
                                    <div class="bg-icon bg-icon-info pull-left">
                                        <i class="md md-attach-money text-info"></i>
                                    </div>
                                    <div class="text-right">
                                        <h3 class="text-dark"><b class="counter">31,570</b></h3>
                                        <p class="text-muted mb-0">Total Revenue</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-6 col-xl-3">
                                <div class="widget-bg-color-icon card-box">
                                    <div class="bg-icon bg-icon-pink pull-left">
                                        <i class="md md-add-shopping-cart text-pink"></i>
                                    </div>
                                    <div class="text-right">
                                        <h3 class="text-dark"><b class="counter">280</b></h3>
                                        <p class="text-muted mb-0">Today's Sales</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-6 col-xl-3">
                                <div class="widget-bg-color-icon card-box">
                                    <div class="bg-icon bg-icon-purple pull-left">
                                        <i class="md md-equalizer text-purple"></i>
                                    </div>
                                    <div class="text-right">
                                        <h3 class="text-dark"><b class="counter">0.16</b>%</h3>
                                        <p class="text-muted mb-0">Conversion</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-6 col-xl-3">
                                <div class="widget-bg-color-icon card-box">
                                    <div class="bg-icon bg-icon-success pull-left">
                                        <i class="md md-remove-red-eye text-success"></i>
                                    </div>
                                    <div class="text-right">
                                        <h3 class="text-dark"><b class="counter">64,570</b></h3>
                                        <p class="text-muted mb-0">Today's Visits</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            
                            <div class="col-8">                                
                                <div class="card-box">
                                    <h4 class="m-t-0 m-b-30 header-title"><b>Ventas realizadas del mes actual</b></h4>
                                    <div id="chart-stacked"></div>
                                    
                                    <div class="row mt-5">
                                        <div class="col-lg-12 col-xl-4">
                                            <div class="card-box">
                                                <div class="bar-widget">
                                                    <div class="table-box">
                                                        <div class="table-detail">
                                                            <div class="iconbox bg-custom">
                                                                <i class="icon-layers"></i>
                                                            </div>
                                                        </div>

                                                        <div class="table-detail">
                                                            <h4 class="m-t-0 m-b-5"><b>3256</b></h4>
                                                            <h5 class="text-muted m-b-0 m-t-0">Ventas</h5>
                                                        </div>
                                                        <div class="table-detail text-right">
                                                            <span data-plugin="peity-bar" data-colors="#5fbeaa,#ebeff2" data-width="120" data-height="45">5,3,9,6,5,9,7,3,5,2,9,7,2,1</span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-xl-4">
                                            <div class="card-box">
                                                <div class="bar-widget">
                                                    <div class="table-box">
                                                        <div class="table-detail">
                                                            <div class="iconbox bg-danger">
                                                                <i class="icon-layers"></i>
                                                            </div>
                                                        </div>

                                                        <div class="table-detail">
                                                            <h4 class="m-t-0 m-b-5"><b>1256</b></h4>
                                                            <h5 class="text-muted m-b-0 m-t-0">Compras</h5>
                                                        </div>
                                                        <div class="table-detail text-right">
                                                            <span data-plugin="peity-pie" data-colors="#f05050,#ebeff2" data-width="50" data-height="45">1/5</span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-xl-4">
                                            <div class="card-box">
                                                <div class="bar-widget">
                                                    <div class="table-box">
                                                        <div class="table-detail">
                                                            <div class="iconbox bg-info">
                                                                <i class="icon-layers"></i>
                                                            </div>
                                                        </div>

                                                        <div class="table-detail">
                                                            <h4 class="m-t-0 m-b-5"><b>2256</b></h4>
                                                            <h5 class="text-muted m-b-0 m-t-0">Ganancia neta</h5>
                                                        </div>
                                                        <div class="table-detail text-right">
                                                            <span data-plugin="peity-donut" data-colors="#34d3eb,#ebeff2" data-width="50" data-height="45">3/5</span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>        
                                               
                                </div>
                            </div>

                            <div class="col-lg-12 col-xl-4">
                        		<div class="card-box" style="height:575px;">
                        			<h4 class="text-dark header-title m-t-0 m-b-30">Total Ventas</h4>

                        			<div class="widget-chart text-center">
                                        <input class="knob" data-width="150" data-height="150" data-linecap=round data-fgColor="#fb6d9d" value="80" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".15"/>
	                                	<h5 class="text-muted m-t-20 font-16">Total de ventas del dia</h5>
	                                	<h2 class="font-600">S/. 2005</h2>
	                                	<ul class="list-inline m-t-15">
	                                		<li class="list-inline-item">
	                                			<h5 class="text-muted m-t-20 font-16">Venta por boleta</h5>
	                                			<h4 class="m-b-0">S/. 1000</h4>
	                                		</li>
	                                		<li class="list-inline-item">
	                                			<h5 class="text-muted m-t-20 font-16">Venta por factura</h5>
	                                			<h4 class="m-b-0">S/. 523</h4>
	                                		</li>
	                                		<li class="list-inline-item">
	                                			<h5 class="text-muted m-t-20 font-16">Compras</h5>
	                                			<h4 class="m-b-0">S/. 965</h4>
	                                		</li>
	                                	</ul>
                                	</div>
                        		</div>
                            </div>                       
						</div>
                        <!-- end row -->


                        <div class="row">

                            <div class="col-sm-12">
                                <div class="card-box">
                                    <h4 class="m-t-0 m-b-20 header-title"><b>Presentacion grafica de ventas del año</b></h4>

                                    <div class="bar-chart">
                                        <svg style="height:400px;width:100%"></svg>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xl-3 m-auto">
                                        <div class="card-box widget-box-1 bg-custom">
                                            <i class="fa fa-info-circle text-white pull-right inform" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Eres seximan y te amo"></i>
                                            <h4 class="text-white font-18">Importe total del año 2021</h4>
                                            <h2 class="text-white text-center">S/. <span data-plugin="counterup">1223652</span></h2>
                                            <p class="text-dark">Total ventas: 22506 <span class="pull-right"><i class="fa fa-caret-up text-primary m-r-5"></i>100%</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="card-box">
                                    <h4 class="m-t-0 m-b-20 header-title"><b>Presentacion grafica de compras del año</b></h4>

                                    <div class="bar-chart-2">
                                        <svg style="height:400px;width:100%"></svg>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xl-3 m-auto">
                                        <div class="card-box widget-box-1 bg-dark">
                                            <i class="fa fa-info-circle text-muted pull-right inform" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Gonzalo es cabro"></i>
                                            <h4 class="text-white font-18">Compra total del año 2021</h4>
                                            <h2 class="text-success text-center">S/. <span data-plugin="counterup">40541</span></h2>
                                            <p class="text-muted">Numero de compras: 503 <span class="pull-right"><i class="fa fa-caret-up text-primary m-r-5"></i>100%</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- col -->

                        	<div class="col-lg-12">
                        		<div class="card-box">
                                    <a href="#" class="pull-right btn btn-default btn-sm waves-effect waves-light">View All</a>
                        			<h4 class="text-dark header-title m-t-0">Recent Orders</h4>
                        			<p class="text-muted m-b-30 font-13">
										Use the button classes on an element.
									</p>

                        			<div class="table-responsive">
                                        <table class="table table-actions-bar m-b-0">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Item Name</th>
                                                    <th>Up-Down</th>
                                                    <th style="min-width: 80px;">Manage</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><span data-plugin="peity-bar" data-colors="#5fbeaa,#5fbeaa" data-width="80" data-height="30">5,3,9,6,5,9,7,3,5,2</span></td>
                                                    <td><img src="assets/images/products/iphone.jpg" class="thumb-sm pull-left m-r-10" alt=""> Apple iPhone </td>
                                                    <td><span class="text-custom">+$230</span></td>
                                                    <td>
                                                    	<a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                                    	<a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td><span data-plugin="peity-line" data-fill="#5fbeaa" data-stroke="#5fbeaa" data-width="80" data-height="30">0,-3,-6,-4,-5,-4,-7,-3,-5,-2</span></td>
                                                    <td><img src="assets/images/products/samsung.jpg" class="thumb-sm pull-left m-r-10" alt=""> Samsung Phone </td>
                                                    <td><span class="text-danger">-$154</span></td>
                                                    <td>
                                                    	<a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                                    	<a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td><span data-plugin="peity-line" data-fill="#fff" data-stroke="#5fbeaa" data-width="80" data-height="30">5,3,9,6,5,9,7,3,5,2</span>
                                                    <td><img src="assets/images/products/imac.jpg" class="thumb-sm pull-left m-r-10" alt=""> Apple iPhone </td>
                                                    <td><span class="text-custom">+$1850</span></td>
                                                    <td>
                                                    	<a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                                    	<a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td><span data-plugin="peity-pie" data-colors="#5fbeaa,#ebeff2" data-width="30" data-height="30">1/5</span></td>
                                                    <td><img src="assets/images/products/macbook.jpg" class="thumb-sm pull-left m-r-10" alt=""> Apple iPhone </td>
                                                    <td><span class="text-danger">-$560</span></td>
                                                    <td>
                                                    	<a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                                    	<a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td><span data-plugin="peity-bar" data-colors="#5fbeaa,#ebeff2" data-width="80" data-height="30">5,3,9,6,5,9,7,3,5,2</span></td>
                                                    <td><img src="assets/images/products/lumia.jpg" class="thumb-sm pull-left m-r-10" alt=""> Lumia iPhone </td>
                                                    <td><span class="text-custom">+$230</span></td>
                                                    <td>
                                                    	<a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                                    	<a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>

                        		</div>
                        	</div>
                        	<!-- end col -->



                        </div>
                        <!-- end row -->


                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    &copy; 2016 - 2018. All rights reserved.
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            <div class="side-bar right-bar nicescroll">
                <h4 class="text-center">Chat</h4>
                <div class="contact-list nicescroll">
                    <ul class="list-group contacts-list">
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-1.jpg" alt="">
                                </div>
                                <span class="name">Chadengle</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-2.jpg" alt="">
                                </div>
                                <span class="name">Tomaslau</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-3.jpg" alt="">
                                </div>
                                <span class="name">Stillnotdavid</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-4.jpg" alt="">
                                </div>
                                <span class="name">Kurafire</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-5.jpg" alt="">
                                </div>
                                <span class="name">Shahedk</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-6.jpg" alt="">
                                </div>
                                <span class="name">Adhamdannaway</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-7.jpg" alt="">
                                </div>
                                <span class="name">Ok</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-8.jpg" alt="">
                                </div>
                                <span class="name">Arashasghari</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-9.jpg" alt="">
                                </div>
                                <span class="name">Joshaustin</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-10.jpg" alt="">
                                </div>
                                <span class="name">Sortino</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /Right-bar -->

        </div>
        <!-- END wrapper -->



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
        
        <!--C3 Chart-->
        <script type="text/javascript" src="coderthemes.com/ubold/plugins/d3/d3.min.js"></script>
        <script type="text/javascript" src="coderthemes.com/ubold/plugins/c3/c3.min.js"></script>
        <script src="coderthemes.com/ubold/light/assets/pages/jquery.c3-chart.init.js"></script>

        <script src="coderthemes.com/ubold/plugins/peity/jquery.peity.min.js"></script>

        <script src="coderthemes.com/ubold/plugins/d3/d3.min.js"></script>

        <script src="coderthemes.com/ubold/plugins/nvd3/nv.d3.min.js"></script>

        <script src="coderthemes.com/ubold/light/assets/pages/jquery.nvd3.init.js"></script>

        

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

<!-- Mirrored from coderthemes.com/ubold/light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Nov 2018 20:24:08 GMT -->
</html>