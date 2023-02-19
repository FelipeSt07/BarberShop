<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="estilospro.css">
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
          <img src="imagenes/barber-logo.png" alt="">
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
          <a id="oculto_a" href="#">Solo Hoy</a>
          <a id="oculto_a" href="#">Solo para Ti</a>
          <a id="oculto_a" href="#">Tiendas Oficiales</a>
          <a id="oculto_a" href="#">Vende en Linio</a>
          <a id="oculto_a" href="#">Ayuda</a>
          <a id="oculto_a" href="#">Historial</a>
          <a id="oculto_a" href="#">Banco Falabella</a>
          <a id="oculto_a" href="#">Falabella</a>
          <a id="oculto_a" href="#">Ventas Telefonicas</a>
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
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
            <img src="https://i.ibb.co/XCNWQHD/principal.jpg">
            <div class="card-body">
              <h5 class="card-title">Zapatos color cafe</h5>
              <p class="card-text">$ 599.00</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="#" id="primary_c" class="btn btn-primary">Detalles</a>
                </div>
                <a href="#" id="success_c" class="btn btn-success">Agregar</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="https://i.ibb.co/XCNWQHD/principal.jpg">
            <div class="card-body">
              <h5 class="card-title">Zapatos color cafe</h5>
              <p class="card-text">$ 599.00</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="#" id="primary_c" class="btn btn-primary">Detalles</a>
                </div>
                <a href="#" id="success_c" class="btn btn-success">Agregar</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="https://i.ibb.co/XCNWQHD/principal.jpg">
            <div class="card-body">
              <h5 class="card-title">Zapatos color cafe</h5>
              <p class="card-text">$ 599.00</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="#" id="primary_c" class="btn btn-primary">Detalles</a>
                </div>
                <a href="#" id="success_c" class="btn btn-success">Agregar</a>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </main>


  <footer>
    <section>
      <a href="#titulo">Ir al comienzo</a>
    </section>
    <p>Copyright 2023</p>
  </footer>


  <script src="https://kit.fontawesome.com/7a4ffadb8c.js" crossorigin="anonymous"></script>
  <script src="main.js"></script>
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>



</body>

</html>