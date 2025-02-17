<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Mascota</title>
    <!-- Enlace a Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <div id="contacto" class="card p-4 shadow-lg">
        <h2 class="text-center mb-4">Registrar Mascota</h2>

        <!-- Mostrar mensaje de éxito o error -->
        <?php
        session_start();
        if (isset($_SESSION['mensaje'])) {
            $mensaje = $_SESSION['mensaje'];
            $mensaje_tipo = $_SESSION['mensaje_tipo'];
            echo "<div class='alert alert-$mensaje_tipo'>$mensaje</div>";
            unset($_SESSION['mensaje']); // Limpiar el mensaje de la sesión
            unset($_SESSION['mensaje_tipo']);
        }
        ?>

        <form action="procesar_formulario.php" method="POST">
            <div class="form-group">
                <label for="nombre_usuario">Nombre del Usuario:</label>
                <input type="text" id="nombre_usuario" name="nombre_usuario" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="nombre_mascota">Nombre de la Mascota:</label>
                <input type="text" id="nombre_mascota" name="nombre_mascota" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="tel" id="telefono" name="telefono" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="direccion">Dirección:</label>
                <input type="text" id="direccion" name="direccion" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="patologia">Patología de la Mascota:</label>
                <textarea id="patologia" name="patologia" class="form-control" rows="3" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary btn-block">Registrar</button>
        </form>
    </div>
</div>

<!-- Enlace a Bootstrap JS y dependencias de jQuery y Popper -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>