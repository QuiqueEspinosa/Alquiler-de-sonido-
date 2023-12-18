<?php include("../includes/header.php")?>
<?php include("../config/db.php")?>


<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
$query = "SELECT * FROM reserva WHERE ID = $id";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) ==1) {
    $row = mysqli_fetch_array($result);
    $Cliente = $row['Cliente'];
    $FechaReserva = $row['FechaReserva'];
    $CorreoElectronico = $row['CorreoElectronico'];
    $Telefono = $row['Telefono'];
    $Direccion = $row['Direccion'];
    $Equipos = $row['Equipos'];
    $Mensaje = $row['Mensaje'];
 
    }
}
if (isset($_POST['update5'])){
    $id = $_GET['id'];
    $Cliente = $_POST['Cliente'];
    $FechaReserva = $_POST['FechaReserva'];
    $CorreoElectronico = $_POST['CorreoElectronico'];
    $Telefono = $_POST['Telefono'];
    $Direccion = $_POST['Direccion'];
    $Equipos = $_POST['Equipos'];
    $Mensaje = $_POST['Mensaje'];
    $query = "UPDATE reserva SET Cliente = '$Cliente', FechaReserva = '$FechaReserva',CorreoElectronico = '$CorreoElectronico',Telefono = '$Telefono',Direccion = '$Direccion',Equipos = '$Equipos',Mensaje = '$Mensaje' WHERE ID = $id";
	//die( $query);
    $result = mysqli_query($conn,$query);
    if (!$result){
        echo "El query de actualizar falló";
    }else{
        ?>
        <script>alert("Producto actualizado");</script>
        <script>
        window.location = "/FinalQuique/CrudReserva/Crud4.php";
        </script>
        <?php 
    }
}
?>
<div class ="card text-center">
        <div class="card-body">
            <h1 class="card-title">ACTUALIZAR RESERVAS</h1>
            <p class="card-text">Los siguientes son los datos seleccionados para actualizar:</p>
         
            <form action="updateDataR.php?id=<?php echo $_GET['id']; ?>" method="POST">
            <div class="form-group">

            <input type="text" name="Cliente" value="<?php print $Cliente;?>"
            class = "form-control" placeholder="Actualizar Cliente">
            </div>
            <input type="DATE" name="FechaReserva" value="<?php print $FechaReserva;?>"
            class = "form-control" placeholder="Actualizar FechaReserva">
            </div>

            <div class = "form-group">
            <textarea name="CorreoElectronico" rows="2" class="form-control" placeholder="Actualizar Correo"><?php echo $CorreoElectronico;?></textarea>
            </div>

            <div class = "form-group">
            <textarea name="Telefono" rows="3" class="form-control" placeholder="Actualizar telefono"><?php echo $Telefono;?></textarea>
            </div>

            <div class = "form-group">
            <textarea name="Direccion" rows="4" class="form-control" placeholder="Actualizar Direccion"><?php echo $Direccion;?></textarea>
            </div>

            <div class = "form-group">
            <textarea name="Equipos" rows="5" class="form-control" placeholder="Actualizar Equipos"><?php echo $Equipos;?></textarea>
            </div>

            <div class = "form-group">
            <textarea name="Mensaje" rows="6" class="form-control" placeholder="Actualizar Mensaje"><?php echo $Mensaje;?></textarea>
            </div>

           
            <button class="btn btn-success" name="update5">Actualizar</button>
            </form>
        </div>
    </div>    

<?php include("../includes/footer.php")?>
     
    
    