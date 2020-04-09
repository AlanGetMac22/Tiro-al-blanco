<!DOCTYPE html>
<!-- Español -->
<html lang="es">
<!-- Cabecera de página -->

<head>
    <meta charset="uft-8">
    <meta name="author" content="AlanGetMac22">
    <meta name="description" content="Agencia de trabajos en línea">
    <meta name="keywords" content="Tab, Tiro al blanco, ¡El blanco perfecto!">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="iniciarsesion1.css">
    <!-- Estilos CSS3 -->
    <title id="title"></title>
    <!-- Título de la página -->
</head>
<!-- Estructura de la página -->

<body>
    <!-- Formulario -->
    <form class="box" action="inicio.html" method="post">
        <!-- Imagen principal Tiro al blanco -->
        <a href="principal.html"><img src="Empresa/tab2.jpg" alt="Tiro al blanco"></a>
        <!-- Título -->
        <h2 id="h2"></h2>
        <!-- Inputs -->
        <!-- Usuario -->
        <input type="text" name="username" placeholder="Nombre de usuario" required>
        <!-- Correo electrónico -->
        <input type="email" name="email" placeholder="Correo electrónico" required>
        <!-- Contraseña -->
        <input type="password" name="password" placeholder="Introduce tu contraseña" required>
        <!-- Pregunta de ley -->
        <p><a href="#"><small id="small"></small></a></p>
        <!-- Botón de ingreso -->
        <p id="button"></p>
        <input type="submit" name="bottom" value="Ingresar">
        <!-- Registro de usuario -->
        <p>
            <a href="registrarse.php" id="pa"></a>
        </p>
    </form>
    <!-- Javascript -->
    <script>
        var s = "Título principal";

        var tab = document.getElementById("title").innerHTML = "Iniciar sesión | Tiro al blanco";

        console.log("Iniciar sesión");

        var a = 1000;
        var b = 500;
        var c = a + b;

        var x = 100;
        var y = 50;
        var z = x + y;

        console.log("Mis variables");

        var s = "Preguntas";

        var restaurar = document.getElementById("small").innerHTML = "Olvidaste tu contraseña?";
        var registro = document.getElementById("pa").innerHTML = "Regístrarse";

        console.log("Opciones principales");

        var s = "Iniciar sesión";

        var inicio = document.getElementById("h2").innerHTML = "Iniciar sesión";

        console.log("Ingresar cuenta");

        var s = "Geolocalización";

        var x = document.getElementById("button");

        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            } else {
                x.innerHTML = "Geolocation is not supported by this browser.";
            }
        }

        function showPosition(position) {
            x.innerHTML = "Latitude: " + position.coords.latitude +
                "<br>Longitude: " + position.coords.longitude;
        }
    </script>
</body>
<!-- Fin de documento -->

</html>