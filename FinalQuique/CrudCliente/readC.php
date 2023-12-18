<?php include("../includes/header.php")?>
<?php include("../config/db.php")?>


    <div class ="card text-center">
        <div class="card-body">
            <h1 class="card-title">LEER PRODUCTOS</h1>
            <p class="card-text">Los siguientes son los datos guardados hasta el momento:</p>
         
            <div class="table-responsive-sm">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nombre Cliente</th>
                            <th>CorreoElectronico</th>
                            <th>Telefono</th>
                            <th>Dni</th>
                            <th>Direccion</th>
                            
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * FROM Cliente";
                        $result_Prod = mysqli_query($conn, $query);

                        while($row = mysqli_fetch_array($result_Prod)){?>
                            <tr>
                                <td><?php echo $row['Nombre']?></td>
                                <td><?php echo $row['CorreoElectronico']?></td>
                                <td><?php echo $row['Telefono']?></td>
                                <td><?php echo $row['Dni']?></td>
                                <td><?php echo $row['Direccion']?></td>
                               
                            </tr>
                        <?php } ?>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div> 

<?php include("../includes/footer.php")?>
