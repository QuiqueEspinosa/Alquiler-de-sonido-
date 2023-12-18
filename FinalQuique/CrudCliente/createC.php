<?php include("../includes/header.php"); ?>

<div class="card text-center">
    <div class="card-body">
        <h1 class="card-title">REGISTRAR PRODUCTOS</h1>
        <p class="card-text">Ingrese los datos a continuación</p>

        <form action="saveC.php" method="POST">
            <div class="form-group">
                <input type="text" name="Nombre" class="form-control" placeholder="Ingrese Nombre" autofocus>
            </div>

            <div class="form-group">
                <input type="text" name="CorreoElectronico" class="form-control" placeholder="Ingrese CorreoElectronico">
            </div>

            <div class="form-group">
                <input type="text" name="Telefono" class="form-control" placeholder="Ingrese Telefono">
            </div>
            <div class="form-group">
                <input type="text" name="Dni" class="form-control" placeholder="Ingrese Dni">
            </div>

            <div class="form-group">
                <input type="text" name="Direccion" class="form-control" placeholder="Ingrese Direccion">
            </div>

           


            <input type="submit" class="btn btn-success" name="guardar_registro" value="Guardar">
        </form>
    </div>
</div>

<?php include("../includes/footer.php")?>
