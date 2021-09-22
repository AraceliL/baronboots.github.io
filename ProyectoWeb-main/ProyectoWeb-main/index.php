<?php
session_start();
include('Controlador/ControllerListar.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Vista/icomoon/fonts/style.css">
    <link rel="stylesheet" href="Vista/css/estilosI.css">
    <title>Supersito</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
</head>

<body>

    <div id="bar-nav">
        <div id="logo">
            <img src="Vista/img/logo.jpg" alt="Mi logo" id="imagenLogo">
        </div>
        <form id="busqueda">
            <input type="text" name="palabra" id="txtBusqueda" placeholder="Buscar...">
            <button type="submit" value="Buscar" id="btnBuscar"><span class="icon-search"></span></button>
        </form>
        <a class="btnMenu icon-align-justify"></a>
        <div id="der" class="derOcultar">
            <a class="bar-der animacion textMenu" href="Vista/html/Ingresar.html">Iniciar sesión</a>
            <a class="bar-der animacion textMenu" href="">Pedidos</a>
            <a class="bar-der animacion carrito" href=""><span class="icon-shopping-cart"></a>
        </div>
    </div>


    <!-- Cards -->
    <div class="cards-content">
        <div class="container">
            <?php
            while ($fila=$lista->fetch_assoc()) {
                echo '
                <div class="card">
                    <div class="imgBx">
                        <img src="data:image/jpg;base64, '.base64_encode($fila['Imagen']).'"alt="">
                    </div>
                    <div class="content">
                        <h2>'.$fila['Nombre'].'</h2>
                        <h3>Descripcion: <a class="descripcion" href="#">Leer más...</a></h3>
                        <h3>Precio: $'.$fila['Precio'].'</h3>
                        <button class="btn btn-primary" type="submit"><i class="fas fa-shopping-cart"></i> Añadir al carrito</button>
                    </div>
                </div>';
            }
            ?>
            <div class="card">
                <div class="imgBx">
                    <img src="Vista/img/reloj1.jpg" alt="">
                </div>
                <div class="content">
                    <form id="formulario" name="formulario" method="post" action="cart.php">
                        <input name="precio" type="hidden" id="precio" value="10" />
                        <input name="titulo" type="hidden" id="titulo" value="articulo 1" />
                        <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
                        <h2>Carta</h2>
                        <h3>Descripcion: <a class="descripcion" href="#">Leer más...</a></h3>
                        <h3>Precio: $10</h3>
                        <button class="btn btn-primary" type="submit"><i class="fas fa-shopping-cart"></i> Añadir al carrito</button>
                        <!--input type="button" value="Agregar" id="comprar"-->
                        </form>
                </div>
            </div>
            <div class="card">
                <div class="imgBx">
                    <img src="Vista/img/tenis2.jpg" alt="">
                </div>
                <div class="content">
                    <form id="formulario" name="formulario" method="post" action="cart.php">
                        <input name="precio" type="hidden" id="precio" value="10" />
                        <input name="titulo" type="hidden" id="titulo" value="articulo 1" />
                        <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
                        <h2 class="card-title">Carta</h2>
                        <h3>Descripcion: <a class="descripcion" href="#">Leer más...</a></h3>
                        <h3>Precio:</h3>
                        <button class="btn btn-primary" type="submit"><i class="fas fa-shopping-cart"></i> Añadir al carrito</button>
                        <!--input type="button" value="Agregar" id="comprar"-->
                        </form>
                </div>
            </div>
            <div class="card">
                <div class="imgBx">
                    <img src="Vista/img/tenis3.jpg" alt="">
                </div>
                <div class="content">
                    <form id="formulario" name="formulario" method="post" action="cart.php">
                        <input name="precio" type="hidden" id="precio" value="10" />
                        <input name="titulo" type="hidden" id="titulo" value="articulo 1" />
                        <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
                        <h2 class="card-title">Carta</h2>
                        <h3>Descripcion: <a class="descripcion" href="#">Leer más...</a></h3>
                        <h3>Precio:</h3>
                        <button class="btn btn-primary" type="submit"><i class="fas fa-shopping-cart"></i> Añadir al carrito</button>
                        <!--input type="button" value="Agregar" id="comprar"-->
                        </form>
                </div>
            </div>
            <div class="card">
                <div class="imgBx">
                    <img src="Vista/img/cubrebocas.png" alt="">
                </div>
                <div class="content">
                    <form id="formulario" name="formulario" method="post" action="cart.php">
                        <input name="precio" type="hidden" id="precio" value="10" />
                        <input name="titulo" type="hidden" id="titulo" value="articulo 1" />
                        <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
                        <h2 class="card-title">Carta</h2>
                        <h3>Descripcion: <a class="descripcion" href="#">Leer más...</a></h3>
                        <h3>Precio:</h3>
                        <button class="btn btn-primary" type="submit"><i class="fas fa-shopping-cart"></i> Añadir al carrito</button>
                        <!--input type="button" value="Agregar" id="comprar"-->
                        </form>
                </div>
            </div>
            <div class="card">
                <div class="imgBx">
                    <img src="Vista/img/audifonos.jpg" alt="">
                </div>
                <div class="content">
                    <form id="formulario" name="formulario" method="post" action="cart.php">
                        <input name="precio" type="hidden" id="precio" value="10" />
                        <input name="titulo" type="hidden" id="titulo" value="articulo 1" />
                        <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
                        <h2 class="card-title">Carta</h2>
                        <h3>Descripcion: <a class="descripcion" href="#">Leer más...</a></h3>
                        <h3>Precio:</h3>
                        <button class="btn btn-primary" type="submit"><i class="fas fa-shopping-cart"></i> Añadir al carrito</button>
                        <!--input type="button" value="Agregar" id="comprar"-->
                        </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin Cards -->

    <!-- Pie de página -->
    <footer>
        <div class="container-footer-all">
            <div class="container-body">
                <div class="colum1">
                    <h1>Mas informacion de la compañia</h1>
                    <p>Esta compañia se dedica a la venta de propiedades con el
                        proposito de darte un hogar y puedas disfrutar de un lindo
                        espacio con la ventaja de tener amueblado y decorado el hogar.</p>
                </div>
                <div class="colum2">
                    <h1>Redes Sociales</h1>
                    <div class="row">
                        <img src="Vista/img/facebook.png">
                        <label>Siguenos en Facebook</label>
                    </div>
                    <div class="row">
                        <img src="Vista/img/twitter.png">
                        <label>Siguenos en Twitter</label>
                    </div>
                    <div class="row">
                        <img src="Vista/img/instagram.png">
                        <label>Siguenos en Instagram</label>
                    </div>
                    <div class="row">
                        <img src="Vista/img/google-plus.png">
                        <label>Siguenos en Google Plus</label>
                    </div>
                    <div class="row">
                        <img src="Vista/img/pinterest.png">
                        <label>Siguenos en Pinteres</label>
                    </div>
                </div>
                <div class="colum3">
                    <h1>Informacion Contactos</h1>
                    <div class="row2">
                        <img src="Vista/img/house.png">
                        <label>La Romana,
                            Republica Dominicana
                            Manuel del Cabral
                            Casa # 27</label>
                    </div>
                    <div class="row2">
                        <img src="Vista/img/smartphone.png">
                        <label>+1-829-395-2064</label>
                    </div>
                    <div class="row2">
                        <img src="Vista/img/contact.png">
                        <label>somoshome@gmail.com</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-footer">
            <div class="footer">
                <div class="copyright">
                    © 2017 Todos los Derechos Reservados | <a href="">CorpHome</a>
                </div>

                <div class="information">
                    <a href="">Informacion Compañia</a> | <a href="">Privacion y Politica</a> | <a href="">Terminos y
                        Condiciones</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Pie de página -->
</body>
<script src="Vista/js/btnMenu.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.min.js"></script>

</html>