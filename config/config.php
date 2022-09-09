<?php
        $serverName = "DESKTOP-J4VGQP7";
        $conecctionInfo = array("Database" => "PECMP_JPEREZ");
        $conn = sqlsrv_connect($serverName, $conecctionInfo);
    
        // if ($conn) {
        //     echo "Connection established\n";
        // }else{
        //     echo "Connection failed\n";
        //     die(print_r(sqlsrv_errors(), true));
        // }
?>