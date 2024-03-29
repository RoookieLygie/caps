<?php
include 'connection.php';
?>

<?php  include("header.php");?>
                
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
    <img class="full-image" src="https://ik.imagekit.io/tvlk/blog/2017/11/Calle-Crisologo-by-night-750x469.jpg?tr=dpr-2,w-675" alt="Full Image">
    <div class="image-overlay">
      <a href="packages.php"><img src="IMAGES/DAYO LOGO.png" width="150" 
        height="150"></a>
      <h1>Vigan Heritage Voyage</h1>
            <h2>Embark on a captivating 3-day journey through the cobblestone streets and historic charm of Vigan. Our Heritage Voyage Package invites you to explore UNESCO-listed sites, marvel at Spanish colonial architecture, and savor authentic local cuisine.</h2>

      <div class="explanation">
        <strong>Places to visit in Vigan:</strong>
        <ul>
          <li>
            <strong>Calle Crisologo:</strong> Explore the charming cobblestone streets of Calle Crisologo and admire the well-preserved Spanish colonial architecture.
          </li>
          <li>
            <strong>National Museum of the Philippines:</strong> Visit the National Museum of the Philippines in Vigan and explore its exhibits showcasing the country's art, history, and culture.
          </li>
          <li>
            <strong>Vigan Cathedral:</strong> Discover the beauty of Vigan Cathedral, also known as the Metropolitan Cathedral of the Conversion ofSt. Paul the Apostle. Marvel at its stunning architecture and peaceful atmosphere.
          </li>
          <li>
            <strong>Baluarte:</strong> Experience the wildlife at Baluarte, a zoological park where you can see various animals up close, including tigers, birds, and reptiles.
          </li>
          <li>
            <strong>Hidden Garden:</strong> Take a leisurely stroll through Hidden Garden, a lush green oasis filled with beautiful plants, flowers, and garden sculptures.
          </li>
        </ul>
      </div>
      
    </div>
  </header>
<section id="inclusion" class="inclusion-section">
<h2>Package Inclusion:</h2>
<div class="pack_inc" class="pack-inclusions">
<ul>
  <li>2 nights' accommodation in Vigan's heritage district.</li>
  <li>Expert-guided tours to Calle Crisologo, Vigan Cathedral, Plaza Salcedo, and more.</li>
  <li>Calesa ride, cultural show, and zoo visit.</li>
  <li>Pottery-making experience and farewell dinner.</li>
</ul>
<em>Note: Itineraries are subject to change based on availability and local conditions.</em>
</div>
</section>
  <section id="itinerary" class="itinerary-section">
    <h2 class="itinerary-title">Daily Itinerary</h2>
    <div class="itinerary-item">
      <img class="itinerary-img" src="https://gttp.imgix.net/316797/x/0/calle-crisologo-in-vigan.jpg?ar=1.91%3A1&w=1200&fit=crop" alt="Calle Crisologo">
      <div>
        <h3>Day 1: Arrival and Immersive Welcome</h3>
        <p>As you step into the time-honored city of Vigan, your journey begins with a warm welcome at your accommodation nestled in the heart of the heritage district. The morning unfolds with a leisurely exploration of the iconic Calle Crisologo, where cobblestone streets lead you through a visual feast of Spanish colonial houses frozen in time. In the afternoon, delve into the historical treasures at the Crisologo Museum, immersing yourself in the narratives of Vigan's past. As night falls, dine at a traditional eatery, savoring local flavors, and conclude the evening with a magical calesa ride, drifting through the softly illuminated streets that echo with tales of the past.</p>
      </div>
    </div>
    
    <div class="itinerary-item">
      <img class="itinerary-img" src="https://upload.wikimedia.org/wikipedia/commons/0/0c/Allan_Jay_Quesada-_DSC_0465_St._Paul_Metropolitan_Cathedral%2C_Vigan_City.jpg" alt="Vigan Cathedral">
      <div>
        <h3>Day 2: Cultural Riches and Gastronomic Bliss</h3>
        <p>The second day invites you to a morning of spiritual and historical resonance at the Vigan Cathedral and Plaza Salcedo. Continue your exploration at the Crisologo Museum, where artifacts weave a vivid tapestry of Vigan's heritage. After a delightful lunch at Café Leona, the afternoon unfolds with a leisurely stroll through Plaza Burgos, a visit to the St. Paul Metropolitan Cathedral, and a vibrant cultural show that brings traditional music and dance to life. As evening descends, indulge in a captivating dinner at the Hidden Garden Restaurant, a culinary haven tucked away in Vigan's historic embrace.</p>
      </div>
    </div>
  
    <div class="itinerary-item">
      <img class="itinerary-img" src="https://live.staticflickr.com/3604/3441610418_2402263e76_b.jpg" alt="Hidden Garden">
      <div>
        <h3>Day 3: Farewell to Vigan</h3>
<p>
  Awaken to the artistry of Vigan on the third day, immersing yourself in a hands-on pottery-making experience at the Pagburnayan Jar Factory. The adventure continues with a visit to the Baluarte Zoo, where you encounter a menagerie of animals against a picturesque backdrop. For a fitting farewell, enjoy a delightful lunch at a local restaurant, savoring the last flavors of Vigan. Optionally, scale the heights of the Bantay Bell Tower for panoramic views of the city. As the sun sets, bid farewell to Vigan, carrying with you the unseen beauty of its heritage, as your enriching journey comes to a close.
</p>      
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

   <button style="justify-self:end;color:white; background:#30a527; border:none; padding:10px 20px;  border-radius:12px;width:fit-content;" onclick="toggleWishlist('vigan', '3', <?php echo isset($userId) ? $userId : 'null'; ?>)" id="wishlist-button">
  <?php 
  if(!isset($_SESSION['login'])){
    echo '<i id="love-icon"   class="bx bx-heart unfilled"></i>'." Add To Wishlist";
  }else{
    $select=mysqli_query($db, "SELECT * FROM wishlist WHERE user='$userId' AND carvid='3' AND status='1'");
           if(mysqli_num_rows($select)>0){
           echo '<i id="love-icon" style="font-size:18px;" class="bx bxs-heart filled"></i>'." Add To Wishlist"; }else{ echo '<i id="love-icon"  class="bx bx-heart unfilled"></i>'."Add To Wishlist";}}?>
    
  </button>
   </span>
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

  </section>

  <?php  include("footer.php");?>

  <script src="wishlist.js"></script>

    <script src="script.js"></script>

</body>

</html>

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
      height: 100%;
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
      text-shadow:
        -1px -1px 0 white,
        1px -1px 0 white,
        -1px 1px 0 white,
        1px 1px 0 white;
    }

    .itinerary-title {
      font-size: 36px;
     
      
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

    .itinerary-item.reverse {
      flex-direction: row-reverse;
      justify-content: flex-start;
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

