<?php
    $connection = mysqli_connect('localhost', 'root', 'root', 'smart_boxing');

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
            echo 'Error en la Consulta.'.mysqli_connect_error();
            header('Location: sesion.html');
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
                    $_SESSION["rol"] = $row["Rol"];
                    $_SESSION["id_person"] = $row["ID_person"];
                    $_SESSION["nombre"] = $row["nombre"];
                    $_SESSION["tel"] = $row["tel"];
                    $_SESSION["correo"] = $row["correo"];
                    $_SESSION["sexo"] = $row["sexo"];
                    $_SESSION["fecha_registro"] = $row["Fecha_registro"];
                    
                    echo 'Se realizó correctamente la consulta.';
                    header('Location: perfil.php');
                }
            }
        }
        
    }

?>