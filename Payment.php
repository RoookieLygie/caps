<?php   if (isset($_GET['id'])) { 
    include "connection.php";
    $id=$_GET['id'];
    $select=mysqli_query($db,"SELECT * FROM reserve_booking2 WHERE id='$id'");
    if(mysqli_num_rows($select)>0){
        while($row=mysqli_fetch_array($select)){
            if(isset($_POST['submit'])){
                $amount=$_POST['amount'];
                $date=   $date = date("Y-m-d");
                $p_method=$_POST['p_method'];
                $update = mysqli_query($db, "UPDATE reserve_booking2 SET payments='paid', p_date='$date', p_method='$p_method' WHERE id='$id'");
                if ($update) {
                    echo "<script>alert('You have successfully paid');</script>";
                    header("Location:plan_5.php");
                    exit();
                } else {
                    echo "<script>alert('Error Making Rebooking');</script>";
                }
            }

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Booking with Payment</title>
    <!-- Include Stripe.js -->
    <!-- <script src="https://js.stripe.com/v3/"></script> -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f2f2f2;
        }

        #floating-window {
            width: 400px;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        h1 {
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-top: 10px;
        }

        select,
        input,
        #card-element {
            margin-top: 8px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        #card-errors {
            color: #dc3545;
            margin-top: 8px;
        }

        button {
            margin-top: 16px;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:disabled {
            background-color: #ccc;
            cursor: not-allowed;
        }
    </style>
</head>
<body>

    <div id="floating-window">
        <h1>Make Payment</h1>

        <form id="payment-form" method='POST'>
            <!-- Service booking fields -->
            <label for="service">Select payment method</label>
             <select id="service" name="p_method" required>
                <option value="Gcash">Gcash</option>
                <option value="Credit Card">Credit Card</option>
              
            </select>
            <!-- <label for="service">Service:</label>
            <input type="text" value='<?php // echo $row["package"]; ?>' id="amount" name="amount" readonly>  -->

            <label for="amount">Amount:</label>
            <input type="text" value='<?php echo $row["price"]; ?>' id="amount" name="amount" readonly>

            <!-- Payment details -->
           

            <!-- Used to display form errors. -->
            

            <button type="submit" name='submit'>Pay Now</button>
        </form>
    </div>
</body>
</html>

<?php     }
    }

 } ?>
