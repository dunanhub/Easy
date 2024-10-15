<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testMap";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM markers";
$result = $conn->query($sql);

$markers = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $markers[] = $row;
    }
}

echo json_encode($markers);

$conn->close();
?>
