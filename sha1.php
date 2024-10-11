<?php
$cadena = "1234";
echo "val0r sin encriptar: " . $cadena;
echo "<br>";
/// CADENA CON ENCRIPTACION
$cadena_md5 = md5($cadena);
$cadena_sha1 = sha1($cadena);
$cadena_sha256 = hash('sha256', $cadena);
$cadena_sha512 = hash('sha512', $cadena);
$cadena_sha3 = hash('sha3-256', $cadena);
echo "valor con encriptacion <br>";
echo $cadena_md5  . "<br>";
echo $cadena_sha1 . "<br>";
echo $cadena_sha256 . "<br>";
echo $cadena_sha512 . "<br>";;
echo $cadena_sha3;