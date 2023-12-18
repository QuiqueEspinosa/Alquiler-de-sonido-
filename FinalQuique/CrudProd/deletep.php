<?php include("../includes/header.php"); ?>
<?php include("../config/db.php")?>

    <div class ="card text-center">
        <div class="card-body">
            <h1 class="card-title">ELIMINAR PRODUCTOS</h1>
            <p class="card-text">Los siguientes son los datos guardados hasta el momento:</p>
         
            <div class="table-responsive-sm">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nombre Usuario</th>
                            <th>Descripcion</th>
                            <th>Marca</th>
                            <th>imagen</th>
                            <th>Precio X Dia</th>
                            <th>Stock</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * FROM EquiposSonido";
                        $result_Prod = mysqli_query($conn, $query);

                        while($row = mysqli_fetch_array($result_Prod)){?>
                            <tr>
                                <td><?php echo $row['Nombre']?></td>
                                <td><?php echo $row['Descripcion']?></td>
                                <td><?php echo $row['Marca']?></td>
                                <td><?php echo $row['imagen']?></td>
                                <td><?php echo $row['PrecioAlquilerPorDia']?></td>
                                <td><?php echo $row['Stock']?></td>
                                <td>
                                    <a href="deleteDatap.php?id=<?php echo $row['ID']?>">
                                    <button type="button" class="btn btn-danger">Eliminar</button>
                                </a>
                                </td>
                            </tr>
                        <?php } ?>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div> 

    <?php include("../includes/footer.php")?>
