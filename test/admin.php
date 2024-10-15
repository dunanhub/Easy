<!DOCTYPE html>
<html>
<head>
    <title>Админ-панель</title>
</head>
<body>
    <h3>Добавить новую метку</h3>
    <form action="add_marker.php" method="POST" enctype="multipart/form-data">
        <label for="name">Название:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="description">Описание:</label>
        <textarea id="description" name="description" required></textarea><br>

        <label for="photo">Фото:</label>
        <input type="file" id="photo" name="photo" required><br>

        <label for="address">Адрес:</label>
        <input type="text" id="address" name="address" required><br>

        <label for="lat">Широта (lat):</label>
        <input type="text" id="lat" name="lat" required><br>

        <label for="lng">Долгота (lng):</label>
        <input type="text" id="lng" name="lng" required><br>

        <button type="submit">Добавить метку</button>
    </form>

    <h3>Список меток</h3>
    <ul>
        <?php
        $conn = new mysqli("localhost", "root", "", "testMap");
        $sql = "SELECT * FROM markers";
        $result = $conn->query($sql);

        while ($row = $result->fetch_assoc()) {
            echo "<li>{$row['name']} <a href='delete_marker.php?id={$row['id']}'>Удалить</a></li>";
        }

        $conn->close();
        ?>
    </ul>
</body>
</html>
