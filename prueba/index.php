<?php
include('config/conexion.php');
require('config/config.php');
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
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="shortcut icon" href="imagenes/barber-shop.svg">
    <title>Barberia Harlan</title>

</head>

<body>
    <header class="header">

        <div class="menu">

            <div class="left">
                <div class="btn-departamentos" id="btn-departamentos">
                    <div class="boton">
                        <a href=""><i class="fa-solid fa-bars"></i></a>
                    </div>
                </div>

                <div class="logo">
                    <img src="imagenes/barber-logo.png" alt="">
                </div>
            </div>


            <div class="nav" id="nav_oculto">
                <div class="div barra">
                    <a href="Productos.php" id="oculto"><i class="fa-solid fa-bag-shopping"></i>Productos</a>
                </div>
                <div class="div barra">
                    <a href="servicios.php" id="oculto"><i class="fa-solid fa-scissors"></i>Servicios</a>
                </div>
                <div class="div barra">
                    <?php if (isset($_SESSION['username'])) { ?>
                        <a href="FormLogin.php" id="oculto"><i class="fa-regular fa-circle-user"></i> <?php echo $_SESSION
                        ['username']; ?></a>
                    <?php } else { ?> 
                        <a href="FormLogin.php" id="oculto"><i class="fa-regular fa-circle-user"></i>Iniciar Sesion</a>
                    <?php } ?>
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
	</div>

        <div class="contenedor contenedor-grid">
            <div class="grid" id="grid">
                <div class="categorias">
                    <a href="FormLogin.php">Iniciar Sesion</a>
                    <a href="Productos.php">Productos</a>
                    <a href="servicios.php">Servicios</a>
                </div>
            </div>
        </div>


    </header>

    <div class="slider" id="ajuste">
        <ul>
            <li>
                <img src="imagenes/slider2copia.jpg">
            </li>
            <li>
                <img src="imagenes/slider3copia.jpg">
            </li>
            <li>
                <img src="imagenes/slider4copia.jpg">
            </li>
            <li>
                <img src="imagenes/slider1copia.jpg">
            </li>
        </ul>
    </div>

    <section class="text">
        <h1 id="titulo">BIENVENIDOS</h1>
        <p>Lograr que usted viva una experiencia desde su</p>
        <p>llegada hasta que se retira de nuestra Barbería,</p>
        <p>es nuestro compromiso y objetivo.</p>
    </section>

    <section class="mosaico">
        <div class="row">
            <div class="column">
                <img src="imagenes/mosaico1copia.jpg">
                <img src="imagenes/mosaico2copia.jpg">
                <img src="imagenes/mosaico3copia.jpg">

            </div>
            <div class="column">
                <img src="imagenes/mosaico4copia.jpg" id="img_oculto">
                <img src="imagenes/mosaico5copia.jpg" id="img_oculto">
                <img src="imagenes/mosaico6copia.jpg" id="img_oculto">
            </div>
            <div class="column">
                <img src="imagenes/mosaico7copia.jpg" id="img_oculto">
                <img src="imagenes/mosaico8copia.jpg" id="img_oculto">
                <img src="imagenes/mosaico9copia.jpg" id="img_oculto">

            </div>
        </div>
    </section>

    <section class="testimonials">
        <h2 class="testimonials-title">RESEÑAS</h2>
        <div class="container">

            <div class="slides">
                <div id="slide-1" class="slide-ctrl"></div>
                <div id="slide-2" class="slide-ctrl"></div>
                <div id="slide-3" class="slide-ctrl"></div>

                <figure class="slide">
                    <blockquote class="testimonial">
                        <p>“ Un día un amigo me convenció de que lo acompañara a barber JH, me sorprendió bastante lo
                            que recibí, excelente servicio, el mejor corte que me han hecho en la vida y solo por un
                            poco más de lo que estaba pagando en aquellos lugares.”</p>
                        <cite>John Doe</cite>
                    </blockquote>
                </figure>

                <figure class="slide">
                    <blockquote class="testimonial">
                        <p>“He asistido desde el 2018, y siempre me atienden de manera muy profesional y atenta. Siempre
                            que voy me siento en casa, sigan así.”</p>
                        <cite>David Byrne</cite>
                    </blockquote>
                </figure>

                <figure class="slide">
                    <blockquote class="testimonial">
                        <p>“Excelente servicio, lo mejor de corte y barba, 100% te recomendado. Tienen siempre el tiempo
                            para atender con paciencia y dedicación”</p>
                        <cite>Mary Poppins</cite>
                    </blockquote>
                </figure>

                <div class="slides-ctrl">
                    <a href="#slide-1" class="slide-btn">John Doe</a>
                    <a href="#slide-2" class="slide-btn">David Byrne</a>
                    <a href="#slide-3" class="slide-btn">Mary Poppins</a>

                </div>
            </div>
        </div>
    </section>



    <section class="contactos">
        <div class="izquierda">
            <i class="fa-solid fa-address-book"></i>
            <h2>CONTACTOS</h2>
            <br>
            <p>Cl. 6b #7-42 a 7-52</p>
            <p>BARRIO MARIA ISABEL</p>
            <p>PASTO, NARIÑO</p>
            <br>
            <i class="fa-regular fa-clock"></i>
            <p><strong>¡FUNCIONAMOS BAJO RESERVA!</strong></p>
            <p>HORARIO DE ATENCIÓN</p>
            <p>LUNES A VIERNES 11:00 AM - 7:00 PM</p>
            <p>SABADOS 11:00 AM - 7:00 PM</p>
            <p>DOMINGOS Y FESTIVOS CERRADO</p>


        </div>
        <div class="derecha">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d997.2368477313419!2d-77.28100856557357!3d1.197182750317089!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sco!4v1675954202134!5m2!1ses-419!2sco"
                width="600" height="450" id="maps" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <footer>
        <div class="cont-footer">

            <div class="colum-footer">
                <h3>Contactos</h3><br>
                <p>Pasto, Nariño, Colombia</p>
                <div class="foo">
                    <i class="fa-solid fa-phone"></i>
                    <p>+57 3224823651</p>
                </div>
                <div class="foo">
                    <i class="fa-solid fa-envelope"></i>
                    <p>jhquebendicion@gmail.com</p>
                </div>

            </div>
            <div class="colum-footer">
                <h3>Menu</h3><br>
                <a href="productos.php">Productos</a><br>
                <a href="servicios.php">Servicios</a><br>
                <a href="FormLogin.php">Iniciar Sesion</a>

            </div>
            <div id="none" class="colum-footer">
                <br>
                <br>
                <a href="index.php">Ir al comienzo</a>
                <i class="fa-solid fa-arrow-up"></i>
                <br>
                <br>
            </div>


        </div>


    </footer>


    <script src="https://kit.fontawesome.com/7a4ffadb8c.js" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>

</body>

</html>