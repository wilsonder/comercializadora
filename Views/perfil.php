<?php 
require_once '../Models/crud.php';
require_once '../Models/dao.php';

$crud=new CRUD();
$dao=new dao();

session_start();
if (isset($_SESSION['id'])) {
  $obtener=$crud->datos($_SESSION['id']);
  $areas = $crud->areas();

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
  <script src="../js/inicio/ingresar.js"></script>
  <script src="../js/inicio/productos/productos.js"></script>
  <script src="../js/solicitar/solicitar.js"></script>
  <script src="../js/perfil.js"></script>
  <title><?php echo $obtener->getArea(); ?></title>
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
            <h4>Ingresar productos</h4>
          </div>
          <div class="container-icon text-center">
            <img onclick="location.href= 'actualizar.php'" src="../img/configurationgearoutline_80750.png" class="icons">
          </div>
          <div class="container-icon text-center">
            <a href="../Controllers/control_logout.php?destroy">
            <img src="../img/cerrar-sesion.png" class="icons"></a>
          </div>
        </div>
      </div>
    </div>
  </header>
  <div class="row">
    <aside class="col-lg-2 menu">
    <!--////////////ingresar producto/////////////-->
      
      <div class="col-lg-12 text-center container-button">
          <button type="button" class="btn-menu ing"><i class="fa fa-sign-in icon-button"></i>Ingresar</button>
      </div>
      <div class="col-lg-12 text-center container-button">
        <button class="btn-menu sol"><i class="fa fa-pencil-square-o icon-button"></i>Solicitar</button>
      </div>
      <div class="col-lg-12 text-center container-button">
        <button class="btn-menu his" onclick="historial()"><i class="fa fa-clock-o icon-button"></i>Historial</button>
      </div>
      <div class="col-lg-12 text-center container-button">
        <button class="btn-menu ped" onclick="pedido()"><i class="fa fa-shopping-bag icon-button"></i>Pedidos</button>
      </div>
      <div class="col-lg-12 text-center container-button">
        <button class="btn-menu pro" onclick="producto()"><i class="fa fa-leaf icon-button"></i>Productos</button>
      </div>
      <div class="col-lg-12 text-center menu-footer">
      </div>
    </aside>
    <aside class="col-lg-10">

      <div class="col-lg-8 container-form margin-form conting">
        <div class="row row-form">
          <div class="col-lg-4">
            <label>Area</label>
          </div>
          <div class="col-lg-8">
          <select class="form-control input-form" id="area">
              <option value="<?php echo $obtener->getUsu_area(); ?>"><?php echo $obtener->getArea(); ?></option>
            </select>
          </div>
        </div>

        <div class="row row-form">
          <div class="col-lg-4">
            <label>Descripcion del producto</label>
          </div>
          <div class="col-lg-8">
            <input type="text" id="descripcion" class="form-control input-form">
          </div>
        </div>

        <div class="row row-form">
          <div class="col-lg-4">
            <label>Cantidad</label>
          </div>
          <div class="col-lg-8">
            <input type="text" id="cantidad" class="form-control input-form">
          </div>
        </div>
    
        <div class="row row-form">
          <div class="col-lg-4">
            <label>Costo</label>
          </div>
          <div class="col-lg-8">
          <input type="text" id="costo" class="form-control input-form">
          </div>
        </div>
        <div class="row row-form">
          <div class="col-lg-4">
            <label>Precio</label>
          </div>
          <div class="col-lg-8">
            <input type="text" id="precio" class="form-control input-form">
          </div>
        </div>
        <div class="row row-form">
          <div class="col-lg-12 text-center">
            <button class="btn btn-form" id="ingresar">Ingresar</button>
          </div>
        </div>
        <div class="row row-form">
          <div class="col-lg-12 text-left">
            <img src="../img/registro.png" class="img-form">
          </div>
        </div>
      </div>


      
      <!--////////////ingresar solicitud/////////////-->
      <div class="col-lg-8 container-form margin-form contsol">
      <div class="row row-form">
          <div class="col-lg-4">
            <label>Id de Solicitud</label>
          </div>
          <div class="col-lg-8">
            <input type="text" name="id_solicitud" id="id_solicitud" class="form-control input-form">
          </div>
        </div>
        <div class="row row-form">
          <div class="col-lg-4">
            <label>Fecha de Solicitud</label>
          </div>
          <div class="col-lg-8">
            <input type="date" name="fecha_solicitud" id="fecha_solicitud" class="form-control input-form">
          </div>
        </div>
        <div class="row row-form">
          <div class="col-lg-4">
            <label>Area</label>
          </div>
          <div class="col-lg-8">
            <select class="form-control input-form" id="narea" name="narea">
            <?php
              foreach($areas as $val){
            ?>
              <option value="<?php echo $val["area_id"]; ?>" ><?php echo $val["area_nombre"]; ?></option>
            <?php
              }
            ?>
            </select>
          </div>
        </div>
        <div class="row row-form">
          <div class="col-lg-4">
            <label>Nombre del Producto</label>
          </div>
          <div class="col-lg-8" id="producnt"></div>
        </div>
        <div class="row row-form">
          <div class="col-lg-4">
            <label>Cantidad</label>
          </div>
          <div class="col-lg-4">
            <input type="text" id="cantidad" name="cantidad" class="form-control input-form">
          </div>
          <input type="hidden" name="area_solicitar" id="area_solicitar" value="<?php echo $obtener->getUsu_area();?>">
          <div class="col-lg-4">
            <select class="form-control input-form" id="unidad" name="unidad">
              <option value="Kilogramos">Kilogramos</option>
              <option value="Gramos">Gramos</option>
              <option value="Litros">Litros</option>
              <option value="Cubetas">Cubetas</option>
            </select>
          </div>
        </div>
        <div class="row row-form">
          <div class="col-lg-12 text-right">
            <button class="btn btn-end2" id="solicitar">Solicitar</button>
          </div>
        </div>
        <div class="row row-form">
        <div class="col-lg-12 text-left">
          <img src="../img/registro.png" class="img-form">
        </div>
      </div>
      </div>
      
<!--//////////////////historial/////////////////////////////-->
     <div class="col-lg-8 container-form margin-form conthis">
            <div class="row row-form">
              <div class="col-lg-12">
              <input type="hidden" id="his_area" value="<?php echo $obtener->getUsu_area(); ?>">
                <table class="table table-bordered" width="100%" id="conthistorial">
                  <thead>
                    <tr>
                      <th>Producto</th>
                      <th>Cantidad</th>
                      <th>Fecha de Envío</th>
                      <th>Área</th>
                    </tr>
                  </thead>
                    <tbody></tbody>
                </table>
              </div>  
            </div>
            <div class="row row-form2">
            <div class="col-lg-12 text-right">
              <img src="../img/registro.png" class="img-form2">
            </div>
          </div>  
          </div>
<!--//////////////////pedidos/////////////////////////////-->
      <div class="col-lg-8 container-form margin-form contped">
        <div class="row row-form ">
          <div class="col-lg-12">
            <div class="buscar">
              <input type="text" class="form-control input-form2" placeholder="Buscar">
            </div>
            <input type="hidden" id="ped_area" value="<?php echo $obtener->getUsu_area(); ?>">
            <br>
            <table class="table table-bordered" width="100%" id="contpedidos">
              <thead>
                <tr>
                  <th>Área</th>
                  <th>Descripcion</th>
                  <th>cantidad</th>
                  <th>Unidad</th>
                </tr>
              </thead>
                <tbody></tbody>
            </table>
          </div>  
        </div>  
        <div class="row row-form2">
          <div class="col-lg-12 text-left">
            <img src="../img/registro.png" class="img-form">
          </div>
        </div>
      </div>


<!--//////////////////productos/////////////////////////////-->
      <div class="col-lg-8 container-form margin-form contpro">
        <div class="row row-form ">
          <div class="col-lg-12">
            <div class="buscar2">
              <img src="../img/capricultura.jpg" id="cabra">
            </div>
            <br>
            <input type="hidden" id="area_id" value="<?php echo $obtener->getUsu_area(); ?>">
            <div style="height:350px; overflow:auto;">
              <table class="table table-bordered" width="100%" id="tablaproducto">
                <thead>
                  <tr>
                    <th>Disponible</th>   
                    <th>Cantidad</th> 
                  </tr>
                </thead>
                  <tbody></tbody>
              </table>
              </div>
          </div>  
        </div> 
        <div class="row row-form">
          <div class="col-lg-12 text-right">
            <img src="../img/registro.png" class="img-form">
          </div>
        </div> 
      </div>


        </aside>
      </div>
    






  <!--////////////footer/////////////-->
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