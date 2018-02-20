
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
                <h1> Crud con php jax y bootstrap 4</h1>
            </div>
    </div>
    </header>
    <div class="container">        
            <div class="row">
                <div class="col-md-3">
                    <h3> Consulta via ajax</h3>                   
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="elid"> <strong>Id usuario </strong> </label>
                        <input type="text" id="elid">
                        <button class="btn btn-info" onclick=creo()> Click  </button>                                       
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="result"><strong>Resultado</strong></label>
                        <input type="text" id="datito">
                    </div>
                </div>
            </div>    
    </div>
    <div class="container menu">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Lista de usuarios</h5>
                    <p class="card-text">Aqui podras ver los usuario</p>
                    <a href="#" class="btn btn-primary">Go </a>
                </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Insertar Usuarios</h5>
                    <p class="card-text">Aqui podras insertar un nuevo usuario</p>
                    <a href="#" class="btn btn-primary">Go</a>
                </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Eliminar Usuarios</h5>
                    <p class="card-text">Aqui se eliminan los usuarios.</p>
                    <a href="#" class="btn btn-primary">Go </a>
                </div>
                </div>
            </div>
        </div>    
    </div>

    <div class="container">
    <br>
        <div class="row">
            <div class="col-sm-12">
            <legend>Lista de ejemplo</legend>
                    <table id="example" class= "table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                            </tr>
                            <tr>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>63</td>
                                <td>2011/07/25</td>
                                <td>$170,750</td>
                            </tr>
                        
                        </tbody>
                    </table>
            </div>            
        </div>
    </div>
<div class="container">
<br>
    <div class="row">
        <button  id="alerta"> Sweet <i class="fas fa-user"></i></button>
        
    </div>
</div>

</body>
</html>