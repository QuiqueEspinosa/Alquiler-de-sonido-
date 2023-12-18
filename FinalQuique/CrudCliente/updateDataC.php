<?php include("../includes/header.php")?>
<?php include("../config/db.php")?>


<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
$query = "SELECT * FROM Cliente WHERE ID = $id";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) ==1) {
    $row = mysqli_fetch_array($result);
    $Nombre = $row['Nombre'];
    $CorreoElectronico = $row['CorreoElectronico'];
    $Telefono = $row['Telefono'];
    $Dni = $row['Dni'];
    $Direccion = $row['Direccion'];
 
    }
}
if (isset($_POST['update4'])){
    $id = $_GET['id'];
    $Nombre = $_POST['Nombre'];
    $CorreoElectronico = $_POST['CorreoElectronico'];
    $Telefono = $_POST['Telefono'];
    $Dni = $_POST['Dni'];
    $Direccion = $_POST['Direccion'];
    $query = "UPDATE Cliente SET Nombre = '$Nombre', CorreoElectronico = '$CorreoElectronico',Telefono = '$Telefono',Dni = '$Dni',Direccion = '$Direccion' WHERE ID = $id";
	//die( $query);
    $result = mysqli_query($conn,$query);
    if (!$result){
        echo "El query de actualizar falló";
    }else{
        ?>
        <script>alert("Producto actualizado");</script>
        <script>
        window.location = "/FinalQuique/CrudCliente/Crud3.php";
        </script>
        <?php 
    }
}
?>
<div class ="card text-center">
        <div class="card-body">
            <h1 class="card-title">ACTUALIZAR PRODUCTOS</h1>
            <p class="card-text">Los siguientes son los datos seleccionados para actualizar:</p>
         
            <form action="updateDataC.php?id=<?php echo $_GET['id']; ?>" method="POST">
            <div class="form-group">

            <input type="text" name="Nombre" value="<?php print $Nombre;?>"
            class = "form-control" placeholder="Actualizar Nombre">
            </div>

            <div class = "form-group">
            <textarea name="CorreoElectronico" rows="2" class="form-control" placeholder="Actualizar Correo"><?php echo $CorreoElectronico;?></textarea>
            </div>

            <div class = "form-group">
            <textarea name="Telefono" rows="3" class="form-control" placeholder="Actualizar telefono"><?php echo $Telefono;?></textarea>
            </div>

            <div class = "form-group">
            <textarea name="Dni" rows="3" class="form-control" placeholder="Actualizar Dni"><?php echo $Dni;?></textarea>
            </div>


            <div class = "form-group">
            <textarea name="Direccion" rows="4" class="form-control" placeholder="Actualizar Direccion"><?php echo $Direccion;?></textarea>
            </div>

           
            <button class="btn btn-success" name="update4">Actualizar</button>
            </form>
        </div>
    </div>    

<?php include("../includes/footer.php")?>
     
    
    