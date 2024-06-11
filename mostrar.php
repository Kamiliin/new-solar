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

// Consultar la base de datos para mostrar los registros
$sql = "SELECT nombre, apellido, email, numero_contacto, ubicacion, comentarios FROM contactos";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Registros</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h3>Registros de Contactos</h3>

    <?php
    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>Nombre</th><th>Apellido</th><th>Email</th><th>Número de Contacto</th><th>Ubicación</th><th>Comentarios</th></tr>";

        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row["nombre"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["apellido"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["email"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["numero_contacto"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["ubicacion"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["comentarios"]) . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No hay registros para mostrar.";
    }

    // Cerrar conexión
    $conn->close();
    ?>
</body>
</html>
