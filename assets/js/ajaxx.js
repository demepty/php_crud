
$("#add_producto").submit(function (e) { 
    var datos= $(this).serialize();
    $.ajax({
        type: "POST",
        url: "inc/guardar_producto.php",
        data: datos,
        beforeSend:function (objeto) {
            $("#enviando").html("Enviando....");            
        },
        success: function (response) {
            $("#resultado").html(response);
        }
    });

    e.preventDefault();
    
});

