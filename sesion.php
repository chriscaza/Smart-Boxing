<?php
    $connection = mysqli_connect('bfgxcdzuimicyrepcep5-mysql.services.clever-cloud.com', 'uimpztzzagvcqwjb', 'RZViIhcyStiQGsNEtoiC', 'bfgxcdzuimicyrepcep5');

    if(!$connection) {
        echo 'Error de conexion a la BD...'. mysqli_connect_error();
        exit();
    }
    else{

        session_start();

        $iTel = $_POST['tel'];
        $iPassw = $_POST['contrasena'];

        $resultado = mysqli_query ($connection, "SELECT * FROM persons WHERE tel = '$iTel' AND contrasena = '$iPassw'");
        
        if (!$resultado)
        {
            header('Location: sesion.html');
            echo 'Error en la Consulta.'.mysqli_connect_error();
        }
        else{
            $rowcount=mysqli_num_rows($resultado);
            if($rowcount == 0){
                header('Location: sesion.html');
            }else {
                $row = mysqli_fetch_array($resultado);

                $_SESSION["rol"] = $row["Rol"];

                if($_SESSION["rol"] == 'admin'){
                    header('Location: admin/dashboard.php');
                }else{
                    header('Location: perfil.php');
                    $_SESSION["rol"] = $row["Rol"];
                    $_SESSION["id_person"] = $row["ID_person"];
                    $_SESSION["nombre"] = $row["nombre"];
                    $_SESSION["tel"] = $row["tel"];
                    $_SESSION["correo"] = $row["correo"];
                    $_SESSION["sexo"] = $row["sexo"];
                    $_SESSION["fecha_registro"] = $row["Fecha_registro"];
                    
                    echo 'Se realizó correctamente la consulta.';
                }
            }
        }
        
    }

?>