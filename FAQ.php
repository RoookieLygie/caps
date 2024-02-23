<?php include ("header.php");?>
                
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

       
   <!--FAQ Section-->     


   
       
</div>
</section>

<div class="FAQ">
    <div class="accordion">
        <div class="item">
            <input type="radio" id="one" name="item"><label for="one" class="title">How to book packages? 
            </label> 
            
            <div class="content">
                <ul>
                    <li> Select the packages you'd like to avail.
                    </li>
                    <li>Enter your details</li>
                    <li>Make your payment</li>
                    <ul>All that's left to do is wait for your booking to be confirmed.
                    </ul>
                </ul>



            </div>
        </div>

        <div class="item">
            <input type="radio" id="two" name="item"><label for="two" class="title">When will I receive my booking confirmation?</label>
            <div class="content">
                You will receive your booking confirmation email within 5 minutes of making your booking.
            </div>
        </div>


        <div class="item">
            <input type="radio" id="three" name="item"><label for="three" class="title">How do I log in into my account?</label>
            <div class="content">
                To log in to your account:

                <ol>
                    <li> Go to the Dayo Travel Access home page.
                    </li>
                    <li>Click on the "Log in" button at the top right corner of the screen.
                    </li>
                    <li> Log in using your preferred method (Third party verification, Email address, or Phone number)
                    </li>
                  </ol>  



            </div>
        </div>
        <div class="item">
            <input type="radio" id="four" name="item"><label for="four" class="title">What is the cancellation policy for tour bookings?
        </label>
            <div class="content">
                Our cancellation policy may vary depending on the tour package and the time of cancellation. The specific details regarding cancellations and refunds will be provided at the time of booking.

            </div>
        </div>
        <div class="item">
            <input type="radio" id="five" name="item"><label for="five" class="title">Are transportation and accommodations included in the tour packages?
        </label>
            <div class="content">

                Yes, most of our tour packages include transportation and accommodation. The inclusions will be clearly mentioned in the package details


            </div>
        </div>
        <div class="item">
            <input type="radio" id="six" name="item"><label for="six" class="title">What are some popular tour destinations in Luzon?
        </label>
            <div class="content">Luzon offers a wide range of popular tour destinations, including Manila, Baguio, Batangas, Banaue Rice Terraces, Vigan, and Pampanga.
            </div>
        </div>
        <div class="item">
            <input type="radio" id="seven" name="item"><label for="seven" class="title">Can I customize my tour itinerary?
        </label>
            <div class="content">
                Yes, we offer the option to customize your tour itinerary. You can contact our customer support to discuss your preferences and make necessary arrangements.


            </div>
        </div>
        <div class="item">
            <input type="radio" id="eight" name="item"><label for="eight" class="title">Are entrance fees to attractions included in the tour packages?
        </label>
            <div class="content">
                The inclusion of entrance fees may vary depending on the specific tour package. Some packages include entrance fees to attractions, while others may require you to pay for them separately. The details will be provided in the package description.


            </div>
        </div>
        <div class="item">
            <input type="radio" id="nine" name="item"><label for="nine" class="title">Can I make changes to my tour booking after it is confirmed?
        </label>
            <div class="content">
                Changes to tour bookings are subject to availability and any applicable fees or restrictions. It is recommended to contact our customer support as soon as possible if you need to make changes to your booking, and we will assist you accordingly.

            </div>
        </div>
    </div>
</div>







 <!--Footer-->
 <?php include("footer.php"); ?>

    <script src="script.js"></script>

</body>

</html>