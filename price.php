<?php
if (isset($_POST['price']) && isset($_GET['id'])) {
    include"connection.php";

    $price = $_POST['price'];
    $id = $_GET['id']; // Retrieve the id from the URL parameter

    // Update the price in the reserve_booking2 table
    $query = "UPDATE reserve_booking2 SET price='$price' WHERE id='$id'";
    $result = mysqli_query($db, $query);

    if ($result) {
        header("Location: adminpage2.php");
    } else {
        echo 'Failed to update price';
    }

    mysqli_close($db);
}
?>