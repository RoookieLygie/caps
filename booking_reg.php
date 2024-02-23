<?php
include 'connection.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fm2=$_POST['fm2'];
    $em2=$_POST['em2'];
    $fullname = $_POST['fullname'];
    $cp_num = $_POST['cp_num'];
    $email = $_POST['email'];
    $days_and_nights = $_POST['days_and_nights'];
    // $province = $_POST['province'];
    $destinations = $_POST['destination'];
    //$destinationString = implode(', ', $destinations);
    $adult_count = $_POST['adult_count'];
    $kid_count = $_POST['kid_count'];
    $vehicle = $_POST['vehicle'];
    $trav_date = $_POST['trav_date'];
    $trav_time = $_POST['trav_time'];
    $street = $_POST['street'];
    $req_id = uniqid().rand(1111,9999);
    // $brgy = $_POST['brgy'];
    // $landmark = $_POST['landmark'];
    $package=$_POST['package'];
    $date = date("Y-m-d");
    

    $query = "INSERT INTO reserve_booking2 (fullname, cp_num, email, days_and_nights,  adult_count, kid_count, vehicle, trav_date, trav_time, street,req_id,status,package,date,em2,fm2)
              VALUES ('$fullname', '$cp_num', '$email', '$days_and_nights', '$adult_count', '$kid_count', '$vehicle', '$trav_date', '$trav_time', '$street','$req_id','1','$package','$date','$em2','$fm2')";

    $result = mysqli_query($db, $query);

    if ($result) {
        $id = $req_id; 
        $_SESSION['registration'] = "You Have Successfully Made Your Booking, Follow Status In Your Profile";
         header("Location: book_alaminos.php");
       
        exit;
    } else {

       $_SESSION['error'] = "Registration Is unsuccessfully";
    }
}
mysqli_close($db);
?>