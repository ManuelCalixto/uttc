<?php
//solamente al capturar el metodo post
$texto = "Resultado";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $cadena = $_POST['texto'];
    $codificion = $_POST['codificacion'];

    if ($codificion === 'md5') {
        $texto = md5($cadena);
    }

    if ($codificion === 'sha1') {
        $texto = sha1($cadena);
    }

    if ($codificion === 'sha256') {
        $texto = hash('sha256', $cadena);
    }

    if ($codificion === 'sha512') {
        $texto = hash('sha512', $cadena);
    }

    if ($codificion === 'sha3') {
        $texto = hash('sha3-256', $cadena);
    }
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generador de hash</title>
</head>
<body>
    <div>
        <form action="" method="post">
            <div>
                <label for="texto">Escribe el texto</label>
                <input type="text" name="texto" required>
            </div>
            <div>
                <label for="codificacion">Selecciona el algoritmo</label>
                <select name="codificacion">
                    <option value="md5">MD5</option>
                    <option value="sha1">SHA-1</option>
                    <option value="sha256">SHA-256</option>
                    <option value="sha512">SHA-512</option>
                    <option value="sha3">SHA-3</option>
                </select>
            </div>
            <div>
                <button type="submit">Convertir</button>
            </div>
            <h1><?= $texto ?></h1>
        </form>
    </div>
</body>

</html>