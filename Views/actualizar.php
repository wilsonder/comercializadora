<?php 
require_once '../Models/crud.php';
require_once '../Models/dao.php';

$crud=new CRUD();
$dao=new dao();

session_start();
if (isset($_SESSION['id'])) {
  $doc=$_SESSION['id'];
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
  <link rel="stylesheet" href="../css/actul.css">
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
            <h5 class="user_name"><?php echo $obtener->getUsu_nombre(); ?></h5>
          </div>
          <div class="container-user no-margin no-padding">
            <img src="<?php echo $obtener->getUsu_foto(); ?>" class="user">
          </div>
        </div>
        <div class="row">
          <div class="col-lg-11 text-center">
            <h4>Configuración del Perfil</h4>
          </div>
          <div class="container-icon text-center">
            <img  onclick="location.href= 'perfil.php'" src="../img/configurationgearoutline_80750.png" class="icons">
          </div>
          <div class="container-icon text-center">
            <img src="../img/cerrar-sesion.png" class="icons">
          </div>
        </div>
      </div>
    </div>
  </header>
  <div class="row">

    <aside class="col-lg-6">
      <div class=" cambiar2">
        <label>Cambio de Contraseña</label>
        <br>
        <form action="../Controllers/control_modificar.php" method="post">
          <input type="hidden" name="doc" value="<?php echo $doc ?>">
          <input type="password" name="contraseña" placeholder="Contraseña" required>
          <br><br>
          <button type="submit" class="btn btn-end2" name="Guardar">Cambiar</button>
        </form>
      </div>
    </aside>
    <aside class="col-lg-6">
      <div class="col-lg-8 container-form margin-form">      
        <div class="row perfil">
          <div class="col-lg-6 img3">
            <img src="<?php echo $obtener->getUsu_foto(); ?>" id="user2">
            <br><br>
            <h4>Cambiar Imagen</h4>
            <br>
            <form action="../Controllers/control_modificar.php" method="post" enctype="multipart/form-data">
              <input type="hidden" name="doc" value="<?php echo $doc ?>">
              <input type="file" name="imagen" required>
              <br><br>
              <input type="submit" class="btn btn-end2" name="img" value="Cambiar">
            </form>
            <br><br>
          </div>
          
        </div>
        
      </div>
    </aside>  
  </div>
  <footer class="row">
      <div class=" fot col-12 col-md-4">
          <img src="../img/sena.png">
          <h1>Comercializadora</h1>
          <h4>Visitanos sera una experiencia unica</h4>
      </div>
      <div class="fot1 col-8 row">
          <div class="conf col-4">
              <h1>Conocenos</h1>
              <h5>Direccion <br> cll7. Mosquera,Cundinamrca</h5>
          </div>
          <div class="conf col-4">
              <h1>Horario</h1>
              <h5>LUNES A VIERNES <br> 7:00 A.M. - 4:00 P.M.</h5>
          </div>
      </div>
      <div class="col-12 end">
          <a><img src="../img/Facebook.png" class="red"></a>
          <a><img src="../img/youtube.png" class="red"></a>
          <a><img src="../img/Instagram.png" class="red"></a>
          <a><img src="../img/Whatsap.png" class="red"></a>
          <hr>
          <h4 class="end">©Copyright - 2020</h4>
      </div>
  </footer>
</body>
</html>