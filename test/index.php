<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBBnfaSljXa8Dy5QWdGhASipPpmy4d1eB4"></script>
    <style>
        #map {
            height: 500px;
            width: 100%;
        }
    </style>
</head>
<body>
        <a href="admin.php">Admin</a>
        <br>
        <br>
        <br>
<h3>Карта с метками</h3>
    <div id="map"></div>

    <script>
        let map;

        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: { lat: 43.238949, lng: 76.889709 }, // Координаты по умолчанию
                zoom: 10
            });

            // Здесь будем загружать метки из базы данных
            fetch('get_markers.php')
                .then(response => response.json())
                .then(data => {
                    data.forEach(marker => {
                        let infowindow = new google.maps.InfoWindow({
                            content: `
                                <div>
                                    <h4>${marker.name}</h4>
                                    <img src="${marker.photo}" alt="${marker.name}" style="width:100px;height:100px;">
                                    <p>${marker.description}</p>
                                    <p>${marker.address}</p>
                                </div>
                            `
                        });

                        let googleMarker = new google.maps.Marker({
                            position: { lat: parseFloat(marker.lat), lng: parseFloat(marker.lng) },
                            map: map,
                            title: marker.name
                        });

                        googleMarker.addListener('mouseover', () => {
                            infowindow.open(map, googleMarker);
                        });

                        googleMarker.addListener('mouseout', () => {
                            infowindow.close();
                        });
                    });
                });
        }

        window.onload = initMap;
    </script>

</body>
</html>