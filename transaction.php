<?php

$con=mysqli_connect('localhost','root','','dayo_travel_access_user_db');  
$sql=mysqli_query($con,"select * from reserve_booking2");  
$row=mysqli_fetch_assoc($sql);
?>

<?php  include("header.php");
include "restrict.php";?>
                
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

                    
                
                    
                    
                    </body>
                    </html>

    
  <div class="information">
        <h2>Information Details:</h2>
  
    <div>
        <p><b><em>Name: </em></b><?php echo $row['fullname'] ?> </p>
        <p><b><em>Email: </em></b> <?php echo $row["email"]; ?></p>
        <p><b><em>CP#: </em></b> <?php echo $row["cp_num"]; ?></p>
        <p><b><em>Packages: </em></b> <?php echo $row["package"]; ?></p>
        <p><b><em>Adult Count: </em></b><?php echo $row["adult_count"]; ?></p>
        <p><b><em>Kids Count: </em></b><?php echo $row["kid_count"]; ?></p>
        <p><b><em>Vehicle: </em></b><?php echo $row["vehicle"]; ?></p>
        <p><b><em>Travel Date: </em></b><?php echo $row["trav_date"]; ?></p>
        <p><b><em>Travel Time: </em></b><?php echo $row["trav_time"]; ?></p>
        <p><b><em>Pick-Up Location: </em></b><?php echo $row["street"]; ?>, <?php echo $row["brgy"]; ?></p>
        
                   
    </p>
    </div></form>
    
    <form action="book_3.php">
    <p><b><em>Status: </em></b><?php  
                           if ($row['status']==1) {  
                                echo "Pending Request";  
                           }if ($row['status']==2) {  
                                echo "Acccepted";  
                           }if ($row['status']==3) {  
                                echo "Denied";  
                           }  
                           ?></p>
    <?php  
                       if ($row['status']==1) {    
                       }if ($row['status']==2) {  ?>
                        <button type="submit" class="reservation">Payment </button>
                      <?php }if ($row['status']==3) {  
                       }  
                       ?></p>
</form>
                         </div>
                        <form action="transaction_plan.php">
                            <label for="Plan Check">Check your transaction on your itinerary plan.</label>
                         <button type="submit" class="reservation">Check</button>
                    </form>
                        
       
                         

        <style>

            .information{
                background-color: #18866ad3;
                height: 100%;
                width: 35%;
                padding: 50px 20px 50px 20px;
                margin-left: 20px;
                margin-bottom: 20px;
              
            }

            body {
              font-family: Arial, sans-serif;
            background-image: url(IMAGES/WALLPAPER.png);
              height: auto;
              display: flex;
              flex-direction: column;
              align-items: left;
              justify-content: left;
              
            }
          .reservation{
            color: #ffffff;
            background-color: rgb(9, 169, 28);
            padding:5px 5px 5px 5px;
            
           
          }
           
            form {
             
              padding: 40px;
              color: rgb(162, 30, 30);
              border-radius: 8px;
              box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
              background-color: rgba(255, 255, 255, 0.9); /* Set the background color with some transparency */
     
       
            }
        
          form h2{
            color: rgb(133, 16, 16);
          }
          
          
          .sub-header_15{
    background-color: #92a2b566;
    background-position: center;
  
    position: relative;
  
    color:rgb(255, 255, 255);
    }

    button:hover {
      background-color: #18866a;
      text-align: center;
    }

    p{
        text-align: left;
       
       
    }

    h2{
        text-align: left;
    }
    </style>        
 </section>
 
  
</div>
       <!--Footer-->
       <?php  include("footer.php");?>




</section>






        <script src="script.js"></script>

    </body>

</html>