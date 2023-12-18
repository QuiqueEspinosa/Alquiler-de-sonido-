<?php
session_start();
include(__DIR__ . '/config/db.php');

// Inicializa la variable de mensaje de error
$error_message = '';

// Verifica si se ha enviado el formulario de registro
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["register"])) {
    $nombres = $_POST["nombres"];
    $contraseña = $_POST["contraseña"];

    // Utiliza consultas preparadas para evitar inyección SQL
    $query = "INSERT INTO usuario (nombres, contra, fecha_registro) VALUES (?, ?, CURRENT_TIMESTAMP)";
    $stmt = mysqli_prepare($conn, $query);

    // Verifica si la preparación de la consulta fue exitosa
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "ss", $nombres, $contraseña);

        if (mysqli_stmt_execute($stmt)) {
            // Registro exitoso, establece un mensaje de éxito
            $success_message = "¡Registro exitoso! Ahora puedes iniciar sesión.";
        } else {
            // Captura el mensaje de error de MySQL
            $error_message = "Error al registrar el usuario: " . mysqli_stmt_error($stmt);
        }

        mysqli_stmt_close($stmt);
    } else {
        $error_message = "Error en la preparación de la consulta.";
    }

    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="css/register.css">
</head>
<body>

<div class="login-container">
    <div class="login-box">
        <h2 class="login-title">Registro de Usuario</h2>

        <!-- Muestra el mensaje de éxito -->
        <?php if (!empty($success_message)) : ?>
            <div class="success-message">
                <?php echo $success_message; ?>
            </div>
        <?php endif; ?>

        <!-- Formulario de registro -->
        <form method="post" action="register.php">
            <div class="form-group">
                <label for="nombres">Nombres:</label>
                <input type="text" id="nombres" name="nombres" required>
            </div>
            <div class="form-group">
                <label for="contraseña">Contraseña:</label>
                <input type="password" id="contraseña" name="contraseña" required>
            </div>
            <button type="submit" class="login-btn" name="register">Registrar Usuario</button>
        </form>

        <!-- Enlace para ir a la página de inicio de sesión -->
        <a href="login.php" class="register-link">Iniciar Sesión</a>
    </div>
</div>

</body>
</html>
