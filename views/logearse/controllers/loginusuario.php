<?php
    session_start();
    include '../../../config/config.php';
    include '../../../views/logearse/index.php';

    $usuario =$_POST['txtusuario'];
    $contrasena = $_POST['txtcontra'];

    $query="SELECT * FROM gen_usuario WHERE cod_usuario='$usuario' and cod_passwd='$contrasena'";

    //$validar_login = sqlsrv_prepare($conexion, "SELECT * FROM usuarios WHERE nom_usuario='$usuario' and passwd='$contrasena'");
    $validar_login = sqlsrv_query($conn,$query);
    //$ejecutar=sqlsrv_execute($validar_login);
    //$fila=$ejecutar->fetch();
    $row = sqlsrv_fetch_array($validar_login);
    if($row>0){
        //$_SESSION['cerrarsesion'] = true;
        $_SESSION['user'] = $usuario;
        header("location: ../../../views/InformacionGeneral/bienvenidos.php");
        exit;
    }else{
        echo '
            <script>
                alert("Usuario no existe, por favor verifique los datos en la Base de datos");
                window.location = "../../../views/logearse/index.php"
            </script>
        ';
        //session_destroy();
        exit;
    }



?>
