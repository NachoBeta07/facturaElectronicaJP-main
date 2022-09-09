<?php
include("../../config/config.php");
    if(isset($_POST['insert'])){
        $cod_empresa = $_POST['cod_empresa'];
        $cod_establecimiento = $_POST['cod_establecimiento'];
        $txt_descripcion = $_POST['txt_descripcion'];
        $txt_direccion = $_POST['txt_direccion'];
        $sts_matriz = $_POST['sts_matriz'];
        $sts_local = $_POST['sts_local'];
    }
        $insertar = "INSERT INTO gen_local(cod_empresa, cod_establecimiento ,txt_descripcion ,txt_direccion ,sts_matriz ,sts_local)
        VALUES ('$cod_empresa','$cod_establecimiento', '$txt_descripcion', '$txt_direccion', '$sts_matriz', '$sts_local')";
        $ejecute = sqlsrv_query ($conn ,$insertar ) ;
        if($ejecute){
        echo "CONEXION EXITOSA";
        }
        else echo "No se pudo conectar";
        die(print_r(sqlsrv_errors(),true));
?>