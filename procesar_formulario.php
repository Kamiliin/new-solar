<?php
// Definir las variables de conexión a la base de datos
$usuario  = "root";
$password = "";
$servidor = "localhost";
$basededatos = "solar";

// Crear conexión
$conn = new mysqli($servidor, $usuario, $password, $basededatos);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Verificar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario
    $nombre = $_POST['inputNombre'];
    $apellido = $_POST['inputApellido'];
    $email = $_POST['inputEmail'];
    $numero_contacto = $_POST['inputNumero'];
    $ubicacion = $_POST['inputUbicacion'];
    $comentarios = $_POST['exampleFormControlTextarea1'];

    // Insertar datos en la base de datos
    $stmt = $conn->prepare("INSERT INTO contactos (nombre, apellido, email, numero_contacto, ubicacion, comentarios) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $nombre, $apellido, $email, $numero_contacto, $ubicacion, $comentarios);

    if ($stmt->execute()) {
        echo "<p>Datos guardados correctamente</p>";
    } else {
        echo "<p>Error: " . $stmt->error . "</p>";
    }

    $stmt->close();
}


header('Location: thanks.php');


// Cerrar conexión
$conn->close();
?>
