<?php
$usuario  = "solarysu_root";
$password = "6+pYkZd835EP)w";
$servidor = "localhost";
$basededatos = "solarysu_solar";

#$usuario  = "root";
#$password = "";
#$servidor = "localhost";
#$basededatos = "solar";

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

    // Guardar en la base de datos
    $stmt = $conn->prepare("INSERT INTO contactos (nombre, apellido, email, numero_contacto, ubicacion, comentarios) VALUES (?, ?, ?, ?, ?, ?)");
    
    if ($stmt === false) {
        die('Error al preparar la consulta: ' . $conn->error);
    }

    $stmt->bind_param("ssssss", $nombre, $apellido, $email, $numero_contacto, $ubicacion, $comentarios);

    if ($stmt->execute() === false) {
        die('Error al ejecutar la consulta: ' . $stmt->error);
    }

    $stmt->close();

    // Enviar email
    $para = 'l.a.espinozaolivares@gmail.com';
    $asunto = 'solar y sustentable';
    $mensaje = "Nombre: $nombre\nApellido: $apellido\nEmail: $email\nNúmero de Contacto: $numero_contacto\nUbicación: $ubicacion\nComentarios: $comentarios";
    $cabeceras = "From: admin@solarysustentablechile.cl";

    if (mail($para, $asunto, $mensaje, $cabeceras)) {
        header('Location: /version-2/thanks.php');
        exit(); 
    } else {
        die('Error al enviar el correo.');
    }
}

$conn->close();
