<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Location Picker</title>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBn7OCFrNfN2fN4xZ2ZNjAwr-d9Jm1jiMI&libraries=places"></script>
</head>
<body>

  <h1>Pick Your Location</h1>

  <div>
    <label for="locationSearch"><b>Search for a location:</b></label>
    <input type="text" id="locationSearch" placeholder="Enter location">
  </div>

  <div id="map" style="height: 400px; width: 100%; display: none;"></div>

  <form id="locationForm" action="plan.php" method="post">
    <label for="selectedLocation"><b>Selected Location</b></label>
    <input type="text" id="selectedLocation" name="selectedLocation" readonly>
    <input type="hidden" id="latitude" name="latitude">
    <input type="hidden" id="longitude" name="longitude">

    <button type="submit">Submit</button>
  </form>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const map = new google.maps.Map(document.getElementById("map"), {
        center: { lat: 0, lng: 0 },
        zoom: 2,
      });

      const placesService = new google.maps.places.PlacesService(map);

      const marker = new google.maps.Marker({
        map: map,
        draggable: true,
      });

      google.maps.event.addListener(marker, "dragend", function (event) {
        updateLocation(event.latLng);
      });

      google.maps.event.addListener(map, "click", function (event) {
        marker.setPosition(event.latLng);
        updateLocation(event.latLng);
      });

      document.getElementById("map").style.display = "block";

      const locationSearchInput = document.getElementById("locationSearch");

      locationSearchInput.addEventListener("input", function () {
        const searchQuery = locationSearchInput.value;
        if (searchQuery) {
          performSearch(searchQuery);
        }
      });

      function performSearch(query) {
        const request = {
          query: query,
          fields: ["geometry", "name"],
        };

        placesService.findPlaceFromQuery(request, function (results, status) {
          if (status === google.maps.places.PlacesServiceStatus.OK && results.length > 0) {
            const location = results[0].geometry.location;
            map.setCenter(location);
            marker.setPosition(location);
            updateLocation(location);
          }
        });
      }

      function updateLocation(latLng) {
        const geocoder = new google.maps.Geocoder();
        geocoder.geocode({ location: latLng }, function (results, status) {
          if (status === google.maps.GeocoderStatus.OK && results.length > 0) {
            const locationName = results[0].formatted_address;

            document.getElementById("selectedLocation").value = locationName;
            document.getElementById("latitude").value = latLng.lat();
            document.getElementById("longitude").value = latLng.lng();
          }
        });
      }
    });
  </script>

</body>
</html>
