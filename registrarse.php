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
    <!-- Estilos CSS3 -->
    <title id="title"></title>
    <!-- Título de la página -->
    <style>
        /* Cuerpo de página web */
        
        body {
            margin: 0;
            padding: 0;
            background: yellow;
            font-family: 'Franklin Gothic Medium';
            box-sizing: border-box;
        }
        /* Formulario de cajas */
        
        .box {
            background: azure;
            color: black;
            border-radius: 20px;
            padding: 40px;
            left: 50%;
            position: absolute;
            text-align: center;
            transform: translate(-50%, -50%);
            top: 50%;
            width: 400px;
        }
        
        .box input[type="text"],
        .box input[type="email"],
        .box input[type="password"],
        .box input[type="tel"] {
            border: 0;
            background: none;
            display: block;
            margin: 20px auto;
            padding: 10px 15px;
            text-align: center;
            border: 2px solid orangered;
            width: 200px;
            font-size: 15px;
            outline: none;
            transition: 0.25s;
            color: gray;
            border-radius: 30px;
        }
        
        .box input[type="text"]:focus,
        .box input[type="email"]:focus,
        .box input[type="password"]:focus,
        .box input[type="tel"]:focus {
            border-color: palegreen;
            width: 280px;
        }
        
        .box input[type="submit"] {
            border: 0;
            background: none;
            cursor: pointer;
            border: 2px solid palegreen;
            border-radius: 24px;
            display: block;
            margin: 20px auto;
            padding: 11px 11px;
            color: gray;
            outline: none;
            text-align: center;
            width: 150px;
            transition: 0.25s;
        }
        
        .box input[type="submit"]:hover {
            background: palegreen;
        }
        /*  */
        /*  */
        /* Decoración de texto */
        
        p a {
            text-decoration: none;
        }
    </style>
</head>
<!-- Estructura de la página -->

<body>
    <!-- Formulario -->
    <form class="box" action="contratacion.html" method="POST">
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
        <input type="password" name="password" placeholder="Contraseña nueva" required>
        <!-- Número teléfonico -->
        <input type="tel" name="phone" placeholder="Teléfono celular" required>
        <!-- Botón de ingreso -->
        <input type="submit" name="bottom" value="Ingresar datos">
        <!-- Registro de usuario -->
    </form>
    <!-- Javascript -->
    <script>
        var s = "Título principal";

        var tab = document.getElementById("title").innerHTML = "Registrarse | Tiro al blanco";

        console.log("Registro de usuarios");

        var a = 1000;
        var b = 500;
        var c = a + b;

        var x = 100;
        var y = 50;
        var z = x + y;

        console.log("Mis variables");

        var s = "Iniciar sesión";

        document.getElementById("h2").innerHTML = "Regístro de cuenta";
        
        console.log("Validar datos");
    </script>
</body>
<!-- Fin de documento -->

</html>