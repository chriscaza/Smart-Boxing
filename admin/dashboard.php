<?php
    session_start();

    $rol = $_SESSION["rol"];

    if($rol !== 'admin' || !isset($rol)){
        header("location: ../sesion.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="shortcut icon" href="../images/icono.png">
</head>
<body>
    <header class="menu">
        <div class="menu__container">
            <a href="./dashboard.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" style="fill: rgb(255, 255, 255);"><path d="M19 3H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2zM8 17.5a1.5 1.5 0 1 1 .001-3.001A1.5 1.5 0 0 1 8 17.5zm0-8a1.5 1.5 0 1 1 .001-3.001A1.5 1.5 0 0 1 8 9.5zm4 4a1.5 1.5 0 1 1 .001-3.001A1.5 1.5 0 0 1 12 13.5zm4 4a1.5 1.5 0 1 1 .001-3.001A1.5 1.5 0 0 1 16 17.5zm0-8a1.5 1.5 0 1 1 .001-3.001A1.5 1.5 0 0 1 16 9.5z"></path></svg>
            </a>
        </div>
        <div>
            <button class="menu__button">
                <a href="../signup.php">SIGN OUT</a>
            </button>
        </div>
    </header>
    
    <main>
        <div class="dashboard">
            <div class="dashboard__container">
                <a href="./tablaClientes.php" class="dashboard__item">
                    <div class="dashboard__text">
                        Clientes
                    </div>
                </a>
                <a href="./tablaInventario.php" class="dashboard__item">
                    <div class="dashboard__text">
                        Inventario
                    </div>
                </a>
                <a href="./tablaDistribuidores.php" class="dashboard__item">
                    <div class="dashboard__text">
                        Distribuidores
                    </div>
                </a>
                <a href="./tablaVentas.php" class="dashboard__item">
                    <div class="dashboard__text">
                        Ventas
                    </div>
                </a>
            </div>
            <div>
                <button class="dashboard__button">
                    <a href="./agregar.html" style="color: black;">Registrar productos</a>
                </button>
            </div>
        </div>
    </main>

</body>
</html>