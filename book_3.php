<?php
include("connection.php");

  $id=$_GET['id'];
$sql=mysqli_query($db,"select * from reserve_booking2 where id='$id'");  
$row=mysqli_fetch_assoc($sql);
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Information Details</title>

        
        <!--Icon link-->
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
         <!-- font links--> 
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kalam&display=swap" rel="stylesheet">
<body>

    <form method='POST'>
      <?php  
 $date=   $date = date("Y-m-d");
//  $p_method=$_POST['p_method'];
$id=$_GET['id']; 
if(isset($_POST['submit'])){
  $amount=$_POST['amount'];
  $date=   $date = date("Y-m-d");
  $p_method=$_POST['p_method'];
  $update = mysqli_query($db, "UPDATE reserve_booking2 SET payments='paid', p_date='$date', p_method='$p_method' WHERE id='$id'");
 if ($update) {
     echo "<script>alert('You have successfully paid');</script>";
     header("Location:book_5.php");
     exit();
 } else {
     echo "<script>alert('Error Making Rebooking');</script>";
 }}
      ?>
      <p><b><em>Name: </em></b><?php echo $row['fullname'] ?> </p>
        <p><b><em>Email: </em></b> <?php echo $row["email"]; ?></p>
        <p><b><em>CP#: </em></b> <?php echo $row["cp_num"]; ?></p>
        <p><b><em>Packages: </em></b> <?php echo $row["package"]; ?></p>
        <p><b><em>Adult Count: </em></b><?php echo $row["adult_count"]; ?></p>
        <p><b><em>Kids Count: </em></b><?php echo $row["kid_count"]; ?></p>
        <p><b><em>Vehicle: </em></b><?php echo $row["vehicle"]; ?></p>
        <p><b><em>Travel Date: </em></b><?php echo $row["trav_date"]; ?></p>
        <p><b><em>Travel Time: </em></b><?php echo $row["trav_time"]; ?></p>
        <p><b><em>Pick-Up Location: </em></b><?php echo $row["street"]; ?></p>
        <p><b><em>Status: </em></b><?php  
                           if ($row['status']==1) {  
                                echo "Pending";  
                           }if ($row['status']==2) {  
                                echo "Your request is accepted, you can now proceed to payment.";  
                           }if ($row['status']==3) {  
                                echo "Your request is rejected.";  
                           }  
                           ?></p> 
                           <label for="service">Select payment method</label>
             <select id="service" name="p_method" required>
                <option value="Gcash">Gcash</option>
                <option value="Credit Card">Credit Card</option>
              
            </select>
            <!-- <label for="service">Service:</label>
            <input type="text" value='<?php // echo $row["package"]; ?>' id="amount" name="amount" readonly>  -->

            <label for="amount">Amount:</label>
            <input type="text" value='<?php echo $row["price"]; ?>' id="amount" name="amount" readonly>
                           <button type="submit" name='submit' class="reservation" >Pay</button> 
                           </form>
<div class="container">
    <h2>Payment Method:</h2>
<p>NOTE: Only a down payment of 20% is required to reserve the package online. The remaining balance should be paid on the day of travel upon pickup.</p>
<div>
  <h3>E-Wallet:</h3> 
  <div class="logo" action="book_4.php">
    
    <img class="Gcash" src="IMAGES/GCash_Logo.png" alt="gcash"></a>
    <h3>BANK ACCOUNT:Landbank</h3>
    <h3>Account Number:CBSTC-Aurora hill 1371-1982-50</h3>
    
</div>


</div>
   
</body>
</html>

<style>

body {
      font-family: Arial, sans-serif;
      display: flex;
      margin: 0;
      padding: 0;
      
    }

    header {
      
      text-align: center;
      
    }

    .logo img {
      max-width: 30%;
      height: auto;
      padding-left: 300px;
      
    }


    h2{
      text-align: center;
    }

 

    button:hover {
      background-color: #18866a;
      text-align: center;
    }



    

    form {
      color: white;
      padding: 50px;
      background-color: #3fa38c;
      width: 50%;
        padding-bottom: 36vh;
      max-width: 100%;
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
      padding: 20px 20px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      margin-left: 39%;

    }

    button:hover {
      background-color: #18866a;
      text-align: center;
    }

   
    h2 {
      text-align: center;
      color: rgb(10, 10, 10);
    }

    h3{
      text-align: center;
    }
    
.container p{
  padding-left: 5%;
}
  .container{
    background-image: url(IMAGES/pattern_2.png);
  }
  
</style
</html>