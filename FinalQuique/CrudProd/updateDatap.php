<?php include("../includes/header.php")?>
<?php include("../config/db.php")?>


<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
$query = "SELECT * FROM EquiposSonido WHERE ID = $id";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) ==1) {
    $row = mysqli_fetch_array($result);
    $Nombre = $row['Nombre'];
    $Descripcion = $row['Descripcion'];
    $Marca = $row['Marca'];
    $imagen = $row['imagen'];
    $PrecioAlquilerPorDia = $row['PrecioAlquilerPorDia'];
    $Stock = $row['Stock'];
    }
}
if (isset($_POST['update3'])){
    $id = $_GET['id'];
    $Nombre = $_POST['Nombre'];
    $Descripcion = $_POST['Descripcion'];
    $Marca = $_POST['Marca'];
    $imagen = $_POST['imagen'];
    $PrecioAlquilerPorDia = $_POST['PrecioAlquilerPorDia'];
    $Stock = $_POST['Stock'];
    $query = "UPDATE EquiposSonido SET Nombre = '$Nombre', Descripcion = '$Descripcion',Marca = '$Marca',imagen = '$imagen',PrecioAlquilerPorDia = '$PrecioAlquilerPorDia',Stock = '$Stock' WHERE ID = $id";
	//die( $query);
    $result = mysqli_query($conn,$query);
    if (!$result){
        echo "El query de actualizar falló";
    }else{
        ?>
        <script>alert("Producto actualizado");</script>
        <script>
        window.location = "/FinalQuique/CrudProd/Crud2.php";
        </script>
        <?php 
    }
}
?>
<div class ="card text-center">
        <div class="card-body">
            <h1 class="card-title">ACTUALIZAR PRODUCTOS</h1>
            <p class="card-text">Los siguientes son los datos seleccionados para actualizar:</p>
         
            <form action="updateDatap.php?id=<?php echo $_GET['id']; ?>" method="POST">
            <div class="form-group">

            <input type="text" name="Nombre" value="<?php print $Nombre;?>"
            class = "form-control" placeholder="Actualizar Nombre">
            </div>

            <div class = "form-group">
            <textarea name="Descripcion" rows="2" class="form-control" placeholder="Actualizar Descripcion"><?php echo $Descripcion;?></textarea>
            </div>

            <div class = "form-group">
            <textarea name="Marca" rows="3" class="form-control" placeholder="Actualizar Marca"><?php echo $Marca;?></textarea>
            </div>

            <div class = "form-group">
            <textarea name="imagen" rows="4" class="form-control" placeholder="Actualizar imagen"><?php echo $imagen;?></textarea>
            </div>

            <div class = "form-group">
            <textarea name="PrecioAlquilerPorDia" rows="5" class="form-control" placeholder="Actualizar PrecioAlquilerPorDia"><?php echo $PrecioAlquilerPorDia;?></textarea>
            </div>

            <div class = "form-group">
            <textarea name="Stock" rows="6" class="form-control" placeholder="Actualizar Stock"><?php echo $Stock;?></textarea>
            </div>
            <button class="btn btn-success" name="update3">Actualizar</button>
            </form>
        </div>
    </div>    

<?php include("../includes/footer.php")?>
     
    
    