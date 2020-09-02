$(document).ready (function() {

    producto();
    historial();
    pedido();



});

function producto(){
    $idArea = $("#area_id");
    $tabla  = $("#tablaproducto");

    $.ajax({
        url: "../Models/productos.php",
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
                                '<td>'+ response[i].inv_descripcion +'</td>'+
                                '<td>'+ response[i].cantidad +'</td>'+
                             '</tr>';
                }

                $tabla.find("tbody").html("");
                $tabla.append(table);
            }else{
                console.log("lo datos no se seleccionaron");
            }
        }
    });
}

function pedido() {
    $idArea = $("#ped_area");
    $tabla  = $("#contpedidos");

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
}

 function historial(){
    $idArea = $("#his_area");
    $tabla = $("#conthistorial");

    $.ajax({
        url: "../Models/historial.php",
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
                                '<td>'+ response[i].ing_descripcion +'</td>'+
                                '<td>'+ response[i].cantidad +'</td>'+
                                '<td>'+ response[i].sal_fecha +'</td>'+
                                '<td>'+ response[i].area_nombre +'</td>'+
                             '</tr>';
                }

                $tabla.find("tbody").html("");
                $tabla.append(table);
            }else{
                console.log("lo datos no se seleccionaron");
            }
        }
    });
 }

