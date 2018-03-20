
$(document).ready(function () {
var dato=1;
    $.ajax({
        type: "POST",
        url: "inc/consulta2.php",
        data:{dato},
        dataType: "json",
        success: function (response) {
            console.log(response);
            $("#cat").append('<option>Seleccionar</option>');
            $.each(response, function (id, value) {
            $("#cat").append("<option value='"+value.id_categoria+"'> "+value.desc_categoria+" </option>");     
            });
        }
    });

    var pro=1;
    $.ajax({
        type: "POST",
        url: "inc/consulta2.php",
        data:{pro},
        dataType: "json",
        success: function (response) {
            console.log(response);
            $("#elpro").append('<option>Seleccionar</option>');
            $.each(response, function (id, value) {
            $("#elpro").append("<option value='"+value.id_proveedor+"'> "+value.proveedor+" </option>");     
            });
        }
    });
});

    $("#add_producto").submit(function (e) { 
        var datos= $(this).serialize();
        $.ajax({
            type: "POST",
            url: "inc/guardar_producto.php",
            data: datos,
            beforeSend:function (objeto) {
                $("#enviando").html("Enviando....").fadeOut("slow");; 

            },
            success: function (response) {
                $("#resultado").html(response).fadeIn();
               // location.href=("nuevo.php"); 
            },
            error: function (err) {
                alert("Disculpe, ocurrio un error");
                //location.href=("nuevo.php");
            }
        });
    
        e.preventDefault();
        
    });




