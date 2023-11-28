<?php

    $connection = mysqli_connect('bfgxcdzuimicyrepcep5-mysql.services.clever-cloud.com', 'uimpztzzagvcqwjb', 'RZViIhcyStiQGsNEtoiC', 'bfgxcdzuimicyrepcep5');

    if(!$connection) {
        echo 'Error de conexion a la BD...'. mysqli_connect_error();
        exit();
    }
    else{
        $iNombre = $_POST['nombre'];
        $iTel = $_POST['tel'];
        $iCorreo = $_POST['correo'];
        $iPassw = $_POST['contrasena'];
        $iPassw_conf = $_POST['conf_contrasena'];
        $iSexo = $_POST['sexo'];
        $iRol = 'cliente';
        $iFecha = date_create('now')->format('Y-m-d H:i:s');

        if($iPassw == $iPassw_conf){
            $resultado = mysqli_query($connection, "INSERT INTO persons(nombre, tel, correo, contrasena, sexo, Rol, Fecha_registro) VALUES( '$iNombre', '$iTel', '$iCorreo',  '$iPassw', '$iSexo', '$iRol', '$iFecha')");
        
            if (!$resultado)
            {
                echo 'Error en la Consulta.'.mysqli_connect_error();
                header('Location: account.php');
            }
            else{
                echo 'Se realizó correctamente el registro.';
                header('Location: sesion.html');
            }
        }else{
            header('Location: account.php');
        }
    }

?>