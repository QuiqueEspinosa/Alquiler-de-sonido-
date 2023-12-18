<?php
include(__DIR__ . '/config/db.php');

// Manejo del formulario de reserva
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cliente = $_POST['cliente'];
    $Nombre = $_POST['cliente'];
    $fechaReserva = $_POST['fechaReserva'];
    $correoElectronico = $_POST['correoElectronico'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $equipos = $_POST['equipos'];
    $mensaje = $_POST['mensaje'];

    $query = "INSERT INTO Reserva (Cliente, FechaReserva, CorreoElectronico, Telefono, Direccion, Equipos, Mensaje)
              VALUES ('$cliente', '$fechaReserva', '$correoElectronico', '$telefono', '$direccion', '$equipos', '$mensaje')";

    $result = mysqli_query($conn, $query);

    $query = "INSERT INTO Cliente (Nombre,CorreoElectronico, Telefono, Direccion)
    VALUES ('$Nombre', '$correoElectronico', '$telefono', '$direccion')";

    $result = mysqli_query($conn, $query);


    if (!$result) {
        die("Error al guardar la reserva: " . mysqli_error($conn));
    }

    // Puedes redirigir a la página principal o mostrar un mensaje de éxito
    header('Location: index.php');
}

// Consulta para obtener equipos de sonido
$query = "SELECT * FROM EquiposSonido";
$result = mysqli_query($conn, $query);

if (!$result) {
    die("Error al obtener datos: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SONIDO E ILUMINACION</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
</head>
<body>
    <div class="box">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#"><img src="https://images-platform.99static.com/B1KlGK1GPRV8YrIVTd1jYlqscG8=/500x500/top/smart/99designs-contests-attachments/31/31787/attachment_31787148" alt="Logo" height="50" width="70"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/FinalQuique/Login.php">Iniciar Sesión</a>
            </li>
        </ul>
    </div>
</nav>

<!-- Contenido de la página -->
<div class="container mt-4">
    <h2>Lista de Equipos de Sonido</h2>

    <!-- Itera sobre los resultados y muestra cada registro en una card -->
    <div class="row">
        <?php $count = 0; ?>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <div class="col-md-4">
                <div class="card">
                    <img src="<?php echo $row['imagen']; ?>" class="card-img-top" alt="Imagen del equipo">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['Nombre']; ?></h5>
                        <p class="card-text"><strong>Descripción:</strong> <?php echo $row['Descripcion']; ?></p>
                        <p class="card-text"><strong>Marca:</strong> <?php echo $row['Marca']; ?></p>
                        <p class="card-text"><strong>Precio de Alquiler por Día:</strong> $<?php echo $row['PrecioAlquilerPorDia']; ?></p>
                        <p class="card-text"><strong>Stock:</strong> <?php echo $row['Stock']; ?></p>
                    </div>
                </div>
                
            </div>
            
            <?php $count++; ?>
            <?php if ($count % 3 === 0) : ?>
                <!-- Cerrar la fila actual y abrir una nueva cada 3 tarjetas -->
                </div>
                <div class="row">
            <?php endif; ?>

        <?php endwhile; ?>
    </div>
    <!-- Después de las tarjetas -->
<!-- Después de las tarjetas -->
<div class="form-container">
    <h2 style="text-align: center;">Formulario de Reserva</h2>
    <form action="index.php" method="post">
        <div class="form-group">
            <label for="cliente">Cliente:</label>
            <input type="text" id="cliente" name="cliente" placeholder="Nombre del cliente" required>
        </div>
        <div class="form-group">
            <label for="fechaReserva">Fecha de Reserva:</label>
            <input type="date" id="fechaReserva" name="fechaReserva" required>
        </div>
        <div class="form-group">
            <label for="correoElectronico">Correo Electrónico:</label>
            <input type="email" id="correoElectronico" name="correoElectronico" placeholder="correo@example.com" required>
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono:</label>
            <input type="tel" id="telefono" name="telefono" placeholder="Número de teléfono">
        </div>
        <div class="form-group">
            <label for="direccion">Dirección:</label>
            <textarea id="direccion" name="direccion" placeholder="Dirección"></textarea>
        </div>
        <div class="form-group">
            <label for="equipos">Equipos:</label>
            <input type="text" id="equipos" name="equipos" placeholder="Equipos deseados" required>
        </div>
        <div class="form-group">
            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" placeholder="Mensaje adicional"></textarea>
        </div>
        <button type="submit">Guardar Reserva</button>
    </form>
</div>


</div>


<footer class="bg-dark text-white text-center py-2">
    <p>&copy; 2023 Tu Empresa</p>
</footer>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js" integrity="sha384-GLhlTQ8iK25e5Isj5SnA4gF+SLT9k/6E5x1Dl9WOqdqU/AaPZwM1q84aW8UeGOAE" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50YaeUBO9YYJxzun3Q3aBRsB8M+3wGgPpLXA/CuqEnM/3c9EJGOrCX" crossorigin="anonymous"></script>
</body>
</html>

<?php
// Cierra la conexión y libera los resultados
mysqli_free_result($result);
mysqli_close($conn);
?>