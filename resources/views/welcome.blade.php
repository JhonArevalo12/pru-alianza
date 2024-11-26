<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pru Alianza</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap" rel="stylesheet">
    <style>
       body {
    background-color: black;
    font-family: 'Roboto', sans-serif;
}

.container {
    width: 1920px;
    height: auto;
    top: 80px;
    position: relative;
    display: flex;
}

.left-column {
    background-image: url('http://localhost:8000/images/pexels-vlada-karpovich.png');
    background-size: cover; /* Asegúrate de que la imagen cubra el div */
    background-position: left; /* Centra la imagen */
    width: 60%;
    height: 600px; /* Mantén la altura fija para el div */
    position: relative;
}

.right-column {
    background-color: white;
    width: 40%;
    padding: 20px;
    min-height: 600px; /* Altura mínima para la columna derecha */
    display: flex; /* Usar flexbox */
    flex-direction: column; /* Organizar los elementos en columna */
    justify-content: center; /* Centrar verticalmente */
    box-sizing: border-box; /* Asegura que el padding se incluya en el ancho total */
}

.logo {
    display: block;
    width: 210px;
    height: auto;
    margin: 20px auto 30px; /* Añadir margen inferior para más espacio */
}
.login-form {
    max-width: 320px; /* Aumenta el ancho máximo del formulario */
    margin: 0 auto;
}
.form-control {
    border-radius: 30px; /* Bordes redondeados */
    height: 35px; /* Ajustar altura a 35px para más espacio */
    font-size: 12px; /* Tamaño de fuente más pequeño */
    padding: 8px 12px; /* Aumentar padding interno para más espacio */
}

.btn {
    border-radius: 30px; /* Bordes redondeados para el botón */
    height: 35px; /* Ajustar altura */
    font-size: 12px;
    text-align: center; /* Tamaño de fuente más pequeño */
}

.text-small {
    font-size: 10px;
    display: flex;
    justify-content: space-between; /* Espacio entre los textos */
    margin-top: 10px; /* Espacio superior */
}

.form-check {
    text-align: center; /* Centra el checkbox */
    margin-bottom: 20px; /* Espacio inferior */
}

.form-check-label {
    margin-left: 10px; /* Espacio entre el checkbox y la etiqueta */
    font-size: 10px;
}

label {
    font-size: 12px; /* Tamaño de fuente de las etiquetas */
}

.text-small a {
    color: lightgray; /* Color gris claro para los enlaces */
}
    </style>
</head>
<body>
    <div class="container">
        <div class="left-column">
            <!--<img src="http://localhost:8000/images/pexels-vlada-karpovich.png" alt="Imagen de fondo" style="width: 100%; height: auto;">-->
            <img src="http://localhost:8000/images/Bienvenido a la mejor.png" alt="Texto 1" style="width: 297px; height: auto; position: absolute; top: 452px; left: 70px;">
            <img src="http://localhost:8000/images/gestion.png" alt="Texto 2" style="width: 240px; height: auto; position: absolute; top: 520px; left: 70px;">
        </div>
        <div class="right-column">
            <img src="http://localhost:8000/images/isologo.png" alt="Logo" class="logo">
            @if ($errors->any())
            <div class="alert alert-danger">
             <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
             </ul>
            </div>
            @endif
            <form class="login-form" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <label for="username">Usuario</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="rememberMe" name="remember">
                    <label class="form-check-label" for="rememberMe">Recordar contraseña</label>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Iniciar sesión</button>
                <div class="text-small">
                    <a href="#">¿Olvidaste tu usuario?</a>
                    <a href="#">¿Olvidaste tu contraseña?</a>
                </div>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>