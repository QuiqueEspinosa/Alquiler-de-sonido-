<?php include("../config/db.php")?>


<?php
if(isset($_GET['id'])){
        $ID = $_GET['id'];
        $query = "DELETE FROM reserva WHERE ID = $ID";
        $result = mysqli_query($conn, $query);
        if(!$result)
        {
            die("El query para eliminar falló");
        }
        else{
            ?>
            <script>alert("Registro Eliminado");</script>
            <?php 
        }
    }
    //si quisiera redireccionar a index directamente: ?>
    <script>
    window.location = "/FinalQuique/CrudReserva/Crud4.php";
    </script>
    

