<?php 
require_once '../Models/crud.php';
require_once '../Models/dao.php';

$crud=new CRUD();
$dao=new dao();

session_start();
if (isset($_SESSION['id'])) {
  $obtener=$crud->datos($_SESSION['id']);

}else{
  header('location: ../index.php');
 
}?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/estilos.css">
  <script src="../js/jquery-3.5.1.min.js"></script>
  <script src="../bootstrap/js/bootstrap.min.js"></script>
  <script src="../js/foto/actualizar.js"></script>

  <title>Comercializadora</title>
</head>
<body>
  <header>
    <div class="row container_main">
      <div class="col-lg-12 no-margin no-padding">
        <div class="row">
          <div class="container-logo no-margin no-padding">
            <img src="../img/logo.jpeg" class="logo" alt="Logo">
          </div>
          <div class="col-lg-2 no-margin no-padding container-header">
          <h4 class="title"><?php echo $obtener->getArea(); ?></h4> 
          </div>
          <div class="container_name no-margin no-padding">
            <h5 class="user_name">Leonel Messi</h5>
          </div>
          <div class="container-user no-margin no-padding">
            <img src="../img/usuario.png" class="user">
          </div>
        </div>
        <div class="row">
          <div class="col-lg-11 text-center">
            <h4>Configuración del Perfil</h4>
          </div>
          <div class="container-icon text-center">
            <img src="../img/configurationgearoutline_80750.png" class="icons">
          </div>
          <div class="container-icon text-center">
            <img src="../img/cerrar-sesion.png" class="icons">
          </div>
        </div>
      </div>
    </div>
  </header>
  <div class="row">
    <aside class="col-lg-2 menu">
      <div class="col-lg-12 container-title">
        <h5 class="title-menu">Capricultura</h5>
      </div>
      <div class="col-lg-12 text-center container-button">
        <button onclick="location.href= 'perfil.php'" class="btn-menu"><i class="fa fa-sign-in icon-button"></i>Ingresar</button>
      </div>
      <div class="col-lg-12 text-center container-button">
        <button  onclick="location.href= 'vista2.php'" class="btn-menu"><i class="fa fa-pencil-square-o icon-button"></i>Solicitar</button>
      </div>
      <div class="col-lg-12 text-center container-button">
        <button  onclick="location.href= 'vista3.php'" class="btn-menu"><i class="fa fa-clock-o icon-button"></i>Historial</button>
      </div>
      <div class="col-lg-12 text-center container-button">
        <button onclick="location.href= 'vista4.php'" class="btn-menu"><i class="fa fa-shopping-bag icon-button"></i>Pedidos</button>
      </div>
      <div class="col-lg-12 text-center container-button">
        <button onclick="location.href= 'vista5.php'" class="btn-menu"><i class="fa fa-leaf icon-button"></i>Productos</button>
      </div>
      <div class="col-lg-12 text-center menu-footer">
      </div>
    </aside>
    <aside class="col-lg-10">
      <div class="col-lg-8 container-form margin-form">      
        <div class="row perfil">
          <div class="col-lg-4 img3">
            <img src="../img/usuario.png" id="user2">
          </div>
          <div class=" col-lg-4 cambiar">
            <h4>Cambiar Imagen</h4>
            <br>
            <input type="file" id="imagen"  value="Seleccione">
          </div>
          <div class=" cambiar2">
            <label>Cambio de Contraseña</label>
            <br>
            <input type="text" id="contraseña" placeholder="Contraseña">
          </div>
        </div>
        <div class="row row-form3">
          <div class="col-lg-12 text-right">
            <button class="btn btn-end3" id="guardar">Guardar</button>
          </div>
        </div>
      </div>
    </aside>  
  </div>
  <footer>
    <div class="col-lg-12 menu">
      <div class="row">
        <div class="col-lg-3 text-center font-text">
          <img src="../img/sena.png" class="img-footer margin-form">
          <h4 class="text-white">Comercializadora</h4>
          <h5 class="text-white">Visítanos será una</h5>
          <h5 class="text-white">Experiencia única</h5>
        </div>
        <div class="col-lg-9">
          <div class="row margin-form">
            <div class="col-lg-6 text-center text-white">
              <div class="container-footer">
                <h4>Conócenos</h4>
                <h5>Dirección</h5>
                <h5>Calle 17, Mosquera, Cundinamarca</h5>
              </div>
            </div>
            <div class="col-lg-6 text-center text-white">
              <div class="container-footer">
                <h4>Horario</h4>
                <h5>Lunes a Viernes</h5>
                <h5>07:00 AM -04:00 PM</h5>
              </div>
            </div>
          </div>
          <div class="col-lg-12 text-center">
              <img src="../img/youtube.png" class="img-redes">
              <img src="../img/Instagram.png" class="img-redes">
              <img src="../img/Facebook.png" class="img-redes">
              <img src="../img/Whatsap.png" class="img-redes">
          </div>
          <div class="col-lg-12 text-center" style="margin-top:5px;border-top:1px solid white">
            <h5 class="text-white">Copyright</h5>
        </div>
        </div>
      </div>
    </div>
  </footer>
</body>
</html>