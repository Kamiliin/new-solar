<?php
// Definir las variables de conexión a la base de datos
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
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
        }

        h2 {
            text-align: center;
            color: #555;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #007bff;
            color: white;
            font-weight: bold;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        .comentarios-col {
            width: 30%; /* Ajusta este valor según lo necesites */
        }
    </style>
</head>
<body>
    <h2>Solar y Sustentable </h2>


    <?php
    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>Nombre</th><th>Apellido</th><th>Email</th><th>Número de Contacto</th><th>Ubicación</th><th class='comentarios-col'>Comentarios</th></tr>";

        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row["nombre"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["apellido"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["email"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["numero_contacto"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["ubicacion"]) . "</td>";
            echo "<td class='comentarios-col'>" . htmlspecialchars($row["comentarios"]) . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No hay registros para mostrar.</p>";
    }

    // Cerrar conexión
    $conn->close();
    ?>
</body>
</html>

