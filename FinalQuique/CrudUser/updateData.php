<?php include("../includes/header.php")?>
<?php include("../config/db.php")?>


<?php
if(isset($_GET['id'])){
$id = $_GET['id'];
$query = "SELECT * FROM usuario WHERE ID = $id";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) ==1) {
    $row = mysqli_fetch_array($result);
    $nombres = $row['nombres'];
    $contra = $row['contra'];
    
    }
}
if (isset($_POST['update2'])){
    $id = $_GET['id'];
    $nombres = $_POST['nombres'];
    $contra = $_POST['contra'];
    $query = "UPDATE usuario SET nombres = '$nombres', contra = '$contra' WHERE ID = $id";
	//die( $query);
    $result = mysqli_query($conn,$query);
    if (!$result){
        echo "El query de actualizar falló";
    }else{
        ?>
        <script>alert("Registro actualizado");</script>
        <script>
        window.location = "/FinalQuique/CrudUser/Crud.php";
        </script>
        <?php 
    }
}
?>
<div class ="card text-center">
        <div class="card-body">
            <h1 class="card-title">ACTUALIZAR DATOS</h1>
            <p class="card-text">Los siguientes son los datos seleccionados para actualizar:</p>
         
            <form action="updateData.php?id=<?php echo $_GET['id']; ?>" method="POST">

            <div class="form-group">
            <input type="text" name="nombres" value="<?php print $nombres;?>"
            class = "form-control" placeholder="Actualizar Nombres">
            </div>
    
            <div class = "form-group">
            <input type="text" name="contra" value="<?php print $contra;?>"
            class = "form-control" placeholder="Actualizar contraseña">
            </div>

            <button class="btn btn-success" name="update2">Actualizar</button>
            </form>
        </div>
    </div>    

<?php include("../includes/footer.php")?>
     
    
    