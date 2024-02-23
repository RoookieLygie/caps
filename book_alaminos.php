<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Travel Package Reservation</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      display: flex;
      margin: 0;
      padding: 0;
    }

    .logo-container {
  width: 50%;
  text-align: center;
  max-width: 100%;
  padding-top: 450px;
  background:  url(IMAGES/pattern.png);
 

}
    .logo img {
      max-width: 50%;
      height: auto;
      cursor: pointer;
    }

    form {
      color: white;
      padding: 50px;
      background-color: #3fa38c;
      width: 50%;
      max-width: 100%;
    }

    label {
      display: block;
      margin-bottom: 8px;
    }

    input, select {
      width: 100%;
      padding: 10px;
      margin:auto;
      margin-bottom: 16px;
      box-sizing: border-box;
    }

    button {
      background-color: #19ac14;
      color: #fff;
      padding: 20px 20px 20px 20px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      margin-left: 39%;
    }

    button:hover {
      background-color: #18866a;
      text-align: center;
    }

    .container {
      display:flex; 
      justify-content:space-evenly; 
      max-width: 1200px;
      width: 100%;
      padding: 200px;
      box-sizing: border-box;
    }

    h2 {
      color: white;
    }
  </style>
</head>
  
    <div class="logo-container">
      <a href="packages.php">
        <div class="logo">
          <img src="IMAGES/DAYO LOGO.png" alt="Dayo Logo">
        </div>
      </a>
    </div>
  

  
    <?php 
  
  include 'connection.php';
  if (isset($_SESSION['registration'])) {
    echo "<script>alert('You Have Successfully Made Your Booking,Kindly Follow Up Your Booking Status In Your Dashboard  ')</script>";
    echo "<script>location.href='Past Bookings2.php'</script>";
 
    
     unset($_SESSION['registration']);
 }
  if (isset($_SESSION['error'])) {
     echo "<h3 style='color:red;'>".$_SESSION['registration']."</h3>";

    
     unset($_SESSION['error']);
 }
?>
   <a href="Profile.php" style="text-decoration:none; background-color:white; border-radius:0; padding: 5px 10px;font-size:18px; color:red;" class="back-link">
<i class="fas fa-arrow-left"></i> Back To Dashboard
</a>
 
    <form action="booking_reg.php" method="POST" id="formid">
      <h2>Enter Your Details:</h2>
      <?php
      include("connection.php");
  $email=$_SESSION['email'];

  $select=mysqli_query($db, "SELECT * FROM registration WHERE email='$email'");
  
   $row=mysqli_fetch_array($select);
      $_SESSION['fname']=$row['fullname'];
      $_SESSION['email']=$row['email'];
      $_SESSION['userid']=$row['id'];
      $_SESSION['password']=$row['password'];
      
      $userId=$_SESSION['userid'];
      $userEmail=$_SESSION['email'];
      $userName=$_SESSION['fname'];
      $userPass=$_SESSION['password'];
    
  
  

?>
         <label for="street">Location <span>*</span></label>
<input type='text' id='street' name='street' value='<?php 
  // if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $selectedLocation = isset($_POST['selectedLocation']) ? htmlspecialchars($_POST['selectedLocation']) : null;
 echo $selectedLocation;  
// }
  ?>

  '  required="" readonly="">
  <label for="pickupLocation"><B>Pick-up Location</B></label>
  <?php $currentFilename = $_GET['filename'];
    
    // Use pathinfo to get the filename without extension
    $filenameWithoutExtension = pathinfo($currentFilename, PATHINFO_FILENAME);  ?>
  <a style='font-size: 15px; width: 5px; height: 10px;' href="map2.php?filename=<?php echo $filenameWithoutExtension ?>">
  <span style='color: red;'> <i class="bx bxs-map-pin"></i> Pick Location</span>
</a>


      <label for="fullName">Full Name <span>*</span></label>
      <input type="text" id="fullName" placeholder="<?php echo $userName; ?>" name="fm2"  required>
   
     

   

 

      <label for="email">Email Address <span>*</span></label>
      <input type="email" id="email" placeholder="<?php echo $userEmail; ?>" name="em2"  required>
      
      
      <input type="text" id="fullName" value="<?php echo $userName; ?>" name="fullname" hidden required>
   
     
 

     
      <input type="email" id="email" value="<?php echo $userEmail; ?>" name="email" hidden required>
  <label for="phoneNumber">Cellphone Number (Philippines) <span>*</span></label>
      <input type="tel" id="phoneNumber" name="cp_num" pattern="[0-9]{11}" placeholder="e.g., 09123456789" required>

      <label for="days and nights"><b>How long is your trip?</b></label>
      <select id="days and nights" name="days_and_nights" required> 
        <option value="2 Days & 1 Night">2 Days & 1 Night</option>
        <option value="3 Days & 2 Nights">3 Days & 2 Nights</option>
       
      </select>
  
      <!-- <label for="whereLuzon"><B>Where to go in Luzon?</B></label>

  
      <label for="package">Province <span>*</span></label>
      <input type="text" id="province" name="province" required> -->

      <!-- <th colspan="2">Destinations:</th><span>*</span> -->
    </tr>
    
     
      <label for="adult_count">Number of Adult Travelers <span>*</span></label>
      <input type="number" id="adult_cout" name="adult_count" min="1" max="20" required>
  
      <label for="kid_count">Number of Kids Travelers <span>*</span></label>
      <input type="number" id="kid_cout" name="kid_count" min="0" max="20" required>
  
      
      <label for="vehicle">Choose a Vehicle <span>*</span></label>
      <select id="vehicle" name="vehicle" required> 
        <option value="Company preferred">CBSTC Suggested Vehicle</option>
        <option value="Innova">Toyota Innova</option>
        <option value="Vios">Toyota Vios</option>
        <option value="Hiace">Toyota Hiace</option>
        <option value="Furtuner">Toyota Fortuner</option>
        <option value="CBSTC Modern Jeep">CBSTC Modern Jeep</option>
       
      </select>
      
  
     
  
      <label for="date">Select Travel Date <span>*</span></label>
      <input type="date" id="date" name="trav_date" required>
  
      <label for="time">Select Travel Time <span>*</span></label>
      <input type="time" id="time" name="trav_time" required>
  
  
  
  
  
  
     
     
    
      


     
  
     
  
  
     
      <label for="City">Package<span>*</span></label>
     
      <?php
// book_alaminos.php

if (isset($_GET['filename'])) {
    $currentFilename = $_GET['filename'];
    
    // Use pathinfo to get the filename without extension
    $filenameWithoutExtension = pathinfo($currentFilename, PATHINFO_FILENAME);

    // Display the filename without extension
    echo "<input type='text' name='package' value='$filenameWithoutExtension' readonly required>";
} else {
  echo "<input type='text' name='package' placeholder='package is not available' readonly required>";
}
?>
        
       
  
  
  <!-- <label for="landmark">Landmark<span>*</span></label>
      <input type="text" id="landmark" name="landmark" required> -->
   
  
  
  
  
  
      <button type="submit" class="reservation">Submit Reservation</button>
  </form></header>
</div>
</div>

</body>
</html>