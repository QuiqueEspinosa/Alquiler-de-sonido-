<?php
session_start();

include(__DIR__ . '/config/db.php');

// Obtener credenciales del formulario
$nombres = $_POST["nombres"];
$contra = $_POST["contraseña"];

// Consulta SQL para verificar las credenciales
$usuario = "SELECT * FROM usuario WHERE nombres = '$nombres' AND contra = '$contra'";
$result = $conn->query($usuario);


if ($result->num_rows > 0) {
    
    // Credenciales válidas
    $_SESSION["usuario"] = $nombres;
    header('Location:../FinalQuique/CrudUser/Crud.php');
} else {
    // Credenciales inválidas
    header('Location: login.php?error=1');
}
echo $result;
$conn->close();
?>
