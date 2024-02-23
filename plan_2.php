<?php
include("connection.php");
$sql=mysqli_query($db,"select * from reserve_booking2 WHERE id='".$_GET['id']."'");  
$row=mysqli_fetch_assoc($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>booking details</title>
    <header>
        <a href="packages.php"> <img src="IMAGES/DAYO LOGO.png"  alt="Dayo Logo"></a>
       </header>
       
    <!-- links--> 
        <link rel="stylesheet" href="styles.css"/>
        <!--Icon link-->
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
         <!-- font links--> 
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kalam&display=swap" rel="stylesheet"> 
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
                        <li><a href="index.php">Home</a></li>
                        <li><a href="packages.php">Packages</a></li>
                        <li><a href="plan.php">Make your own Itinerary</a></li>
                        <li><a href="transaction.php">Transaction</a></li>
                        <li><a href="About.php">About</a></li>
                        <li><a href="settings.php">Profile</a></li>
                        <li class="right-align"><a href="sign.php">Log Out</a></li>
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
                <i class='bx bx-menu-alt-right'onclick="showMenu" ></i>
            </nav>


  

        </div>
        </section>


    
</div>

  <form action="transaction_plan.php">

    <h2>Information Details:</h2>

<div>
    <p><b><em>Name: </em></b><?php echo $row['fm2'] ?> </p>
    <p><b><em>Email: </em></b> <?php echo $row["em2"]; ?></p>
    <p><b><em>CP#: </em></b> <?php echo $row["cp_num"]; ?></p>
    <p><b><em>Days and Nights: </em></b> <?php echo $row["days_and_nights"]; ?></p>
    <p><b><em>Province: </em></b><?php echo $row["province"]; ?></p>
    <p><b><em>Destination: </em></b><?php echo $row["destination"]; ?></p>
    <p><b><em>Adult Count: </em></b><?php echo $row["adult_count"]; ?></p>
    <p><b><em>Kids Count: </em></b><?php echo $row["kid_count"]; ?></p>
    <p><b><em>Vehicle: </em></b><?php echo $row["vehicle"]; ?></p>
    <p><b><em>Travel Date: </em></b><?php echo $row["trav_date"]; ?></p>
    <p><b><em>Travel Time: </em></b><?php echo $row["trav_time"]; ?></p>
    <!-- <p><b><em>Package: </em></b><?php //echo $row["package"]; ?></p> -->
    <p><b><em>Pick-Up Location: </em></b><?php echo $row["street"]; ?>, <?php //echo $row["brgy"]; ?></p>
    <p><b><em>Status: </em></b><?php  
                       if ($row['status']==1) {  
                            echo "Pending";  
                       }else if ($row['status']==2) {  
                            echo "Your request is accepted, you can now proceed to payment.";  
                       }else if ($row['status']==3) {  
                            echo "Your request is rejected.";  
                       }  
                       ?></p>

</p><br><br>
</div>
<?php if($row['status']=='1'){
  echo '<button type="" class="reservation" disabled>Waiting Ror Approval</button>';
}elseif($row['status']=='2') {
  echo '<a href="Payment.php?sourceurl='.uniqid().uniqid().uniqid().rand(1111,9999).'&id=' . $row["id"] . '&nnn='.uniqid().uniqid().uniqid().rand(111111111,999999999).'" class="reservation" >Make Payment of ('.$row['price'].')</a> ';
}elseif($row['status']=='3'){
  echo 'Your request is rejected';
}
  ?>

    </form>
</body>
</html>

<style>

body {
      font-family: Arial, sans-serif;
      background-image: linear-gradient(rgba(74, 113, 165, 0.179),rgba(19, 96, 100, 0.201)),url(IMAGES/WALLPAPER.png);
      height: auto;
      display: flex;
      flex-direction: column;
      align-items: center;
      color: #333;
    }

    header {
      
      text-align: center;
      
    }

    header img {
      max-width: 50%;
      height: auto;
      cursor: pointer;
      
    }

    button,.reservation {
      background-color: #19ac14;
      color: #fff;
      padding: 20px 20px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      margin-left: 39%;
      margin-top: 2%;
      text-decoration:none;
    }

    button:hover {
      background-color: #18866a;
      text-align: center;
    }

  h2{
    color:white;
    text-align: center;
  }
  
  form{
  color: white;
  background-color: #18866acc;
  padding: 40px 20px 40px 20px;
  border-radius: 8px;
}
</style
</html>