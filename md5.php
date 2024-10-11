<?php
 $cadena = 1234;
 echo "el valor sin encriptar es: $cadena";
 echo "<br>";
 $password_md5 = hash('sha512',$cadena);
 echo "el valor de la variable encriptado es:  $password_md5";