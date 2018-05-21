<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <title>Login</title>
    </head>
    <body>
    
    <div class="container">

<div class="row">
    <h1>Lion Rent a Car</h1>
</div>
<header class="row justify-content-between center align-items-center">
    <div class="columna-nav-3 ">
        <h4><img src="img/logo-lion2.png" alt="Logo" style="width:80px;" ></h4>
    </div>
    
   
</header>

        <form action="Clases/UsuarioService.php">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="username" class="form-control" id="username">
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="password">
            </div>
            <div class="form-group form-check">
                <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember me
                </label>
            </div>
            <button type="submit" class="btn btn-primary">Loguear</button>
        </form>

             <footer class="row">
                <div class="col">
                    <h4>Footer</h4>
                    <h6>12 Columnas</h6>
                </div>
            </footer>
        

        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/popper.min.js"></script>
    </body>
</html>