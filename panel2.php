<?php
session_start();

//definir el tiempo maximo de inactivdad en segundos
$tiempo_max_inactivo = 5;
//Veficar si la sesion a expirado
if (isset($_SESSION['actividad'])) {
    $tiempo_inactivo = time()-$_SESSION['actividad'];
    if($tiempo_inactivo > $tiempo_max_inactivo){
        //si el tiempo inactivo exede el limite destruir la sesion y redirijir al login
        session_unset();
        session_destroy();
        header('Location: index.php');
        die();
    }
    $_SESSION['actividad'] = time();
}

if(!isset($_SESSION['usuario'])){
    // Si no hay una sesion activa regresar al login
    header('Location: index.php');
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel 2</title>
</head>

<body>
    <h1>Panel 2</h1>
    <br>
    <br>
    <a href="panel.php">Ir a Panel 1</a><br><br>
    <a href="salir.php">Cerrar Sesion</a>
</body>

</html>