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
  

 
  <form action="booking_reg.php" method="POST">
    <h2>Enter Your Details:</h2>
    <label for="fullName">Full Name <span>*</span></label>
    <input type="text" id="fullName" name="fullname" required>

   <label for="phoneNumber">Cellphone Number (Philippines) <span>*</span></label>
    <input type="tel" id="phoneNumber" name="cp_num" pattern="[0-9]{11}" placeholder="e.g., 09123456789" required>


    <label for="email">Email Address <span>*</span></label>
    <input type="email" id="email" name="email" required>



    <label for="package">Choose a Package <span>*</span></label>
    <select id="package" name="package" required>
      <option value="Baguio Staycation Package with City Tour">Baguio Staycation Package with City Tour</option>
      <option value="Sagada Escape">Sagada Escape</option>
      <option value="Vigan Heritage Voyage">Vigan Heritage Voyage</option>
      <option value="Alaminos Adventure Tour">Alaminos Adventure Tour</option>
    </select>
   
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



    <label for="pickupLocation"><B>Pick-up Location</B></label>
   
    <label for="street">Street <span>*</span></label>
    <input type="text" id="street" name="street" required>

    <label for="brgy">Barangay <span>*</span></label>
    <input type="text" id="brgy" name="brgy" required>


   
    <label for="City">City <span>*</span></label>
    <select id="City" required>
      
      <option value="city">Baguio City</option>
    </select>

 <label for="landmark">Landmark<span>*</span></label>
    <input type="text" id="landmark" name="landmark" required>
 





    <button type="submit" class="reservation">Submit Reservation</button>
</form>
</div>
</div>

</body>
</html>