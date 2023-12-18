<?php include("../config/db.php")?>


<?php
if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM usuario WHERE ID = $id";
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
    window.location = "/FinalQuique/CrudUser/Crud.php";
    </script>
    

