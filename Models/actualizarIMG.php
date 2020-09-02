
<?php

include("conexion.php");//ruta para traer la conexion 
$cn=con::conexion();
                          //en esta parte se vuelven a traer los datos del ingresar.js para hacer la consulta mediante el metodo POST
$imagen = $_FILE['imagen'];
$contrasena    = $_POST['contraseña'];

print_r($imagen);



//aqui debajo es para hacer la consulta de insertar datos
/*
$insertar = $cn->prepare "UPDATE tb_usuario SET usu_foto, usu_contra WHERE usu_foto=$imagen, usu_contra=$contrasena"

//el cn es la variable que se trae de la conexion
$insertar->execute(); //el execute ejecuta la consulta

if($insertar){ //este if es para confirmar si los datos se insertaron 
    echo json_encode("200"); //esta funcion es lago compleja pero  imprime el resultado de la consulta
                             //decidi guardarla como un numero para hacer mas facil el  if del sucess del ingresar.js linea 29
}else{
    echo json_encode("400");//en este caso es lo mismo que dije anteriormente
}

*/