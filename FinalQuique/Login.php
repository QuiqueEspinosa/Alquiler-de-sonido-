<!-- 
// include(__DIR__ . '/config/db.php');

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $nombres = $_POST["nombres"];
//     $contraseña = $_POST["contraseña"];

//     // Utiliza consultas preparadas para evitar inyección SQL
//     $query = "SELECT * FROM usuario WHERE nombres = ? AND contra = ?";
//     $stmt = mysqli_prepare($conn, $query);
//     mysqli_stmt_bind_param($stmt, "ss", $nombres, $contraseña);
//     mysqli_stmt_execute($stmt);

//     $result = mysqli_stmt_get_result($stmt);

//     if ($result && mysqli_num_rows($result) > 0) {
//         // Usuario autenticado
//         header("Location:/FinalQuique/CrudUser/Crud.php");
//         exit();
//     } else {
//         $error_message = "Usuario no registrado o Contraseña incorrecta";
//     }
// }
//  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>

<div class="login-container">
    <div class="login-box">
        <h2 class="login-title">Inicio de Sesión</h2>

        <?php if (!empty($error_message)) : ?>
            <div class="login-error">
                <?php echo $error_message; ?>
            </div>
        <?php endif; ?>

        <form action="login_action.php" method="post">
            <div class="form-group">
                <label for="nombres">Nombres:</label>
                <input type="text" id="nombres" name="nombres" required>
            </div>
            <div class="form-group">
                <label for="contraseña">Contraseña:</label>
                <input type="password" id="contraseña" name="contraseña" required>
            </div>
            <button type="submit" class="login-btn">Iniciar Sesión</button>
            <!-- Enlace para ir a la página de registro -->
        <a href="register.php" class="register-link">Registrarse</a>
        </form>
    </div>
</div>

</body>
</html>
