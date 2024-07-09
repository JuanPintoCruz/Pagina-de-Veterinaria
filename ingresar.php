<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login Template</title>

  <!--Custombox -->
  <link href="coderthemes.com/ubold/plugins/custombox/css/custombox.css" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="static/css/ingresar.css" th:href="@{/css/login.css}">

  
</head>
<body>

<div class="modal fade" id="modal_olvidar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Recuperar contraseña</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <h6 class="custom-modal-title">Le enviaremos un correo donde podra restaurar una nueva contraseña</h6>
          <div class="custom-modal-text">
              <div class="col-12 mb-4">
                  <p class="text-left">RUC</p>
                  <input type="text" class="form-control" placeholder="">
              </div>
              <div class="col-12 mb-4">
                  <p class="text-left">Correo</p>
                  <input type="text" class="form-control" placeholder="">
              </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Enviar</button>
      </div>
    </div>
  </div>
</div>
</div>

  
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0 fondo_blur">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="static/img/fondo.jpg" alt="login" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body ">
              <div class="brand-wrapper ml-5 text-center">
                <img src="static/img/avatar.png" alt="logo" class="logo">
              </div>
              <p class="login-card-description text-center">Bienvenido Doctor</p>
              
              <form action="#!" class="ml-auto mr-auto"w>
                  <div class="form-group  mb-4 mt-5">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                  </div>
                  <div class="form-group mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="***********">
                  </div>
                  <input name="login" id="login" class="btn btn-block login-btn mb-4" type="button"  value="Ingresar" onclick="location.href='inicio.php'">
                </form>
                <div class="text-center">
                  <a href="#modal_olvidar" data-toggle="modal"  class="forgot-password-link">Olvide mi contraseña</a>
                  
                  <p class="login-card-footer-text">¿No tienes una cuenta? <a href="#!" class="text-reset"  onclick="location.href='registro.php'">Registrarte aqui</a></p>
                  <input class="btn regresar-btn mr-auto ml-auto " type="button"  value="<-  Regresar a Inicio" onclick="location.href='index.php'">

                  <nav class="login-card-footer-nav">
                    <a href="#!">Terminos de uso.</a>
                    <a href="#!">Politica de privacidad</a>
                  </nav>
                </div>
                
            </div>
          </div>
        </div>
      </div>
    </div>
</main>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<!-- Modal-Effect -->
<script src="coderthemes.com/ubold/plugins/custombox/js/custombox.min.js"></script>
        <script src="coderthemes.com/ubold/plugins/custombox/js/legacy.min.js"></script>
</body>
</html>
