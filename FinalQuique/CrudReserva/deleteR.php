<?php include("../includes/header.php"); ?>
<?php include("../config/db.php")?>

    <div class ="card text-center">
        <div class="card-body">
            <h1 class="card-title">ELIMINAR RESERVAS</h1>
            <p class="card-text">Los siguientes son los datos guardados hasta el momento:</p>
         
            <div class="table-responsive-sm">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nombre Cliente</th>
                            <th>FechaReserva</th>
                            <th>CorreoElectronico</th>
                            <th>Telefono</th>
                            <th>Direccion</th>
                            <th>Equipos</th>
                            <th>Mensaje</th>
                            
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * FROM Reserva";
                        $result_Prod = mysqli_query($conn, $query);

                        while($row = mysqli_fetch_array($result_Prod)){?>
                            <tr>
                                <td><?php echo $row['Cliente']?></td>
                                <td><?php echo $row['FechaReserva']?></td>
                                <td><?php echo $row['CorreoElectronico']?></td>
                                <td><?php echo $row['Telefono']?></td>
                                <td><?php echo $row['Direccion']?></td>
                                <td><?php echo $row['Equipos']?></td>
                                <td><?php echo $row['Mensaje']?></td>
                               
                                <td>
                                    <a href="deleteDataR.php?id=<?php echo $row['ID']?>">
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
