<?php include("../config/db.php")?>

<?php 

if (isset($_POST['guardar_registro'])){
    $Cliente = $_POST['Cliente'];
    $FechaReserva = $_POST['FechaReserva'];
    $CorreoElectronico = $_POST['CorreoElectronico'];
    $Telefono = $_POST['Telefono'];
    $Direccion = $_POST['Direccion'];
    $Equipos = $_POST['Equipos'];
    $Mensaje = $_POST['Mensaje'];
 
    //echo $nombres;
    //echo $direccion;
}

    $query = "INSERT INTO reserva(Cliente,FechaReserva,CorreoElectronico,Telefono,Direccion,Equipos,Mensaje) VALUES ('$Cliente','$FechaReserva''$CorreoElectronico','$Telefono','$Direccion','$Equipos','$Mensaje')";
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
    window.location = "/FinalQuique/CrudReserva/Crud4.php";
    </script>
