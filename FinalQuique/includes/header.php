<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/header.css">
    <title>CRUD PHP</title>
   
   
</head>

<body>
    <header>
        <h1>FINAL DE QUIQUE</h1>
    </header>

    <nav>
        <div class="navbar-toggler" onclick="toggleNav()">☰</div>
        <div class="navbar-collapse">


        
            <a class="font-weight-bold" href="/FinalQuique/CrudUser/Crud.php">Usuarios</a>
            <a class="font-weight-bold" href="/FinalQuique/CrudProd/Crud2.php">Productos</a>
            <a class="font-weight-bold" href="/FinalQuique/CrudCliente/Crud3.php">Clientes</a>
            <a class="font-weight-bold" href="/FinalQuique/CrudReserva/Crud4.php">Reservas</a>
            <a class="font-weight-bold" href="/FinalQuique/logout_salir.php">Salir</a>
        </div>
    </nav>

    <script>
        function toggleNav() {
            var nav = document.querySelector('.navbar-collapse');
            nav.style.display = (nav.style.display === 'block' || nav.style.display === '') ? 'none' : 'block';
        }
    </script>
</body>
</html>
