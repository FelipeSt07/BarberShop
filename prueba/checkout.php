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
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Producto</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
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
                                        <?php echo MONEDA . number_format($precio, 2, '.', ','); ?>
                                    </td>
                                    <td>
                                        <input type="number" min="1" max="10" step="1" value="<?php echo $cantidad ?>" size="5"
                                            id="cantidad_<?php echo $_id; ?>"
                                            onchange="actualizarCantidad(this.value, <?php echo $_id; ?>)">

                                    </td>
                                    <td>
                                        <div id="subtotal_<?php echo $_id; ?>" name="subtotal[]"><?php echo MONEDA .
                                               number_format($subtotal, 2, '.', ','); ?></div>
                                    </td>
                                    <td><a id="success_c" id="eliminar" class="btn btn-warning btn-sm" data-bs-id="<?php echo
                                        $_id; ?>" data-bs-toggle="modal" data-bs-target="#eliminaModal">Eliminar</a>
                                    </td>
                                </tr>
                            <?php } ?>

                            <tr>
                                <td colspan="3"></td>
                                <td colspan="2">
                                    <p class="h3" id="total">
                                        <?php echo MONEDA . number_format($total, 2, '.', ','); ?>
                                    </p>
                                </td>
                                <td colspan="3"></td>

                            </tr>


                        </tbody>
                    <?php } ?>

                </table>

            </div>

            <?php if ($lista_carrito != null) { ?>
                <div class="">
                    <div class="col-md-5- offset-md-7 d-grid gap-2">
                        <a href="pago.php" id="primary_c" class="btn btn-primary btn-lg">Realizar pago</a>
                    </div>

                </div>
            <?php } ?>

        </div>
    </main>

    <!-- Modal -->
    <div class="modal fade" id="eliminaModal" tabindex="-1" aria-labelledby="eliminaModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="eliminaModalLabel">Alerta</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ¿Desea eliminar el producto de la lista?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button id="btn-elimina" type="button" class="btn btn-danger" onclick="eliminar()">Eliminar</button>
                </div>
            </div>
        </div>
    </div>


    <footer>
        <section>
            <a href="checkout.php">Ir al comienzo</a>
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

        let eliminaModal = document.getElementById('eliminaModal')
        eliminaModal.addEventListener('show.bs.modal', function (event) {
            let button = event.relatedTarget
            let idproducto = button.getAttribute('data-bs-id')
            let buttonElimina = eliminaModal.querySelector('.modal-footer #btn-elimina')
            buttonElimina.value = idproducto
        })

        function actualizarCantidad(cantidad, idproducto) {
            let url = 'clases/actualizar_carrito.php'
            let formData = new FormData()
            formData.append('action', 'agregar')
            formData.append('idproducto', idproducto)
            formData.append('cantidad', cantidad)

            //console.log(idproducto, cantidad);
            fetch(url, {
                method: 'POST',
                body: formData,
                mode: 'cors'
            }).then(response => response.json())
                .then(data => {
                    //console.log(data);
                    if (data.ok) {

                        let divsubtotal = document.getElementById('subtotal_' + idproducto)
                        divsubtotal.innerHTML = data.sub

                        let total = 0.00
                        let list = document.getElementsByName('subtotal[]')

                        for (let i = 0; i < list.length; i++) {
                            total += parseFloat(list[i].innerHTML.replace(/[$,]/g, ''))
                        }

                        total = new Intl.NumberFormat('en-US', {
                            minimumFractionDigits: 2
                        }).format(total)
                        document.getElementById('total').innerHTML = '<?php echo MONEDA; ?>' + total

                    }
                })

        }


        function eliminar() {

            let botonElimina = document.getElementById('btn-elimina')
            let idproducto = botonElimina.value

            let url = 'clases/actualizar_carrito.php'
            let formData = new FormData()
            formData.append('action', 'eliminar')
            formData.append('idproducto', idproducto)

            fetch(url, {
                method: 'POST',
                body: formData,
                mode: 'cors'
            }).then(response => response.json())
                .then(data => {
                    if (data.ok) {
                        location.reload()
                    }
                })

        }
    </script>


</body>

</html>