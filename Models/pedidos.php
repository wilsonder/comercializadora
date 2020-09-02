
<?php

include("conexion.php");


$cn=con::conexion();

$productos = $cn->prepare("SELECT tb_area.area_nombre, tb_inventario.inv_descripcion, SUM(tb_salida.sal_subtotal) AS sal_subtotal , tb_salida.sal_unidad
                            FROM tb_salida
                            INNER JOIN tb_area ON tb_area.area_id = tb_salida.sal_area_id
                            INNER JOIN tb_inventario ON tb_inventario.inv_id = tb_salida.sal_descripcion
                            WHERE tb_salida.sal_area_id = :area
                            GROUP BY tb_salida.sal_area_id, tb_inventario.inv_descripcion, tb_salida.sal_unidad");

$productos->bindValue('area',$_POST['idArea']);
$productos-> execute();

$sol=$productos->fetchAll();


echo json_encode($sol);


