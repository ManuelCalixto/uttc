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
<h1>lugar secreto</h1>
<br>
<br>
<?php echo ($_SESSION['actividad']);?><br>
<a href="panel2.php">Ir a Panel2</a><br><br>
<a href="salir.php">Cerrar Sesion</a>