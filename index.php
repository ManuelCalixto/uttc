<?php
$texto = "<script>alert('Hola Mundo');</script>";
echo htmlspecialchars($texto);

session_start();
//Verificar si hay un mensaage of error!
$error = isset($_SESSION['error']) ? $_SESSION['error'] : '';
unset($_SESSION['error']);
//Verificar si hay inicio de sesion
if (isset($_SESSION['usuario'])) {
    // Si no hay una sesion activa regresar al login
    header('Location: panel.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css.map">
    <title>Login</title>
</head>

<body class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body p-4">
                        <h3 class="text-center mb-4">Login</h3>
                        <form id="loginForm" action="validar.php" method="post">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Usuario</label>
                                <input type="text" class="form-control" id="nombre" name="nombre"
                                    placeholder="Ingrese su usuario">
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Ingrese su contraseña">
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Ingresar</button>
                            </div>
                        </form>
                        <!-- Mostrar el mensaje de error -->
                        <?php
                        if ($error) { ?>
                            <p style="color: red;"><?php echo $error ?></p>
                            <?php
                        }
                        ?>
                    </div>
                    <script src="js/bootstrap.bundle.min.js"></script>
                    <script src="js/bootstrap.bundle.min.js.map"></script>
</body>

</html>