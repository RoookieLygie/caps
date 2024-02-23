<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Location Selection with Maps</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
            background-color: #f2f2f2;
        }

        #map-container {
            width: 80%;
            height: 400px;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        #selected-location {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        #booking-info {
            font-size: 14px;
            margin-bottom: 20px;
        }

        #car-info {
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        #car-list {
            width: 80%;
            max-width: 400px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <h1>Location Selection with Maps</h1>

    <div id="car-list">
        <label for="cars">Choose a car:</label>
        <select id="cars">
            <option value="car1">Car 1</option>
            <option value="car2">Car 2</option>
            <option value="car3">Car 3</option>
            <!-- Add more cars as needed -->
        </select>
        <button onclick="displayCarInfo()">Show Car Info</button>
    </div>

    <div id="map-container"></div>

    <div id="selected-location">Selected Location: <span id="location-info">Click on the map to select a location</span></div>

    <div id="booking-info">Booking Status: <span id="status-info">Waiting for real-time updates...</span></div>

    <div id="car-info"></div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/4.0.1/socket.io.js"></script>
    <script>
        var map;
        var socket = io(); // Initialize socket.io

        function initMap() {
            try {
                var mapOptions = {
                    center: { lat: 37.7749, lng: -122.4194 }, // Default to San Francisco
                    zoom: 13
                };

                map = new google.maps.Map(document.getElementById('map-container'), mapOptions);

                google.maps.event.addListener(map, 'click', function(event) {
                    placeMarker(event.latLng);
                    // Simulate sending booking information to the server (replace with your actual logic)
                    socket.emit('bookingInfo', { location: event.latLng });
                });

                // Listen for real-time updates from the server
                socket.on('bookingUpdate', function(data) {
                    updateBookingInfo(data);
                });

            } catch (error) {
                console.error('Error initializing the map:', error);
            }
        }

        function placeMarker(location) {
            try {
                clearMarkers();

                var marker = new google.maps.Marker({
                    position: location,
                    map: map,
                    title: 'Selected Location'
                });

                var infowindow = new google.maps.InfoWindow({
                    content: 'Selected Location: ' + location.lat() + ', ' + location.lng()
                });

                infowindow.open(map, marker);

                document.getElementById('location-info').innerText = location.lat() + ', ' + location.lng();
            } catch (error) {
                console.error('Error placing marker:', error);
            }
        }

        function clearMarkers() {
            try {
                if (map.markers) {
                    for (var i = 0; i < map.markers.length; i++) {
                        map.markers[i].setMap(null);
                    }
                }
            } catch (error) {
                console.error('Error clearing markers:', error);
            }
        }

        function updateBookingInfo(data) {
            document.getElementById('status-info').innerText = 'Booking Status: ' + data.status;
        }

        function displayCarInfo() {
            var selectedCar = document.getElementById('cars').value;
            var carInfoContainer = document.getElementById('car-info');
            carInfoContainer.innerText = 'Car Information: ' + selectedCar + ' - Add your car details here.';
        }
    </script>

    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDbejEOIxF1BWZS7i2FO19LrbLP7rBVKkQ&libraries=places&callback=initMap"></script>
</body>
</html>
