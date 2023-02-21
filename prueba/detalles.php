<?php

require('config.config.php');
require("config/conexion.php");
$con = $db->conectar();

$id = isset($_GET['id']) ? $_GET['id'] : '';
$token = isset($_GET['token']) ? $_GET['token'] : '';

/* if($id == '' || $token == ''){
    echo 'Error al procesar la petición';
    exit;
} else {

    $token_tmp = hash_hmac('sha1' $id, KEY_TOKEN);
}
 */



$sql = $con->prepare("SELECT id,nombre,precio FROM  productos WHERE activo=1");
$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
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
                    <a href="login.php" id="oculto"><i class="fa-regular fa-circle-user"></i>Iniciar Sesion</a>
                </div>
                <div class="div barra">
                    <a href="productos.php" id="oculto"><i class="fa-solid fa-bag-shopping"></i>Productos</a>
                </div>
                <div class="div">
                    <a href="" id="oculto"><i class="fa-solid fa-scissors"></i>Servicios</a>
                </div>
            </div>
        </div>

        <div class="contenedor contenedor-grid">
            <div class="grid" id="grid">
                <div class="categorias">
                    <a id="oculto_a" href="login.php">Iniciar Sesion</a>
                    <a id="oculto_a" href="productos.php">Productos</a>
                    <a id="oculto_a" href="#">Servicios</a>
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
                    <img id="imagen_a" src="imagenes/hair-wash.png">
                </div>
                <div class="col-md-6 order-md-2">
                    
                </div>
            </div>
        </div>
    </main>


    <footer>
        <section>
            <a href="login.php">Ir al comienzo</a>
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