


$(document).ready(function(){
    
    $imagen        = $("#imagen"); //en esta parte del codigo se hace la captura de datos con los id de los input
    $contrasena = $("#contraseña");

    $("#guardar").on("click", function(e){ //aquí se llama el boton mediante la funcion onclick y el id que es ingresar
        e.preventDefault(); // la funcion e me trae todos los datos que pueda traer el boton
        
        $.ajax({ // la funcion ajax es para hacer el envío de datos del javascript al php 
            url: "../Models/actualizarIMG.php", //la ruta para el envio de datos
            method: "POST",
            dataType: "json",
            data: {                      //el .val() es para obtener los datos que se ingresen en los input
                'imagen'         : $imagen.val(),
                'contraseña'  : $contrasena.val(),
                
            },
            error: function(error){ //esta funcion captura los errores que pueda tener la insercion de los datos
                console.log(error);
            },
            success: function(response){ // al insertar datos exitosamente el succes muestra la confirmacion y limpia los campos
                if(response == 200){//este if es el resultado de la consulta para saber si se insertaron los datos correctamente ver el ingresar.php linea 18
                    alert("Los datos se guardaron correctamente");
                    // el .val vaa vacio para limpiar los campos
                    $imagen.val("");
                    $contrasena.val("");
                    
                }else{
                    alert("Los datos no se guardaron correctamente");
                }
            }
        });
    });
});