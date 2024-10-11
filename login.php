<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/*
//variables locales con el usuario y contraseña correcta
$usuario_correcto= 'admin';
$password_correcto= '1234';

//Obtener los datos del formulario
//var_dump($_POST);



//Verificar las credenciales
if($usuario===$usuario_correcto && $password===$password_correcto){
    echo "Bienvenido tu usuario es correcto";
}else{
    echo "Credenciales incorrectas";
}*/

$servidor ='localhost';
$username ='root';
$password ='12345678';
$bdname ='sistema_login';



$con = new mysqli($servidor, $username, $password, $bdname);

if($con->connect_error){
    die("Conexion fallida: ".$con->connect_error);
} else{
    $usuario = $_POST['nombre'];
    $password = $_POST['password'];
    $password_sha512 = hash('sha512', $cadena);

    $sql = "SELECT * FROM login WHERE usuario='$usuario' AND password ='$password_md5'";
    $resultado = $con->query($sql);

    if($datos= $resultado->fetch_object()){
        echo "Bienvenido, tu usuario es correcto ";
    }else{
        echo "Credenciales incorrectas";
    }
    $con->close();
    
}