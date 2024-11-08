<?php
// Configuración de la conexión a la base de datos
$host = 'localhost';
$db = 'registro_mascotas'; // Nombre de la base de datos
$user = 'root'; // Tu usuario de base de datos
$pass = '1234'; // Tu contraseña de base de datos

// Crear conexión
$conn = new mysqli($host, $user, $pass, $db);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Verificar si se han enviado los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir y sanitizar los datos del formulario
    $nombre_usuario = $conn->real_escape_string($_POST['nombre_usuario']);
    $nombre_mascota = $conn->real_escape_string($_POST['nombre_mascota']);
    $telefono = $conn->real_escape_string($_POST['telefono']);
    $direccion = $conn->real_escape_string($_POST['direccion']);
    $patologia = $conn->real_escape_string($_POST['patologia']);

    // Insertar los datos en la tabla
    $sql = "INSERT INTO mascotas (nombre_usuario, nombre_mascota, telefono, direccion, patologia)
            VALUES ('$nombre_usuario', '$nombre_mascota', '$telefono', '$direccion', '$patologia')";

    if ($conn->query($sql) === TRUE) {
        echo "Registro guardado exitosamente.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Cerrar conexión
$conn->close();
?>