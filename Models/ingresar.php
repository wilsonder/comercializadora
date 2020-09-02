<?php

include("conexion.php");//ruta para traer la conexion 
$cn=con::conexion();
                          //en esta parte se vuelven a traer los datos del ingresar.js para hacer la consulta mediante el metodo POST
$area = $_POST['area'];
$descripcion    = $_POST['descripcion'];
$cantidad  = $_POST['cantidad'];
$costo         = $_POST['costo'];
$precio   = $_POST['precio'];


//aqui debajo es para hacer la consulta de insertar datos

$insertar = $cn->prepare("INSERT INTO tb_inventario VALUES(NULL,".$area.",'".$descripcion."',".$cantidad.",".$costo.",".$precio.")");

//el cn es la variable que se trae de la conexion
$insertar->execute(); //el execute ejecuta la consulta

if($insertar){ //este if es para confirmar si los datos se insertaron 
    echo json_encode("200"); //esta funcion es lago compleja pero  imprime el resultado de la consulta
                             //decidi guardarla como un numero para hacer mas facil el  if del sucess del ingresar.js linea 29
}else{
    echo json_encode("400");//en este caso es lo mismo que dije anteriormente
}