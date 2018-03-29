$(document).ready(function () {
    var my_table=$('#my_table').DataTable({
        
        "ajax":{
            "method":"POST",
            "url":"inc/consulta.php"
        },
        "columns":[
            {"data":"id"},
            {"data":"prod_name"},
            {"data":"prod_code"},
            {"data":"prod_ctry"},
            {"data":"price"},
            {"data":"prod_qty"}            
        ]
    });
    
});