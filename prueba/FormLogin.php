<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="container">
        <div class="barra" >
            <a href="index.php"><img src="imagenes/barber-logo.png" alt=""></a>
        </div>
        <div class="form-box" id="contenedor" >
            <div class="button-box">
                <div id="elegir"></div>
                    <button type="button" class="toggle-btn" onclick="login()">Iniciar Sesion</button>
                    <button type="button" class="toggle-btn" onclick="registrar()">Registrar</button>
            </div>
            <div class="redes-sociales">
                <img src="imagenes/facebook.png" alt="icono-Facebook">
                <img src="imagenes/twiter.png" alt="icono-Twiter">
                <img src="imagenes/google.png" alt="icono-Google">
            </div>
            <form action="sesion.php" method="post" id="login" class="input-group">
                <div>
                    <input name="usuario" type="text" class="input-field" placeholder="Usuario" required>
                </div>
                <div>
                    <input name="password" type="password" class="input-field" placeholder="Contraseña" required>
                </div>
                <div>
                    <input type="checkbox" class="check-box"><span>Recordar Contraseña</span>
                </div>
                    <button name="aacceder" type="submit" class="submint-btn boton">Acceder</button>
            </form>
            <!-- Formulario de registro -->
            <form action="registrar.php" id="registrar" class="input-group registrar" method="post">
                <div class="group-registrar">
                    <div class="div-registrar">
                            <input type="text" class="input-field" placeholder="Primer Nombre" required id="pnombre">
                    </div>
                    <div class="div-registrar">
                        <input type="text" class="input-field" placeholder="Segundo Nombre" required id="snombre">
                    </div>
                    <div class="div-registrar">
                        <input type="text" class="input-field" placeholder="Primer Apellido" required id="papellido">
                    </div>
                    <div class="div-registrar">
                        <input type="text" class="input-field" placeholder="Segundo Apellido" required id="sapelido">
                    </div>
                    <div class="div-registrar">
                        <input type="text" class="input-field" placeholder="Identificacion" required id="cedula">
                    </div>
                    <div class="div-registrar">
                        <input type="date" class="input-field" placeholder="Fecha de Nacimiento" required id="fechnac">
                    </div>
                    <div class="div-registrar">
                        <input type="text" class="input-field" placeholder="Direccion Completa" required id="Direccion">
                        </div>
                    <div class="div-registrar">
                        <input type="text" class="input-field" placeholder="Nombre de Usuario" required id="ciudad">
                    </div>
                    <div class="div-registrar">
                        <input type="text" class="input-field" placeholder="Telefono" required id="telefono">                    </div>
                    <div class="div-registrar">
                        <input type="email" class="input-field" placeholder="Correo" required id="correo">
                    </div>
                    <div class="div-registrar">
                        <input type="password" class="input-field" placeholder="Contraseña" required id="correo">
                    </div>
                    <div class="div-registrar">
                        <input type="password" class="input-field" placeholder="Confirmar contraseña" required id="correo">
                    </div>
                </div>
                    <input type="checkbox" class="check-box"><span>Acepto los terminos y condiciones</span>
                    <button type="submit" class="submint-btn">Registrar</button>
            </form>
        </div>
    </div>
    
    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("registrar");
        var z = document.getElementById("elegir");
        var c = document.getElementById("contenedor");
        var l = document.getElementById("linea");

        function login() {
            x.style.left = "45px";
            y.style.left = "600px";
            z.style.left = "0px";
            c.style.height = "500px";
            c.style.transition = "0.8s";
            l.style.margin = "20px 45px";
        }

        function registrar() {
            x.style.left = "-600px";
            y.style.left = "45px";
            z.style.left = "120px";
            c.style.height = "580px";
            c.style.transition = "0.8s";
            l.style.margin = "0px 45px";
        }
    </script>
    
</body>
</html>