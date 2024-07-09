
$(document).ready(function () {
    // Initial companies displayed at page load
    let empresasIniciales =                 `             
    <div class="empresa-div">
    <div class="card" style="">
        <img src="./static/img/logotipo/Logotipo-2.JPG" style="width:100%;height: 22.5VH;">
        <div class="card-body p-2">
            <span class="card-text text-muted" style="font-size: 25px;">Veterinaria deL Señor</span>
            <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
            <br>
            <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
            <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
        </div>
    </div>
    </div>
        <div class="empresa-div">
            <div class="card" style=";">
                <img src="./static/img/logotipo/Logotipo-1.png" style="width:100%;height: 22.5VH;">
                <div class="card-body p-2">
                    <span class="card-text text-muted" style="font-size: 25px;">Veterinaria My friendsxd</span>
                    <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                    <br>
                    <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                    <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
                </div>
            </div>
        </div>
        <div class="empresa-div">
        <div class="card" style=";">
            <img src="./static/img/logotipo/Logotipo-3.png" style="width:100%;height: 22.5VH;">
            <div class="card-body p-2">
                <span class="card-text text-muted" style="font-size: 25px;">Veterinaria Rapida</span>
                <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                <br>
                <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
            </div>
        </div>
    </div>
    <br>
        <div class="empresa-div">
        <div class="card" style=";">
            <img src="./static/img/logotipo/Logotipo-5.jpg" style="width:100%;height: 22.5VH;">
            <div class="card-body p-2">
                <span class="card-text text-muted" style="font-size: 25px;">Clinica Don Huesos</span>
                <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                <br>
                <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
            </div>
        </div>
        </div>
        <div class="empresa-div">
        <div class="card" style=";">
            <img src="./static/img/logotipo/Logotipo-4.jpg" style="width:100%;height: 22.5VH;">
            <div class="card-body p-2">
                <span class="card-text text-muted" style="font-size: 25px;">Clinica Dogin</span>
                <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                <br>
                <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
            </div>
        </div>
        </div>
        <div class="empresa-div">
        <div class="card" style=";">
            <img src="./static/img/logotipo/Logotipo-6.jpg" style="width:100%;height: 22.5VH;">
            <div class="card-body p-2">
                <span class="card-text text-muted" style="font-size: 25px;">Veterinaria deL Señor</span>
                <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                <br>
                <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
            </div>
        </div>
        </div>
            <div class="empresa-div">
                <div class="card" style=";">
                    <img src="./static/img/logotipo/Logotipo-7.jpg" style="width:100%;height: 22.5VH;">
                    <div class="card-body p-2">
                        <span class="card-text text-muted" style="font-size: 25px;">Veterinaria My friends</span>
                        <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                        <br>
                        <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                        <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
                    </div>
                </div>
            </div>
            <div class="empresa-div">
            <div class="card" style=";">
                <img src="./static/img/logotipo/Logotipo-8.jpg" style="width:100%;height: 22.5VH;">
                <div class="card-body p-2">
                    <span class="card-text text-muted" style="font-size: 25px;">Veterinaria Rapida</span>
                    <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                    <br>
                    <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                    <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
                </div>
            </div>
        </div>
            <div class="empresa-div">
            <div class="card" style=";">
                <img src="./static/img/logotipo/Logotipo-9.jpg" style="width:100%;height: 22.5VH;">
                <div class="card-body p-2">
                    <span class="card-text text-muted" style="font-size: 25px;">Clinica Don Huesos</span>
                    <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                    <br>
                    <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                    <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
                </div>
            </div>
            </div>
            <div class="empresa-div">
            <div class="card" style=";">
                <img src="./static/img/logotipo/Logotipo-10.jpg" style="width:100%;height: 22.5VH;">
                <div class="card-body p-2">
                    <span class="card-text text-muted" style="font-size: 25px;">Clinica Dogin</span>
                    <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                    <br>
                    <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                    <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
                </div>
            </div>
            </div>
            <div class="empresa-div">
    <div class="card" style=";">
        <img src="./static/img/logotipo/Logotipo-11.jpg" style="width:100%;height: 22.5VH;">
        <div class="card-body p-2">
            <span class="card-text text-muted" style="font-size: 25px;">Veterinaria deL Señor</span>
            <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
            <br>
            <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
            <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
        </div>
    </div>
    </div>
        <div class="empresa-div">
            <div class="card" style=";">
                <img src="./static/img/logotipo/Logotipo-12.jpg" style="width:100%;height: 22.5VH;">
                <div class="card-body p-2">
                    <span class="card-text text-muted" style="font-size: 25px;">Veterinaria My friends</span>
                    <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                    <br>
                    <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                    <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
                </div>
            </div>
        </div>
        <div class="empresa-div">
        <div class="card" style=";">
            <img src="./static/img/logotipo/Logotipo-13.jpg" style="width:100%;height: 22.5VH;">
            <div class="card-body p-2">
                <span class="card-text text-muted" style="font-size: 25px;">Veterinaria Rapida</span>
                <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                <br>
                <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
            </div>
        </div>
    </div>
        <div class="empresa-div">
        <div class="card" style=";">
            <img src="./static/img/logotipo/Logotipo-14.jpg" style="width:100%;height: 22.5VH;">
            <div class="card-body p-2">
                <span class="card-text text-muted" style="font-size: 25px;">Clinica Don Huesos</span>
                <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                <br>
                <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
            </div>
        </div>
        </div>
        <div class="empresa-div">
        <div class="card" style=";">
            <img src="./static/img/logotipo/Logotipo-15.jpg" style="width:100%;height: 22.5VH;">
            <div class="card-body p-2">
                <span class="card-text text-muted" style="font-size: 25px;">Clinica Dogin</span>
                <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                <br>
                <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
            </div>
        </div>
        </div>
        <div class="empresa-div">
        <div class="card" style=";">
            <img src="./static/img/logotipo/Logotipo-16.jpg" style="width:100%;height: 22.5VH;">
            <div class="card-body p-2">
                <span class="card-text text-muted" style="font-size: 25px;">Veterinaria deL Señor</span>
                <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                <br>
                <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
            </div>
        </div>
        </div>
            <div class="empresa-div">
                <div class="card" style=";">
                    <img src="./static/img/logotipo/Logotipo-17.jpg" style="width:100%;height: 22.5VH;">
                    <div class="card-body p-2">
                        <span class="card-text text-muted" style="font-size: 25px;">Veterinaria My friends</span>
                        <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                        <br>
                        <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                        <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
                    </div>
                </div>
            </div>
            <div class="empresa-div">
            <div class="card" style=";">
                <img src="./static/img/logotipo/Logotipo-18.jpg" style="width:100%;height: 22.5VH;">
                <div class="card-body p-2">
                    <span class="card-text text-muted" style="font-size: 25px;">Veterinaria Rapida</span>
                    <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                    <br>
                    <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                    <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
                </div>
            </div>
        </div>
            <div class="empresa-div">
            <div class="card" style=";">
                <img src="./static/img/logotipo/Logotipo-19.jpg" style="width:100%;height: 22.5VH;">
                <div class="card-body p-2">
                    <span class="card-text text-muted" style="font-size: 25px;">Clinica Don Huesos</span>
                    <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                    <br>
                    <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                    <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
                </div>
            </div>
            </div>
            <div class="empresa-div">
            <div class="card" style=";">
                <img src="./static/img/logotipo/Logotipo-20.jpg" style="width:100%;height: 22.5VH;">
                <div class="card-body p-2">
                    <span class="card-text text-muted" style="font-size: 25px;">Clinica Dogin</span>
                    <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                    <br>
                    <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                    <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
                </div>
            </div>
            </div>
            <div class="empresa-div">
            <div class="card" style=";">
                <img src="./static/img/logotipo/Logotipo-21.jpg" style="width:100%;height: 22.5VH;">
                <div class="card-body p-2">
                    <span class="card-text text-muted" style="font-size: 25px;">Veterinaria deL Señor</span>
                    <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                    <br>
                    <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                    <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
                </div>
            </div>
            </div>`;
  
    $("#empresa").html(empresasIniciales);
  
    // Department selection functionality
    $("#departamento").change(function () {
      let selectedDept = $(this).val();
      let empresas = ""; // Empty variable to store filtered companies
  
      if (selectedDept === "Lima") {
        empresas = `        
        <div class="empresa-div">
        <div class="card" style=";">
            <img src="./static/img/logotipo/Logotipo-2.JPG" style="width:100%;height: 22.5VH;">
            <div class="card-body p-2">
                <span class="card-text text-muted" style="font-size: 25px;">Veterinaria deL Señor</span>
                <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                <br>
                <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
            </div>
        </div>
        </div>
            <div class="empresa-div">
                <div class="card" style=";">
                    <img src="./static/img/logotipo/Logotipo-1.png" style="width:100%;height: 22.5VH;">
                    <div class="card-body p-2">
                        <span class="card-text text-muted" style="font-size: 25px;">Veterinaria My friends</span>
                        <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                        <br>
                        <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                        <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
                    </div>
                </div>
            </div>
            <div class="empresa-div">
            <div class="card" style=";">
                <img src="./static/img/logotipo/Logotipo-3.png" style="width:100%;height: 22.5VH;">
                <div class="card-body p-2">
                    <span class="card-text text-muted" style="font-size: 25px;">Veterinaria Rapida</span>
                    <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                    <br>
                    <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                    <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
                </div>
            </div>
        </div>
            <div class="empresa-div">
            <div class="card" style=";">
                <img src="./static/img/logotipo/Logotipo-5.jpg" style="width:100%;height: 22.5VH;">
                <div class="card-body p-2">
                    <span class="card-text text-muted" style="font-size: 25px;">Clinica Don Huesos</span>
                    <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                    <br>
                    <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                    <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
                </div>
            </div>
            </div>
            <div class="empresa-div">
            <div class="card" style=";">
                <img src="./static/img/logotipo/Logotipo-4.jpg" style="width:100%;height: 22.5VH;">
                <div class="card-body p-2">
                    <span class="card-text text-muted" style="font-size: 25px;">Clinica Dogin</span>
                    <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                    <br>
                    <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                    <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
                </div>
            </div>
            </div>
            <div class="empresa-div">
            <div class="card" style=";">
                <img src="./static/img/logotipo/Logotipo-6.jpg" style="width:100%;height: 22.5VH;">
                <div class="card-body p-2">
                    <span class="card-text text-muted" style="font-size: 25px;">Veterinaria deL Señor</span>
                    <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                    <br>
                    <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                    <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
                </div>
            </div>
            </div>
                <div class="empresa-div">
                    <div class="card" style=";">
                        <img src="./static/img/logotipo/Logotipo-7.jpg" style="width:100%;height: 22.5VH;">
                        <div class="card-body p-2">
                            <span class="card-text text-muted" style="font-size: 25px;">Veterinaria My friends</span>
                            <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                            <br>
                            <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                            <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
                        </div>
                    </div>
                </div>
          `;
      } else if (selectedDept === "Cajamarca") {
        empresas = `            
        <div class="empresa-div">
        <div class="card" style=";">
            <img src="./static/img/logotipo/Logotipo-8.jpg" style="width:100%;height: 22.5VH;">
            <div class="card-body p-2">
                <span class="card-text text-muted" style="font-size: 25px;">Veterinaria Rapida</span>
                <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                <br>
                <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
            </div>
        </div>
    </div>
        <div class="empresa-div">
        <div class="card" style=";">
            <img src="./static/img/logotipo/Logotipo-9.jpg" style="width:100%;height: 22.5VH;">
            <div class="card-body p-2">
                <span class="card-text text-muted" style="font-size: 25px;">Clinica Don Huesos</span>
                <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                <br>
                <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
            </div>
        </div>
        </div>
        <div class="empresa-div">
        <div class="card" style=";">
            <img src="./static/img/logotipo/Logotipo-10.jpg" style="width:100%;height: 22.5VH;">
            <div class="card-body p-2">
                <span class="card-text text-muted" style="font-size: 25px;">Clinica Dogin</span>
                <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                <br>
                <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
            </div>
        </div>
        </div>
        <div class="empresa-div">
<div class="card" style=";">
    <img src="./static/img/logotipo/Logotipo-11.jpg" style="width:100%;height: 22.5VH;">
    <div class="card-body p-2">
        <span class="card-text text-muted" style="font-size: 25px;">Veterinaria deL Señor</span>
        <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
        <br>
        <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
        <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
    </div>
</div>
</div>
    <div class="empresa-div">
        <div class="card" style=";">
            <img src="./static/img/logotipo/Logotipo-12.jpg" style="width:100%;height: 22.5VH;">
            <div class="card-body p-2">
                <span class="card-text text-muted" style="font-size: 25px;">Veterinaria My friends</span>
                <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                <br>
                <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
            </div>
        </div>
    </div>
    <div class="empresa-div">
    <div class="card" style=";">
        <img src="./static/img/logotipo/Logotipo-13.jpg" style="width:100%;height: 22.5VH;">
        <div class="card-body p-2">
            <span class="card-text text-muted" style="font-size: 25px;">Veterinaria Rapida</span>
            <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
            <br>
            <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
            <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
        </div>
    </div>
</div>
    <div class="empresa-div">
    <div class="card" style=";">
        <img src="./static/img/logotipo/Logotipo-14.jpg" style="width:100%;height: 22.5VH;">
        <div class="card-body p-2">
            <span class="card-text text-muted" style="font-size: 25px;">Clinica Don Huesos</span>
            <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
            <br>
            <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
            <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
        </div>
    </div>
    </div>
          `;
      } else if (selectedDept === "Chiclayo") {
        empresas = `
        <div class="empresa-div">
        <div class="card" style=";">
            <img src="./static/img/logotipo/Logotipo-15.jpg" style="width:100%;height: 22.5VH;">
            <div class="card-body p-2">
                <span class="card-text text-muted" style="font-size: 25px;">Clinica Dogin</span>
                <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                <br>
                <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
            </div>
        </div>
        </div>
        <div class="empresa-div">
        <div class="card" style=";">
            <img src="./static/img/logotipo/Logotipo-16.jpg" style="width:100%;height: 22.5VH;">
            <div class="card-body p-2">
                <span class="card-text text-muted" style="font-size: 25px;">Veterinaria deL Señor</span>
                <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                <br>
                <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
            </div>
        </div>
        </div>
            <div class="empresa-div">
                <div class="card" style=";">
                    <img src="./static/img/logotipo/Logotipo-17.jpg" style="width:100%;height: 22.5VH;">
                    <div class="card-body p-2">
                        <span class="card-text text-muted" style="font-size: 25px;">Veterinaria My friends</span>
                        <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                        <br>
                        <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                        <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
                    </div>
                </div>
            </div>
            <div class="empresa-div">
            <div class="card" style=";">
                <img src="./static/img/logotipo/Logotipo-18.jpg" style="width:100%;height: 22.5VH;">
                <div class="card-body p-2">
                    <span class="card-text text-muted" style="font-size: 25px;">Veterinaria Rapida</span>
                    <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                    <br>
                    <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                    <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
                </div>
            </div>
        </div>
            <div class="empresa-div">
            <div class="card" style=";">
                <img src="./static/img/logotipo/Logotipo-19.jpg" style="width:100%;height: 22.5VH;">
                <div class="card-body p-2">
                    <span class="card-text text-muted" style="font-size: 25px;">Clinica Don Huesos</span>
                    <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                    <br>
                    <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                    <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
                </div>
            </div>
            </div>
            <div class="empresa-div">
            <div class="card" style=";">
                <img src="./static/img/logotipo/Logotipo-20.jpg" style="width:100%;height: 22.5VH;">
                <div class="card-body p-2">
                    <span class="card-text text-muted" style="font-size: 25px;">Clinica Dogin</span>
                    <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                    <br>
                    <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                    <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
                </div>
            </div>
            </div>
            <div class="empresa-div">
            <div class="card" style=";">
                <img src="./static/img/logotipo/Logotipo-21.jpg" style="width:100%;height: 22.5VH;">
                <div class="card-body p-2">
                    <span class="card-text text-muted" style="font-size: 25px;">Veterinaria deL Señor</span>
                    <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                    <br>
                    <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                    <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
                </div>
            </div>
            </div>`;
      } else {
        // No selection, display initial companies
        empresas = empresasIniciales;
      }
  
      $("#empresa").html(empresas);
    });
  
    // ... existing code for menu functionality ...
  });


$(document).ready(function () {
    // Crear las empresas al cargar la página
    let empresasIniciales = `            
    <div class="empresa-div">
    <div class="card" style=";">
        <img src="./static/img/logotipo/Logotipo-2.JPG" style="width:100%;height: 22.5VH;">
        <div class="card-body p-2">
            <span class="card-text text-muted" style="font-size: 25px;">Veterinaria deL Señor</span>
            <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
            <br>
            <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
            <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
        </div>
    </div>
    </div>
        <div class="empresa-div">
            <div class="card" style=";">
                <img src="./static/img/logotipo/Logotipo-1.png" style="width:100%;height: 22.5VH;">
                <div class="card-body p-2">
                    <span class="card-text text-muted" style="font-size: 25px;">Veterinaria My friends</span>
                    <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                    <br>
                    <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                    <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
                </div>
            </div>
        </div>
        <div class="empresa-div">
        <div class="card" style=";">
            <img src="./static/img/logotipo/Logotipo-3.png" style="width:100%;height: 22.5VH;">
            <div class="card-body p-2">
                <span class="card-text text-muted" style="font-size: 25px;">Veterinaria Rapida</span>
                <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                <br>
                <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
            </div>
        </div>
    </div>
        <div class="empresa-div">
        <div class="card" style=";">
            <img src="./static/img/logotipo/Logotipo-5.jpg" style="width:100%;height: 22.5VH;">
            <div class="card-body p-2">
                <span class="card-text text-muted" style="font-size: 25px;">Clinica Don Huesos</span>
                <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                <br>
                <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
            </div>
        </div>
        </div>
        <div class="empresa-div">
        <div class="card" style=";">
            <img src="./static/img/logotipo/Logotipo-4.jpg" style="width:100%;height: 22.5VH;">
            <div class="card-body p-2">
                <span class="card-text text-muted" style="font-size: 25px;">Clinica Dogin</span>
                <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                <br>
                <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
            </div>
        </div>
        </div>
        <div class="empresa-div">
        <div class="card" style=";">
            <img src="./static/img/logotipo/Logotipo-6.jpg" style="width:100%;height: 22.5VH;">
            <div class="card-body p-2">
                <span class="card-text text-muted" style="font-size: 25px;">Veterinaria deL Señor</span>
                <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                <br>
                <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
            </div>
        </div>
        </div>
            <div class="empresa-div">
                <div class="card" style=";">
                    <img src="./static/img/logotipo/Logotipo-7.jpg" style="width:100%;height: 22.5VH;">
                    <div class="card-body p-2">
                        <span class="card-text text-muted" style="font-size: 25px;">Veterinaria My friends</span>
                        <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                        <br>
                        <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                        <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
                    </div>
                </div>
            </div>
            <div class="empresa-div">
            <div class="card" style=";">
                <img src="./static/img/logotipo/Logotipo-8.jpg" style="width:100%;height: 22.5VH;">
                <div class="card-body p-2">
                    <span class="card-text text-muted" style="font-size: 25px;">Veterinaria Rapida</span>
                    <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                    <br>
                    <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                    <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
                </div>
            </div>
        </div>
            <div class="empresa-div">
            <div class="card" style=";">
                <img src="./static/img/logotipo/Logotipo-9.jpg" style="width:100%;height: 22.5VH;">
                <div class="card-body p-2">
                    <span class="card-text text-muted" style="font-size: 25px;">Clinica Don Huesos</span>
                    <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                    <br>
                    <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                    <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
                </div>
            </div>
            </div>
            <div class="empresa-div">
            <div class="card" style=";">
                <img src="./static/img/logotipo/Logotipo-10.jpg" style="width:100%;height: 22.5VH;">
                <div class="card-body p-2">
                    <span class="card-text text-muted" style="font-size: 25px;">Clinica Dogin</span>
                    <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                    <br>
                    <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                    <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
                </div>
            </div>
            </div>
            <div class="empresa-div">
    <div class="card" style=";">
        <img src="./static/img/logotipo/Logotipo-11.jpg" style="width:100%;height: 22.5VH;">
        <div class="card-body p-2">
            <span class="card-text text-muted" style="font-size: 25px;">Veterinaria deL Señor</span>
            <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
            <br>
            <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
            <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
        </div>
    </div>
    </div>
        <div class="empresa-div">
            <div class="card" style=";">
                <img src="./static/img/logotipo/Logotipo-12.jpg" style="width:100%;height: 22.5VH;">
                <div class="card-body p-2">
                    <span class="card-text text-muted" style="font-size: 25px;">Veterinaria My friends</span>
                    <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                    <br>
                    <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                    <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
                </div>
            </div>
        </div>
        <div class="empresa-div">
        <div class="card" style=";">
            <img src="./static/img/logotipo/Logotipo-13.jpg" style="width:100%;height: 22.5VH;">
            <div class="card-body p-2">
                <span class="card-text text-muted" style="font-size: 25px;">Veterinaria Rapida</span>
                <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                <br>
                <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
            </div>
        </div>
    </div>
        <div class="empresa-div">
        <div class="card" style=";">
            <img src="./static/img/logotipo/Logotipo-14.jpg" style="width:100%;height: 22.5VH;">
            <div class="card-body p-2">
                <span class="card-text text-muted" style="font-size: 25px;">Clinica Don Huesos</span>
                <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                <br>
                <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
            </div>
        </div>
        </div>
        <div class="empresa-div">
        <div class="card" style=";">
            <img src="./static/img/logotipo/Logotipo-15.jpg" style="width:100%;height: 22.5VH;">
            <div class="card-body p-2">
                <span class="card-text text-muted" style="font-size: 25px;">Clinica Dogin</span>
                <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                <br>
                <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
            </div>
        </div>
        </div>
        <div class="empresa-div">
        <div class="card" style=";">
            <img src="./static/img/logotipo/Logotipo-16.jpg" style="width:100%;height: 22.5VH;">
            <div class="card-body p-2">
                <span class="card-text text-muted" style="font-size: 25px;">Veterinaria deL Señor</span>
                <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                <br>
                <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
            </div>
        </div>
        </div>
            <div class="empresa-div">
                <div class="card" style=";">
                    <img src="./static/img/logotipo/Logotipo-17.jpg" style="width:100%;height: 22.5VH;">
                    <div class="card-body p-2">
                        <span class="card-text text-muted" style="font-size: 25px;">Veterinaria My friends</span>
                        <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                        <br>
                        <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                        <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
                    </div>
                </div>
            </div>
            <div class="empresa-div">
            <div class="card" style=";">
                <img src="./static/img/logotipo/Logotipo-18.jpg" style="width:100%;height: 22.5VH;">
                <div class="card-body p-2">
                    <span class="card-text text-muted" style="font-size: 25px;">Veterinaria Rapida</span>
                    <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                    <br>
                    <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                    <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
                </div>
            </div>
        </div>
            <div class="empresa-div">
            <div class="card" style=";">
                <img src="./static/img/logotipo/Logotipo-19.jpg" style="width:100%;height: 22.5VH;">
                <div class="card-body p-2">
                    <span class="card-text text-muted" style="font-size: 25px;">Clinica Don Huesos</span>
                    <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                    <br>
                    <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                    <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
                </div>
            </div>
            </div>
            <div class="empresa-div">
            <div class="card" style=";">
                <img src="./static/img/logotipo/Logotipo-20.jpg" style="width:100%;height: 22.5VH;">
                <div class="card-body p-2">
                    <span class="card-text text-muted" style="font-size: 25px;">Clinica Dogin</span>
                    <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                    <br>
                    <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                    <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
                </div>
            </div>
            </div>
            <div class="empresa-div">
            <div class="card" style=";">
                <img src="./static/img/logotipo/Logotipo-21.jpg" style="width:100%;height: 22.5VH;">
                <div class="card-body p-2">
                    <span class="card-text text-muted" style="font-size: 25px;">Veterinaria deL Señor</span>
                    <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                    <br>
                    <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                    <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
                </div>
            </div>
            </div>`
        ;
    $("#empresa").html(empresasIniciales);

    $("#menu_hamburguesa").on('change', function (e) {
        // ... tu código existente ...
    });

    $("#departamento").change(function () {
        let lima = ["Seleccionar Distritos", "San Juan de Miraflores", "Surquillo", "Surco"];
        let cajamarca = ["Seleccionar Distritos", "Ciudad Blanca", "Plaza de arma", "Cuarto del Rescate"];
        let chiclayo = ["Seleccionar Distritos", "Oyotun", "San Jose", "Bolivar"];
        let valor = $("#departamento").val();

        if (valor === "Lima") {
            $("#distrito").html("");
            lima.forEach(function (val) {
                $("#distrito").append("<option>" + val + "</option>");
            });
            $("#distrito").prop("disabled", false);
        } else if (valor === "Cajamarca") {
            $("#distrito").html("");
            cajamarca.forEach(function (val) {
                $("#distrito").append("<option>" + val + "</option>");
            });
            $("#distrito").prop("disabled", false);
        } else if (valor === "Chiclayo") {
            $("#distrito").html("");
            chiclayo.forEach(function (val) {
                $("#distrito").append("<option>" + val + "</option>");
            });
            $("#distrito").prop("disabled", false);
        } else {
            $("#distrito").html("<option>Seleccionar Distrito</option>");
            $("#distrito").prop("disabled", true);
        }

        console.log(valor);
    });

    $("#distrito").change(function () {
        let valor = $("#distrito").val();

        // Código para mostrar las empresas según el distrito seleccionado
        if (valor === "San Juan de Miraflores") {
            // ... tu código existente ...
        } else if (valor === "Surquillo") {
            // ... tu código existente ...
        } else if (valor === "Surco") {
            // ... tu código existente ...
        } else if (valor === "Ciudad Blanca") {
            // ... tu código existente ...
        } else if (valor === "Plaza de arma") {
            // ... tu código existente ...
        } else if (valor === "Cuarto del Rescate") {
            // ... tu código existente ...
        } else if (valor === "Oyotun") {
            // ... tu código existente ...
        } else if (valor === "San Jose") {
            // ... tu código existente ...
        } else if (valor === "Bolivar") {
            // ... tu código existente ...
        } else {
            // ... tu código existente ...
        }

        console.log(valor);
    });
});

$(document).ready(function () {
    $("#menu_hamburguesa").on('change', function (e) {
        if ($(this).is(':checked')) {
            $("#id_nav_2").css({
                'transform': 'translateX(0%)'
            });
            $("#id_nav_2").css({
                'transition': '1s'
            });
        } else {
            $("#id_nav_2").css({
                'transform': 'translateX(-120%)'
            });
            $("#id_nav_2").css({
                'transition': '1s'
            });
        }
    });

    $("Lima").change(function () {
        let empresa =
            `             
`
        $("#empresa").html(empresa);
        let lima = ["Seleccionar Distritos", "San Juan de Miraflores", "Surquillo", "Surco"];
        let cajamarca = ["Seleccionar Distritos", "Ciudad Blanca", "Plaza de arma", "Cuarto del Rescate"];
        let chiclayo = ["Seleccionar Distritos", "Oyotun", "San Jose", "Bolivar"];
        let valor = $("#departamento").val()
        if (valor === "Lima") {
            $("#distrito").html("")
            lima.forEach(function (val) {
                $("#distrito").append("<option>" + val + "</option>")

            })

            $("#distrito").prop("disabled", false)
        } else if (valor === "Cajamarca") {
            $("#distrito").html("")
            cajamarca.forEach(function (val) {
                $("#distrito").append("<option>" + val + "</option>")

            })

            $("#distrito").prop("disabled", false)
        } else if (valor === "Chiclayo") {
            $("#distrito").html("")
            chiclayo.forEach(function (val) {
                $("#distrito").append("<option>" + val + "</option>")
            })

            $("#distrito").prop("disabled", false)
        } else {
            $("#distrito").html("<option>Seleccióne Distrito</option>")
            $("#distrito").prop("disabled", true)
            let empresa = `                           
            <div class="empresa-div">
                <div class="card" style=";">
                    <img src="./static/img/logotipo/Logotipo-2.JPG" style="width:100%;height: 22.5VH;">
                    <div class="card-body p-2">
                        <span class="card-text text-muted" style="font-size: 25px;">Veterinaria deL Señor</span>
                        <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                        <br>
                        <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                        <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
                    </div>
                </div>
                </div>
                    <div class="empresa-div">
                        <div class="card" style=";">
                            <img src="./static/img/logotipo/Logotipo-1.png" style="width:100%;height: 22.5VH;">
                            <div class="card-body p-2">
                                <span class="card-text text-muted" style="font-size: 25px;">Veterinaria My friends</span>
                                <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                                <br>
                                <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                                <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="empresa-div">
                    <div class="card" style=";">
                        <img src="./static/img/logotipo/Logotipo-3.png" style="width:100%;height: 22.5VH;">
                        <div class="card-body p-2">
                            <span class="card-text text-muted" style="font-size: 25px;">Veterinaria Rapida</span>
                            <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                            <br>
                            <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                            <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
                        </div>
                    </div>
                </div>
                    <div class="empresa-div">
                    <div class="card" style=";">
                        <img src="./static/img/logotipo/Logotipo-5.jpg" style="width:100%;height: 22.5VH;">
                        <div class="card-body p-2">
                            <span class="card-text text-muted" style="font-size: 25px;">Clinica Don Huesos</span>
                            <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                            <br>
                            <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                            <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
                        </div>
                    </div>
                    </div>
`
            $("#empresa").html(empresa);
        }
        console.log(valor)
    })
    $("#distrito").change(function () {

        let valor = $("#distrito").val()
        if (valor === "San Juan de Miraflores") {
            $("#empresa").html("")
            let empresa = `
            <div class="empresa-div">
            <div class="card" style=";">
                <img src="./static/img/logotipo/Logotipo-2.JPG" style="width:100%;height: 22.5VH;">
                <div class="card-body p-2">
                    <span class="card-text text-muted" style="font-size: 25px;">Veterinaria deL Señor</span>
                    <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                    <br>
                    <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                    <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
                </div>
            </div>
            </div>
                <div class="empresa-div">
                    <div class="card" style=";">
                        <img src="./static/img/logotipo/Logotipo-1.png" style="width:100%;height: 22.5VH;">
                        <div class="card-body p-2">
                            <span class="card-text text-muted" style="font-size: 25px;">Veterinaria My friends</span>
                            <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                            <br>
                            <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                            <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
                        </div>
                    </div>
                </div>
            `
            $("#empresa").html(empresa)

        } else if (valor == "Surquillo") {
            let empresa = `
            <div class="empresa-div">
            <div class="card" style=";">
                <img src="./static/img/logotipo/Logotipo-3.png" style="width:100%;height: 22.5VH;">
                <div class="card-body p-2">
                    <span class="card-text text-muted" style="font-size: 25px;">Veterinaria Rapida</span>
                    <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                    <br>
                    <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                    <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
                </div>
            </div>
        </div>
            <div class="empresa-div">
            <div class="card" style=";">
                <img src="./static/img/logotipo/Logotipo-5.jpg" style="width:100%;height: 22.5VH;">
                <div class="card-body p-2">
                    <span class="card-text text-muted" style="font-size: 25px;">Clinica Don Huesos</span>
                    <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                    <br>
                    <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                    <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
                </div>
            </div>
            </div>
            <div class="empresa-div">
            <div class="card" style=";">
                <img src="./static/img/logotipo/Logotipo-4.jpg" style="width:100%;height: 22.5VH;">
                <div class="card-body p-2">
                    <span class="card-text text-muted" style="font-size: 25px;">Clinica Dogin</span>
                    <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                    <br>
                    <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                    <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
                </div>
            </div>
            </div>`
            $("#empresa").html(empresa)
           
        } else if (valor == "Surco") {
            let empresa = `
            <div class="empresa-div">
            <div class="card" style=";">
                <img src="./static/img/logotipo/Logotipo-6.jpg" style="width:100%;height: 22.5VH;">
                <div class="card-body p-2">
                    <span class="card-text text-muted" style="font-size: 25px;">Veterinaria deL Señor</span>
                    <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                    <br>
                    <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                    <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
                </div>
            </div>
            </div>
                <div class="empresa-div">
                    <div class="card" style=";">
                        <img src="./static/img/logotipo/Logotipo-7.jpg" style="width:100%;height: 22.5VH;">
                        <div class="card-body p-2">
                            <span class="card-text text-muted" style="font-size: 25px;">Veterinaria My friends</span>
                            <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                            <br>
                            <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                            <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
                        </div>
                    </div>
                </div>

            `
            $("#empresa").html(empresa)

        } else if (valor == "Ciudad Blanca") {
            let empresa = `
            <div class="empresa-div">
            <div class="card" style=";">
                <img src="./static/img/logotipo/Logotipo-8.jpg" style="width:100%;height: 22.5VH;">
                <div class="card-body p-2">
                    <span class="card-text text-muted" style="font-size: 25px;">Veterinaria Rapida</span>
                    <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                    <br>
                    <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                    <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
                </div>
            </div>
        </div>
            <div class="empresa-div">
            <div class="card" style=";">
                <img src="./static/img/logotipo/Logotipo-9.jpg" style="width:100%;height: 22.5VH;">
                <div class="card-body p-2">
                    <span class="card-text text-muted" style="font-size: 25px;">Clinica Don Huesos</span>
                    <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                    <br>
                    <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                    <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
                </div>
            </div>
            </div>
            <div class="empresa-div">
            <div class="card" style=";">
                <img src="./static/img/logotipo/Logotipo-10.jpg" style="width:100%;height: 22.5VH;">
                <div class="card-body p-2">
                    <span class="card-text text-muted" style="font-size: 25px;">Clinica Dogin</span>
                    <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                    <br>
                    <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                    <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
                </div>
            </div>
            </div>`
            $("#empresa").html(empresa)

        } else if (valor == "Plaza de arma") {
            let empresa = `
            <div class="empresa-div">
            <div class="card" style=";">
                <img src="./static/img/logotipo/Logotipo-11.jpg" style="width:100%;height: 22.5VH;">
                <div class="card-body p-2">
                    <span class="card-text text-muted" style="font-size: 25px;">Veterinaria deL Señor</span>
                    <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                    <br>
                    <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                    <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
                </div>
            </div>
            </div>
                <div class="empresa-div">
                    <div class="card" style=";">
                        <img src="./static/img/logotipo/Logotipo-12.jpg" style="width:100%;height: 22.5VH;">
                        <div class="card-body p-2">
                            <span class="card-text text-muted" style="font-size: 25px;">Veterinaria My friends</span>
                            <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                            <br>
                            <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                            <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
                        </div>
                    </div>
                </div>`
            $("#empresa").html(empresa)

        } else if (valor == "Cuarto del Rescate") {
            let empresa = `
            <div class="empresa-div">
            <div class="card" style=";">
                <img src="./static/img/logotipo/Logotipo-13.jpg" style="width:100%;height: 22.5VH;">
                <div class="card-body p-2">
                    <span class="card-text text-muted" style="font-size: 25px;">Veterinaria Rapida</span>
                    <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                    <br>
                    <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                    <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
                </div>
            </div>
        </div>
            <div class="empresa-div">
            <div class="card" style=";">
                <img src="./static/img/logotipo/Logotipo-14.jpg" style="width:100%;height: 22.5VH;">
                <div class="card-body p-2">
                    <span class="card-text text-muted" style="font-size: 25px;">Clinica Don Huesos</span>
                    <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                    <br>
                    <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                    <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
                </div>
            </div>
            </div>`
            $("#empresa").html(empresa)

        } else if (valor == "Oyotun") {
            let empresa = `
            <div class="empresa-div">
            <div class="card" style=";">
                <img src="./static/img/logotipo/Logotipo-15.jpg" style="width:100%;height: 22.5VH;">
                <div class="card-body p-2">
                    <span class="card-text text-muted" style="font-size: 25px;">Clinica Dogin</span>
                    <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                    <br>
                    <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                    <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
                </div>
            </div>
            </div>
            <div class="empresa-div">
            <div class="card" style=";">
                <img src="./static/img/logotipo/Logotipo-16.jpg" style="width:100%;height: 22.5VH;">
                <div class="card-body p-2">
                    <span class="card-text text-muted" style="font-size: 25px;">Veterinaria deL Señor</span>
                    <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                    <br>
                    <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                    <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
                </div>
            </div>
            </div>`
            $("#empresa").html(empresa)

        }
        else if (valor == "San Jose") {
            let empresa = `
            <div class="empresa-div">
                <div class="card" style=";">
                    <img src="./static/img/logotipo/Logotipo-17.jpg" style="width:100%;height: 22.5VH;">
                    <div class="card-body p-2">
                        <span class="card-text text-muted" style="font-size: 25px;">Veterinaria My friends</span>
                        <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                        <br>
                        <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                        <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
                    </div>
                </div>
            </div>
            <div class="empresa-div">
            <div class="card" style=";">
                <img src="./static/img/logotipo/Logotipo-18.jpg" style="width:100%;height: 22.5VH;">
                <div class="card-body p-2">
                    <span class="card-text text-muted" style="font-size: 25px;">Veterinaria Rapida</span>
                    <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                    <br>
                    <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                    <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
                </div>
            </div>
        </div>
            <div class="empresa-div">
            <div class="card" style=";">
                <img src="./static/img/logotipo/Logotipo-19.jpg" style="width:100%;height: 22.5VH;">
                <div class="card-body p-2">
                    <span class="card-text text-muted" style="font-size: 25px;">Clinica Don Huesos</span>
                    <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                    <br>
                    <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                    <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
                </div>
            </div>
            </div>`
            $("#empresa").html(empresa)

        } else if (valor == "Bolivar") {
            let empresa = `
            <div class="empresa-div">
            <div class="card" style=";">
                <img src="./static/img/logotipo/Logotipo-20.jpg" style="width:100%;height: 22.5VH;">
                <div class="card-body p-2">
                    <span class="card-text text-muted" style="font-size: 25px;">Clinica Dogin</span>
                    <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                    <br>
                    <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                    <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
                </div>
            </div>
            </div>
            <div class="empresa-div">
            <div class="card" style=";">
                <img src="./static/img/logotipo/Logotipo-21.jpg" style="width:100%;height: 22.5VH;">
                <div class="card-body p-2">
                    <span class="card-text text-muted" style="font-size: 25px;">Veterinaria deL Señor</span>
                    <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                    <br>
                    <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                    <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
                </div>
            </div>
            </div>`
            $("#empresa").html(empresa)

        } else {
            // Devuelve si el codigo es vuelto a los departamentos
            let empresa =
                `             
                <div class="empresa-div">
                <div class="card" style=";">
                    <img src="./static/img/logotipo/Logotipo-2.JPG" style="width:100%;height: 22.5VH;">
                    <div class="card-body p-2">
                        <span class="card-text text-muted" style="font-size: 25px;">Veterinaria deL Señor</span>
                        <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                        <br>
                        <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                        <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
                    </div>
                </div>
                </div>
                    <div class="empresa-div">
                        <div class="card" style=";">
                            <img src="./static/img/logotipo/Logotipo-1.png" style="width:100%;height: 22.5VH;">
                            <div class="card-body p-2">
                                <span class="card-text text-muted" style="font-size: 25px;">Veterinaria My friends</span>
                                <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                                <br>
                                <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                                <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="empresa-div">
                    <div class="card" style=";">
                        <img src="./static/img/logotipo/Logotipo-3.png" style="width:100%;height: 22.5VH;">
                        <div class="card-body p-2">
                            <span class="card-text text-muted" style="font-size: 25px;">Veterinaria Rapida</span>
                            <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                            <br>
                            <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                            <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
                        </div>
                    </div>
                </div>
                    <div class="empresa-div">
                    <div class="card" style=";">
                        <img src="./static/img/logotipo/Logotipo-5.jpg" style="width:100%;height: 22.5VH;">
                        <div class="card-body p-2">
                            <span class="card-text text-muted" style="font-size: 25px;">Clinica Don Huesos</span>
                            <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                            <br>
                            <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                            <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
                        </div>
                    </div>
                    </div>
                    <div class="empresa-div">
                    <div class="card" style=";">
                        <img src="./static/img/logotipo/Logotipo-4.jpg" style="width:100%;height: 22.5VH;">
                        <div class="card-body p-2">
                            <span class="card-text text-muted" style="font-size: 25px;">Clinica Dogin</span>
                            <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                            <br>
                            <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                            <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
                        </div>
                    </div>
                    </div>
                    <div class="empresa-div">
                    <div class="card" style=";">
                        <img src="./static/img/logotipo/Logotipo-6.jpg" style="width:100%;height: 22.5VH;">
                        <div class="card-body p-2">
                            <span class="card-text text-muted" style="font-size: 25px;">Veterinaria deL Señor</span>
                            <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                            <br>
                            <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                            <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
                        </div>
                    </div>
                    </div>
                        <div class="empresa-div">
                            <div class="card" style=";">
                                <img src="./static/img/logotipo/Logotipo-7.jpg" style="width:100%;height: 22.5VH;">
                                <div class="card-body p-2">
                                    <span class="card-text text-muted" style="font-size: 25px;">Veterinaria My friends</span>
                                    <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                                    <br>
                                    <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                                    <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="empresa-div">
                        <div class="card" style=";">
                            <img src="./static/img/logotipo/Logotipo-8.jpg" style="width:100%;height: 22.5VH;">
                            <div class="card-body p-2">
                                <span class="card-text text-muted" style="font-size: 25px;">Veterinaria Rapida</span>
                                <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                                <br>
                                <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                                <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
                            </div>
                        </div>
                    </div>
                        <div class="empresa-div">
                        <div class="card" style=";">
                            <img src="./static/img/logotipo/Logotipo-9.jpg" style="width:100%;height: 22.5VH;">
                            <div class="card-body p-2">
                                <span class="card-text text-muted" style="font-size: 25px;">Clinica Don Huesos</span>
                                <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                                <br>
                                <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                                <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
                            </div>
                        </div>
                        </div>
                        <div class="empresa-div">
                        <div class="card" style=";">
                            <img src="./static/img/logotipo/Logotipo-10.jpg" style="width:100%;height: 22.5VH;">
                            <div class="card-body p-2">
                                <span class="card-text text-muted" style="font-size: 25px;">Clinica Dogin</span>
                                <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                                <br>
                                <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                                <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
                            </div>
                        </div>
                        </div>
                        <div class="empresa-div">
                <div class="card" style=";">
                    <img src="./static/img/logotipo/Logotipo-11.jpg" style="width:100%;height: 22.5VH;">
                    <div class="card-body p-2">
                        <span class="card-text text-muted" style="font-size: 25px;">Veterinaria deL Señor</span>
                        <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                        <br>
                        <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                        <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
                    </div>
                </div>
                </div>
                    <div class="empresa-div">
                        <div class="card" style=";">
                            <img src="./static/img/logotipo/Logotipo-12.jpg" style="width:100%;height: 22.5VH;">
                            <div class="card-body p-2">
                                <span class="card-text text-muted" style="font-size: 25px;">Veterinaria My friends</span>
                                <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                                <br>
                                <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                                <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="empresa-div">
                    <div class="card" style=";">
                        <img src="./static/img/logotipo/Logotipo-13.jpg" style="width:100%;height: 22.5VH;">
                        <div class="card-body p-2">
                            <span class="card-text text-muted" style="font-size: 25px;">Veterinaria Rapida</span>
                            <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                            <br>
                            <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                            <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
                        </div>
                    </div>
                </div>
                    <div class="empresa-div">
                    <div class="card" style=";">
                        <img src="./static/img/logotipo/Logotipo-14.jpg" style="width:100%;height: 22.5VH;">
                        <div class="card-body p-2">
                            <span class="card-text text-muted" style="font-size: 25px;">Clinica Don Huesos</span>
                            <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                            <br>
                            <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                            <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
                        </div>
                    </div>
                    </div>
                    <div class="empresa-div">
                    <div class="card" style=";">
                        <img src="./static/img/logotipo/Logotipo-15.jpg" style="width:100%;height: 22.5VH;">
                        <div class="card-body p-2">
                            <span class="card-text text-muted" style="font-size: 25px;">Clinica Dogin</span>
                            <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                            <br>
                            <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                            <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
                        </div>
                    </div>
                    </div>
                    <div class="empresa-div">
                    <div class="card" style=";">
                        <img src="./static/img/logotipo/Logotipo-16.jpg" style="width:100%;height: 22.5VH;">
                        <div class="card-body p-2">
                            <span class="card-text text-muted" style="font-size: 25px;">Veterinaria deL Señor</span>
                            <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                            <br>
                            <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                            <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
                        </div>
                    </div>
                    </div>
                        <div class="empresa-div">
                            <div class="card" style=";">
                                <img src="./static/img/logotipo/Logotipo-17.jpg" style="width:100%;height: 22.5VH;">
                                <div class="card-body p-2">
                                    <span class="card-text text-muted" style="font-size: 25px;">Veterinaria My friends</span>
                                    <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                                    <br>
                                    <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                                    <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="empresa-div">
                        <div class="card" style=";">
                            <img src="./static/img/logotipo/Logotipo-18.jpg" style="width:100%;height: 22.5VH;">
                            <div class="card-body p-2">
                                <span class="card-text text-muted" style="font-size: 25px;">Veterinaria Rapida</span>
                                <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                                <br>
                                <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                                <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
                            </div>
                        </div>
                    </div>
                        <div class="empresa-div">
                        <div class="card" style=";">
                            <img src="./static/img/logotipo/Logotipo-19.jpg" style="width:100%;height: 22.5VH;">
                            <div class="card-body p-2">
                                <span class="card-text text-muted" style="font-size: 25px;">Clinica Don Huesos</span>
                                <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                                <br>
                                <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                                <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
                            </div>
                        </div>
                        </div>
                        <div class="empresa-div">
                        <div class="card" style=";">
                            <img src="./static/img/logotipo/Logotipo-20.jpg" style="width:100%;height: 22.5VH;">
                            <div class="card-body p-2">
                                <span class="card-text text-muted" style="font-size: 25px;">Clinica Dogin</span>
                                <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                                <br>
                                <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                                <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
                            </div>
                        </div>
                        </div>
                        <div class="empresa-div">
                        <div class="card" style=";">
                            <img src="./static/img/logotipo/Logotipo-21.jpg" style="width:100%;height: 22.5VH;">
                            <div class="card-body p-2">
                                <span class="card-text text-muted" style="font-size: 25px;">Veterinaria deL Señor</span>
                                <span class="card-text text-muted float-right" style="font-size: 25px;">09:00 - 18:00</span>
                                <br>
                                <span class="card-text text-muted" style="font-size: 15px;">Protege la salud de tu mascota</span>
                                <span class="card-text text-muted float-right" style="font-size: 18px;"><i class="fas fa-paw"></i><i class="fas fa-paw"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i><i class="fas fa-star" style="color: #FFC300;"></i></span>
                            </div>
                        </div>
                        </div>`
            $("#empresa").html(empresa)
        }
        console.log(valor)
    })
});