<div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="inicio.php" class="logo"><i class="icon-magnet icon-c-logo"></i><span>Vet Fact</span></a>
                        <!-- Image Logo here -->
                        <!--<a href="index.html" class="logo">-->
                            <!--<i class="icon-c-logo"> <img src="assets/images/logo_sm.png" height="42"/> </i>-->
                            <!--<span><img src="assets/images/logo_light.png" height="20"/></span>-->
                        <!--</a>-->
                    </div>
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <nav class="navbar-custom">

                    <ul class="list-inline float-right mb-0">
                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="false" aria-expanded="false">
                                <i class="dripicons-bell noti-icon"></i>
                                <span class="badge badge-pink noti-icon-badge">4</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-lg" aria-labelledby="Preview">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5><span class="badge badge-danger float-right">5</span>Notification</h5>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-success"><i class="icon-bubble"></i></div>
                                    <p class="notify-details">Robert S. Taylor commented on Admin<small class="text-muted">1 min ago</small></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-info"><i class="icon-user"></i></div>
                                    <p class="notify-details">New user registered.<small class="text-muted">1 min ago</small></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-danger"><i class="icon-like"></i></div>
                                    <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">1 min ago</small></p>
                                </a>

                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item notify-all">
                                    View All
                                </a>

                            </div>
                        </li>

                        <li class="list-inline-item notification-list">
                            <a class="nav-link waves-light waves-effect" href="#" id="btn-fullscreen">
                                <i class="dripicons-expand noti-icon"></i>
                            </a>
                        </li>
                        	<!--logo user-->
                        <li class="list-inline-item notification-list">
                            <a class="nav-link right-bar-toggle waves-light waves-effect" href="#">
                                <i class="dripicons-message noti-icon"></i>
                            </a>
                        </li>

                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="false" aria-expanded="false">
                                <img src="static/img/avatar.png" alt="user" class="rounded-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="text-overflow"><small>Welcome ! John</small> </h5>
                                </div>

                                <!-- item-->
                                <a href="perfil.php" class="dropdown-item notify-item">
                                    <i class="md md-account-circle"></i> <span>Perfil</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="md md-settings"></i> <span>Settings</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="md md-lock-open"></i> <span>Lock Screen</span>
                                </a>

                                <!-- item-->
                                <a href="ingresar.php" class="dropdown-item notify-item">
                                    <i class="md md-settings-power"></i> <span>Cerrar Sesion</span>
                                </a>

                            </div>
                        </li>

                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left waves-light waves-effect">
                                <i class="dripicons-menu"></i>
                            </button>
                        </li>
                        <li class="app-search">                         
                                <input type="text" placeholder="Veterinara Animal World" class="form-control" style="font-size: 20px; width: 350px; text-align:center; font-weight:bold" disabled>
                        </li>
                    </ul>

                </nav>
            </div>

                        <!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>

                        	<li class="text-muted menu-title">Navigation</li>

                            <li class="has_sub">
                                <a href="inicio.php" class="waves-effect"><i class="ti-home"></i> <span> Inicio </span> <span class="menu-arrow"></span></a>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-crown"></i> <span> Clientes </span> <span class="menu-arrow"></span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="registro_cliente.php">Registro de Perfil</a></li>
                                    <li><a href="lista_cliente.php">Lista de Cliente</a></li>
                                    <!--<li><a href="perfil_cliente.php">Perfil Cliente</a></li>-->
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ion-ios7-paw-outline"></i><span class="label label-primary pull-right">10</span><span> Mascotas </span> </a>
                                <ul class="list-unstyled">
                                    <!--<li><a href="Registro_mascota.php">Registro de Mascota</a></li>-->
                                    <li><a href="lista_mascota.php">Lista de Mascotas</a></li>
                                    <li><a href="lista_especie.php">Especies</a></li>
                                    <li><a href="lista_raza.php">Razas</a></li>
                                    <!--<li><a href="perfil_mascota">Perfil de mascotas</a></li>-->
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-files"></i> <span> Citas </span> <span class="menu-arrow"></span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="registro_cita.php">Registro de Citas</a></li>
                                    <li><a href="lista_cita.php">Lista de Citas</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-pencil-alt"></i><span> Inventario </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="registro_producto.php">Registro de Producto</a></li>
                                    <li><a href="lista_producto.php">Lista de Producto</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-shopping-cart"></i><span>Ventas </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="registro_venta.php">Registro de Venta</a></li>
                                    <li><a href="lista_venta.php">Lista de Venta</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-user"></i><span class="label label-pink pull-right">11</span><span> Usuarios </span></a>
                                <ul class="list-unstyled">
                                    <li><a href="registro_usuario.php">Registro Usuario</a></li>
                                    <li><a href="Lista_usuario.php">Lista Usuario</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-bag"></i><span class="label label-success pull-right">107</span><span> Empresas </span></a>
                                <ul class="list-unstyled">
                                    <li><a href="empresa.php"> Editar Sede</a></li>
                                    <li><a href="lista_empresa.php"> Lista de Sedes</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class=" ti-stats-up"></i><span> Estadisticas </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="estadisticas.php">Graficos</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>