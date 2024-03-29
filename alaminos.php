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
  <title>Alaminos City Tour Package</title>
  <style>
    header {
      position: relative;
      text-align: center;
    }

    .full-image {
      width: 100%;
      opacity: 0.7;
      border-radius: 0px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    }

    .image-overlay {
      position: absolute;
      width: 100%;
      height: 80%;
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
    .itinerary-item {
  display: flex;
  align-items: center;
  gap: 20px;
  justify-content: flex-end;
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

.itinerary-item.reverse {
  flex-direction: row-reverse;
  justify-content: flex-start;
}

.itinerary-item.enchanted-cave {
  flex-direction: row;
  justify-content: flex-start;
}

h2{
  font-style: italic;
}

.pack_inc{
    font-size: 20px;
    }
  </style>
</head>
<body>
  <header>
    <img class="full-image" src="https://media-cdn.tripadvisor.com/media/photo-c/1280x250/0c/48/b6/a9/oh-that-view.jpg" alt="Full Image">
    <div class="image-overlay">
      <a href="packages.php"><img src="IMAGES/DAYO LOGO.png" width="150" 
        height="150"></a>
      <h1>Alaminos Adventure Tour</h1>
      <h2>Embark on an unforgettable journey with our Alaminos Adventure Tour Packages, crafted to showcase the hidden gems of this enchanting destination. Nestled in the Philippines, Alaminos offers a unique blend of natural wonders and cultural experiences. Choose from our curated packages to discover the mesmerizing landscapes of Hundred Islands, the thrill of water adventures, and the rich local culture.</h2>
      <div class="explanation">
        <strong>Places to visit in Alaminos:</strong>
        <ul>
          <li>
            <strong>Hundred Islands National Park:</strong> Explore this natural wonder and enjoy island hopping, snorkeling, and swimming in the crystal-clear waters.
          </li>
          <li>
            <strong>Minor Basilica of Our Lady of the Rosary of Manaoag:</strong> Visit this beautiful basilica and experience its religious and historical significance.
          </li>
          <li>
            <strong>Cabongaoan Beach and Death Pool:</strong> Relax on the pristine beach and witness the unique Death Pool phenomenon, a natural pool with healing properties.
          </li>
          
          <li>
            <strong>Enchanted Cave:</strong> Discover the enchanting beauty of this cave and take a refreshing dip in its cool waters.
          </li>
        </ul>
      </div>
     
    </div>
  </header>

  <section id="inclusion" class="inclusion-section">
    <h2>Package Inclusion:</h2>
    <div class="pack_inc" class="pack-inclusions">
    <ul>
      <li>Accommodations for the duration of your adventure.</li>
      <li>Guided tours for island-hopping, cave exploration, and water activities.
      </li>
      <li>Kayaking and snorkeling equipment.</li>
      <li>Cultural experiences and community visits.
      </li>
    </ul>
    <em>Note: Itineraries are subject to change based on availability and local conditions.</em>
    </div>
    </section>
  <section class="itinerary-section">
    <h2 class="itinerary-title">Daily Itinerary</h2>
    <div class="itinerary-item">
        <img class="itinerary-img" src="https://seepangasinan.com/wp-content/uploads/2021/06/LRM_EXPORT_36208234219415_20181112_195035715-315x325.jpg" alt="Alaminos">
        <div>
          <h3>Day 1: Arrival and Island Welcome</h3>
          <p>Your adventure kicks off as you touch down in Alaminos. After a seamless check-in, the day offers a leisurely exploration of the town, introducing you to the local culture and tantalizing your taste buds with authentic Filipino cuisine. This initial day sets the tone for the adventure that awaits.</p>
        </div>
      </div>
      
      <div class="itinerary-item reverse">
        <img class="itinerary-img" src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/29/24/02/0f/caption.jpg?w=300&h=300&s=" alt="Hundred Islands">
        <div>
          <h3>Day 2: Hundred Islands Island-Hopping Extravaganza</h3>
          <p>Rise early for a day of exploration in the Hundred Islands National Park. The full-day island-hopping extravaganza includes guided tours, snorkeling amidst vibrant marine life, and a beachside picnic. Return to your accommodations in the evening to unwind and reflect on the day's adventures.</p>
        </div>
      </div>
      
      <div class="itinerary-item">
        <img class="itinerary-img" src="https://ilovepangasinan.com/wp-content/uploads/2017/01/hinp-kayaking-2.jpg" alt="Kayaking">
        <div>
          <h3>Day 3: Cave Exploration and Kayaking
          </h3>
          <p>Embark on a cave exploration expedition, marveling at the geological wonders within Alaminos. Afternoon brings the thrill of kayaking through serene waters, revealing hidden coves and pristine beaches. The day concludes with a relaxing evening, leaving you rejuvenated for the cultural experiences ahead.</p>
        </div>
      </div>
      
      <div class="itinerary-item reverse">
        <img class="itinerary-img" src="https://lh3.googleusercontent.com/p/AF1QipOPcBCuAkPeNV_5-0r_z5PwPtTcsURoi1IbjM94" alt="shops">
        <div>
          <h3>Day 4:  Farewell</h3>
          <p>Immerse yourself in the local culture on Day 4, as you visit traditional villages, engage with communities, and savor authentic delicacies. The afternoon allows for leisure or souvenir shopping, culminating in a heartfelt farewell lunch. Share stories and memories, reflecting on the cultural richness experienced throughout your Alaminos adventure.</p>
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
          <button style="justify-self:end; color:white; background:#30a527; border:none; padding:10px 20px;  border-radius:12px;width:fit-content;" onclick="toggleWishlist('alaminos', '2', <?php echo isset($userId) ? $userId : 'null'; ?>)" id="wishlist-button">
  <?php 
  if(!isset($_SESSION['login'])){
    echo '<i id="love-icon" class="bx bx-heart unfilled"></i>'." Add To Wishlist";
  }else{
    $select=mysqli_query($db, "SELECT * FROM wishlist WHERE user='$userId' AND carvid='2' AND status='1' ");
           if(mysqli_num_rows($select)>0){
           echo '<i id="love-icon" class="bx bxs-heart filled"></i>'." Add To Wishlist"; }else{ echo '<i id="love-icon"  class="bx bx-heart unfilled"></i>'."Add To Wishlist";}}?>
    
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
// console.log(userId);
      // Check the current state of the wishlist for the user and package
      var currentState = xhr.responseText;
// console.log(currentState);
let commentToRemove = `<!-- host dayotravelaccess.online
    userane u288427758.DayoAccessuser
    port 21
    password @dM1n1234 -->`;
    let outputString = currentState.replace(commentToRemove, '').trim();

console.log(outputString);
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
 <!--Footer-->
 <?php include ("footer.php");?>

 <!-- <script src="wishlist.js"></script> -->

  <!-- <script src="script.js"></script>/ -->

</body>

</html>