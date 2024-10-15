<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testMap";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['id'];
$sql = "DELETE FROM markers WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Метка успешно удалена";
} else {
    echo "Ошибка: " . $conn->error;
}

$conn->close();

header("Location: admin.php");
?>
