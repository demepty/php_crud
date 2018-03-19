
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/style.css"> <!-- Este css debe ir primero por si se necesita perosnalizar alguna clase de bootstraps-->
    <link rel="stylesheet" href="assets/css/datatables.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="assets/js/datatables.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/prueba.js"></script>
    <script src="assets/js/sweetalert.js"></script> <!--Colocamos este js primero y luego el de alertas -->
    <script src="assets/js/alertas.js"></script>    <!--Colocamos este js creado solo para las alertas -->
    <script> 
    $(document).ready(function () {
        swal("! Bienvenido !","Click para empezar","success");
    });
    
    </script>
    <title>Crud con php</title>
</head>
<body>
    <header>
    <div class="cabecera">
            <div class="container">
                <h1> Crud con php Ajax y bootstrap 4</h1>
            </div>
    </div>
    </header>
    
    <div class="container menu">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Lista de usuarios</h5>
                    <p class="card-text">Aqui podras ver los usuario</p>
                    <a href="#" class="btn btn-primary elboton">Go </a>
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