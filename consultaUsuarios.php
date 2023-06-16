<?php
    // datos de conexión
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "practicafinal";

    // Crea la conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Comprueba la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Realiza la consulta
    $usuarios = "SELECT * FROM usuario";
    $result = $conn->query($usuarios);

    // Se imprimen por pantalla los resultados de la consulta
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<strong>Nombre:</strong> " . $row["NOMBRE"]. "   <strong>Primer apellido: </strong>" . $row["APELLIDO1"]. 
            "   <strong>Segundo apellido: </strong>" . $row["APELLIDO2"]. "   <strong>Email: </strong>" . $row["EMAIL"].
             "   <strong>Nombre de usuario: </strong>" . $row["LOGIN"]. "<br>";
        }
    } else {
        echo "0 resultados";
    }

    echo "<a href=\"index.html\">Volver al registro</a>";

    // Cerrar la conexión
    $conn->close();
?>

