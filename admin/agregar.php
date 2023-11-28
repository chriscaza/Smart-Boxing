<?php
    session_start();

    $rol = $_SESSION["rol"];

    if($rol !== 'admin' || !isset($rol)){
        header("location: ../sesion.php");
    }else{
        $connection = mysqli_connect('localhost', 'root', 'root', 'smart_boxing');

        $ID = $_POST['id'];
        $cantidad = $_POST['cantidad'];

        $resultado = mysqli_query ($connection, "SELECT * FROM inventory WHERE ID_item = '$ID'");
        
        if (!$resultado)
        {
            echo 'Error en la Consulta.'.mysqli_connect_error();
            header('Location: agregar.html');
        }
        else{
            $rowcount=mysqli_num_rows($resultado);
            if($rowcount == 0){
                header('Location: agregar.html');
            }else {
                $row = mysqli_fetch_array($resultado);
                $_id = $row["ID_item"];
                $stock = $row["stock"] + $cantidad;

                $resultado = mysqli_query($connection, "UPDATE inventory SET stock = '$stock' WHERE ID_item = '$_id'");

                header('Location: dashboard.php');
            }
        }
    }
?>

