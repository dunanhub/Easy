<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testMap";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$description = $_POST['description'];
$address = $_POST['address'];
$lat = $_POST['lat'];
$lng = $_POST['lng'];

// Загружаем фото
$photo = $_FILES['photo']['name'];
$target_dir = "uploads/";
$target_file = $target_dir . basename($photo);
move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file);

$sql = "INSERT INTO markers (name, description, photo, address, lat, lng)
VALUES ('$name', '$description', '$target_file', '$address', '$lat', '$lng')";

if ($conn->query($sql) === TRUE) {
    echo "Новая метка добавлена успешно";
} else {
    echo "Ошибка: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("Location: admin.php");
?>
