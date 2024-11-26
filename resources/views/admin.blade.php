<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administrador</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .navbar {
            background-color: white;
        }
        .sidebar {
            background-color: #007bff;
            color: white;
            height: 100vh;
            position: fixed;
            width: 20%;
            transition: width 0.3s;
        }
        .sidebar.collapsed {
            width: 8%;
        }
        .sidebar .btn-collapse {
            margin: 10px;
        }
        .content {
            margin-left: 20%;
            padding: 20px;
        }
        .content .welcome-message {
            text-align: center;
            margin-bottom: 20px;
        }
        .user-icon {
            font-size: 50px;
            margin: 20px auto;
            display: block;
        }
        .add-user {
            text-align: center;
        }
        .add-user img {
            width: 50px; /* Ajusta el tamaño de tu icono */
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">Logo</a>
        <div class="ml-auto">
            <img src="http://localhost:8000/images/user-photo.png" alt="User  Photo" class="rounded-circle" style="width: 40px; height: 40px;">
        </div>
    </nav>

    <div class="sidebar">
        <button class="btn btn-light btn-collapse" onclick="toggleSidebar()">Toggle</button>
        <ul class="list-unstyled">
            <li><a href="#" class="text-white">Home</a></li>
            <li>
                <a href="#" class="text-white dropdown-toggle" data-toggle="collapse" data-target="#submenu" aria-expanded="false">Listas</a>
                <ul class="collapse" id="submenu">
                    <li><a href="#" class="text-white">Empleados</a></li>
                    <li><a href="#" class="text-white">Cargos</a></li>
                </ul>
            </li>
        </ul>
    </div>

    <div class="content">
        <div class="welcome-message">
            <h2>Bienvenida Elisa Gómez</h2>
            <p>Añade los datos personales de tus empleados y después agrega su cargo en tu empresa</p>
            <div class="content">
        <div class="welcome-message">
            <h2>Bienvenida Elisa Gómez</h2>
            <p>Añade los datos personales de tus empleados y después agrega su cargo en tu empresa</p>
        </div>
        <div class="add-user" onclick="toggleForm()">
            <i class="user-icon">👤 +</i> <!-- Icono con símbolo + -->
            <p>Empieza aquí</p>
        </div>

        <div class="form-container" id="form-container">
            <h3>Nuevo Empleado</h3>
            <form>
                <div class="form-group">
                    <label for="nombres">Nombres</label>
                    <input type="text" class="form-control" id="nombres" required>
                </div>
                <div class="form-group">
                    <label for="apellidos">Apellidos</label>
                    <input type="text" class="form-control" id="apellidos" required>
                </div>
                <div class="form-group">
                    <label for="identificacion">Identificación</label>
                    <input type="text" class="form-control" id="identificacion" required>
                </div>
                <div class="form-group">
                    <label for="telefono">Teléfono</label>
                    <input type="text" class="form-control" id="telefono" required>
                </div>
                <div class="form-group">
                    <label for="ciudad">Ciudad</label>
                    <input type="text" class="form-control" id="ciudad" required>
                </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        function toggleSidebar() {
            const sidebar = document.querySelector('.sidebar');
            sidebar.classList.toggle('collapsed');
        }
    </script>
</body>
</html>