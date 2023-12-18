<?php include("../config/db.php")?>

<?php 

if (isset($_POST['guardar_registro'])){
    $nombres = $_POST['nombres'];
  
    $contra = $_POST['contra'];
    //echo $nombres;
    //echo $contraseña;
}

    $query = "INSERT INTO usuario(nombres,contra) VALUES ('$nombres','$contra')";
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
    window.location = "/FinalQuique/CrudUser/Crud.php";
    </script>
