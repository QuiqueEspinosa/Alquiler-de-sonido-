<?php include("../config/db.php")?>

<?php 

if (isset($_POST['guardar_registro'])){
    $Nombre = $_POST['Nombre'];
    $CorreoElectronico = $_POST['CorreoElectronico'];
    $Telefono = $_POST['Telefono'];
    $Dni = $_POST['Dni'];
    $Direccion = $_POST['Direccion'];
 
    //echo $nombres;
    //echo $direccion;
}

    $query = "INSERT INTO Cliente(Nombre,CorreoElectronico,Telefono,Dni,Direccion) VALUES ('$Nombre','$CorreoElectronico','$Telefono','$Dni','$Direccion')";
	//die( $query);
    $result = mysqli_query($conn, $query);
    if(!$result){
        die("Fallo en el query. Existe un problema en la base de datos.");
    }
    else{
        ?>
        <script>alert("Registro Guardado");</script>
        <?php 
        
    }

    //si quisiera redireccionar a index directamente:
    ?>
    <script>
    window.location = "/FinalQuique/CrudCliente/Crud3.php";
    </script>
