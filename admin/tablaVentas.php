<?php
    include_once 'conexion.php';
    $result = mysqli_query($connection,"SELECT * FROM sales");

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
    <title>Ventas</title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/tablas.css">
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
        <div class="titulo__container">
            <h1 class="titulo">Ventas</h1>
        </div>

        <?php if (mysqli_num_rows($result) > 0) { ?>

            <table id="tabla">

                <tr>
                    <th>ID venta</th>
                    <th>Articulo</th>
                    <th>Piezas</th>
                    <th>Total</th>
                    <th>ID cliente</th>
                    <th>Fecha</th>
                </tr>

                <?php $i=0; while($row = mysqli_fetch_array($result)) { ?>

                    <tr>
                        <td><?php echo $row["ID_sales"]; ?></td>
                        <td><?php echo $row["articulo"]; ?></td>
                        <td><?php echo $row["cantidad"]; ?></td>
                        <td><?php echo $row["total_venta"]; ?></td>
                        <td><?php echo $row["cliente"]; ?></td>
                        <td><?php echo $row["fecha"]; ?></td>
                    </tr>

                <?php $i++; } ?>

            </table>
        
        <?php } else{ echo "No result found"; } ?>

    </main>
</body>
</html>