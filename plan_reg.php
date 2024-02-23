<?php
include 'connection.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fm2=$_POST['fm2'];
    $em2=$_POST['em2'];
    $fullname = $_POST['fullname'];
    $cp_num = $_POST['cp_num'];
    $email = $_POST['email'];
    $fm2=$_POST['fm2'];
    $em2=$_POST['em2'];
    $days_and_nights = $_POST['days_and_nights'];
    $province = $_POST['province'];
    $destinations = $_POST['destination'];
    $destinationString = implode(', ', $destinations);
    $adult_count = $_POST['adult_count'];
    $kid_count = $_POST['kid_count'];
    $vehicle = $_POST['vehicle'];
    $trav_date = $_POST['trav_date'];
    $trav_time = $_POST['trav_time'];
    $street = $_POST['street'];
    $req_id = uniqid().rand(1111,9999);
    // $brgy = $_POST['brgy'];
    // $landmark = $_POST['landmark'];
    // $package=$_POST['package'];
    $date = date("Y-m-d");
    

    $query = "INSERT INTO reserve_booking2 (fullname, cp_num, email, days_and_nights, province, destination, adult_count, kid_count, vehicle, trav_date, trav_time, street,req_id,status,date,fm2,em2)
              VALUES ('$fullname', '$cp_num', '$email', '$days_and_nights', '$province', '$destinationString', '$adult_count', '$kid_count', '$vehicle', '$trav_date', '$trav_time', '$street','$req_id','1','$date','$fm2','$em2')";

    $result = mysqli_query($db, $query);

    if ($result) {
        $id = $req_id; 
        $_SESSION['registration'] = "You Have Successful Made Your Booking, Follow Status In Your Profile";
         header("Location: plan.php");
       
        exit;
    } else {

       $_SESSION['error'] = "Registration Is Unsecessful";
    }
}
mysqli_close($db);
?>