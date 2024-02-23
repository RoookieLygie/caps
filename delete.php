<?php
session_start();
$userId=$_SESSION['us'];
include "connection.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // $userId;
    // Get the carvid parameter from the POST request
    $carvid = mysqli_real_escape_string($db, $_POST['carvid']);
    // Delete the item from the database
    $query = mysqli_query($db,"UPDATE wishlist SET status ='0'  WHERE user ='$userId' AND carvid ='$carvid' ");
    if (mysqli_query($db, $query)) {
        echo 'Item successfully removed from the wishlist.';
    } else {
        echo 'Error deleting item from the wishlist: ' . mysqli_error($db);
    }
} else {
    echo 'Invalid request method.';
}
?>
