<?php
    
    // the user, password, host, and name for the database
    $mysql_user = "cacha_web";
    $mysql_pass = "p2DaavTC03Vr";
    $mysql_host = "localhost:3306";
    $db_name = "cacha_medrec";

    $connection = mysqli_connect($mysql_host, $mysql_user, $mysql_pass, $db_name) or die(mysqli_error($connection));
    
    if (!$connection) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }
?>