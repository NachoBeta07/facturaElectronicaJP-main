<?php
    //session_start();
    include("../../config/config.php");
    if( isset($_SESSION['user'])){
        header("location: ../InformacionGeneral/bienvenidos.php");
    }//session_destroy();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Sesión</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/main2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body >
    <main>
    <!-- <div class="contenedor__todo bg-warning  bg-linear-gradient  d-flex justify-content-center align-items-center vh-100  rounded-3"> -->
    <div class="contenedor__todo bg-transparent  bg-gradient p-5   rounded-5">
         <!--Formulario de Login y registro-->
         <div class="contenedor__login_register bg-white mt-1 p-5 rounded-5">
            <!--Login-->
            <form action="controllers/loginusuario.php" method="POST"
            class="formulario__login">
                <h2 class="text-center fs-1 fw-bold">Iniciar Sesión</h2>
                <input type="text" class="form-control mb-2 " placeholder="Usuario" pattern="[A-Za-z0-9_-]{1,15}" required name="txtusuario">
                <input type="password" class="form-control mb-3" placeholder="Contraseña" pattern="[A-Za-z0-9_-]{1,15}" required  name="txtcontra">
                <button type="submit" class="btn btn-primary" id="btn__iniciar-sesion"><i class="bi bi-door-open"></i>Entrar</button>
            </form>
        </div>  
        <div class="caja__trasera bg-white mt-1 p-5 rounded-5 ">
        <label  class="text-center form-group fs-5 fw-bold">Seleccione La Empresa</label>
            <div class="caja__trasera-login">
                <!-- <h3>¿Deseas Obtener una cuenta?</h3>
                <p>Envia tus datos para que el Administrador cree tu cuenta</p> -->
                
            
                <div >
                    <table class="table">
                        <thead class="table-success table-striped">
                            <tr>
                                <th>Seleccione</th>
                                <th>Codigo</th>
                                <th>Empresa</th>
                                <th>Direccion</th>
                                <th></th>
                            </tr>
                        </thead>
                        <?php 
                            $sql="SELECT * FROM gen_empresa";
                            $result=sqlsrv_query($conn,$sql);

                            while($mostrar=sqlsrv_fetch_array($result)){
                        ?>
                            <tbody>
                            <td><input type="checkbox"></td>
                            <td><?php echo $mostrar['cod_empresa'] ?></td>
                            <td><?php echo $mostrar['nom_empresa'] ?></td>
                            <td><?php echo $mostrar['txt_direccion'] ?></td>
                            <?php 
                                }
                            ?>
                            </tbody>
                    </table>
                </div> 
            </div>
        </div>
    </div>
    </main>
    <!-- <script src="../js/script.js"></script> -->
</body>
</html>