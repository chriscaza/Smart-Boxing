<?php
    $connection = mysqli_connect('bfgxcdzuimicyrepcep5-mysql.services.clever-cloud.com', 'uimpztzzagvcqwjb', 'RZViIhcyStiQGsNEtoiC', 'bfgxcdzuimicyrepcep5');

    if(!$connection) {
        echo 'Error de conexion a la BD...'. mysqli_connect_error();
        exit();
    }
    else{
        session_start();

        $articulo = $_POST['producto'];
        $cliente = $_SESSION["id_person"];
        $rol = $_SESSION["rol"];

        if(!isset($cliente)){
            header('Location: sesion.html');
        }else{
            $resultado = mysqli_query ($connection, "SELECT * FROM inventory WHERE ID_item = '$articulo'");
    
            if (!$resultado)
            {
                echo 'Error en la Consulta.'.mysqli_connect_error();
                header('Location: productos.php');
            }
            else{
                $rowcount=mysqli_num_rows($resultado);
                if($rowcount == 0){
                    header('Location: productos.php');
                }else {
                    $row = mysqli_fetch_array($resultado);
                    $stock = $row["stock"] - '1';

                    $resultado = mysqli_query($connection, "UPDATE inventory SET stock = '$stock' WHERE ID_item = '$articulo'");

                    $total_venta = $row["precio"];
                    $fecha = date_create('now')->format('Y-m-d H:i:s');
                    $cantidad = '1';

                    $resultado = mysqli_query($connection, "INSERT INTO sales(articulo, cliente, total_venta, fecha, cantidad) VALUES( '$articulo', '$cliente', '$total_venta',  '$fecha', '$cantidad')");

                    header('Location: tarjeta.php');
                }
            }   
        }
    }
?>