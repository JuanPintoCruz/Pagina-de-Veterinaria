<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/css/index2.css">
    <title>VetFact</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <section class="nav_2 shadow-lg" id="id_nav_2">
        
            <h5>VET FACT</h5>
        <hr>
        <div class="nav_2_ul">
            <ul>
                <span class="mr-3"><i class="fas fa-home"></i></span><a href="index.php">Inicio</a>
            </ul>                   
            <ul>
                <span class="mr-3"><i class="far fa-user"></i></span><a href="ingresar.php">Ingresar</a>
            </ul>
            <ul>
                <span class="mr-3"><i class="far fa-envelope"></i></span><a href="mailto:Johncalua@gmail.com">Contactanos</a>
            </ul>
            <ul>
                <span class="mr-3"><i class="fas fa-map-marker-alt"></i></span><a href="" data-toggle="modal" data-target="#exampleModalCenter">Ubicacion</a>
            </ul>
        </div>         
    </section>
    <header class="cabeza" style="overflow-x: hidden;">
        <div style="background-color:rgba(1, 143, 243);">
            <nav class="nav_1 contenedor">
                <div>
                    <a href="#" class="nav_item"><img src="static/img/logo.png" alt="" style="width: 100%; height: 70px;"></a>
                </div>
                <div class="menu_derecho">
                    <a href="index.php" class="nav_item" style="font-family: Franklin Gothic;color: white;">Inicio</a>
                    <a href="contactar.php" class="nav_item" style="font-family: Franklin Gothic;color: white;">Contactanos</a>
                    <a href="ingresar.php" class="nav_item" style="background-color: white;border-radius: 50px;"><font color="black" style="font-family: Franklin Gothic;">Iniciar sesión </font><i class="fas fa-users"></i></a>                   
                </div>
                <div class="tres_palitos">
						<input type="checkbox" id="menu_hamburguesa" class="d-none">
						<label for="menu_hamburguesa" class="hamburguesa-label" ><i class="fas fa-bars "></i></label>	
				</div>
            </nav>
                <div id="carouselExampleIndicators" class="carousel slide mb-5" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active ">
                            <img class="d-block img-fluid" src="static/img/slider3.jpeg" alt="First slide" style="height: 75vh; width: 100%;object-fit: cover;">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block" src="static/img/slider2.jpeg" alt="Second slide" style="height: 75vh; width: 100%;object-fit: cover;" >
                        </div>
                        <div class="carousel-item">
                            <img class="d-block" src="static/img/image.jpg" alt="Third slide" style="height: 75vh; width: 100%;object-fit: cover;" >
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
    </header>
    <div class="about_1 contenedor">
        <div class="about__texts">
            <h2 class="subtitle">Marketing Digital</h2>
            <p class="about__p">Ahorre tiempo en la gestión de su consultorio o centro médico con nuestro Sistema de Agendamiento para organizar de forma rápida y sencilla las citas de sus pacientes.</p>
            <div class="text-center">
                <button class="comenzar-btn mr-auto ml-auto">Comenzar</button>
            </div>
            
        </div>
        <figure class="about__img">
            <img src="static/img/compu.png" alt="raa" class="about__picture">
        </figure>
    </div>
    <div class="about_2 contenedor">
        <figure class="about__img about__img--left">
            <img src="static/img/compu_2.png" alt="raa" class="about__picture">
        </figure>

        <div class="about__texts">
            <h2 class="subtitle">Facil y Rapido</h2>
            <p class="about__p">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae dolor laboriosam quae nam. Nulla consequuntur possimus aperiam, tempore reiciendis rem placeat iure provident laborum impedit aspernatur quia porro esse doloremque nesciunt illo ab repellat iusto explicabo omnis voluptatibus eveniet dolor.</p>
        </div>
    </div>
    

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        $( document ).ready(function() {
            
            $("#menu_hamburguesa").on( 'change', function(e) {
            if( $(this).is(':checked') ) {
        
                $("#id_nav_2").css({'transform': 'translateX(0%)'});
			    $("#id_nav_2").css({'transition': '1s'});		       
            }else{
                
                $("#id_nav_2").css({'transform': 'translateX(-120%)'});	
			    $("#id_nav_2").css({'transition': '1s'});		      
            }

            });
        })
        
    </script>
</body>
</html>