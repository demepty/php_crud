$(document).ready(function () {
    var my_table=$('#my_table').DataTable({
        "lengthMenu":[5,10,20],
        "ajax":{
            "method":"POST",
            "url":"inc/consulta.php"
        },
        "columns":[
            {"data":"id_producto"},
            {"data":"prod_name"},
            {"data":"prod_code"},
            {"data":"id_categoria"},
            {"data":"price"},
            {"data":"prod_qty"},
            {"defaultContent": `<div>
            <button class='btn btn-outline-danger btn-sm' id='editar'>Actualizar</button>                    
            <button class='btn btn-outline-info btn-sm' id='borrar'>Borrar</button></div>`}            
        ]
    });
    editar("#my_table tbody",my_table);
    
});


var editar= function editar(tbody,my_table){
   $(tbody).on("click","#editar",function () {
       var data=my_table.row($(this).parents("tr")).data();
       let id_pro=data.id_producto;
       let nombre=data.prod_name;
       let price=data.price;
       let categoria=data.id_categoria;

       $("#id_pro").attr("value",id_pro);
       $("#name").val(nombre);
       $("#price").val(price);
       $("#cat").val(categoria);
       
   });
}

function eliminar(){
    let data;
 console.log("voua eliminar");
 console.log(data);

}