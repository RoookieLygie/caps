<?php
include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  $userId = $_GET['user_id'];
  $packageId = $_GET['package_id'];
  $package_name=$_GET['package_name'];


  $query = "SELECT * FROM wishlist WHERE user = '$userId' AND carvid = '$packageId'";
  $result = mysqli_query($db, $query);

  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result);
    if($row['status']==1){
    $todayDate = date("Y-m-d");
      $update = mysqli_query($db,"UPDATE wishlist SET status ='0', date='$todayDate' WHERE user = $userId AND carvid = '$packageId' ");
      if($update){
        echo "successfully removed from wishlist";
      }
    }else{
    $todayDate = date("Y-m-d");
      $update = mysqli_query($db,"UPDATE wishlist SET status ='1' , date='$todayDate' WHERE user = $userId AND carvid = '$packageId' ");
      if($update){
        echo "added to wishlist";
      }
    }
    
    // $query = "DELETE FROM wishlist WHERE user = $userId AND carvid = '$packageId'";
    // mysqli_query($db, $query);
   
    // echo "";
  } else {
    $todayDate = date("Y-m-d");
    $query = "INSERT INTO wishlist (user, carvid,carname,date,status) VALUES ('$userId', '$packageId','$package_name',' $todayDate','1')";
    mysqli_query($db, $query);
  
    echo "added to wishlist";
  }
}
?>
