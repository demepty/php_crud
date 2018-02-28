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
    <form action="" method="post">
        <div class="row">
            <div class="col-xs-8 offset-md-4 text-center">
                <legend>Ingresa los datos</legend>
            </div>         
        </div>
        <div class="row">
            <div class="col-xs-8 offset-md-4">
            <label for=""> Nombre</label>
            <input type="text" name="nombre" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-xs-8 offset-md-4">
            <label for=""> Categoria</label>
            <input type="text" name="categoria" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-xs-8 offset-md-4">
            <label for=""> Proveedor</label>
            <input type="text" name="proveedor" class="form-control">
            </div>
        </div>
    </form>    
    </div>

</body>
</html>