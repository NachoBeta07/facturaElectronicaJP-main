<?php
session_start();
if (!isset($_SESSION['user'])) {
    echo '
            <script>
                alert("Por favor debes iniciar sesión");
                window.location = "../logearse/index.php";
            </script>
        ';
    //header("location: index.php");
    session_destroy();
    die();
} 
  
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenidos</title>
</head>

<body>
    <div id="menu">
        <ul>
            <li>Home</li>
        </ul>
        <!-- <button id="btn__cerrar_sesion">Cerrar Sesion</button> -->
        <a href="../logearse/controllers/cerrarsesion.php" class="close" title="Salir">Cerrar Sesion</a>
    </div>
    <h1>Bienvenidos a mi mundo</h1>
</body>

</html>