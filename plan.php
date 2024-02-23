
      



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
    </head>
<style>


  nav .navbar{
      height:auto !important;
    }

    body {
            background: linear-gradient(94deg, #5eabab, #a5cfc8);
            margin: 0;
            color: white;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            position: relative; /* Added */
        }
    
        .form-container {
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 200px;
            flex-grow: 1; /* Grow to fill remaining space */
            
        }

    h1 {
        text-align: center;
        color: black;
    }

    .two-column-form {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .form-container {
        display: flex;
        flex: 1;
        
    }

    .column {
        flex: 1;
        padding: 20px;
        border-radius: 8px;
        /*border: 1px solid #ccc;*/
        margin-bottom: 20px;
        color:black;
        padding-bottom: 10px;

    }

    label {
        display: block;
        margin-bottom: 8px;
    }

    input,
    select {
        width: 100%;
        padding: 8px;
        margin-bottom: 16px;
        box-sizing: border-box;
       
    }

    /* Adjusted width for destination input */
   .destinationRow input {
        flex: 12; /* Change this value as needed */
        margin-right: 8px;
        border: 1px solid #ccc; /* Add border for clarity */
        color: black; /* Change text color to black */
        padding: 8px;
        border-radius: 4px;
    }

    button,
    .aBt {
        background-color: #247b4b;
        color: black;
        padding: 20px 20px;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        width: 100%; /* Adjusted width for buttons */
       
    }

    button:hover {
        background-color: #4aa30f;
        text-align: center;
    }

    .destinationRow {
        display: flex;
        align-items: center;
    }

    .destinationRow button {
        background-color: #247b4b;
        color: #fff;
        padding: 5px 5px ;/* Adjusted padding */
        border: none;
        border-radius: 8px;
        cursor: pointer;
        width: auto; 
        
    }

   


    .destinationRow button:hover {
        background-color: #4aa30f;
    }

    h2, label{
      color:black;
    }
</style>

<?php include("header.php");
include 'restrict.php';
?>
                
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



<section>
<header>
<h1> Make your OWN ITINERARY</h1>

<?php 
  
  include 'connection.php';
  if (isset($_SESSION['registration'])) {
     echo "<script>alert('You Have successfully Made Your itinerary,Kindly Follow Up Your Booking Status In Your Dashboard  ')</script>";
       echo "<script>location.href='Past Bookings.php'</script>";
    
     unset($_SESSION['registration']);
 }
  if (isset($_SESSION['error'])) {
     echo "<h3 style='color:red;'>".$_SESSION['registration']."</h3>";

    
     unset($_SESSION['error']);
 }
?>
 
        <form action="plan_reg.php" method="POST" id="formid" class="two-column-form">
        
        <div class="form-container">
            <div class="column">
            <h2>Enter Your Details:</h2>
                <label for="street"> Pick-Up Location <span>*</span></label>
                
                <input type='text' id='street' name='street' value='<?php echo isset($_POST['selectedLocation']) ? htmlspecialchars($_POST['selectedLocation']) : ''; ?>' required readonly=""> <a style='font-size: 15px; width: 5px; height: 10px;' href="map.php">
                    <span style='color: red;'> <i class="bx bxs-map-pin"></i> Pick Location</span>
                </a>
               
               
                <label for="fullName">Full Name <span>*</span></label>
                <input type="text" id="fullName" placeholder="<?php echo $userName; ?>" name="fm2" required>
                <label for="email">Email Address <span>*</span></label>
                <input type="email" id="email" placeholder="<?php echo $userEmail; ?>" name="em2" required>
                <input type="text" id="fullName" value="<?php echo $userName; ?>" name="fullname" hidden required>
                <input type="email" id="email" value="<?php echo $userEmail; ?>" name="email" hidden required>
                <label for="phoneNumber">Cellphone Number (Philippines) <span>*</span></label>
                <input type="tel" id="phoneNumber" name="cp_num" pattern="[0-9]{11}" placeholder="e.g., 09123456789" required>
                <label for="days_and_nights"><b>How long is your trip?</b></label>
                <select id="days_and_nights" name="days_and_nights" required> 
                    <option value="2 Days & 1 Night">2 Days & 1 Night</option>
                    <option value="3 Days & 2 Nights">3 Days & 2 Nights</option>
                </select>
            </div>
            <div class="column">
                <label for="whereLuzon"><b>Where to go in Luzon?</b></label>
                <label for="package">Province <span>*</span></label>
                <input type="text" id="province" name="province" required>
                <label for="destination">Destinations <span>*</span></label>
                <div id="destinationsContainer">
                    <!-- Initial destination input -->
                    <div class="destinationRow">
                        <input type="text" name="destination[]" placeholder="Destination" required>
                        <button type="button" onclick="addDestination()">Add More</button>
                    </div>
                </div>
                <label for="adult_count">Number of Adult Travelers <span>*</span></label>
                <input type="number" id="adult_count" name="adult_count" min="1" max="20" required>
                <label for="kid_count">Number of Kids Travelers <span>*</span></label>
                <input type="number" id="kid_count" name="kid_count" min="0" max="20" required>
                <label for="vehicle">Choose a Vehicle <span>*</span></label>
                <select id="vehicle" name="vehicle" required> 
                    <option value="Company preferred">CBSTC Suggested Vehicle</option>
                    <option value="Innova">Toyota Innova</option>
                    <option value="Vios">Toyota Vios</option>
                    <option value="Hiace">Toyota Hiace</option>
                    <option value="Fortuner">Toyota Fortuner</option>
                    <option value="CBSTC Modern Jeep">CBSTC Modern Jeep</option>
                </select>
                <label for="date">Select Travel Date <span>*</span></label>
                <input type="date" id="date" name="trav_date" required>
                <label for="time">Select Travel Time <span>*</span></label>
                <input type="time" id="time" name="trav_time" required>
              
                <button type="submit" class="reservation">Submit Reservation</button>
            </div>
        </div>
    </form>
</section>

    </body>

</html>