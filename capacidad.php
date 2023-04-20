<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "estadio";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("La conexión ha fallado: " . $conn->connect_error);
}


$sql = "SELECT capacidad FROM estadio WHERE id = 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "La capacidad del estadio es de " . $row["capacidad"] . " personas.";
    }
} else {
    echo "No se ha encontrado información sobre el estadio.";
}

$conn->close();
?>