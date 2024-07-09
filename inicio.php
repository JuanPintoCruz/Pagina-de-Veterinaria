<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="coderthemes.com/ubold/light/assets/images/favicon.ico">

        <title>Veterinaria GO</title>

        <!--calendar css-->
        <link href="coderthemes.com/ubold/plugins/fullcalendar/css/fullcalendar.min.css" rel="stylesheet" />
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
                            <div class="col-lg-12">

                                <div class="row">
                                    <div class="col-lg-2">
                                        <div class="widget">
                                            <div class="widget-body">
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <a href="#" data-toggle="modal" data-target="#add-category" class="btn btn-lg btn-default btn-block waves-effect waves-light">
                                                            <i class="fa fa-plus"></i> Nueva Categoria
                                                        </a>
                                                        <div id="external-events" class="m-t-20">
                                                            <br>
                                                            <p>Seleccione la accion a realizar:</p>
                                                            <div class="external-event bg-primary" data-class="bg-primary" style="position: relative;">
                                                                <i class="fa fa-move"></i>Citas de cliente con perro
                                                            </div>
                                                            <div class="external-event bg-purple" data-class="bg-pink" style="position: relative;">
                                                                <i class="fa fa-move"></i>Citas de cliente con gato
                                                            </div>
                                                            <div class="external-event bg-info" data-class="bg-info" style="position: relative;">
                                                                <i class="fa fa-move"></i>Citas de solo consultas
                                                            </div>
                                                            <div class="external-event bg-danger" data-class="bg-info" style="position: relative;">
                                                                <i class="fa fa-move"></i>Operacion emergencia
                                                            </div>
                                                        </div>

                                                        <!-- checkbox -->
                                                        <div class="checkbox m-t-40">
                                                            <input id="drop-remove" type="checkbox">
                                                            <label for="drop-remove">
                                                                Guardar cambios al salir
                                                            </label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end col-->
                                    <div class="col-lg-10">
                                        <div class="card-box">
                                        <div id="" class="fc fc-unthemed fc-ltr"> <!-- #calendar-->
                                                <div class="fc-toolbar">
                                                    <div class="fc-left">
                                                        <div class="fc-button-group">
                                                            <button type="button" class="fc-prev-button fc-button fc-state-default fc-corner-left">
                                                                <span class="fc-icon fc-icon-left-single-arrow"></span></button>
                                                                <button type="button" class="fc-next-button fc-button fc-state-default fc-corner-right">
                                                                    <span class="fc-icon fc-icon-right-single-arrow"></span></button>
                                                        </div>
                                                        <button type="button" class="fc-today-button fc-button fc-state-default fc-corner-left fc-corner-right fc-state-disabled" disabled="">Hoy</button>
                                                    </div>
                                                    <div class="fc-right ">
                                                        <div class="fc-button-group mt-1"><button type="button" class="fc-month-button fc-button fc-state-default fc-corner-left fc-state-active">Mes</button>
                                                            <button type="button" class="fc-agendaWeek-button fc-button fc-state-default">Semana</button><button type="button" class="fc-agendaDay-button fc-button fc-state-default fc-corner-right">Dia</button>
                                                        </div>
                                                    </div>
                                                    <div class="fc-center">
                                                        <h2>Setiembre 2021</h2>
                                                    </div>
                                                    <div class="fc-clear"></div>
                                                </div>
                                    <div class="fc-view-container">
                                        <div class="fc-view fc-month-view fc-basic-view" >
                                        <table>
                                         <thead class="fc-head">
                                            <tr>
                                                <td class="fc-head-container fc-widget-header">
                                                <div class="fc-row fc-widget-header">
                                        <table>
                                         <thead>
                                            <tr>
                                                <th class="fc-day-header fc-widget-header fc-sun">DO</th>
                                                <th class="fc-day-header fc-widget-header fc-mon">LU</th>
                                                <th class="fc-day-header fc-widget-header fc-tue">MA</th>
                                                <th class="fc-day-header fc-widget-header fc-wed">MI</th>
                                                <th class="fc-day-header fc-widget-header fc-thu">JU</th>
                                                <th class="fc-day-header fc-widget-header fc-fri">VI</th>
                                                <th class="fc-day-header fc-widget-header fc-sat">SA</th>
                                            </tr>
                                        </thead>
                                    </table>
                            </div>
                             </td>
                            </tr>
                            </thead>
                            <tbody class="fc-body">
                                <tr>
                                    <td class="fc-widget-content">
                                        <div class="fc-scroller fc-day-grid-container" style="overflow: hidden scroll; height: 639px;">
                                        <div class="fc-day-grid fc-unselectable">
                                        <div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 106px;">
                                        <div class="fc-bg">
                                            <table>
                                                 <tbody>
                                                  <tr>
                                                    <td class="fc-day fc-widget-content fc-sun fc-other-month fc-past" data-date="2021-08-29">
                                                     </td>
                                                    <td class="fc-day fc-widget-content fc-mon fc-other-month fc-past" data-date="2021-08-30">
                                                    </td>
                                                    <td class="fc-day fc-widget-content fc-tue fc-other-month fc-past" data-date="2021-08-31">
                                                     </td>
                                                    <td class="fc-day fc-widget-content fc-wed fc-past" data-date="2021-09-01">
                                                    </td>
                                                    <td class="fc-day fc-widget-content fc-thu fc-past" data-date="2021-09-02">
                                                    </td>
                                                     <td class="fc-day fc-widget-content fc-fri fc-today fc-state-highlight" data-date="2021-09-03"></td>
                                                    <td class="fc-day fc-widget-content fc-sat fc-future" data-date="2021-09-04"></td>
                                                  </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                               <div class="fc-content-skeleton">
                                                 <table>
                                                     <thead>
                                                <tr>
                                                    <td class="fc-day-number fc-sun fc-other-month fc-past" data-date="2021-08-29">29</td>
                                                    <td class="fc-day-number fc-mon fc-other-month fc-past" data-date="2021-08-30">30</td>
                                                    <td class="fc-day-number fc-tue fc-other-month fc-past" data-date="2021-08-31">31</td>
                                                    <td class="fc-day-number fc-wed fc-past" data-date="2021-09-01">1</td>
                                                    <td class="fc-day-number fc-thu fc-past" data-date="2021-09-02">2</td>
                                                    <td class="fc-day-number fc-fri fc-today fc-state-highlight" data-date="2021-09-03">3</td>
                                                    <td class="fc-day-number fc-sat fc-future" data-date="2021-09-04">4</td>
                                                </tr>
                                            </thead>
                                        <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                     <td></td>
                                                    <td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-danger fc-draggable"><div class="fc-content" style="vertical-align: middle;"><span class="fc-time">4:00pm</span> <span class="fc-title">Emergencia</span></div></a></td>
                                                     <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                                <div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 106px;">
                                                <div class="fc-bg">
                                            <table>
                                                <tbody>
                                                  <tr>
                                                     <td class="fc-day fc-widget-content fc-sun fc-future" data-date="2021-09-05"></td>
                                                    <td class="fc-day fc-widget-content fc-mon fc-future" data-date="2021-09-06"></td>
                                                    <td class="fc-day fc-widget-content fc-tue fc-future" data-date="2021-09-07"></td>
                                                    <td class="fc-day fc-widget-content fc-wed fc-future" data-date="2021-09-08"></td>
                                                    <td class="fc-day fc-widget-content fc-thu fc-future" data-date="2021-09-09"></td>
                                                    <td class="fc-day fc-widget-content fc-fri fc-future" data-date="2021-09-10"></td>
                                                    <td class="fc-day fc-widget-content fc-sat fc-future" data-date="2021-09-11"></td>
                                                  </tr>
                                             </tbody>
                                       </table>
                                     </div>
                                    <div class="fc-content-skeleton">
                                    <table>
                                         <thead>
                                                 <tr>
                                                    <td class="fc-day-number fc-sun fc-future" data-date="2021-09-05">5</td>
                                                    <td class="fc-day-number fc-mon fc-future" data-date="2021-09-06">6</td>
                                                    <td class="fc-day-number fc-tue fc-future" data-date="2021-09-07">7</td>
                                                    <td class="fc-day-number fc-wed fc-future" data-date="2021-09-08">8</td>
                                                    <td class="fc-day-number fc-thu fc-future" data-date="2021-09-09">9</td>
                                                     <td class="fc-day-number fc-fri fc-future" data-date="2021-09-10">10</td>
                                                     <td class="fc-day-number fc-sat fc-future" data-date="2021-09-11">11</td>
                                                </tr>
                                            </thead>
                                                <tbody>
                                                <tr>
                                                    <td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-purple fc-draggable"><div class="fc-content"><span class="fc-time">8:30am</span> <span class="fc-title">Cita</span></div></a></td>
                                                    <td></td>
                                                    <td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-primary fc-draggable"><div class="fc-content"><span class="fc-time">10:33am</span> <span class="fc-title">Consulta</span></div></a></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                 </div>
                                        <div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 106px;">
                                             <div class="fc-bg">
                                             <table>
                                            <tbody>
                                                 <tr>
                                                <td class="fc-day fc-widget-content fc-sun fc-future" data-date="2021-09-12"></td>
                                                 <td class="fc-day fc-widget-content fc-mon fc-future" data-date="2021-09-13"></td>
                                                 <td class="fc-day fc-widget-content fc-tue fc-future" data-date="2021-09-14"></td>
                                                 <td class="fc-day fc-widget-content fc-wed fc-future" data-date="2021-09-15"></td>
                                                <td class="fc-day fc-widget-content fc-thu fc-future" data-date="2021-09-16"></td>
                                                 <td class="fc-day fc-widget-content fc-fri fc-future" data-date="2021-09-17"></td>
                                                 <td class="fc-day fc-widget-content fc-sat fc-future" data-date="2021-09-18"></td>
                                            </tr>
                                     </tbody>
                                </table>
                             </div>
                                 <div class="fc-content-skeleton">
                                     <table>
                                        <thead>
                                             <tr>
                                             <td class="fc-day-number fc-sun fc-future" data-date="2021-09-12">12</td>
                                            <td class="fc-day-number fc-mon fc-future" data-date="2021-09-13">13</td>
                                             <td class="fc-day-number fc-tue fc-future" data-date="2021-09-14">14</td>
                                            <td class="fc-day-number fc-wed fc-future" data-date="2021-09-15">15</td>
                                            <td class="fc-day-number fc-thu fc-future" data-date="2021-09-16">16</td>
                                            <td class="fc-day-number fc-fri fc-future" data-date="2021-09-17">17</td>
                                           <td class="fc-day-number fc-sat fc-future" data-date="2021-09-18">18</td>
                                        </tr>
                                     </thead>
                                    <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                              </tbody>
                            </table>
                        </div>
                    </div>
                                <div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 106px;">
                                 <div class="fc-bg">
                              <table>
                                <tbody>
                                <tr>
                                 <td class="fc-day fc-widget-content fc-sun fc-future" data-date="2021-09-19"></td>
                                <td class="fc-day fc-widget-content fc-mon fc-future" data-date="2021-09-20"></td>
                                 <td class="fc-day fc-widget-content fc-tue fc-future" data-date="2021-09-21"></td>
                                <td class="fc-day fc-widget-content fc-wed fc-future" data-date="2021-09-22"></td>
                                <td class="fc-day fc-widget-content fc-thu fc-future" data-date="2021-09-23"></td>
                                 <td class="fc-day fc-widget-content fc-fri fc-future" data-date="2021-09-24"></td>
                                 <td class="fc-day fc-widget-content fc-sat fc-future" data-date="2021-09-25"></td>
                            </tr>
                        </tbody>
                 </table>
               </div>
                <div class="fc-content-skeleton">
                     <table>
                        <thead>
                            <tr>
                             <td class="fc-day-number fc-sun fc-future" data-date="2021-09-19">19</td>
                             <td class="fc-day-number fc-mon fc-future" data-date="2021-09-20">20</td>
                             <td class="fc-day-number fc-tue fc-future" data-date="2021-09-21">21</td>
                            <td class="fc-day-number fc-wed fc-future" data-date="2021-09-22">22</td>
                            <td class="fc-day-number fc-thu fc-future" data-date="2021-09-23">23</td>
                             <td class="fc-day-number fc-fri fc-future" data-date="2021-09-24">24</td>
                            <td class="fc-day-number fc-sat fc-future" data-date="2021-09-25">25</td>
                        </tr>
                    </thead>
                     <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                             <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                    </table>
                </div>
            </div>
                <div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 106px;">
                <div class="fc-bg">
                     <table>
                        <tbody>
                        <tr>
                            <td class="fc-day fc-widget-content fc-sun fc-future" data-date="2021-09-26"></td>
                            <td class="fc-day fc-widget-content fc-mon fc-future" data-date="2021-09-27"></td>
                            <td class="fc-day fc-widget-content fc-tue fc-future" data-date="2021-09-28"></td>
                            <td class="fc-day fc-widget-content fc-wed fc-future" data-date="2021-09-29"></td>
                            <td class="fc-day fc-widget-content fc-thu fc-future" data-date="2021-09-30"></td>
                            <td class="fc-day fc-widget-content fc-fri fc-other-month fc-future" data-date="2021-10-01"></td>
                            <td class="fc-day fc-widget-content fc-sat fc-other-month fc-future" data-date="2021-10-02"></td>
                        </tr>
                    </tbody>
                </table>
                </div>
                  <div class="fc-content-skeleton">
                 <table>
                   <thead>
                     <tr>
                        <td class="fc-day-number fc-sun fc-future" data-date="2021-09-26">26</td>
                        <td class="fc-day-number fc-mon fc-future" data-date="2021-09-27">27</td>
                        <td class="fc-day-number fc-tue fc-future" data-date="2021-09-28">28</td>
                        <td class="fc-day-number fc-wed fc-future" data-date="2021-09-29">29</td>
                        <td class="fc-day-number fc-thu fc-future" data-date="2021-09-30">30</td>
                        <td class="fc-day-number fc-fri fc-other-month fc-future" data-date="2021-10-01">1</td>
                        <td class="fc-day-number fc-sat fc-other-month fc-future" data-date="2021-10-02">2</td>
                   </tr>
                </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                   <td></td>
                   <td> </td>
               </tr>
            </tbody>
        </table>
     </div>
    </div>
<div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 109px;">
    <div class="fc-bg">
     <table>
<tbody>
 <tr>
                                                                                                        <td class="fc-day fc-widget-content fc-sun fc-other-month fc-future" data-date="2021-10-03"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-mon fc-other-month fc-future" data-date="2021-10-04"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-tue fc-other-month fc-future" data-date="2021-10-05"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-wed fc-other-month fc-future" data-date="2021-10-06"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-thu fc-other-month fc-future" data-date="2021-10-07"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-fri fc-other-month fc-future" data-date="2021-10-08"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-sat fc-other-month fc-future" data-date="2021-10-09"></td>
</tr>
</tbody>
</table>
</div>
<div class="fc-content-skeleton">
 <table>
    <thead>
   <tr>
                                                                                                        <td class="fc-day-number fc-sun fc-other-month fc-future" data-date="2021-10-03">3</td>
                                                                                                        <td class="fc-day-number fc-mon fc-other-month fc-future" data-date="2021-10-04">4</td>
                                                                                                        <td class="fc-day-number fc-tue fc-other-month fc-future" data-date="2021-10-05">5</td>
                                                                                                        <td class="fc-day-number fc-wed fc-other-month fc-future" data-date="2021-10-06">6</td>
                                                                                                        <td class="fc-day-number fc-thu fc-other-month fc-future" data-date="2021-10-07">7</td>
                                                                                                        <td class="fc-day-number fc-fri fc-other-month fc-future" data-date="2021-10-08">8</td>
                                                                                                        <td class="fc-day-number fc-sat fc-other-month fc-future" data-date="2021-10-09">9</td>
 </tr>
 </thead>
  <tbody>
       <tr>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
                                                                                                        <td></td>
 </tr>
  </tbody>
 </table>
    </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                    </div> <!-- end col -->
                                </div>  <!-- end row -->

                                <!-- BEGIN MODAL -->
                                <div class="modal fade none-border" id="event-modal">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title font-18 mt-0"><strong>Agregar Cita</strong></h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            </div>
                                            <div class="modal-body"></div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-white waves-effect" data-dismiss="modal">Cerrar</button>
                                                <button type="button" class="btn btn-success save-event waves-effect waves-light">Crear</button>
                                                <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Cerrar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal Add Category -->
                                <div class="modal fade none-border" id="add-category">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title font-18 mt-0"><strong>Nueva</strong> categoria</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <form role="form">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label class="control-label">Nombre</label>
                                                            <input class="form-control form-white" placeholder="" type="text" name="category-name"/>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="control-label">Tipo de categoria</label>
                                                            <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                                                <option value="success">Completado</option>
                                                                <option value="danger">Emergencia</option>
                                                                <option value="info">Info</option>
                                                                <option value="pink">Pink</option>
                                                                <option value="primary">Perros</option>
                                                                <option value="warning">Warning</option>
                                                                <option value="inverse">Inverse</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-white waves-effect" data-dismiss="modal">Cerrar</button>
                                                <button type="button" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal">Guardar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END MODAL -->
                            </div>
                            <!-- end col-12 -->
                        </div> <!-- end row -->
                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    &copy; 2016 - 2018. All rights reserved.
                </footer>

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

        <!-- BEGIN PAGE SCRIPTS -->
        <script src="coderthemes.com/ubold/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="coderthemes.com/ubold/plugins/moment/moment.js"></script>
        <script src='coderthemes.com/ubold/plugins/fullcalendar/js/fullcalendar.min.js'></script>
        <script src="coderthemes.com/ubold/light/assets/pages/jquery.fullcalendar.js"></script>

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