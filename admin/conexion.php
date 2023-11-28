<?php
    $connection = mysqli_connect('localhost', 'root', 'root', 'smart_boxing');

    if(!$connection) {
        echo 'Error de conexion a la BD...'. mysqli_connect_error();
        exit();
    }
?>