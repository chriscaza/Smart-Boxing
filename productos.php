<?php
    session_start();
    $nombre = $_SESSION["nombre"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/productos.css">
    <link rel="shortcut icon" href="images/icono.png">
</head>
<body>
    <header class="menu">
        <div class="menu__container">
            <a href="./index.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" style="fill: rgb(255, 255, 255);"><path d="M19 3H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2zM8 17.5a1.5 1.5 0 1 1 .001-3.001A1.5 1.5 0 0 1 8 17.5zm0-8a1.5 1.5 0 1 1 .001-3.001A1.5 1.5 0 0 1 8 9.5zm4 4a1.5 1.5 0 1 1 .001-3.001A1.5 1.5 0 0 1 12 13.5zm4 4a1.5 1.5 0 1 1 .001-3.001A1.5 1.5 0 0 1 16 17.5zm0-8a1.5 1.5 0 1 1 .001-3.001A1.5 1.5 0 0 1 16 9.5z"></path></svg>
            </a>
        </div>
        <div>
        <?php 

            if(!isset($nombre)){
                echo '<button class="menu__button"><a href="./sesion.html">SIGN IN</a></button>';
            }else{
                echo '<button class="menu__button"><a href="./signup.php">SIGN OUT</a></button>';
            }

            ?>
        </div>
    </header>

    <main>
        <section class="espectacular">
            <div class="espectacular__container">
                <div class="espectacular__imgContainer">
                    <img class="espectacular__image" src="./images/boxeador.png" alt="boxeador"/>
                </div>
                <div class="espectacular__textos">
                    <h1 class="espectacular__titulo">PRODUCTOS DE ALTA CALIDAD</h1>
                    <h3 class="espectacular__pitch">CONOCE TODOS LOS PRODUCTOS QUE TENEMOS PARA TI</h3>
                </div>
            </div>
        </section>

        <section>
            <div class="productos">
                <div class="productos__titContainer">
                    <h1 class="productos__titulo">BCAA</h1>
                </div>
                <div class="productos__mosaico">
                    <div class="productos__card">
                        <div class="productos__imgContainer">
                            <img class="productos__image" src="./images/producto1.jpg"/>
                        </div>
                        <div class="productos__txtContainer">
                            <h2>BCAA</h2>
                            <div class="productos__comprar">
                                <p class="productos__precio">$699</p>
                                <form action="pagos.php" method="post">
                                    <button class="productos__button" style="cursor: pointer;" name="producto" value="2" type="submit">Comprar</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="productos__card">
                        <div class="productos__imgContainer">
                            <img class="productos__image" src="./images/producto1.jpg"/>
                        </div>
                        <div class="productos__txtContainer">
                            <h2>BCAA</h2>
                            <div class="productos__comprar">
                                <p class="productos__precio">$699</p>
                                <form action="pagos.php" method="post">
                                    <button class="productos__button" style="cursor: pointer;" name="producto" value="2" type="submit">Comprar</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="productos__card">
                        <div class="productos__imgContainer">
                            <img class="productos__image" src="./images/producto1.jpg"/>
                        </div>
                        <div class="productos__txtContainer">
                            <h2>BCAA</h2>
                            <div class="productos__comprar">
                                <p class="productos__precio">$699</p>
                                <form action="pagos.php" method="post">
                                    <button class="productos__button" style="cursor: pointer;" name="producto" value="2" type="submit">Comprar</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="productos__card">
                        <div class="productos__imgContainer">
                            <img class="productos__image" src="./images/producto1.jpg"/>
                        </div>
                        <div class="productos__txtContainer">
                            <h2>BCAA</h2>
                            <div class="productos__comprar">
                                <p class="productos__precio">$699</p>
                                <form action="pagos.php" method="post">
                                    <button class="productos__button" style="cursor: pointer;" name="producto" value="2" type="submit">Comprar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="productos">
                <div class="productos__titContainer">
                    <h1 class="productos__titulo">BATIDOS</h1>
                </div>
                <div class="productos__mosaico">
                    <div class="productos__card">
                        <div class="productos__imgContainer">
                            <img class="productos__image" src="./images/producto2.jpg"/>
                        </div>
                        <div class="productos__txtContainer">
                            <h2>Batidos</h2>
                            <div class="productos__comprar">
                                <p class="productos__precio">$100</p>
                                <form action="pagos.php" method="post">
                                    <button class="productos__button" style="cursor: pointer;" name="producto" value="4" type="submit">Comprar</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="productos__card">
                        <div class="productos__imgContainer">
                            <img class="productos__image" src="./images/producto2.jpg"/>
                        </div>
                        <div class="productos__txtContainer">
                            <h2>Batidos</h2>
                            <div class="productos__comprar">
                                <p class="productos__precio">$100</p>
                                <form action="pagos.php" method="post">
                                    <button class="productos__button" style="cursor: pointer;" name="producto" value="4" type="submit">Comprar</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="productos__card">
                        <div class="productos__imgContainer">
                            <img class="productos__image" src="./images/producto2.jpg"/>
                        </div>
                        <div class="productos__txtContainer">
                            <h2>Batidos</h2>
                            <div class="productos__comprar">
                                <p class="productos__precio">$100</p>
                                <form action="pagos.php" method="post">
                                    <button class="productos__button" style="cursor: pointer;" name="producto" value="4" type="submit">Comprar</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="productos__card">
                        <div class="productos__imgContainer">
                            <img class="productos__image" src="./images/producto2.jpg"/>
                        </div>
                        <div class="productos__txtContainer">
                            <h2>Batidos</h2>
                            <div class="productos__comprar">
                                <p class="productos__precio">$100</p>
                                <form action="pagos.php" method="post">
                                    <button class="productos__button" style="cursor: pointer;" name="producto" value="4" type="submit">Comprar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="productos">
                <div class="productos__titContainer">
                    <h1 class="productos__titulo">CREATINA</h1>
                </div>
                <div class="productos__mosaico">
                    <div class="productos__card">
                        <div class="productos__imgContainer">
                            <img class="productos__image" src="./images/producto3.jpg"/>
                        </div>
                        <div class="productos__txtContainer">
                            <h2>Creatina</h2>
                            <div class="productos__comprar">
                                <p class="productos__precio">$399</p>
                                <form action="pagos.php" method="post">
                                    <button class="productos__button" style="cursor: pointer;" name="producto" value="6" type="submit">Comprar</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="productos__card">
                        <div class="productos__imgContainer">
                            <img class="productos__image" src="./images/producto3.jpg"/>
                        </div>
                        <div class="productos__txtContainer">
                            <h2>Creatina</h2>
                            <div class="productos__comprar">
                                <p class="productos__precio">$399</p>
                                <form action="pagos.php" method="post">
                                    <button class="productos__button" style="cursor: pointer;" name="producto" value="6" type="submit">Comprar</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="productos__card">
                        <div class="productos__imgContainer">
                            <img class="productos__image" src="./images/producto3.jpg"/>
                        </div>
                        <div class="productos__txtContainer">
                            <h2>Creatina</h2>
                            <div class="productos__comprar">
                                <p class="productos__precio">$399</p>
                                <form action="pagos.php" method="post">
                                    <button class="productos__button" style="cursor: pointer;" name="producto" value="6" type="submit">Comprar</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="productos__card">
                        <div class="productos__imgContainer">
                            <img class="productos__image" src="./images/producto3.jpg"/>
                        </div>
                        <div class="productos__txtContainer">
                            <h2>Creatina</h2>
                            <div class="productos__comprar">
                                <p class="productos__precio">$399</p>
                                <form action="pagos.php" method="post">
                                    <button class="productos__button" style="cursor: pointer;" name="producto" value="6" type="submit">Comprar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="productos productos-margin">
                <div class="productos__titContainer">
                    <h1 class="productos__titulo">PROTEINA</h1>
                </div>
                <div class="productos__mosaico">
                    <div class="productos__card">
                        <div class="productos__imgContainer">
                            <img class="productos__image" src="./images/producto4.jpg"/>
                        </div>
                        <div class="productos__txtContainer">
                            <h2>Proteina</h2>
                            <div class="productos__comprar">
                                <p class="productos__precio">$1,499</p>
                                <form action="pagos.php" method="post">
                                    <button class="productos__button" style="cursor: pointer;" name="producto" value="1" type="submit">Comprar</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="productos__card">
                        <div class="productos__imgContainer">
                            <img class="productos__image" src="./images/producto4.jpg"/>
                        </div>
                        <div class="productos__txtContainer">
                            <h2>Proteina</h2>
                            <div class="productos__comprar">
                                <p class="productos__precio">$1,499</p>
                                <form action="pagos.php" method="post">
                                    <button class="productos__button" style="cursor: pointer;" name="producto" value="1" type="submit">Comprar</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="productos__card">
                        <div class="productos__imgContainer">
                            <img class="productos__image" src="./images/producto4.jpg"/>
                        </div>
                        <div class="productos__txtContainer">
                            <h2>Proteina</h2>
                            <div class="productos__comprar">
                                <p class="productos__precio">$1,499</p>
                                <form action="pagos.php" method="post">
                                    <button class="productos__button" style="cursor: pointer;" name="producto" value="1" type="submit">Comprar</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="productos__card">
                        <div class="productos__imgContainer">
                            <img class="productos__image" src="./images/producto4.jpg"/>
                        </div>
                        <div class="productos__txtContainer">
                            <h2>Proteina</h2>
                            <div class="productos__comprar">
                                <p class="productos__precio">$1,499</p>
                                <form action="pagos.php" method="post">
                                    <button class="productos__button" style="cursor: pointer;" name="producto" value="1" type="submit">Comprar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div>
            <div>
                <a href="https://www.instagram.com/"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(255, 255, 255);"><path d="M11.999 7.377a4.623 4.623 0 1 0 0 9.248 4.623 4.623 0 0 0 0-9.248zm0 7.627a3.004 3.004 0 1 1 0-6.008 3.004 3.004 0 0 1 0 6.008z"></path><circle cx="16.806" cy="7.207" r="1.078"></circle><path d="M20.533 6.111A4.605 4.605 0 0 0 17.9 3.479a6.606 6.606 0 0 0-2.186-.42c-.963-.042-1.268-.054-3.71-.054s-2.755 0-3.71.054a6.554 6.554 0 0 0-2.184.42 4.6 4.6 0 0 0-2.633 2.632 6.585 6.585 0 0 0-.419 2.186c-.043.962-.056 1.267-.056 3.71 0 2.442 0 2.753.056 3.71.015.748.156 1.486.419 2.187a4.61 4.61 0 0 0 2.634 2.632 6.584 6.584 0 0 0 2.185.45c.963.042 1.268.055 3.71.055s2.755 0 3.71-.055a6.615 6.615 0 0 0 2.186-.419 4.613 4.613 0 0 0 2.633-2.633c.263-.7.404-1.438.419-2.186.043-.962.056-1.267.056-3.71s0-2.753-.056-3.71a6.581 6.581 0 0 0-.421-2.217zm-1.218 9.532a5.043 5.043 0 0 1-.311 1.688 2.987 2.987 0 0 1-1.712 1.711 4.985 4.985 0 0 1-1.67.311c-.95.044-1.218.055-3.654.055-2.438 0-2.687 0-3.655-.055a4.96 4.96 0 0 1-1.669-.311 2.985 2.985 0 0 1-1.719-1.711 5.08 5.08 0 0 1-.311-1.669c-.043-.95-.053-1.218-.053-3.654 0-2.437 0-2.686.053-3.655a5.038 5.038 0 0 1 .311-1.687c.305-.789.93-1.41 1.719-1.712a5.01 5.01 0 0 1 1.669-.311c.951-.043 1.218-.055 3.655-.055s2.687 0 3.654.055a4.96 4.96 0 0 1 1.67.311 2.991 2.991 0 0 1 1.712 1.712 5.08 5.08 0 0 1 .311 1.669c.043.951.054 1.218.054 3.655 0 2.436 0 2.698-.043 3.654h-.011z"></path></svg></a>
                <a href="https://www.facebook.com/"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(255, 255, 255);"><path d="M13.397 20.997v-8.196h2.765l.411-3.209h-3.176V7.548c0-.926.258-1.56 1.587-1.56h1.684V3.127A22.336 22.336 0 0 0 14.201 3c-2.444 0-4.122 1.492-4.122 4.231v2.355H7.332v3.209h2.753v8.202h3.312z"></path></svg></a>
                <a href="https://www.tiktok.com/"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(255, 255, 255);"><path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64 2.93 2.93 0 0 1 .88.13V9.4a6.84 6.84 0 0 0-1-.05A6.33 6.33 0 0 0 5 20.1a6.34 6.34 0 0 0 10.86-4.43v-7a8.16 8.16 0 0 0 4.77 1.52v-3.4a4.85 4.85 0 0 1-1-.1z"></path></svg></a>
            </div>
        </div>
        <div>
            <div class="footer__textos">
                <h2>smart.boxing@outlook.com</h2>
                <h2 class="footer__numero">+52 33 10 62 54 29</h2>
            </div>
        </div>
    </footer>
    
</body>
</html>