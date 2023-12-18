<?php include("../includes/header.php"); ?>

<div class="card text-center">
    <div class="card-body">
        <h1 class="card-title">REGISTRAR RESERVAS</h1>
        <p class="card-text">Ingrese los datos a continuación</p>

        <form action="saveR.php" method="POST">
            <div class="form-group">
                <input type="text" name="Cliente" class="form-control" placeholder="Ingrese Cliente" autofocus>
            </div>

            <div class="form-group">
                <input type="text" name="FechaReserva" class="form-control" placeholder="Ingrese FechaReserva">
            </div>

            <div class="form-group">
                <input type="text" name="CorreoElectronico" class="form-control" placeholder="Ingrese CorreoElectronico">
            </div>

            <div class="form-group">
                <input type="text" name="Telefono" class="form-control" placeholder="Ingrese Telefono">
            </div>

            <div class="form-group">
                <input type="text" name="Direccion" class="form-control" placeholder="Ingrese Direccion">
            </div>

            <div class="form-group">
                <input type="text" name="Equipos" class="form-control" placeholder="Ingrese Equipos">
            </div>

            <div class="form-group">
                <input type="text" name="Mensaje" class="form-control" placeholder="Ingrese Mensaje">
            </div>


            <input type="submit" class="btn btn-success" name="guardar_registro" value="Guardar">
        </form>
    </div>
</div>

<?php include("../includes/footer.php")?>
