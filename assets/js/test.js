function creo() {

    var id= $("#elid").val();
    console.log(id);
    $.ajax({

        type:'POST',
        dataType:'json',
        url:'inc/consulta.php',
        data:{id},
        success:function (data) {
            console.log(data);
            console.log(data[0].sexo);
            $("#datito").attr("value",data[0].sexo);
        }
    });
}