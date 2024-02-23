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

.terms-container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2.terms-title {
            color: #333;
            text-align: center;
        }

        p.terms-text {
            color: #666;
            line-height: 1.6;
        }

        .accordion{
            text-align: center;
        }
        </style>
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


<div class="FAQ">
    <div class="accordion">
        <h2>TERMS AND CONDITIONS</h2>
        <div class="item">
            <input type="radio" id="one" name="item"><label for="one" class="title">Acceptance of Terms
            </label> 
            
            <div class="content">
               By accessing and using Dayo Travel Access website, you agree to be bound by these terms and conditions. If you do not agree with any part of these terms and conditions, please refrain from using the website.


            </div>
        </div>

        <div class="item">
            <input type="radio" id="two" name="item"><label for="two" class="title">Booking and Payment</label>
            <div class="content">
                The Website allows you to browse and select travel packages, make bookings, and pay for them online. By making a booking and submitting payment through the Website, you confirm that you are authorized to use the payment method and that the information provided is accurate and complete.
            </div>
        </div>


        <div class="item">
            <input type="radio" id="three" name="item"><label for="three" class="title">Pricing and Availability</label>
            <div class="content">
                The prices and availability of travel packages displayed are subject to change without notice. While we strive to provide accurate and up-to-date information, there may be instances where errors or discrepancies occur. We reserve the right to correct any errors or cancel bookings if necessary. In such cases, we will make reasonable efforts to notify you and provide alternative options if available.


            </div>
        </div>
        <div class="item">
            <input type="radio" id="four" name="item"><label for="four" class="title">Cancellation and Refunds</label>
            <div class="content">
                Cancellation and refund policies may vary depending on the specific travel package and service provider. It is your responsibility to review and understand the cancellation and refund terms associated with your booking. We recommend contacting the service provider directly for any cancellation or refund requests.

            </div>
        </div>

        <div class="item">
            <input type="radio" id="five" name="item"><label for="five" class="title"> Third-Party Content and Links
        </label>
            <div class="content">

                The Website may contain content and links to third-party websites or services. We do not endorse or assume any responsibility for the content, privacy policies, or practices of these third parties. Your interactions with third-party websites or services are solely at your own risk.

            </div>
        </div>

        <div class="item">
            <input type="radio" id="six" name="item"><label for="six" class="title">Personal Data and Privacy
        </label>
            <div class="content">
                
                We collect and process personal data in accordance with our Privacy Policy. By using the Website for booking and payment purposes, you consent to the collection, use, and disclosure of your personal data as described in the Privacy Policy.

            </div>
        </div>

        <div class="item">
            <input type="radio" id="seven" name="item"><label for="seven" class="title">Intellectual Property
        </label>
            <div class="content">
                All intellectual property rights relating to the Website, including but not limited to trademarks, logos, and content, are owned by or licensed to us. You may not use, reproduce, modify, or distribute any part of the Website without our prior written consent.

            </div>
        </div>
        <div class="item">
            <input type="radio" id="eight" name="item"><label for="eight" class="title">Limitation of Liability
        </label>
            <div class="content">
                To the maximum extent permitted by law, we shall not be liable for any direct, indirect, incidental, consequential, or special damages arising out of or in connection with your use of the Website for booking and payment purposes, including but not limited to any errors, delays, or interruptions in the booking or payment process.
            </div>
        </div>


        <div class="item">
            <input type="radio" id="nine" name="item"><label for="nine" class="title">Indemnification
        </label>
            <div class="content">
                You agree to indemnify and hold us harmless from any claims, losses, damages, liabilities, and expenses arising out of or in connection with your use of the Website for booking and payment purposes or any violation of these Terms and Conditions.
            </div>
        </div>


        <div class="item">
            <input type="radio" id="ten" name="item"><label for="ten" class="title">Modification of Terms
        </label>
            <div class="content">
                We reserve the right to modify or update these Terms and Conditions at any time without prior notice. It is your responsibility to review these Terms and Conditions periodically for any changes.
            </div>
        </div>


        <div class="item">
            <input type="radio" id="eleven" name="item"><label for="eleven" class="title">Governing Law
        </label>
            <div class="content">
                These Terms and Conditions shall be governed by and construed in accordance with the laws of the jurisdiction where the company providing Dayo Travel Access is registered.

            </div>
        </div>
<p>By accessing and using the Website, you acknowledge that you have read, understood, and agreed to these Terms and Conditions. If you do not agree to these Terms and Conditions, please discontinue your use of the Website.</p>

    </div>
</div>


 <!--Footer-->
<?php   include("config.php");  ?>


    <script src="script.js"></script>

</body>

</html>