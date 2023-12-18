<?php include("../includes/header.php")?>
<?php include('../sesion.php'); ?>
<link rel="stylesheet" href="../css/Cruds/Crud3.css">

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card text-center">
                <div class="card-body">
                    <h1 class="card-title">Crud Cliente</h1>

                    <p class="card-text">Seleccione la operación en el menú de navegación o en las siguientes opciones:</p>

                    <div class="row card-options">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Crear Cliente</h5>
                                    <p class="card-text">Esta opción permite CREAR un registro en la BDD</p>
                                    <a href="/FinalQuique/CrudCliente/createC.php" class="btn btn-primary">Crear</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Leer</h5>
                                    <p class="card-text">Esta opción permite LEER un registro de la BDD</p>
                                    <a href="/FinalQuique/CrudCliente/readC.php" class="btn btn-primary">Leer</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row card-options">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Actualizar</h5>
                                    <p class="card-text">Esta opción permite ACTUALIZAR un registro de la BDD</p>
                                    <a href="/FinalQuique/CrudCliente/updateC.php" class="btn btn-primary">Actualizar</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Borrar</h5>
                                    <p class="card-text">Esta opción permite BORRAR un registro de la BDD</p>
                                    <a href="/FinalQuique/CrudCliente/deleteC.php" class="btn btn-primary">Borrar</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<?php include("../includes/footer.php")?>
