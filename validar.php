<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servidor = 'localhost';
$username = 'root';
$password = '12345678';
$bdname = 'sistema_login';

$con = new mysqli($servidor, $username, $password, $bdname);

if ($con->connect_error) {
    die("Conexion fallida: " . $con->connect_error);
} else {
    session_start();
    $usuario = $_POST['nombre'];
    $password = $_POST['password'];
    $password_sha3 = hash('sha3-256', $password);

    $sql = "SELECT * FROM login WHERE nombre='$usuario' AND password ='$password_sha3'";
    $resultado = $con->query($sql);
    
    if ($datos = $resultado->fetch_object()) {
        $_SESSION['usuario'] = $usuario;
        //Guarda el de la ultima actividad del usuario
        $_SESSION['actividad'] = time();
        header('Location: panel.php');
        exit();
    } else {
        $_SESSION['error'] = "Usuario o Contraseña Incorrecta";
        header('Location: index.php');
        die();
    }
}
