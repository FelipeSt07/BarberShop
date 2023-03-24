<?php
include('config/config.php');
include('config/conexion.php');
$conexion = conectar();

$productos = isset($_SESSION['carrito']['productos']) ? $_SESSION['carrito']['productos'] : null;

$lista_carrito = array();

if ($productos != null) {
    foreach ($productos as $clave => $cantidad) {

        $query = "SELECT idproducto, nombre, precio, $cantidad AS cantidad FROM `producto` 
        WHERE idproducto=$clave AND estado=1";
        $result = mysqli_query($conexion, $query);
        $lista_carrito[] = mysqli_fetch_assoc($result);
    }
} else {
    header("Location: index.php");
    exit;
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estiloscar.css">
    <link rel="shortcut icon" href="imagenes/barber-shop.svg">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Barberia Harlan</title>

    <script src="https://www.paypal.com/sdk/js?client-id=<?php echo CLIENT_ID; ?>"></script>
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
                    <a href="" id="oculto"><i class="fa-solid fa-scissors"></i>Servicios</a>
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
                    <a href="carrito.php" id="oculto"><i class="fa-solid fa-cart-shopping"></i>
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
                <div class="col-6">
                    <h4>Detalles de pago</h4>
                    <div id="paypal-button-container"></div>
                </div>

                <div class="col-6">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Producto</th>
                                    <th>Subtotal</th>
                                    <th></th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php if ($lista_carrito == null) {
                                    echo '<tr><td colspan="5" class="text-center"><b>Lista vacia</b> </td></tr> ';
                                } else {

                                    $total = 0;
                                    foreach ($lista_carrito as $producto) {
                                        $_id = $producto['idproducto'];
                                        $nombre = $producto['nombre'];
                                        $precio = $producto['precio'];
                                        $cantidad = $producto['cantidad'];
                                        $subtotal = $cantidad * $precio;
                                        $total += $subtotal;
                                        ?>


                                        <tr>
                                            <td>
                                                <?php echo $nombre; ?>
                                            </td>
                                            <td>
                                                <div id="subtotal_<?php echo $_id; ?>" name="subtotal[]"><?php echo MONEDA .
                                                       number_format($subtotal, 2, '.', ','); ?></div>
                                            </td>

                                        </tr>
                                    <?php } ?>

                                    <tr>
                                        <td colspan="2">
                                            <p class="h3 text-end" id="total">
                                                <?php echo MONEDA . number_format($total, 2, '.', ','); ?>
                                            </p>
                                        </td>
                                        <td colspan="3"></td>

                                    </tr>


                                </tbody>
                            <?php } ?>

                        </table>

                    </div>
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

    <script>
            paypal.Buttons({
                style: {
                    color: 'blue',
                    shape: 'pill',
                    label: 'pay'
                },
                createOrder: function (data, actions) {
                    return actions.order.create({
                        purchase_units: [{
                            amount: {
                                value: <?php echo $total; ?>
                            }
                        }]
                    })
                },

                onApprove: function(data, actions){
                    let URL = 'clases/captura.php'
                    actions.order.capture().then(function (detalles){

                        console.log(detalles);

                        return fetch(url, {
                            method: 'post',
                            headers: {
                                'content-type': 'application/json'
                            },
                            body: JSON.stringify({
                                detalles: detalles
                            })
                        })

                        //window.location.href="productos.php"
                    });
                },

                onCancel: function(data){
                    alert("Pago Cancelado");
                }
            }).render('#paypal-button-container');
        </script>                                    


</body>


</html>