<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login Template</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="static/css/ingresar.css" th:href="@{/css/login.css}">

  
</head>
<body>
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0 fondo_blur">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="static/img/registrovet.jpg" alt="login" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body ">
                <div class="brand-wrapper">
                <img src="static/img/avatar.png" alt="logo" class="logo">
                
                </div>
                <p class="login-card-description"> Registro VET Fact</p>
              
            <form style="max-width: 600px;">
                <div class="row">
                    <div class="form-group col-12">
                        <label for="email">RUC</label>
                        <input type="text" name="email" id="email" class="form-control" placeholder="">
                    </div>
                    <div class="form-group col-12">
                        <label for="email">Nombres</label>
                        <input type="text" name="email" id="email" class="form-control" placeholder="">
                    </div>  
                    <div class="form-group col-sm-6">
                        <label for="email">Usuario</label>
                        <input type="text" name="email" id="email" class="form-control" placeholder="">
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="email">Correo</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="">
                    </div>
                    
                    <div class="form-group col-sm-6">
                        <label for="email">Contraseña</label>
                        <input type="password" name="email" id="email" class="form-control" placeholder="">
                    </div>
                    <div class="form-group col-sm-6 mb-4">
                        <label for="email">Repita contraseña</label>
                        <input type="password" name="email" id="email" class="form-control" placeholder="">
                    </div>
                </div>
                <nav class="login-card-footer-nav">
                    <input type="checkbox" id="singleCheckbox2" value="option2" checked="" class="mr-1">
                  <a href="#!">Acepto los terminos de uso.</a>
                  
                </nav>
                <input name="login" id="login" class="btn btn-block registro-btn mt-4" type="button"  value="Registrar" onclick="location.href='ingresar.php'">
                </form>
                <div>
                <input class="btn regresar-btn mr-auto ml-auto d-flex justify-content-center" type="button"  value="<-  Regresar" onclick="location.href='ingresar.php'">

                </div>
                
            </div>
          </div>
        </div>
      </div>
    </div>
</main>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
