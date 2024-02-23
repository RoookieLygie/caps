<?php
include 'connection.php';
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
        <style>

body {
    height: auto;
    background: linear-gradient(to bottom, #7DC387, #DBE9EA);
      align-items: center;
      justify-content: center;
    
      color: #333;
    }
    .edit-profile {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: rgba(254, 254, 254, 0.007);
            border-radius: 8px;
            box-shadow: 0 0 40px rgba(0, 0, 0, 0.456);
        }

        .edit-profile form {
            display: flex;
            flex-direction: column;
        }

        .edit-profile label {
            margin-bottom: 8px;
        }

        .edit-profile input {
            padding: 10px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        .edit-profile button {
            padding: 12px;
            background-color: #19ac14;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        .edit-profile button:hover {
            background-color: #18866a;
        }
        </style>
    </head>


    
 <nav>
        <div class="navbar">
            
                <!-- logo nav/ size adjust--> 
                <a href="index.php"><img src="IMAGES/DAYO LOGO.png" width="100" 
                    height="100"></a>
                    <div id="navLinks" class="nav-links">

                    <i class='bx bx-x' onclick="hideMenu()"></i>
                    
                    <ul class="menu">
                    <?php
        session_start();
        if(isset($_SESSION['login'])) {
            // Display these links if the user is logged in
          
            echo '<li><a href="index.php">Index</a></li>';
            echo '<li><a href="About.php">About</a></li>';
            echo '<li><a href="adventure.php">Adventure</a></li>';
           
            echo '<li><a href="plan.php">Make your own Itinerary</a></li>';
            echo '<li><a href="transaction.php">Transaction</a></li>';
           
            echo '<li><a href="settings.php">Profile</a></li>';
            echo '<li class="right-align"><a href="logout.php">Logout</a></li>';
        } else {
            echo '<li><a href="index.php">Index</a></li>';
            echo '<li><a href="About.php">About</a></li>';
            echo '<li><a href="adventure.php">Adventure</a></li>';
           
            echo '<li class="right-align"><a href="sign.php">Log In</a></li>';
            
        }
        ?>
                    </ul>
        
                    </ul>
                    </div>
                
<section class="banner"></section>
<script type="text/javascript">
    window.addEventListener("scroll", function () {
      var header = document.querySelector("nav");
      header.classList.toggle("sticky", window.scrollY > 0);
    });
  </script>
  
              


  

        </div>
        </section>


    
</div>

<header>
    <h1>Edit Profile</h1>
<section class="edit-profile">
    <form action="updated_profile.php" method="post">
        <label for="full_name">Full Name:</label>
        <input type="text" id="full_name" name="fullname" placeholder="Enter your full name" required>

        <label for="new_password">New Password:</label>
        <input type="password" id="new_password" name="new_password" placeholder="Enter new password">

        <label for="confirm_password">Confirm Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm new password">

        <button type="submit">Save Changes</button>
    </form>
</section>

 
</header>
       <!--Footer-->
       <?php include("footer.php");  ?>
 

        </script>

    </body>

</html>