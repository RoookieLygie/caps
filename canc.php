<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $bookingId = $_GET['id'];

    // Update the status to 1 in the reserve_booking2 table
    $query = "UPDATE reserve_booking2 SET canc = 1 WHERE id = $bookingId";
    $result = mysqli_query($db, $query);

    if ($result) {
        // Display an alert and redirect to Past Bookings.php
        echo '<script>';
        echo 'alert("Booking successfully canceled!");';
        echo 'window.location.href = "Past Bookings.php";';
        echo '</script>';
    } else {
        echo "Error updating record: " . mysqli_error($db);
    }
}

mysqli_close($db);
?>
