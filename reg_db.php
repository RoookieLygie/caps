<?php
session_start();
include 'connection.php';

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate form data (example: check if required fields are not empty)
    if (empty($fullname) || empty($email) || empty($password)) {
        echo "Please fill in all required fields.";
        exit;
    }

    // Check if the user with the provided email already exists
    $checkQuery = "SELECT * FROM registration WHERE email = '$email'";
    $checkResult = mysqli_query($db, $checkQuery);

    if (mysqli_num_rows($checkResult) > 0) {
        // Set the error message in the session
        $_SESSION['registration_error'] = "User with this email already exists. Please choose a different email.";
        // Redirect back to the login page
        header("Location: sign.php");
        exit;
    }
    // If the user does not exist, proceed with the insertion
    $query = "INSERT INTO registration (fullname, email, password)
              VALUES ('$fullname', '$email', '$password')";

    $result = mysqli_query($db, $query);

    if ($result) {
        header("Location: sign.php");
        exit;
    } else {
        echo "Error adding record: " . mysqli_error($db);
    }
}

mysqli_close($db);
?>
