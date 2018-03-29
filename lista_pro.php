
<!DOCTYPE html>
<html lang="en">
<head>
<?php    include ("headers.html");  ?>
    <script> 
    $(document).ready(function () {
        swal("! Bienvenido !","Click para empezar","success");
    });
    
    </script>
    <title>Crud con php</title>
</head>
<body>
    <header>
    <?php    include ("head.html");  ?>
    </header>
    
    <div class="container menu">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center"> Listado de los productos</h2>
            </div>
           

        </div>
        <div class="row">
            <div class="col-md-12">
            <table class="table" id="my_table">
                <thead>
                    <tr>
                    <th >#</th>
                    <th >Nombre</th>
                    <th >Codigo</th>
                    <th >Categoria</th>
                    <th >Precio</th>
                    <th >Stock</th>
                    </tr>
                </thead>
               
            </table>
                
            </div>
            
        </div>    
    </div>
<script src="assets/js/tablas.js"></script>
</body>
</html>