$(document).ready(function(){
    $id        = $("#id_solicitud");
    $area      = $("#area"); 
    $productos = $("#productos");
    $solictar  = $("#solicitar");
    $fecha     = $("#fecha_solicitud");
    $cantidad  = $("#cantidad");
    $unidad    = $("#unidad");
    $area_sol  = $("#area_solicitar");


    $area.on("change", function(e){ //aquí se llama el boton mediante la funcion onclick y el id que es ingresar
        e.preventDefault(); // la funcion e me trae todos los datos que pueda traer el boton
        
        $.ajax({ // la funcion ajax es para hacer el envío de datos del javascript al php 
            url: "../Models/solicitar.php", //la ruta para el envio de datos
            method: "POST",
            dataType: "json",
            data: {
                'area_id'    : $(this).val(),
            },
            error: function(error){ //esta funcion captura los errores que pueda tener la insercion de los datos
                console.log(error);
            },
            success: function(response){ // al insertar datos exitosamente el succes muestra la confirmacion y limpia los campos
                var opcion = '';

                opcion += '<select class="form-control input-form" id="producto" name="producto">';
                for(var i in response){
                    opcion += '<option value="'+ response[i].inv_id +'">'+ response[i].inv_descripcion +'</option>';
                }

                opcion += "</select>";

                $productos.html("");
                $productos.append(opcion);
            }
        });
    });

    $solictar.on("click", function(e){ //aquí se llama el boton mediante la funcion onclick y el id que es ingresar
        e.preventDefault(); // la funcion e me trae todos los datos que pueda traer el boton
        
        $.ajax({ // la funcion ajax es para hacer el envío de datos del javascript al php 
            url: "../Models/guardarsolicitud.php", //la ruta para el envio de datos
            method: "POST",
            dataType: "json",
            data: {
                'id'          : $id.val(),
                'fecha'       : $fecha.val(),
                'area'        : $area.val(),
                'descripcion' : $("#producto").val(),
                'cantidad'    : $cantidad.val(),
                'unidad'      : $unidad.val(),
                'area_sol'    : $area_sol.val()
            },
            error: function(error){ //esta funcion captura los errores que pueda tener la insercion de los datos
                console.log(error);
            },
            success: function(response){ // al insertar datos exitosamente el succes muestra la confirmacion y limpia los campos
                if(response == 200){//este if es el resultado de la consulta para saber si se insertaron los datos correctamente ver el ingresar.php linea 18
                    alert("Los datos se guardaron correctamente");
                    $id.val("");
                    $area.val("");       
                    $productos.html(""); 
                    $solictar.val(""); 
                    $fecha.val("");     
                    $cantidad.val(""); 
                    $unidad.val("");    
                }else{
                    alert("Los datos no se guardaron correctamente");
                }
            }
        });
    });
});