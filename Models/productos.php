
<?php

include("conexion.php");


$cn=con::conexion();

$productos = $cn->prepare("SELECT inv_descripcion, FORMAT(SUM(inv_cantidad),0) AS cantidad FROM tb_inventario WHERE inv_area_id = :area GROUP BY inv_descripcion");
$productos->bindValue('area',$_POST['idArea']);
$productos-> execute();

$sol=$productos->fetchAll();


echo json_encode($sol);


