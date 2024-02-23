<?php
include 'connection.php';
?>

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

<section class="pack">

           
                <h1>Packages that we Offer!</h1>
               
        </div>

        <section class="pack_1">
            <div class="container_1">
                
              <div class="column_1">
                <a href="baguio.php" class="button_1">
                  <img src="IMAGES/baguio.png" alt="Image 1">
                </a>

                <a href="alaminos.php" class="button_1">
                  <img src="IMAGES/alaminos.png" alt="Image 2">
                </a>
                <a href="vigan.php" class="button_1">
                    <img src="IMAGES/vigan.png" alt="Image 3">
                  </a>
              </div>

              <div class="column_1">
                <a href="vigan.php" class="button_1">
                  <img src="IMAGES/vigan.png" alt="Image 3">
                </a>
                <a href="sagada.php" class="button_1">
                  <img src="IMAGES/sagada.png" alt="Image 4">
                </a>

                <a href="baguio.php" class="button_1">
                    <img src="IMAGES/baguio.png" alt="Image 1">
                  </a>
              </div>




            </div>
          </section>

   </section>
        
   <script src="script.js"></script>

   <!--Footer-->
   <?php include ("footer.php");?>

    <script src="script.js"></script>

</body>

</html>