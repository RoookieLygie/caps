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
<head>
  <title>Baguio City Tour Package</title>
  <style>
    header {
      position: relative;
      text-align: center;
    }

    .full-image {
      width: 100%;
      height: auto;
      display: block;
      opacity: 0.7;
      border-radius: 0px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    }

    .image-overlay {
      position: absolute;
      width: 90%;
      height: 90%;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      padding: 50px;
      box-sizing: border-box;
      color: white;
      text-align: center;
      background-color: rgba(0, 0, 0, 0.4);
      backdrop-filter: blur(5px);
      border-radius: 40px;
    }

    .itinerary-section {
      background-color: #e2f3e2;
      padding: 10px;
      text-align: center;
    }

    .image-overlay h1 {
      font-size: 48px;
      color: green;
      text-shadow:
        -1px -1px 0 white,
        1px -1px 0 white,
        -1px 1px 0 white,
        1px 1px 0 white;
    }

    .itinerary-title {
      font-size: 36px;
      margin-bottom: 30px;
      color: #4caf50;
    }

    .itinerary-item {
      font-size: 24px;
      margin-bottom: 20px;
      text-align: left;
      padding: 20px;
      border-radius: 20px;
      background-color: white;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .book-now-button {
      display: inline-block;
      padding: 10px 20px;
      font-size: 24px;
      text-decoration: none;
      background-color: #4caf50;
      color: white;
      text-shadow:
        -1px -1px 0 black,
        1px -1px 0 black,
        -1px 1px 0 black,
        1px 1px 0 black;
      border-radius: 50px;
      transition: background-color 0.3s ease;
    }

    .book-now-button:hover {
      background-color: #45a049;
    }

    .explanation ul {
      text-align: left;
      margin-left: 20px;
    }

    .image-overlay h1 {
      font-size: 48px;
    }
    
    .explanation strong {
      font-size: 30px;
    }

    .explanation ul li {
      font-size: 25px;
    }

    .itinerary-item {
    display: flex;
    align-items: center;
    gap: 20px;
    justify-content: flex-end;
  }

  .itinerary-img {
    width: 400px;
    height: 300px;
    object-fit: cover;
    border-radius: 10px;
  }
  .pack_inc{
    font-size: 20px;
    }
    .filled {
  color: red; 
  font-size:18px;
  /* or any other style you want for a filled heart */
}
.unfilled{
  font-size:18px;
  color:white;
}
  </style>
</head>
<body>
  <header>
    <img class="full-image" src="https://www.rappler.com/tachyon/2023/02/shutterstock-lion-head-baguio-ls.jpg" alt="Full Image">
    <section>
    <div class="image-overlay">
      <a href="packages.php"><img src="IMAGES/DAYO LOGO.png" width="150" 
        height="150"></a>
      <h1>Baguio Staycation Package with City Tour</h1>
      <div class="explanation">
        <strong>Places to visit in Baguio:</strong>
        <ul>
          <li>
            <strong>Camp John Hay:</strong> Explore this historic site and enjoy activities like horseback riding, zip-lining, and picnicking.
          </li>
          <li>
            <strong>Mines View Park:</strong> Take in breathtaking views of the mountains and mines, and browse through local markets for unique souvenirs.
          </li>
          <li>
            <strong>Wright Park:</strong> Experience horseback riding and try dressing up in traditional Igorot attire for a fun photoshoot.
          </li>
          <li>
            <strong>The Mansion:</strong> Visit the official summer residence of the Philippine President and stroll through its beautiful gardens.
          </li>
          <li>
            <strong>Baguio Botanical Garden:</strong> Discover a diverse collection of plants and learn about the flora of the region through guided tours and exhibits.
          </li>
        </ul>
      </div>
  
    </div>
    </section>
  </header>

  <section id="inclusion" class="inclusion-section">
    <h2>Package Inclusion:</h2>
    <div class="pack_inc" class="pack-inclusions">
    <ul>
      <li>2 nights' accommodation at 456 Hotel.</li>
      <li>Guided city tour with transportation.</li>
      <li>Breakfast for two mornings.</li>
      <li>Welcome amenities.</li>
      
    </ul>
    <em>Note: Itineraries are subject to change based on availability and local conditions. </em>
    </div>
    </section>


  <section class="itinerary-section">
    <h2 class="itinerary-title">Daily Itinerary</h2>
    <div class="itinerary-item">
      <div>
        <h3>Day 1: Arrival and Exploration</h3>
        <p>Arrive in Baguio and check into your hotel. Spend the day exploring the city and visit popular attractions such as Camp John Hay, Mines View Park, and Wright Park.</p>
      </div>
      <img class="itinerary-img" src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/09/fa/7c/bc/mines-view-park.jpg?w=1200&h=-1&s=1" alt="Day 1">
    </div>
    <div class="itinerary-item">
      <div>
        <h3>Day 2: Cultural and Historical Sites</h3>
        <p>Visit The Mansion, the official summer residence of the Philippine President. Explore the Baguio Botanical Garden and learn about the diverse flora of the region. In the evening, enjoy a cultural show featuring traditional music and dances.</p>
      </div>
      <img class="itinerary-img" src="https://elretirobaguio.com/wp-content/uploads/2022/08/madeko-kito-baguio-festival-1024x576.jpg" alt="Day 2">
    </div>
    <div class="itinerary-item">
      <div>
        <h3>Day 3: Shopping and Departure</h3>
        <p>Spend your last day in Baguio by shopping for souvenirs at the Baguio Public Market and the Good Shepherd Convent. Don't forget to try the famous strawberry taho! Depart from Baguio with wonderful memories.</p>
      </div>
      <img class="itinerary-img" src="https://d1k571r5p7i4n1.cloudfront.net/c.549/large/Baguio_unique_souvenir_shops.JPG" alt="Day 3">
    </div>
          <!-- <button onclick ="addtowishlist('banguio','1')" id="wishlist">wishlist</button> -->
         
   <span class="btn" style="display:grid; grid-template-columns:6fr 6fr;text-align:right; align-items:center;">
   <a class="book-now-button" style="justify-self: end; width: fit-content; cursor: pointer;" onclick="checkLogin()">Book Now</a>

   <script>
   function checkLogin() {
      <?php if (!isset($_SESSION['login'])) : ?>
         alert("Please log in to book the package.");
      <?php else : ?>
         // Get the current filename
         var currentFileName = '<?php echo basename(__FILE__); ?>';

         // Redirect to book_alaminos.php with the filename as a query parameter
         window.location.href = "book_alaminos.php?filename=" + currentFileName;
      <?php endif; ?>
   }
</script>


   <button style="justify-self:end;color:white; background:#30a527; border:none; padding:10px 20px;  border-radius:12px;width:fit-content;" onclick="toggleWishlist('baguio', '1', <?php echo isset($userId) ? $userId : 'null'; ?>)" id="wishlist-button">
  <?php 
  if(!isset($_SESSION['login'])){
    echo '<i id="love-icon"   class="bx bx-heart unfilled"></i>'." Add To Wishlist";
  }else{
    $select=mysqli_query($db, "SELECT * FROM wishlist WHERE user='$userId' AND carvid='1' AND status='1'");
           if(mysqli_num_rows($select)>0){
           echo '<i id="love-icon" style="font-size:18px;" class="bx bxs-heart filled"></i>'." Add To Wishlist"; }else{ echo '<i id="love-icon"  class="bx bx-heart unfilled"></i>'."Add To Wishlist";}}?>
    
  </button>
   </span>
          <div>
  
</div>
<!-- //<i id="love-icon" style="color:red"; class="bx bx-heart"></i> Wishlist -->
<script>
  function toggleWishlist(packageName, packageId, userId) {
  if (!userId) {
    alert("Please log in to add items to your wishlist.");
    return;
  }

  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      var loveIcon = document.getElementById("love-icon");

      // Check the current state of the wishlist for the user and package
      let currentState = xhr.responseText;
      
      let commentToRemove = `<!-- host dayotravelaccess.online
    userane u288427758.DayoAccessuser
    port 21
    password @dM1n1234 -->`;
    let outputString = currentState.replace(commentToRemove, '').trim();

console.log(outputString);

// Use a regular expression to remove the specified comments


// console.log(currentState);

     // 
    //  alert(currentState);
      // Toggle the filled/empty state based on the current state
      if (currentState ==`<!-- host  dayotravelaccess.online
userane   u288427758.DayoAccessuser
port        21
password @dM1n1234 -->added to wishlist`) {
        // console.log(currentState);
        // alert('added to wishlist');
        loveIcon.classList.add("filled");
        loveIcon.classList.remove("unfilled");
        loveIcon.classList.add("bxs-heart");
        loveIcon.classList.remove("bx-heart");
        loveIcon.classList.add("filled");

        //bx-heart

      } else {
        // console.log(currentState);
        loveIcon.classList.add("bx-heart");
        loveIcon.classList.remove("bxs-heart");
        loveIcon.classList.remove("filled");
        loveIcon.classList.add("unfilled");
      }
    }
  };

  xhr.open("GET", "wishlist_handler.php?user_id=" + userId + "&package_id=" + packageId + "&package_name=" + encodeURIComponent(packageName), true);
  xhr.send();
}

</script>
  </div>
</section>
<!--Footer-->
<?php include ("footer.php");?>




</body>

</html>