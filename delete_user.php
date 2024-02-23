<?php
session_start();
// $_SESSION
include "connection.php";
    // Get the id parameter from the GET request
    $id = $_GET['id'];

    // Delete the item from the database
    $query = "DELETE FROM registration WHERE id = '$id'";
    
    if (mysqli_query($db, $query)) {
        echo "<script>alert('You have successfully deleted user');</script>";
        echo "<script> location.href='Profile2.php'</script>";
        exit();
              
              
    } else {
        echo "<script>alert('Error Making Delete');</script>";
    }
?>
