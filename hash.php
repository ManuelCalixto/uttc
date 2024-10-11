<?php
$cadena = "PollYtz.";
echo $cadena;
echo "<br>";
$cadenaHash = hash('sha512', $cadena);
echo $cadenaHash;