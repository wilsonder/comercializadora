
<?php

include("conexion.php");


$cn=con::conexion();

$productos = $cn->prepare("SELECT tb_ingreso.ing_descripcion, SUM(sal_subtotal) AS cantidad, tb_salida.sal_fecha, tb_area.area_nombre
                            FROM tb_salida
                            INNER JOIN tb_ingreso ON tb_ingreso.ing_id = tb_salida.sal_descripcion
                            INNER JOIN tb_area ON tb_area.area_id = tb_salida.sal_area_id
                            WHERE tb_salida.sal_area_sol = :area
                            GROUP BY tb_salida.sal_descripcion, tb_salida.sal_fecha, tb_salida.sal_area_id");
$productos->bindValue('area',$_POST['idArea']);
$productos-> execute();

$sol=$productos->fetchAll();


echo json_encode($sol);


