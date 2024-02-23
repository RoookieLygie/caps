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

<h1> Recommended Packages</h1>
<div class="row-wrap">

    <img src="IMAGES/back.png" id="backBtn">

    <div class="row">
    
        <div>
            <span><a href="baguio.php"> <img src="IMAGES/baguio.png" alt="baguio"></span>
            <span><a href="alaminos.php"> <img src="IMAGES/alaminos.png" alt="alaminos"></span>
           
      
              <span><a href="vigan.php"> <img src="IMAGES/ilocos.png" alt="vigan"></span>
            <span><a href="sagada.php"> <img src="IMAGES/sagada.png" alt="sagada"></span>
        
          <a href="packages.php" id="seemore">See More</a>
        
                
            </a>
        </div>
  
</div>
     
     <img src="IMAGES/next.png" id="nextBtn">
     
</div>
<script>
    let scrollContainer = document.querySelector(".row");
    let backBtn = document.getElementById("backBtn");
    let nextBtn = document.getElementById("nextBtn");




    nextBtn.addEventListener("click", ()=>{
        scrollContainer.style.scrollBehavior ="smooth";
        scrollContainer.scrollLeft += 900;

    });

    
    backBtn.addEventListener("click", ()=>{
        scrollContainer.style.scrollBehavior ="smooth";

        scrollContainer.scrollLeft -= 900;

    });
</script>
</section>







<section class="activities">
    <h1>Activities you can Enjoy!</h1>
   <div class="row_act">

    <div class="activities-col">
        <a href="adventure.php">
        <img src="IMAGES/ADVENTURE.png">

        <div class="layer">
            <h3>Adventure Packages</h3>
        </div>
    </div>
</a>
    <div class="activities-col">
        <a href="heritage.php">
        <img src="IMAGES/HERITAGE.png">
        <div class="layer">
            <h3>Heritage Tours</h3>
        </div>
    </div>
</a>

    <div class="activities-col">
        <a href="culinary.php">
        <img src="IMAGES/FOOD.png">
        <div class="layer">
            <h3>Culinary Experiences</h3>
        </div>
    </div>


   </div>
</a>
</section>

       <!--Footer-->
      <?php include("footer.php"); ?>
        <script src="script.js"></script>

    </body>

</html>