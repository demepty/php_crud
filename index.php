
<!DOCTYPE html>
<html lang="en">
<head>
<?php    include ("headers.html");  ?>
    <style>
    .flotante {
    display:scroll;
        position:fixed;
        bottom:320px;
        right:0px;
}
    </style>
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
            <div class="col-md-4">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Gestion de Productos</h5>
                    <p class="card-text">Aqui podras ver los productos</p>
                    <a href="lista_pro.php" class="btn btn-primary elboton">Go </a>
                </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Insertar Productos</h5>
                    <p class="card-text">Aqui podras insertar un nuevo producto</p>
                    <a href="nuevo.php" class="btn btn-primary " style="width=100%;">Go</a>
                </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Eliminar products</h5>
                    <p class="card-text">Aqui se eliminan los productos.</p>
                    <a href="#" class="btn btn-primary go">Go </a>
                </div>
                </div>
            </div>
        </div>
        <div class="row">
        </div>    
    </div>  


</body>
</html>