<?php
include "connection.php";
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $bookingId = $_GET['id'];

$select=mysqli_query($db,"SELECT * FROM reserve_booking2 WHERE id='$bookingId'");

    $row=mysqli_fetch_array($select);

    $fm2=$row['fm2'];
    $em2=$row['em2'];
        $fullname = $row['fullname'];
        $cp_num = $row['cp_num'];
        $email = $row['email'];
        $days_and_nights = $row['days_and_nights'];
        $province = $row['province'];
        $destinations = $row['destination'];
        $destinationString = $row['destination'];
        $adult_count = $row['adult_count'];
        $kid_count = $row['kid_count'];
        $vehicle = $row['vehicle'];
        $trav_date = $row['trav_date'];
        $trav_time = $row['trav_time'];
        $street = $row['street'];
        
        $req_id = uniqid().rand(1111,9999);
        // $brgy = $row['brgy'];
        // $landmark = $row['landmark'];
        $package= $row['package'];
        $date = date("Y-m-d");
        
    
        $query =mysqli_query($db,"INSERT INTO reserve_booking2 (fullname, cp_num, email, days_and_nights, province, destination, adult_count, kid_count, vehicle, trav_date, trav_time, street,req_id,status,package,date,fm2,em2)
                  VALUES ('$fullname', '$cp_num', '$email', '$days_and_nights', '$province', '$destinationString', '$adult_count', '$kid_count', '$vehicle', '$trav_date', '$trav_time', '$street','$req_id','1','$package','$date','$fm2','$em2')");
             
             if ($query) {
                echo "<script>alert('You have successfully made a rebooking');</script>";
                header("Location: Past Bookings.php");
                exit();
            } else {
                echo "<script>alert('Error Making Rebooking');</script>";
            }
            
             
                

    }



?>
