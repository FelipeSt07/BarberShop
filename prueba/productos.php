<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="estilospro.css">
  <link rel="shortcut icon" href="imagenes/barber-shop.svg">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
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
          <a href="#">Solo Hoy</a>
          <a href="#">Solo para Ti</a>
          <a href="#">Tiendas Oficiales</a>
          <a href="#">Vende en Linio</a>
          <a href="#">Ayuda</a>
          <a href="#">Historial</a>
          <a href="#">Banco Falabella</a>
          <a href="#">Falabella</a>
          <a href="#">Ventas Telefonicas</a>
        </div>
      </div>
    </div>

    <main>
      <div class="container2">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          <div class="col">
            <div class="card shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg"
                role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                  dy=".3em">Thumbnail</text>
              </svg>
              <div class="card-body">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                  content. This content is a little bit longer.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                  </div>
                  <small class="text-muted">9 mins</small>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </main>



  </header>

  <footer>
    <section>
      <a href="#titulo">Ir al comienzo</a>
    </section>
    <p>Copyright 2023</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
    integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
    crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/7a4ffadb8c.js" crossorigin="anonymous"></script>
  <script src="main.js"></script>
</body>

</html>