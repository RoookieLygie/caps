<?php
if(!isset($_SESSION['login'])){
   echo "<script>location.href='sign.php'</script>";
  }
 $email=$_SESSION['email'] ;
 include "connection.php";

 $select=mysqli_query($db, "SELECT * FROM registration WHERE email='$email'");
           if(mysqli_num_rows($select)>0){
            while($row=mysqli_fetch_array($select)){
               $_SESSION['fname']=$row['fullname'];
               $_SESSION['email']=$row['email'];
               $_SESSION['userid']=$row['id'];
               
               $userId=$_SESSION['userid'];
               $userEmail=$_SESSION['email'];
               $userName=$_SESSION['fname'];
             
           
 ?>

<header class="ttr-header">
        <div class="ttr-header-wrapper">
            
            <div class="ttr-logo-box">
                <div>
                    <a href="index.php" class="ttr-logo">
					    <img alt="" class="ttr-logo-mobile" src="logo-white.png" style="width: 200px; height: 36px;">
						<img alt="" class="ttr-logo-desktop" src="logo-white.png" style="width: 200px; height: 36px;">
					</a>
                </div>
            </div>
            
            <div class="ttr-header-menu">
            
            </div>
          
            <div class="ttr-header-right ttr-with-seperator">
         
                <ul class="ttr-header-navigation">

                    <li>
                        <a href="#" class="ttr-material-button ttr-submenu-toggle"><img src="admin.jpg" style=" background-color:#FFFFFF; height: 45px; width: 45px;border-radius: 50%;"></a>
                        <div class="ttr-header-submenu noti-menu">
                            <div class="ttr-notify-header">
                                <span class="ttr-notify-text-top"><?php  echo $userName; ?></span>
                                <span class="ttr-notify-text">User</span>
                            </div>
                            <div class="noti-box-list">
                                <ul>
                                <a href="Profile.php" style="text-decoration: none;color: black;">
                                        <li>

                                            <span class="notification-icon dashbg-primary">
											<i class="fa fa-user" style="font-size: 18px;"></i>
										</span>
                                            <span style="font-size: 22px;" style="color: black!important;">
											Update Profile
										</span>
                                        </li>
                                    </a>
                                    <hr>

                                    <a href="Wishlist.php" style="text-decoration: none;color: black;">
                                        <li>

                                            <span class="notification-icon dashbg-green">
											<i class="fa fa-lock" style="font-size: 18px;"></i>
										</span>
                                            <span style="font-size: 22px;" style="color: black!important;">
											Wishlist
										</span>
                                        </li>
                                    </a>
                                    <hr>
                                    <a href="Past Bookings.php" style="text-decoration: none;color: black;">
                                        <li>

                                            <span class="notification-icon dashbg-yellow">
											<i class="fa fa-calendar" style="font-size: 18px;"></i>
										</span>
                                            <span style="font-size: 22px;" style="color: black!important;">
											Past Booking
										</span>
                                        </li>
                                    </a>
                                    <hr>
                                    <a href="logout.php" style="text-decoration: none;color: black;">
                                        <li>
                                            <span class="notification-icon dashbg-red">
											<i class="fa fa-sign-out" style="font-size: 18px;"></i>
										</span>
                                            <span style="font-size: 22px;" style="color: black!important;">
											Logout
										</span>
                                        </li>
                                    </a>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <script>
  function autoRefresh() {
    location.reload(true);
  }
  
  // Set the interval for auto-refresh (in milliseconds)
  setInterval(autoRefresh, 60000); // Refresh every 60 seconds
</script>
    <?php  }
           } ?>