<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dayo Travel Access</title>

        <!-- links--> 
        <link rel="stylesheet" href="styles.css"/>
        <!--Icon link-->
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
         <!-- font links--> 
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kalam&display=swap" rel="stylesheet">
        <link rel="icon" href="IMAGES/DAYO LOGO.png" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="../assets/images/DAYO LOGO.png" />
        <script src="jquery.min.js"></script>
    
    </head>

<body>
    
 <nav>
        <div class="navbar">
            
                <!-- logo nav/ size adjust--> 
                <a href="index.php"><img src="IMAGES/DAYO LOGO.png" width="100" 
                    height="100"></a>
                    <div id="navLinks" class="nav-links">

                    <i class='bx bx-x' onclick="hideMenu()"></i>
                    
                    <ul class="menu">
                    <?php
                   
      
        if(isset($_SESSION['login'])) {
            include("connection.php");
            // Display these links if the user is logged in
          
            echo '<li><a href="index.php">Home</a></li>';
            echo '<li><a href="About.php">About</a></li>';
           // echo '<li><a href="adventure.php">Adventure</a></li>';
            echo '<li><a href="packages.php">Packages</a></li>';
           
            echo '<li><a href="plan.php">Make your own Itinerary</a></li>';
            // echo '<li><a href="transaction.php">Transaction</a></li>';
           
            echo '<li><a href="Profile.php">Profile</a></li>';
            echo '<li class="right-align"><a href="logout.php">Logout</a></li>';
         
           $email=$_SESSION['email'];

           $select=mysqli_query($db, "SELECT * FROM registration WHERE email='$email'");
           if(mysqli_num_rows($select)>0){
            while($row=mysqli_fetch_array($select)){
               $_SESSION['fname']=$row['fullname'];
               $_SESSION['email']=$row['email'];
               $_SESSION['userid']=$row['id'];
               $_SESSION['password']=$row['password'];
               
               $userId=$_SESSION['userid'];
               $userEmail=$_SESSION['email'];
               $userName=$_SESSION['fname'];
               $userPass=$_SESSION['password'];
             
            }
           }
        } else {
            echo '<li><a href="index.php">Home</a></li>';
            echo '<li><a href="About.php">About</a></li>';
           // echo '<li><a href="adventure.php">Adventure</a></li>';
            echo '<li><a href="packages.php">Packages</a></li>';
       
           
           
            echo '<li class="right-align"><a href="sign.php">Log In</a></li>';
           
            
        }
        ?>
                       

                    </ul>
                    </div>
                    <script>
  function autoRefresh() {
    location.reload(true);
  }
  
  // Set the interval for auto-refresh (in milliseconds)
  setInterval(autoRefresh, 60000); // Refresh every 60 seconds
</script>