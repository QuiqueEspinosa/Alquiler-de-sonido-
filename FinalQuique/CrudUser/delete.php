<?php include("../includes/header.php"); ?>
<?php include("../config/db.php")?>

    <div class ="card text-center">
        <div class="card-body">
            <h1 class="card-title">ELIMINAR DATOS</h1>
            <p class="card-text">Los siguientes son los datos guardados hasta el momento:</p>
         
            <div class="table-responsive-sm">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nombre Alumno</th>
                            
                            <th>contra</th>
                            
                            <th>Fecha Creación de Registro</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * FROM usuario";
                        $result_usuario = mysqli_query($conn, $query);

                        while($row = mysqli_fetch_array($result_usuario)){?>
                            <tr>
                                <td><?php echo $row['nombres']?></td>
                            
                                <td><?php echo $row['contra']?></td>
                                <td><?php echo $row['fecha_registro']?></td>
                                <td>
                                    <a href="deleteData.php?id=<?php echo $row['ID']?>">
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
