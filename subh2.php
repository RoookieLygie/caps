<?php
if(!isset($_SESSION['logi'])){
   echo "<script>location.href='sign2.php'</script>";
  }
 $email=$_SESSION['email'] ;
//  $userPass=$_SESSION['password'];
include "connection.php";

 $select=mysqli_query($db, "SELECT * FROM reserve_booking2  WHERE status = '1' OR status='2'");
          $num=mysqli_num_rows($select);

$sel=mysqli_query($db,"SELECT * FROM reserve_booking2  WHERE status = '2'");
$numm=mysqli_num_rows($sel);
               
$ad=mysqli_query($db,"SELECT * FROM admin ");
$add=mysqli_num_rows($ad);   
           
$uss=mysqli_query($db,"SELECT * FROM registration");
$usss=mysqli_num_rows($uss);   
 ?>
<div class="container-fluid">
        <div class="db-breadcrumb">
            <h4 class="breadcrumb-title">Dayo Travel Access Admin Dashboard</h4>
            
        </div>

        <div class="row">
            <div class="col-md-8 col-lg-4 col-xl-4 col-sm-8 col-8">
                <a href="./Profile2.php">
                    <div class="widget-card widget-bg2" style="background-image: linear-gradient(to right, #154c79, #18866a);">
                        <div class="icon">
                            <i class="ti-help"></i>
                        </div>
                        <div class="wc-item">
                            <h3 class="wc-title">
                                Users
                            </h3>
                            <span class="wc-des">
                    Edit ,Delete Users
                </span>
                <span class="wc-stats">
                    <span class="counter"><?php  echo $usss; ?></span>
                            </span>
                            
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-8 col-lg-4 col-xl-4 col-sm-8 col-8">
            <a href="num_book.php">
                    <div class="widget-card widget-bg3" style="background-image: linear-gradient(to right, #154c79, #18866a);">
                        <div class="icon">
                            <i class="ti-harddrives"></i>
                        </div>
                        <div class="wc-item">
                            <h3 class="wc-title">
                                Number Of All Bookings
                            </h3>
                            <span class="wc-des">
                  Bookings
                </span>
                            <span class="wc-stats">
                    <span class="counter"><?php  echo $num; ?></span>
                            </span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-8 col-lg-4 col-xl-4 col-sm-8 col-8">
                <a href="num_boo_su.php">
                    <div class="widget-card widget-bg2" style="background-image: linear-gradient(to right, #154c79, #18866a);">
                        <div class="icon">
                            <i class="ti-user"></i>
                        </div>
                        <div class="wc-item">
                            <h3 class="wc-title">
                             Successful Bookings
                            </h3>
                            <span class="wc-des">
                   Number Of Successful Bookings
                </span>
                <span class="wc-stats">
                    <span class="counter"><?php  echo $numm; ?></span>
                            </span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-8 col-lg-4 col-xl-4 col-sm-8 col-8">
                <a href="adminpage2.php">
                    <div class="widget-card widget-bg2" style="background-image: linear-gradient(to right, #154c79, #18866a);">
                        <div class="icon">
                            <i class="ti-user"></i>
                        </div>
                        <div class="wc-item">
                            <h3 class="wc-title">
                             Activate Itinerary
                            </h3>
                            <span class="wc-des">
                   Add price,Accept,Reject
                </span>
                <span class="wc-stats">
                   
                            </span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-8 col-lg-4 col-xl-4 col-sm-8 col-8">
                <a href="adminpage.php">
                    <div class="widget-card widget-bg2" style="background-image: linear-gradient(to right, #154c79, #18866a);">
                        <div class="icon">
                            <i class="ti-user"></i>
                        </div>
                        <div class="wc-item">
                            <h3 class="wc-title">
                             Activate Bookers
                            </h3>
                            <span class="wc-des">
                   Accept,Reject
                </span>
                <span class="wc-stats">
                   
                            </span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-8 col-lg-4 col-xl-4 col-sm-8 col-8">
                <a href="add-admin.php">
                    <div class="widget-card widget-bg2" style="background-image: linear-gradient(to right, #154c79, #18866a);">
                        <div class="icon">
                            <i class="ti-user"></i>
                        </div>
                        <div class="wc-item">
                            <h3 class="wc-title">
                           Number Of Admins
                            </h3>
                            <span class="wc-des">
                   Add New Admin
                </span>
                <span class="wc-stats">
                    <span class="counter"><?php  echo $add; ?></span>
                            </span>
                        </div>
                    </div>
                </a>
            </div>