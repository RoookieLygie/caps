<footer>
    
        <div class="footer-columns">
            <div class="footer-column">
            <?php
        
        if(isset($_SESSION['login'])) {
            // Display these links if the user is logged in
          
            echo '<p><a href="index.php">Home</a></p>';
            echo '<p><a href="About.php">About</a></p>';
            echo '<p><a href="adventure.php">Adventure</a></p>';
            echo '<p><a href="plan.php">Make your own Itinerary</a></p>';
            // echo '<p><a href="transaction.php">Transaction</a></p>';
            echo '<p><a href="heritage.php">Heritage</a></p>';
            echo '<p><a href="culinary.php">Culinary</a></p>';
         
           
          

        } else {
            echo '<p><a href="index.php">Home</a></p>';
            echo '<p><a href="About.php">About</a></p>';
            echo '<p><a href="adventure.php">Adventure</a></p>';
            echo '<p><a href="heritage.php">Heritage</a></p>';
            echo '<p><a href="culinary.php">Culinary</a></p>';
          
            
           
            
        }
        ?>
            </div>
            <div class="footer-column">
                <p><a href="FAQ.php">Frequently Asked Questions</a></p>
                <p><a href="terms and condition.php">Terms and Conditions</a></p>
            </div>
            <div class="footer-column">
                <h2>Address</h2>
                <p>
                    #65 2nd Floor Decibar Building, Lower Bonifacio, Baguio City, Philippines (In front of Caltex Bonifacio)
                </p>
                <h2>Contact</h2>
                <p>
                    (074) 309-6836 / +63 938 589-4505
                    cbstccustomerservice@gmail.com
                </p>
            </div>
            <div class="footer-column">
                <h3>Developed by JML</h3>
                
                
            </div>
        </div>
    </footer>

