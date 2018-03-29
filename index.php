
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
            <div class="col-md-4">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Lista de usuarios</h5>
                    <p class="card-text">Aqui podras ver los usuario</p>
                    <a href="lista_pro.php" class="btn btn-primary elboton">Go </a>
                </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Insertar Usuarios</h5>
                    <p class="card-text">Aqui podras insertar un nuevo usuario</p>
                    <a href="nuevo.php" class="btn btn-primary " style="width=100%;">Go</a>
                </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Eliminar Usuarios</h5>
                    <p class="card-text">Aqui se eliminan los usuarios.</p>
                    <a href="#" class="btn btn-primary go">Go </a>
                </div>
                </div>
            </div>
        </div>    
    </div>

</body>
</html>