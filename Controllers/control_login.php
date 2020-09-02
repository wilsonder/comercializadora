<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!-- link para ejecutar Bootstrap CSS sin internet -->
     <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" >
     <link rel="stylesheet" type="text/css" href="../css/style.css">
     <meta charset="utf-8">
</head>
<body>
<?php
     require_once '../Models/crud.php';
     $crud=new CRUD();

     if (isset($_POST['Ingresar'])) {
          
          if ($_POST['usuario'] != "" && $_POST['contrasena'] != "") {
               
               $se=$crud->login($_POST['usuario'],$_POST['contrasena']);
               if ($se->getUsu_docu()==$_POST['usuario'] && $se->getUsu_contra()==$_POST['contrasena']) {
                         session_start();
                         $_SESSION['id']=$se->getUsu_docu();
                     header('location:../Views/perfil.php');
               }else{ ?>
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">ERROR</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true"><a href="../Views/index.php">&times;</a></span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <p>Las credenciales no coinciden!!</p>
                          </div>
                        </div>
                    </div>

               <?php }
          }else{ ?>
                <div class="modal-dialog" role="document">
                   <div class="modal-content">
                     <div class="modal-header">
                       <h5 class="modal-title">ERROR</h5>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true"><a href="../Views/index.php">&times;</a></span>
                       </button>
                     </div>
                     <div class="modal-body">
                       <p>Llena todos los campos!!</p>
                     </div>
                   </div>
               </div>

     <?php 
      }
     }
     ?>
</body>
<!-- Optional JavaScript -->
<!-- link para ejecutar jQuery first, then Popper.js, then Bootstrap JS sin conexion a internet-->
<script src="../js/jquery.js"></script>
<script src="../js/popper.js"></script>
<script src="../bootstrap/js/bootstrap.min.js" ></script>
</html>
