
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/style.css"> <!-- Este css debe ir primero por si se necesita perosnalizar alguna clase de bootstraps-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/prueba.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <title>Document</title>
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
                <div class="col-md-4">
                    <h3 class="text-center"> Consulta via ajax</h3>                   
                </div>
                <div class="col-md-4">
                    <label for="elid">Id usuario</label>
                    <input type="text" id="elid">
                    <button onclick=creo()>  CLICK  </button>                                       
                </div>
                <div class="col-md-4">
                    <label for="result"> Resultado</label>
                    <input type="text" id="datito">
                </div>
            </div>    
    </div>
</body>
</html>