<?php include("../includes/header.php"); ?>

<div class="card text-center">
    <div class="card-body">
        <h1 class="card-title">REGISTRAR PRODUCTOS</h1>
        <p class="card-text">Ingrese los datos a continuación</p>

        <form action="savep.php" method="POST">
            <div class="form-group">
                <input type="text" name="Nombre" class="form-control" placeholder="Ingrese Nombres" autofocus>
            </div>

            <div class="form-group">
                <input type="text" name="Descripcion" class="form-control" placeholder="Ingrese Descripcion">
            </div>

            <div class="form-group">
                <input type="text" name="Marca" class="form-control" placeholder="Ingrese Marca">
            </div>

            <div class="form-group">
                <input type="text" name="imagen" class="form-control" placeholder="Ingrese imagen">
            </div>

            <div class="form-group">
                <input type="text" name="PrecioAlquilerPorDia" class="form-control" placeholder="Ingrese Precio">
            </div>

            <div class="form-group">
                <input type="text" name="Stock" class="form-control" placeholder="Ingrese Stock">
            </div>


            <input type="submit" class="btn btn-success" name="guardar_registro" value="Guardar">
        </form>
    </div>
</div>

<?php include("../includes/footer.php")?>
