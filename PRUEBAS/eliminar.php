<?php
    include_once '../Clases/UsuarioService.php';

    $mensaje = "ERROR";
    
    if (isset($_GET["id"])) {
        $id = $_GET["id"];

        $mensaje = "Adiós ".(UsuarioService::usuarioPorId($id))->getRealName($id)."!";
        UsuarioService::eliminar($id);
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <a href="pruebas.php">1</a><br>
    <a href="pruebas2.php">2</a><br>

    <div>
        <h3>USUARIO ELIMINADO!</h3>
        <p><?=$mensaje;?></p>
    </div>

</body>
</html>