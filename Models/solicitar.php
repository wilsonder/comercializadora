<?php 

    /*esta parte del codigo es para hacer la consulta de la parte de solicitar productos*/
    require_once 'conexion.php';

    $db=con::conexion();

    $sql=$db->prepare("SELECT inv_id, inv_descripcion FROM tb_inventario WHERE inv_area_id = :area");  
    $sql->bindValue('area',$_POST['area_id']);
    $sql->execute();

    $sol=$sql->fetchAll();

    echo json_encode($sol); 

?>