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

<body>
  <header>
    <img class="full-image" src="https://4.bp.blogspot.com/-KBzfbc_Chss/UFwBH2DWdfI/AAAAAAAAKls/F1DXQ51kvy4/s1600/00.jpg" alt="Full Image">
    <div class="image-overlay">
      <a href="packages.php"><img src="IMAGES/DAYO LOGO.png" width="150" 
        height="150"></a>
      <h1>Sagada Escape</h1>
      <div class="explanation">
        <strong>Places to visit in Sagada:</strong>
        <ul>
          <li>
            <strong>Hanging Coffins:</strong> Explore the unique tradition of hanging coffins and learn about the indigenous burial practices.
          </li>
          <li>
            <strong>Sumaguing Cave:</strong> Embark on an exciting spelunking adventure in the magnificent Sumaguing Cave, known for its stunning rock formations.
          </li>
          <li>
            <strong>Echo Valley:</strong> Discover Echo Valley's natural beauty and experience the thrill of hearing your voice echo through the mountains.
          </li>
          <li>
            <strong>Mt. Kiltepan Viewpoint:</strong> Enjoy a breathtaking sunrise view at Mt. Kiltepan Viewpoint, overlooking the picturesque Sagada landscape.
          </li>
          <li>
            <strong>Bomod-ok Falls:</strong> Immerse yourself in the beauty of Bomod-ok Falls, a majestic waterfall surrounded by lush greenery.
          </li>
        </ul>
      </div>
     
    </div>
  </header>
  <section id="inclusion" class="inclusion-section">
    <h2>Package Inclusion:</h2>
    <div class="pack_inc" class="pack-inclusions">
    <ul>
      <li>2 nights' accommodation</li>
      <li>Guided tours to Sagada's renowned limestone caves, unveiling ancient formations and mystical wonders.</li>
      <li>Kiltepan Viewpoint Sunrise Experience.</li>
      <li>Cultural Immersion Activities</li>
    </ul>
    <em>Note: Itineraries are subject to change based on availability and local conditions.</em>
    </div>
    </section>


  <section class="itinerary-section">
    <h2 class="itinerary-title">Daily Itinerary</h2>
    <div class="itinerary-item">
      <img class="itinerary-img" src="https://4.bp.blogspot.com/-KBzfbc_Chss/UFwBH2DWdfI/AAAAAAAAKls/F1DXQ51kvy4/s1600/00.jpg" alt="Hanging Coffins">
      <div>
        <h3>Day 1: Cultural Immersion and Arrival</h3>
        <p>Arrive in Sagada and settle into your cozy accommodations. Engage in cultural immersion activities, connecting with the local community and gaining insight into the unique traditions that shape Sagada's identity.</p>
      </div>
    </div>

    <div class="itinerary-item reverse">
      <img class="itinerary-img" src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhBStcHbs7ZMLGXUEoSAzd61CnGIy4RDNmRnSrwUtLFA0Idb14Abr65_YufRJqf93A0B6HSKfWMuPWC7226IF9wChoX6VSxXgIEtS5OmM_wH_kIE_C3dEe29bEvlsvSgTBpeCa0QfV1K47yMPhOORKvKdlS2yB_BTLniYZ7eA8CPLEeHHkb5YWVNHjn9w/s2033/Sumaguing%20Cave%20Sagada.jpg" alt="Sumaguing Cave">
      <div>
        <h3>Day 2: Cave Exploration and Kiltepan Sunrise
        </h3>
        <p>Venture into the mystical underworld with guided cave exploration tours, discovering the ancient formations that lie beneath the surface. In the evening, anticipate the breathtaking Kiltepan Viewpoint sunrise, where the mountains unveil a mesmerizing spectacle.

        </p>
      </div>
    </div>

    <div class="itinerary-item">
      <img class="itinerary-img" src="https://i0.wp.com/farm8.staticflickr.com/7013/6420186451_6722c47961_z.jpg?resize=640%2C425" alt="Echo Valley">
      <div>
        <h3>Day 3: Serenity in Nature and Departure</h3>
        <p>Savor the serenity of Sagada's landscapes on your final day. Take in the tranquil surroundings and, optionally, participate in guided tours or authentic local experiences. As the day concludes, bid farewell to Sagada, carrying the memories of a mountain retreat filled with culture, exploration, and natural beauty.</p>
      </div>
    </div>
    <div>
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
   <button style="justify-self:end;color:white; background:#30a527; border:none; padding:10px 20px;  border-radius:12px;width:fit-content;" onclick="toggleWishlist('sagada', '4', <?php echo isset($userId) ? $userId : 'null'; ?>)" id="wishlist-button">
  <?php 
  if(!isset($_SESSION['login'])){
    echo '<i id="love-icon"   class="bx bx-heart unfilled"></i>'." Add To Wishlist";
  }else{
    $select=mysqli_query($db, "SELECT * FROM wishlist WHERE user='$userId' AND carvid='4' AND status='1'");
           if(mysqli_num_rows($select)>0){
           echo '<i id="love-icon" style="font-size:18px;" class="bx bxs-heart filled"></i>'." Add To Wishlist"; }else{ echo '<i id="love-icon"  class="bx bx-heart unfilled"></i>'."Add To Wishlist";}}?>
    
  </button>
   </span>
  

    
  </button>
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
      var currentState = xhr.responseText;

      // Toggle the filled/empty state based on the current state
      if (currentState == `<!-- host  dayotravelaccess.online
userane   u288427758.DayoAccessuser
port        21
password @dM1n1234 -->added to wishlist`) {
        loveIcon.classList.remove("unfilled");
        loveIcon.classList.remove("bx-heart");
        loveIcon.classList.add("bxs-heart");
        loveIcon.classList.add("filled");

        //bx-heart

      } else {
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
      width: 100%;
      height: 70%;
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
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .itinerary-section {
      background-color: #e2f3e2;
      padding: 10px;
      text-align: center;
    }

    .image-overlay h1 {
      font-size: 48px;
      color: green;
      text-shadow: -1px -1px 0 white, 1px -1px 0 white, -1px 1px 0 white, 1px 1px 0 white;
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
      justify-content: flex-start; /* Modified */
    }

    .itinerary-img {
      width: 400px;
      height: 300px;
      object-fit: cover;
      border-radius: 10px;
    }

    .itinerary-item.reverse {
      flex-direction: row-reverse;
      justify-content: flex-end; /* Modified */
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

 
  </section>
<?php include ("footer.php");?>

<script src="wishlist.js"></script>

</body>
</html>