<?php include("../config/db.php")?>

<?php 

if (isset($_POST['guardar_registro'])){
    $Nombre = $_POST['Nombre'];
    $Descripcion = $_POST['Descripcion'];
    $Marca = $_POST['Marca'];
    $imagen = $_POST['imagen'];
    $PrecioAlquilerPorDia = $_POST['PrecioAlquilerPorDia'];
    $Stock = $_POST['Stock'];
    //echo $nombres;
    //echo $direccion;
}

    $query = "INSERT INTO EquiposSonido(Nombre,Descripcion,Marca,imagen,PrecioAlquilerPorDia,Stock) VALUES ('$Nombre','$Descripcion','$Marca','$imagen','$PrecioAlquilerPorDia','$Stock')";
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
    window.location = "/FinalQuique/CrudProd/Crud2.php";
    </script>
