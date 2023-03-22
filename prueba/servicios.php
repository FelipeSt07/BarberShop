<?php
require('config/config.php');
include("config/conexion.php");
$conexion = conectar();

$query = "SELECT idproducto, nombre, precio FROM `producto` WHERE estado=1";
$result = mysqli_query($conexion, $query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilosser.css">
    <link rel="shortcut icon" href="imagenes/barber-shop.svg">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Barberia Harlan</title>
</head>

<body>
    <header class="header">

        <div class="menu">

            <div class="left">
                <div class="btn-departamentos" id="btn-departamentos">
                    <div class="boton">
                        <a id="oculto_b" href=""><i class="fa-solid fa-bars"></i></a>
                    </div>
                </div>

                <div class="logo">
                    <a href="index.php">
                        <img src="imagenes/barber-logo.png" alt="">
                    </a>

                </div>
            </div>


            <div class="nav_p" id="nav_p_oculto">
                <div class="div barra">
                    <a href="Productos.php" id="oculto"><i class="fa-solid fa-bag-shopping"></i>Productos</a>
                </div>
                <div class="div barra">
                    <a href="servicios.php" id="oculto"><i class="fa-solid fa-scissors"></i>Servicios</a>
                </div>
                <div class="div barra">
                    <a href="FormLogin.php" id="oculto"><i class="fa-regular fa-circle-user"></i>Iniciar Sesion</a>
                </div>
                <div class="div">
                    <a href="checkout.php" id="oculto"><i class="fa-solid fa-cart-shopping"></i>
                        <span id="num_cart" class="badge bg-secondary">
                            <?php echo $num_cart; ?>
                        </span>
                    </a>
                </div>
            </div>
        </div>

        <div class="contenedor contenedor-grid">
            <div class="grid" id="grid">
                <div class="categorias">
                    <a id="oculto_a" href="FormLogin.php">Iniciar Sesion</a>
                    <a id="oculto_a" href="productos.php">Productos</a>
                    <a id="oculto_a" href="servicios.php">Servicios</a>
                </div>
            </div>
        </div>

    </header>

    <div class="separador"></div>

    <section class="text">
        <h1 id="titulo">SERVICIOS</h1>
        <p>Somos una barbería clásica, a la vanguardia en tendencias</p>
        <p>para caballeros del hoy. Ven y disfruta de una bebida</p>
        <p>+ masaje capilar con tu servicio.</p>
    </section>

    <!--Contenido-->
    <main>
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="imagenes/pexels1.jpg">
                        <div id="h5" class="card-body">
                            <h5 class="card-title">Peluqueria</h5>
                            <p class="card-text">Corte realizado por maestros en barbería, capacitados en cortes
                                clásicos y modernos, el servicio incluye: asesoramiento de imagen y lavado.</p>

                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="imagenes/pexels3.jpg">
                        <div id="h5" class="card-body">
                            <h5 class="card-title">Ritual de barba</h5>
                            <p class="card-title">Ritual con toalla caliente y fría, afeitado tradicional con barbera y
                                uso de productos previos y posteriores al afeitado para el cuidado de la barba.</p>

                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="imagenes/pexels2.jpg">
                        <div id="h5" class="card-body">
                            <h5 class="card-title">Spa facial</h5>
                            <p class="card-text">Spa facial completo; Servicio premium de exfoliación, mascarilla
                                dorada, fototerapia, colágeno, hidratación facial y puede incluir depilación con cera.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="pago-ser" class="col-md-5- d-grid gap-2">
            <a href="https://walink.co/0efe65" target="_blank" id="primary_c" class="btn btn-primary btn-lg">RESERVAR CITA</a>
            <br>
            <br>
        </div>
    </main>


    <footer>
        <section>
            <a href="servicios.php">Ir al comienzo</a>
        </section>
        <p>Copyright 2023</p>
    </footer>


    <script src="https://kit.fontawesome.com/7a4ffadb8c.js" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>


</body>

</html>