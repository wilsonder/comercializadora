<?php
require_once('Models/inventarioGS.php');
require_once('Models/crud.php');
$crud= new CRUD();
$libro=new inventario();

$lista=$crud->mostrar();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Comercializadora | Inicio</title>
    <link rel="icon" type="icon" href="img/logo.png">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="fixed-top">
                <!-- /////////////////////////////// menu de unidades ///////////////// -->
                <nav class="navbar navbar-expand-lg " id="nav">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-menu"></span>
                    </button>
                    <img class=" navbar-brand ocul" src="img/logo.png">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav nav-pills mr-auto" id="pills-tab" role="tablist">
                            <li class="nav-item ">
                                <a class="nav-link" href="index.php" id="men">Inicio </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " id="men" data-toggle="pill" href="#productos" role="tab" aria-controls="pills-produ" aria-selected="false">Productos </a>
                            </li>
                        </ul>
                        <img src=" img/logo.png" class="d-none d-md-none d-lg-block">
                        <ul class="nav navbar-nav nav-pills mr-auto" id="pills-tab" role="tablist">
                            <li class="nav-item ">
                                <a class="nav-link " id="men" data-toggle="pill" href="#nos" role="tab" aria-controls="pills-produ" aria-selected="false">Nosotros </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " id="men" data-toggle="pill" href="#encu" role="tab" aria-controls="pills-produ" aria-selected="false">Encuentranos </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link butcap" href="#" data-toggle="modal" data-target="#exampleModal" id="login">Login </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="container-all row">
                            <div class="ctn-form col-12 col-md-6">
                                <img src="img/logo.png" alt="" class="logo">
                                <h1 class="title">Iniciar Sesion</h1>
                                <form action="Controllers/control_login.php" method="POST">
                                    <label for="">Usuario</label>
                                    <input type="text" name="usuario">
                                    <label for="">Contraseña</label>
                                    <input type="password" name="contrasena">
                                    <input type="submit" value="continuar" name="Ingresar">
                                </form>
                                <span class="text-footer">¿olvidaste tu contraseña?<a href="">Recuperar</a></span>
                            </div>
                            <!--El segundo contenedor del login-->
                            <div class="d-none d-sm-none d-md-block ctn-text col-md-6">
                                <div class="capa">
                                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="img/4.jpg" width="" height="500" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="img/9.jpg" width="" height="500" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="img/pro.jpg" width="" height="500" class="d-block w-100" alt="...">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //////////////////////////////// funcion de menu de navegacion ////////////////////////////// -->
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="container-fluid">
                    <div class="row col-12" id="he">
                        <div class="col-5" id="conth">
                            <span style="color: white;">
                                <h5 id="age">Comercializadora</h5>
                            </span>
                            <span style="color: #20BA38;">
                                <h5 id="age">sena</h5>
                            </span>
                        </div>
                        <div class="d-none d-sm-none d-lg-block col-lg-6" id="conth1">
                            <div class="conth1">
                                <h3>¡Conoce los mejores <br> alimentos!</h3>
                                <p>Los mejores alimentos <br> para el hogar totalmente naturales.</p>
                                <button id="but">Productos</button>
                                <button id="but">Descuentos</button>
                            </div>
                        </div>
                    </div>
                    <!-- //////////////////////////////////////////////////////////// -->
                    <div class=" prod row col-12">
                        <h2 style="margin: 20px auto; font-weight: bold; font-size: 40px" class="col-12" id="texun"><span style="color:#20BA38;  text-shadow: 2px 2px 4px white; ">NUESTROS</span> <span style="color: #fff; text-shadow: 2px 2px 4px #20BA38;">PRODUCTOS</span></h2>
                        <div class="col-sm-4 col-md-4 col-lg-2 cap1">
                            <div class="cap2">
                                <b id="texun">AGRICULTURA</b><br>
                                <p id="texun"><img src="img/7.jpg">
                                    <br><br>
                                    Ambiente donde encontrara
                                    los productos del
                                    aprovechamiento de las
                                    riquezas del suelo
                                    <br>
                                </p>
                                <button id="butcap">Ver...</button>
                            </div>
                        </div>
                        <div class="col-sm-4  col-md-4 col-lg-2 cap1">
                            <div class="cap2">
                                <b id="texun">CUNICULTURA</b><br>
                                <p id="texun"><img src="img/cu.jpg">
                                    <br><br>
                                    Ambiente donde encontrara la venta de conejos
                                    <br><br>
                                </p>
                                <button id="butcap">Ver...</button>
                            </div>
                        </div>
                        <div class="col-sm-4  col-md-4 col-lg-2 cap1">
                            <div class="cap2">
                                <b id="texun">CAPRICULTURA</b><br>
                                <p id="texun"><img src="img/3.jpg">
                                    <br><br>
                                    Ambiente donde encontrara la venta de caprinos
                                    <br><br>
                                </p>
                                <button id="butcap">Ver...</button>
                            </div>
                        </div>
                        <div class="col-sm-4  col-md-4 col-lg-2 cap1">
                            <div class="cap2">
                                <b id="texun">AVICULTURA</b><br>
                                <p id="texun"><img src="img/avi.jpg">
                                    <br><br>
                                    Ambiente donde encontrara la venta de huevos y gallinas.
                                    <br><br>
                                </p>
                                <button id="butcap">Ver...</button>
                            </div>
                        </div>
                    </div>
                    <!-- ///////////////////////////// -->
                    <div class="row con col-12">
                        <div class="con2">
                            <img class="con2 col-12 col-md-7 " src="img/2.jpg">
                            <div class="col-11 col-md-5  text">
                                <h4>Conoce ya!!!</h4>
                                <p>Conoce los mejores lugares de crianza de nuestros animales aqui ellos reciben la mejor alimentacion con 0 quimicos</p>
                                <br>
                                <button id="login">Como llegar</button>
                            </div>
                        </div>
                    </div>
                    <!-- ///////////////////////////// -->
                    <div class="row pro  col-12">
                        <div class="pro2">
                            <div class="col-11 col-md-5 col-lg-4 text1">
                                <h4>¡¡¡Productos!!!!</h4>
                                <p>Aqui encuentras productos derivados de la leche, carne o todo tipo de productos del aprovechamiento de la tierra.</p>
                            </div>
                            <img class="hero col-12 col-md-7 " src="img/pro.jpg">
                        </div>
                    </div>
                </div>
            </div>
            <!-- boton avicultura -->
            <div class="tab-pane fade" id="productos" role="tabpanel" aria-labelledby="pills-pozo-tab">
                <!-- //////////////////////////////////////////////////////////// -->
                <div class=" prod row col-12">
                    <h2 style="margin: 6% auto; font-weight: bold; font-size: 40px" class="col-12" id="texun"><span style="color:#20BA38;  text-shadow: 2px 2px 4px white; ">NUESTROS</span> <span style="color: #fff; text-shadow: 2px 2px 4px #20BA38;">PRODUCTOS</span></h2>
                    <?php foreach ($lista as $prod) { ?>
                    <div class="col-sm-4 col-md-4 col-lg-2 cap1">
                        <div class="cap2">
                            <b id="texun"><?php echo $prod->getId() ?></b><br>
                            <p id="texun">
                                <div style="background: rgba(255,255,255,0.7); width: 80%; margin: auto; padding: 10%;"><img src="<?php echo $prod->getImg() ?>"></div>
                                <br><br>
                                <?php echo $prod->getDescripcion() ?>
                                <br>
                                Cantidad: <?php echo $prod->getCantidad() ?>
                                <br>
                                Precio: <?php echo $prod->getPrecio() ?>
                            </p>
                        </div>
                    </div>
                   <?php }?>
                </div>
            </div>

                <!-- //////////////////////////////////////////////////////////// -->
            <div class="tab-pane fade " id="nos" role="tabpanel" aria-labelledby="pills-pozo-tab">
                <div class="prod row col-12">
                    <h2 style="margin: 6% auto; font-weight: bold; font-size: 40px" class="col-12" id="texun"><span style="color:#20BA38;  text-shadow: 2px 2px 4px white; ">SENA</span></h2>
                    <div class="row">
                        <div class="col-4" style="padding-top: 6%;">
                            El SENA, es un establecimiento público del orden nacional, <br>con personería jurídica, patrimonio propio e independiente, <br>y autonomía administrativa; adscrito al Ministerio del Trabajo,<br> de Colombia.
                        </div>
                        <img src="img/entrada.png" class="col-6">
                    </div>
                    <div class="row">
                        <h3 class="col-6">Mision</h3>
                        <div class="col-6" style="padding-top: 6%;">
                            El SENA, es un establecimiento público del orden nacional, <br>con personería jurídica, patrimonio propio e independiente, <br>y autonomía administrativa; adscrito al Ministerio del Trabajo,<br> de Colombia.
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6" style="padding-top: 6%;">
                            El SENA, es un establecimiento público del orden nacional, <br>con personería jurídica, patrimonio propio e independiente, <br>y autonomía administrativa; adscrito al Ministerio del Trabajo,<br> de Colombia.
                        </div>
                        <h3 class="col-6">Vision</h3>
                    </div>

                    <br>
                </div>
            </div>

            <div class="tab-pane fade " id="encu" role="tabpanel" aria-labelledby="pills-pozo-tab">
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.426576969296!2d-74.21781468590983!3d4.6957090430099715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9d58cf6e291b%3A0x8946ec678fcf04b4!2sSENA%20MOSQUERA%20(CBA)!5e0!3m2!1ses-419!2sco!4v1594625346432!5m2!1ses-419!2sco" width="800" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
    <footer class="row">
        <div class=" fot col-12 col-md-4">
            <img src="img/sena.png">
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
            <a><img src="img/Facebook.png" class="red"></a>
            <a><img src="img/youtube.png" class="red"></a>
            <a><img src="img/Instagram.png" class="red"></a>
            <a><img src="img/Whatsap.png" class="red"></a>
            <hr>
            <h4 class="end">©Copyright - 2020</h4>
        </div>
    </footer>
    </div>
</body>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>