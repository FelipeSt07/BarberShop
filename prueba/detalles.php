<?php

include('config/config.php');
include('config/conexion.php');
$conexion = conectar();

$id = isset($_GET['id']) ? $_GET['id'] : '';
$token = isset($_GET['token']) ? $_GET['token'] : '';

if ($id == '' || $token == '') {
    echo 'Error al procesar la petición';
    exit;
} else {
    $token_tmp = hash_hmac('sha1', $id, KEY_TOKEN);

    if ($token == $token_tmp) {

        $query = "SELECT count(idproducto) FROM `producto` WHERE idproducto='$id' AND estado=1";
        $result = mysqli_query($conexion, $query);
        if (mysqli_num_rows($result) > 0) {
            $query = "SELECT nombre, descripcion, precio, descuento FROM `producto` WHERE idproducto='$id' AND estado=1
            LIMIT 1";
            $result = mysqli_query($conexion, $query);
            $row = mysqli_fetch_assoc($result);
            $nombre = $row['nombre'];
            $descripcion = $row['descripcion'];
            $precio = $row['precio'];
            $descuento = $row['descuento'];
            $precio_desc = $precio - (($precio * $descuento) / 100);
            $dir_images = 'imagenes/productos/' . $id . '/';

            $rutaImg = $dir_images . 'principal.png';

            if (!file_exists($rutaImg)) {
                $rutaImg = 'imagenes/no-photo.jpg';
            }

            $images = array();
            if (file_exists($dir_images)) {
                $dir = dir($dir_images);

                while (($archivo = $dir->read()) != false) {
                    if ($archivo != 'principal.png' && (strpos($archivo, 'jpg')) || (strpos($archivo, 'png'))) {
                        $images[] = $dir_images . $archivo;
                    }
                }
                $dir->close();
            }
        } else {
            echo 'Error al procesar la petición';
            exit;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilosdet.css">
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
                    <?php if (isset($_SESSION['username'])) { ?>

                        <div class="dropdown">
                            <button class="btn btn-sm " type="button" id="btn_session"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <a href="#" id="oculto"><i class="fa-regular fa-circle-user"></i>
                                    <?php echo $_SESSION['username']; ?>
                                </a>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="btn_session">
                                <li><a class="dropdown-item" href="logout.php">Cerrar sesión</a></li>
                            </ul>
                        </div>

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

        <div class="contenedor contenedor-grid">
            <div class="grid" id="grid">
                <div class="categorias">
                    <a id="oculto_a" href="login.php">Iniciar Sesion</a>
                    <a id="oculto_a" href="productos.php">Productos</a>
                    <a id="oculto_a" href="servicios.php">Servicios</a>
                </div>
            </div>
        </div>

    </header>

    <div class="separador"></div>

    <section class="text">
        <h1 id="titulo">PRODUCTOS</h1>
        <!-- <p>Lograr que usted viva una experiencia desde su</p>
        <p>llegada hasta que se retira de nuestra Barbería,</p>
        <p>es nuestro compromiso y objetivo.</p> -->
    </section>

    <!--Contenido-->
    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-6 order-md-1">

                    <div id="carouselImages" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img id="imagen_a" src="<?php echo $rutaImg ?>">
                            </div>

                            <?php foreach ($images as $imagen) { ?>
                                <div class="carousel-item">
                                    <img id="imagen_a" src="<?php echo $imagen ?>">
                                </div>
                            <?php } ?>

                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselImages"
                            data-bs-slide="prev">
                            <span id="control" class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span id="control" class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselImages"
                            data-bs-slide="next">
                            <span id="control" class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span id="control" class="visually-hidden">Next</span>
                        </button>
                    </div>


                </div>
                <div class="col-md-6 order-md-2">
                    <h2>
                        <?php echo $nombre; ?>
                    </h2>
                    <h2>
                        <?php echo MONEDA . number_format($precio, 2, '.', ','); ?>
                    </h2>
                    <p class="lead">
                        <?php echo $descripcion; ?>
                    </p>

                    <div class="col-3 my-3">
                        Cantidad: <input class="form-control" id="cantidad" name="cantidad" type="number" min="1"
                            max="10" value="1">
                    </div>

                    <div class="d-grid gap-3 col-10">
                        <button id="primary_c" class="btn btn-primary" type="button">Comprar Ahora</button>
                        <button id="success_c" class="btn btn-outline-primary" type="button" onclick="addProducto(<?php echo $id; ?>,
                         cantidad.value, '<?php echo $token_tmp; ?>')">Agregar al carrito</button>
                    </div>

                </div>
            </div>
        </div>
    </main>


    <footer>
        <section>
            <a href="detalles.php">Ir al comienzo</a>
        </section>
        <p>Copyright 2023</p>
    </footer>
    <script src="https://kit.fontawesome.com/7a4ffadb8c.js" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <script>
        function addProducto(id, cantidad, token) {
            let url = 'clases/carrito.php'
            let formData = new FormData()
            formData.append('id', id)
            formData.append('cantidad', cantidad)
            formData.append('token', token)

            fetch(url, {
                method: 'POST',
                body: formData,
                mode: 'cors'
            }).then(response => response.json())
                .then(data => {
                    if (data.ok) {
                        let elemento = document.getElementById("num_cart")
                        elemento.innerHTML = data.numero
                    }
                })

        }
    </script>


</body>

</html>