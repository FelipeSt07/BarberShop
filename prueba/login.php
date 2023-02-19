<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>

    <div class="container">
        <div class="form-box">
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
            <form id="login" class="input-group">
                <input type="text" class="input-field" placeholder="Nombre de Usuario" required>
                <input type="password" class="input-field" placeholder="Contraseña" required>
                <input type="checkbox" class="check-box"><span>Recordar Contraseña</span>
                <button type="submit" class="submint-btn">Acceder</button>
            </form>
            <form action="registrar.php" id="registrar" class="input-group registrar" method="post">
                <input type="text" class="input-field input-registrar" placeholder="Primer Nombre" required id="pnombre">
                <input type="text" class="input-field input-registrar" placeholder="Segundo Nombre" required id="snombre">
                <input type="text" class="input-field input-registrar" placeholder="Primer Apellido" required id="papellido">
                <input type="text" class="input-field input-registrar" placeholder="Segundo Apellido" required id="sapelido">
                <input type="text" class="input-field input-registrar" placeholder="Identificacion" required id="cedula">
                <input type="date" class="input-field input-registrar" placeholder="Fecha de Nacimiento" required id="fechnac">
                <input type="text" class="input-field input-registrar" placeholder="Barrio" required id="barrio">
                <input type="text" class="input-field input-registrar" placeholder="Ciudad" required id="ciudad">
                <input type="text" class="input-field input-registrar" placeholder="Telefono" required id="telefono">
                <input type="email" class="input-field input-registrar" placeholder="Correo" required id="correo">
                <input type="checkbox" class="check-box"><span>Acepto los terminos y condiciones</span>
                <button type="submit" class="submint-btn">Registrar</button>
            </form>
        </div>
    </div>

    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("registrar");
        var z = document.getElementById("elegir");

        function login() {
            x.style.left = "40px";
            y.style.left = "450px";
            z.style.left = "0px";
        }

        function registrar() {
            x.style.left = "-400px";
            y.style.left = "40px";
            z.style.left = "120px";
        }
    </script>
    
</body>
</html>