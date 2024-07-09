<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/css/index2.css">
    <link rel="stylesheet" href="static/css/ingresar.css">
    <title>VetFact</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>

    <section class="nav_2 shadow-lg" id="id_nav_2">

        <h5>VET FACT</h5>
        <hr>
        <div class="nav_2_ul">
            <ul>
                <span class="mr-3" style="font-family: Franklin Gothic;"><i class="fas fa-home"></i></span><a href="index.php">Inicio</a>
            </ul>
            <ul>
                <span class="mr-3" style="font-family: Franklin Gothic;"><i class="far fa-user"></i></span><a href="ingresar.php">Ingresar</a>
            </ul>
            <ul>
                <span class="mr-3" style="font-family: Franklin Gothic;"><i class="far fa-envelope"></i></span><a href="mailto:Johncalua@gmail.com">Contactanos</a>
            </ul>
            <ul>
                <span class="mr-3" style="font-family: Franklin Gothic;"><i class="fas fa-map-marker-alt"></i></span><a href="#"data-toggle="modal" data-target="#exampleModalCenter">Ubicacion</a>
            </ul>
        </div>
    </section>
    <section class="cabeza position-fixed" style="z-index: 100; width: 100%; background-color:rgba(1, 143, 243);box-shadow: 2px 2px 2px 1px rgba(1, 143, 243);">
        <div>
            <nav class="nav_1 contenedor" style="background-color: rgb(1, 143, 243);">
                <div class="brand">
                    <a href="index.php"><img src="static/img/logo01.png" alt="" style="height: 80px;"></a>
                </div>
                <div class="menu_derecho">
                    <a href="index.php" class="nav_item"><font color="white" style="font-family: Franklin Gothic;">Inicio</font></a>
                    <a href="contactar.php" class="nav_item "><font color="white" style="font-family: Franklin Gothic;">Contactanos</font></a>
                    <a href="ingresar.php" class="nav_item" style="background-color: white;border-radius: 50px;"><font color="black" style="font-family: Franklin Gothic;">Iniciar sesión </font><i class="fas fa-users"></i></a>
                </div>
                <div class="tres_palitos">
                    <input type="checkbox" id="menu_hamburguesa" class="d-none">
                    <label for="menu_hamburguesa" class="hamburguesa-label" ><i class="fas fa-bars " style="color: white;"></i></label>
                </div>
            </nav>
        </div>
    </section>
    <section class="cabeza" style="overflow: hidden;">
        <div>

            <div id="carouselExampleIndicators" class="carousel slide mb-5" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active ">

                        <img class="d-block img-fluid" src="static/img/image 1.png" alt="First slide" style="height: 85vh; width: 100%;object-fit: cover;">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="static/img/image.jpg" alt="Second slide" style="height: 85vh; width: 100%;object-fit: cover;" >
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="static/img/logo-3.jpeg" alt="Third slide" style="height: 85vh; width: 100%;object-fit: cover;" >
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div>
    </section>
    <br>
    <br>
    <br>
    <section class="empresas">
        <div class="col-md-10 rounded mx-auto d-block" style="margin-top: -100px;">
            <form action="" method="post" >
                <div class="card" style="color:#665C5C;border-radius: 10px;">
                    <!-- cardbody> -->
                    <div class="card-body"  style="background-color:white;">
                        <h3 style="font-family: Franklin Gothic;">Utiliza tu ubicación actual y encuentra la veterinaria más cercana.</h3>
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <select class="form-control" id="departamento" style="font-size:1.4rem; color:white; border-radius: 10px;background-color: rgba(52, 165, 245);font-family: Franklin Gothic; ">
                                    <option>Seleccióne Departamento</option>
                                    <option>Lima</option>
                                    <option>Cajamarca</option>
                                    <option>Chiclayo</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-4">
                                <select class="form-control" id="distrito" disabled="true" style="font-size:1.4rem; color:white; border-radius: 10px;background-color: rgba(52, 165, 245);font-family: Franklin Gothic;">
                                    <option>Seleccióne Distrito</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-4">
                                <button type="button" class="btn btn-dark" style="font-size:1.4rem; width: 100%;border-radius: 10px;font-family: Franklin Gothic;" data-toggle="modal" data-target="#exampleModalCenter">Utiliza Tu Ubicación Actual  <i class="fas fa-search-location"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="contenedor p-5 col-md-10">
            <h4 class="page-title text-center" style="font-family: Franklin Gothic;"><b>Encuentra el lugar más cercano</b></h4>
            <div class="text-center">
                <i class="fas fa-chevron-down fa-5x" style="color: #92C6C5;"></i>
            </div>
            <div class=" row">
                <div class="col-lg-6 col-12 pt-3">
                    <h3 style="font-family: Franklin Gothic;"><i class="fas fa-map-marker-alt" ></i> La victoria,Lima Perú</h3>
                </div>
                <div class="col-lg-16 col-12 pt-3" style="text-align: right;">
                    <form action="#" method="get" class="float-right" style="display: flex;padding: 10px;">
                        <input type="text" name="txtbusqueda" placeholder="Buscar veterinaria..." class="form-control">
                        <input type="submit" name="Buscar" class="btn btn-primary" style="margin-left: 10px;" value="Buscar">
                    </form>
                </div>
            </div>
            <div class="contenedor_empresa_1 mt-5 " id="empresa">

            </div>
        <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
    </section>

    <section class="section-Contenido">
    <div>
        <div style="padding-top: 5%;">
            <div class="col-lg-12">
                <div class="form-group text-center pt-4" >
                    <h3 class="m-t-0 header-title" style="font-family: Franklin Gothic;"><span style="font-size: 50px;color:  hwb(343 4% 14%);"><b>REGISTRATE AHORA!</b></span></h3>
                    <br>
                        <h4 style="font-family: Franklin Gothic;"><span style="font-size: 30px;color:black;">Sé el primero en recibir nuestras ofertas y novedades</span></h4>
                    <div class="form-group row justify-content-center">
                        <br>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <div class="form-group row justify-content-center">
                        <div class="custom-control">
                            <br>
                            <a href="registro.php"><button type="button" class="p-1 butonp" style="width: 250px;font-family: Franklin Gothic;"><b>REGISTRARME</b></button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div style="background-color: rgb(1, 143, 243)">
    <footer  id="contactar" class="contenedor p-4" style="background-color:rgb(1, 143, 243)">
        <div style="overflow-x: hidden;">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="brand-wrapper"><a href="index.php"><img src="static/img/logo01.png" " alt="" style="width: 40%; height: 100px;"></a>
                        <label style="color: white;">El amor que reciben tus peludos pacientes es infinito.E igual de grande es el aprecio que por ti.</label>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mt-lg-0 mt-5">
                    <h5 class="text-uppercase" style="color: white;font-family: Franklin Gothic;">SERVICIOS</h5>
                    <label style="color: white;">Software C.S.I.</a></label>
                    <a href="" data-toggle="modal" data-target="#exampleModalCenter"><p style="color: white;">Certificado digital Sunat</p></a>
                    <a href=""><p style="color: white;">Sistema de Facturación Electronica</p></a>
                    <a href=""><p style="color: white;">Que es C.S.I.?</p></a>
                </div>
                <div class="col-lg-3 col-sm-6 mt-lg-0 mt-5">
                    <h5 class="text-uppercase" style="color: white;font-family: Franklin Gothic;">PAGINAS RELACIONADAS</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                          <a class="nav-link"  style="color: white;" href="#">Certificado Digital</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link"  style="color: white;" href="#">Recuperación de Datos</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" style="color: white;" href="#">Alquiler de Laptops</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" style="color: white;" href="#">Soporte Tecnico</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" style="color: white;" href="#">Transporte Logistico</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" style="color: white;" href="#">Comunicación Empresarial</a>
                        </li>
                      </ul>
                </div>
                <div class="col-lg-3 col-sm-6 mt-lg-0 mt-5">
                    <h5 class="text-uppercase" style="color: white;font-family: Franklin Gothic;">CONTACTO</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                          <a class="nav-link"  style="color: white" href="mailto:Johncalua@gmail.com"><i class="fas fa-envelope"></i> Johncalua@gmail.com</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link"  style="color: white;" href="tel:983523514"><i class="fas fa-phone"></i> 983523514</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" style="color: white;" href="https://api.whatsapp.com/send?phone=51983523514&text=Necesito%20soporte%20T%C3%A9cnico"><i class="fab fa-whatsapp"></i> 983523514</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: white;" href="#" data-toggle="modal" data-target="#exampleModalCenter"><i class="fas fa-home"></i>  Calle Las Orquídeas 451, San Isidro</a>
                        </li>
                      </ul>
                </div>
            </div>
        </div>
    </footer>
</div>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog  modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Ubicación</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="pt-3 text-center">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.2916910006506!2d-77.0280740734079!3d-12.092172573037!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c866a1686ab3%3A0x8647fc9b68d4808b!2sC.%20Las%20Orqu%C3%ADdeas%20451%2C%20San%20Isidro%2015046!5e0!3m2!1ses-419!2spe!4v1637440623302!5m2!1ses-419!2spe" style="border:0;width: 100%; height: 450px;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    <script type="text/javascript" src="static/js/app.js"></script>
 
 </body>
</html>