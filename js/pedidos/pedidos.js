$(document).ready (function() {

    $idArea = $("#id_area");
    $tabla  = $("#pedidos");

    $.ajax({
        url: "../Models/pedidos.php",
        method: "POST",
        dataType: "json",
        data: {
            'idArea' : $idArea.val()
        },
        error: function(error){ //esta funcion captura los errores que pueda tener la insercion de los datos
            console.log(error);
        },
        success: function(response){
            var table = "";

            if (response.length > 0){
                for(var i in response){
                    table += '<tr>'+
                                '<td>'+ response[i].area_nombre +'</td>'+
                                '<td>'+ response[i].inv_descripcion +'</td>'+
                                '<td>'+ response[i].sal_subtotal +'</td>'+
                                '<td>'+ response[i].sal_unidad +'</td>'+
                             '</tr>';
                }

                $tabla.find("tbody").html("");
                $tabla.append(table);
            }else{
                console.log("lo datos no se seleccionaron");
            }
        }
    });
});


