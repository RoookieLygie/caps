<?php
if(!isset($_SESSION['login'])){
   echo "<script>location.href='sign.php'</script>";
  }
 $email=$_SESSION['email'] ;
 $userPass=$_SESSION['password'];
include "connection.php";

 $select=mysqli_query($db, "SELECT * FROM wishlist  WHERE user = '$userId' AND status='1'");
          $num=mysqli_num_rows($select);

$sel=mysqli_query($db,"SELECT * FROM reserve_booking2  WHERE email = '$email' AND canc='' AND destination !=''");
$numm=mysqli_num_rows($sel);
$se=mysqli_query($db,"SELECT * FROM reserve_booking2  WHERE email = '$email' AND canc='' AND destination=''");
$it=mysqli_num_rows($se);
               
             
           
 ?>
<div class="container-fluid">
        <div class="db-breadcrumb">
            <h4 class="breadcrumb-title">Dayo Travel Access</h4>
            
        </div>

        <div class="row">
            <div class="col-md-8 col-lg-4 col-xl-4 col-sm-8 col-8">
                <a href="Profile.php">
                    <div class="widget-card widget-bg2" style="background-image: linear-gradient(to right, #154c79, #18866a);">
                        <div class="icon">
                            <i class="ti-help"></i>
                        </div>
                        <div class="wc-item">
                            <h3 class="wc-title">
                                Update Profile
                            </h3>
                            <span class="wc-des">
                    Edit Information
                </span>
                            
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-8 col-lg-4 col-xl-4 col-sm-8 col-8">
            <a href="Wishlist.php">
                    <div class="widget-card widget-bg3" style="background-image: linear-gradient(to right, #154c79, #18866a);">
                        <div class="icon">
                            <i class="ti-harddrives"></i>
                        </div>
                        <div class="wc-item">
                            <h3 class="wc-title">
                                Wishlist
                            </h3>
                            <span class="wc-des">
                    Saved Favorite Landmarks
                </span>
                            <span class="wc-stats">
                    <span class="counter"><?php  echo $num; ?></span>
                            </span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-8 col-lg-4 col-xl-4 col-sm-8 col-8">
                <a href="./Past Bookings.php">
                    <div class="widget-card widget-bg2" style="background-image: linear-gradient(to right, #154c79, #18866a);">
                        <div class="icon">
                            <i class="ti-user"></i>
                        </div>
                        <div class="wc-item">
                            <h3 class="wc-title">
                                 Successful And Pending Itinerary Bookings
                            </h3>
                            <span class="wc-des">
                    Travel Records
                </span>
                <span class="wc-stats">
                    <span class="counter"><?php  echo $numm; ?></span>
                            </span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-8 col-lg-4 col-xl-4 col-sm-8 col-8">
                <a href="./Past Bookings2.php">
                    <div class="widget-card widget-bg2" style="background-image: linear-gradient(to right, #154c79, #18866a);">
                        <div class="icon">
                            <i class="ti-user"></i>
                        </div>
                        <div class="wc-item">
                            <h3 class="wc-title">
                             Successful and Pending Bookings
                            </h3>
                            <span class="wc-des">
                    Travel Records
                </span>
                <span class="wc-stats">
                    <span class="counter"><?php  echo $it; ?></span>
                            </span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-8 col-lg-4 col-xl-4 col-sm-8 col-8">
                <a href="history.php">
                    <div class="widget-card widget-bg2" style="background-image: linear-gradient(to right, #154c79, #18866a);">
                        <div class="icon">
                            <i class="ti-user"></i>
                        </div>
                        <div class="wc-item">
                            <h3 class="wc-title">
                               Transaction History
                            </h3>
                            <span class="wc-des">
                   History
                </span>
               
                        </div>
                    </div>
                </a>
            </div>