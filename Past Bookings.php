<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="" />
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:image" content="" />
    <meta name="format-detection" content="telephone=no">

    <link rel="icon" href="imagess/DAYO LOGO.png" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="imagess/DAYO LOGO.png" />

    <title>Dayo Travel Access</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="css/assets.css">
    <link rel="stylesheet" type="text/css" href="vendors/calendar/fullcalendar.css">
    <link rel="stylesheet" type="text/css" href="css/typography.css">
    <link rel="stylesheet" type="text/css" href="css/shortcodes/shortcodes.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/dashboard.css">
    <style type="text/css">
        .btn.dropdown-toggle.btn-default:hover {
            color: #000 !important;
        }

        .btn.dropdown-toggle.btn-default:focus {
            color: #000 !important;
        }

        .widget-card .icon {
            position: absolute;
            top: auto;
            bottom: -20px;
            right: 5px;
            z-index: 0;
            font-size: 65px;
            color: rgba(0, 0, 0, 0.15);
        }

        tbody tr:hover {
            background-color: #d4d4d4;
        }
    </style>
</head>
<style type="text/css">
    /*===================== 	Premery bg color =====================*/

    :root {
        --primary: #18866a;
        --sc-primary: #18866a;
    }

    /* Hex */

    .bg-primary,
    .btn,
    .comments-area .comment-form p input[type="submit"],
    .pagination>.active>a,
    .pagination>.active>span,
    .pagination>.active>a:hover,
    .pagination>.active>span:hover,
    .pagination>.active>a:focus,
    .pagination>.active>span:focus,
    .feature-filters .active>[class*="btn"],
    .list-num-count>li:before,
    .pagination-bx.primary .pagination>li>a,
    .pagination-bx.primary .pagination>li>span,
    button.back-to-top,
    .rev-btn {
        background-color: #30a527;
    }

    /*Hex color :hover */

    .btn:active,
    .btn:hover,
    .btn:focus,
    .active>.btn,
    .bg-primary-dark,
    .pagination>li>a:hover,
    .pagination>li>span:hover,
    .pagination>li>a:focus,
    .pagination>li>span:focus,
    .pagination>.active>a,
    .pagination>.active>span,
    .pagination>.active>a:hover,
    .pagination>.active>span:hover,
    .pagination>.active>a:focus,
    .pagination>.active>span:focus,
    .sidenav .closebtn:hover,
    .sidenav .closebtn:focus,
    .owl-btn-1.primary .owl-prev:hover,
    .owl-btn-1.primary .owl-next:hover,
    .owl-btn-2.primary .owl-prev:hover,
    .owl-btn-2.primary .owl-next:hover,
    .pagination-bx.primary .pagination>li>a:hover,
    .pagination-bx.primary .pagination>li>span:hover,
    .pagination-bx.primary .pagination>li.active>span,
    .pagination-bx.primary .pagination>li.active>a {
        background-color: #30a527;
    }

    /*===================== 	Premery text color =====================*/

    a,
    .text-primary,
    .primary li:before,
    .menu-links .nav>li.active>a,
    .menu-links .nav>li:hover>a,
    .menu-links .nav>li .mega-menu>li ul a:hover,
    .menu-links .nav>li .sub-menu li:hover>a,
    footer a:active,
    footer a:focus,
    footer a:hover,
    footer h1 a,
    footer h2 a,
    footer h3 a,
    footer h4 a,
    footer h5 a,
    footer h6 a,
    footer p a,
    .testimonial-1 .testimonial-position,
    .acod-head a:after,
    .acod-head a,
    .acod-head a:hover,
    .acod-head a.collapsed:hover,
    .ttr-tabs .nav-tabs>li>a i,
    h1 a:hover,
    h2 a:hover,
    h3 a:hover,
    h4 a:hover,
    h5 a:hover,
    h6 a:hover,
    .btn.outline,
    .btn-link:hover {
        color: #18866a;
    }

    /*===================== 	Secondery bg color =====================*/

    .bg-secondry {
        background-color: #30a527;
    }

    /*===================== 	Secondery text color =====================*/

    .text-secondry {
        color:#30a527;
    }

    .ovpr-light:after,
    .ovpr-middle:after,
    .ovpr-dark:after,
    .ovpr:after,
    .bg-primary {
        background-color: #30a527;
    }

    .footer-top,
    .footer-bottom {
        background-color: #30a527;
    }

    .ovbl-middle::after,
    .ovbl-light::after,
    .ovbl-dark::after {
        /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#18866a+0,#18866a+50,110038+100 */
        background: #30a527;
        /* Old browsers */
        background: -moz-linear-gradient(45deg, #30a527 0%, #30a527 50%, #30a527 100%);
        /* FF3.6-15 */
        background: -webkit-linear-gradient(45deg, #30a527 0%, #30a527 50%, #30a527 100%);
        /* Chrome10-25,Safari5.1-6 */
        background: linear-gradient(45deg, #30a527 0%, #30a527 50%, #30a527 100%);
        /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#30a527', endColorstr='#30a527', GradientType=1);
        /* IE6-9 fallback on horizontal gradient */
    }

    .ttr-notify-header::after,
    .widget-bg1,
    .ttr-search-bar,
    .ttr-header,
    .ovpr-dark:after,
    .pricingtable-main,
    .account-head:after {
        /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#18866a+0,3f189a+100 */
        background: #30a527;
        /* Old browsers */
        background: -moz-linear-gradient(45deg, #30a527 0%,#30a527 100%);
        /* FF3.6-15 */
        background: -webkit-linear-gradient(45deg, #30a527 0%,#30a527 100%);
        /* Chrome10-25,Safari5.1-6 */
        background: linear-gradient(45deg, #30a527 0%, #30a527 100%);
        /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#30a527', endColorstr='#30a527', GradientType=1);
        /* IE6-9 fallback on horizontal gradient */
    }

    /* Secondry Color */

    .portfolio-bx .portfolio-info-bx,
    .btn.outline:hover,
    .course-info-list ul li a.active,
    .course-info-list ul li a:hover,
    .btn,
    .profile-tabnav .nav li a.active,
    button.back-to-top,
    .upcoming-event-carousel.owl-btn-1 .owl-prev,
    .upcoming-event-carousel.owl-btn-1 .owl-next,
    .courses-carousel .owl-nav .owl-next,
    .courses-carousel .owl-nav .owl-prev,
    .recent-news-carousel .owl-nav .owl-next,
    .recent-news-carousel .owl-nav .owl-prev,
    .testimonial-carousel .owl-nav .owl-next,
    .testimonial-carousel .owl-nav .owl-prev {
        background-color: #30a527;
        color: #fff;
    }

    .footer_widget ul li a:hover,
    [class*="ovbl-"] .counter-style-1 .counter-text,
    .header-transparent .secondary-menu .btn-link:hover,
    .header-transparent .menu-links .nav>li:hover>a,
    .header-transparent .menu-links .nav>li.active>a {
        color: #18866a;
    }

    .course-info-list ul li a.active:hover,
    .course-info-list ul li a:hover,
    .btn:hover,
    .profile-tabnav .nav li a.active:hover,
    button.back-to-top:hover,
    .upcoming-event-carousel.owl-btn-1 .owl-prev:hover,
    .upcoming-event-carousel.owl-btn-1 .owl-next:hover,
    .courses-carousel .owl-nav .owl-next:hover,
    .courses-carousel .owl-nav .owl-prev:hover,
    .recent-news-carousel .owl-nav .owl-next:hover,
    .recent-news-carousel .owl-nav .owl-prev:hover,
    .testimonial-carousel .owl-nav .owl-next:hover,
    .testimonial-carousel .owl-nav .owl-prev:hover {
        background-color: #18866a;
        color: #fff;
    }

    .heading-bx.left .title-head {
        border-color: #18866a;
    }
</style>

<body  style="background-color: #FBFBFB;">

<?php include "header1.php";?>
    
</div>
<main class="ttr-wrapper" style="background-color: #FBFBFB;">
<?php include 'subh.php'; ?>

                <!--<div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-6">
			<a href="reports"><div class="widget-card widget-bg4" style="background-image: linear-gradient(to right, #42E695, #3BB2B8);">	
				<div class="icon">
					<i class="ti-agenda"></i>
				</div>				 
				<div class="wc-item">
					<h3 class="wc-title">
						Revenue Today
					</h3>
					<span class="wc-des">
						MHO Infanta
					</span>
					<span class="wc-stats">
						₱<span class="counter"></span>
					</span>		
				</div>				      
			</div></a>-->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 m-b30">
                <br>
                <div class="heading-bx left">
                    <h2 class="m-b10 title-head">Travel<span>Records</span></h2>
                </div>
                <section>
                    
                     <style>
        body {
            font-family: Arial, sans-serif;
        }

        table {
            width: 100%;
            table-layout: fixed;
            border-collapse: collapse;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: auto;
            overflow-x: auto;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 15px;
            text-align: left;
            position: relative; /* Add position relative to enable absolute positioning for buttons */
        }

        th {
            background-color: #f2f2f2;
        }

        img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            transition: transform 0.3s;
        }

        img:hover {
            transform: scale(1.2);
            cursor: pointer;
        }

        .action-buttons, .review-input {
            display: flex;
            flex-direction: column; /* Display buttons vertically */
            gap: 10px;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
        }

        .view-button, .rebook-button, .share-button {
            width: 100%; /* Button takes full width of the cell */
            padding: 8px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .add-review-button {
            padding: 8px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .view-button:hover, .rebook-button:hover, .share-button:hover, .add-review-button:hover {
            background-color: #45a049;
        }

        .upload-receipt-input {
            display: none;
        }

        .upload-receipt-label {
            width: 100%;
            padding: 8px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-align: center;
        }

        .upload-receipt-label:hover {
            background-color: #45a049;
        }

        /* Hide the "No file chosen" text */
        .upload-receipt-input::-webkit-file-upload-button {
            visibility: hidden;
        }

        .upload-receipt-input::before {
            content: 'Select File';
            color: white;
            background-color: #4CAF50;
            display: inline-block;
            padding: 8px;
            border-radius: 4px;
            cursor: pointer;
        }

        .upload-receipt-input:hover::before {
            background-color: #45a049;
        }

        .paid-status, .cancel-status {
            font-weight: bold;
            border-radius: 4px;
            padding: 5px 10px;
        }

        .paid-status {
            background-color: #4CAF50;
            color: white;
        }

        .cancel-status {
            background-color: #f44336;
            color: white;
        }

        .image-popup {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            justify-content: center;
            align-items: center;
            z-index: 1; /* Bring to the front */
        }

        .popup-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            position: relative;
            max-width: 80%;
            max-height: 80%;
            overflow: auto;
        }

        .close-button {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 20px;
            cursor: pointer;
        }

        .popup-img {
            max-width: 100%;
            max-height: 100%;
            border-radius: 8px;
        }

        .popup-img:hover {
            transform: none;
            cursor: default;
        }

        .review-popup {
            display: flex;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            justify-content: center;
            align-items: center;
            z-index: 2; /* Bring above the image popup */
        }

        .review-popup .popup-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            position: relative;
            width: 50%; /* Adjust the width as needed */
            max-height: 80%;
            overflow: auto;
        }

        .review-box textarea {
            width: 100%;
            box-sizing: border-box;
            margin-bottom: 10px;
        }

        .review-box button {
            padding: 8px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        
    </style>
</head>
<body>
    <div class="image-popup">
        <div class="popup-content">
            <span class="close-button" onclick="closePopup()">&times;</span>
            <img id="popupImage" src="" alt="Popup Image" class="popup-img">
        </div>
    </div>

    <!-- <div class="filter-container">
        <label for="date-filter">Sort by Date:</label>
        <select id="date-filter" onchange="sortTable()">
            <option value="current">Current Date</option>
            <option value="oldest">Oldest Date</option>
        </select>
    </div> -->
    <table>
        <thead>
            <tr>
                <th>Title</th>
                <!-- <th>Package</th> -->
                
                <!-- <th>Email</th> -->
                <th>Date</th>
                <th>Name</th>
                <th>Review</th>
                <th>Booking Status</th>
                <th>Cancle Booking</th>
                <th>Payment Status</th>
                
                <th>Action</th>
            </tr>
        </thead>
        
        <tbody>
            <?php
          $selecting=mysqli_query($db,"SELECT * FROM reserve_booking2 WHERE email='$email' AND canc='' AND destination!='' ");
          if(mysqli_num_rows($selecting)>0){
            $id=1;
            $n=$id+1;
            while($row=mysqli_fetch_array($selecting)){

           
            ?>
            <tr>
                <td><?php echo $id++; ?></td>
                <!-- <td><img src="<?php //echo $row['package'].".png"; ?> " alt="package Image" onclick="openPopup('<?php //echo $row['package'].".png"; ?>')"></td> -->
                <td><?php echo $row['date'];  ?></td>
                <td><?php  echo $row['fm2']; ?></td>
                <!-- <td><?php // echo $row['em2']; ?></td> -->
                <td class="review-input" onclick="openReviewWindow(<?php echo $row['id']; ?>)">
                    <button class="add-review-button">Add Review</button>
                </td>
                <td class="travel-status-buttons">
                    <?php if($row['status']==1){
                        echo "<p class='cancel-status'>Pending</p>";
                    }else if($row['status']==2){
                       
                        echo '<p class="paid-status">✔Accepted</p>';
                    }else if ($row['status']==3){
                      echo'<p class="cancel-status">✘Rejected</p>';
                    } ?>
                   
                
                </td>
                <td><a class="cancel-status" href="#" onclick="confirmCancellation(<?php echo $row['id']; ?>)">✔Cancel</a></td>

                <td class="payment-status" id="paidStatus1">
                   <?php if($row['payments']== '' AND $row['status']=='2'){
                   echo '<a style="font-size:12px;" class="paid-status" href="plan_2.php?sourceurl='.uniqid().uniqid().uniqid().uniqid().rand(111111111,99999999).'&alt='.uniqid().uniqid().'&id=' . $row["id"] .'&'.uniqid().uniqid(). '">make payment</a>';

                   }else if($row['payments']== 'paid'){
                    echo '<p class="paid-status">Paid</p>';
                   }else if($row['status']=='3' AND $row['payments']== '' ){
                    echo "<p class='cancel-status'>Rejected</p>";
                   }else{
                      echo '<p class="paid-status">Under Processing</p>';
                   } ?> 
                </td>
                <td class="action-buttons">

                    <a style='text-align:center;' class="view-button" href='<?php echo 'packages'.".php"; ?>'>View</a>
                    <a class="rebook-button" href="#" onclick="confirmAndRedirect(<?php echo $row['id']; ?>);">Re-book</a>

<script>
function confirmAndRedirect(id) {
    var confirmation = confirm("Are you sure you want to rebook?");
    
    if (confirmation) {
       
        document.querySelector('.rebook-button').setAttribute("disabled", "disabled");
        
        
        window.location.href = 'rebook.php?id=' + id;
    }
   
}
</script>


                 <!-- Assuming you have a function named 'share' -->
<!-- Add the 'share-button' class to the button -->
<button class="share-button" onclick="copyLink(this, '<?php echo 'packages'; ?>')">Copy Link To Share</button>

<script>
function copyLink(button, packageName) {
    // Construct the relative URL based on the package name
    var linkToCopy = 'https://dayotravelaccess.online/' + packageName + '.php';

    // Create a temporary textarea element and set its value to the link
    var tempTextarea = document.createElement("textarea");
    tempTextarea.value = linkToCopy;

    // Append the textarea to the DOM
    document.body.appendChild(tempTextarea);

    // Select the text in the textarea
    tempTextarea.select();
    tempTextarea.setSelectionRange(0, 99999); // For mobile devices

    // Copy the selected text to the clipboard
    document.execCommand("copy");

    // Remove the temporary textarea from the DOM
    document.body.removeChild(tempTextarea);

    // Change the button text to "Copied"
    button.textContent = "Copied";

    // After 5 seconds, change the button text back to "Copy Link"
    setTimeout(function() {
        button.textContent = "Copy Link";
    }, 5000);
}
</script>





                </td>
            </tr>
            <?php
           
 }
}
            ?>
            <!-- Add more rows as needed -->
        </tbody>
    </table>
 <?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $review=$_POST['review'];
    $pack=$_POST['packid'];
    $inse=mysqli_query($db,"UPDATE reserve_booking2 SET review='$review' WHERE email='$email' AND id='$pack' ");
            if($inse){?>
            <script>
                alert('review submitted');
            </script>

      <?php      }
}

?>
<script>
function confirmCancellation(bookingId) {
   
    var isConfirmed = confirm("Are you sure you want to cancel this booking?");
    if (isConfirmed) {
        window.location.href = "canc.php?id=" + bookingId;
    }

}
</script>


    <script>
        function viewDetails(rowNumber) {
            alert('View Details for row ' + rowNumber);
        }

        function rebook(rowNumber) {
            alert('Rebook for row ' + rowNumber);
        }

        // function share(rowNumber) {
        //     alert('Share for row ' + rowNumber);
        // }

        
        function viewDetails(rowNumber) {
            alert('View Details for row ' + rowNumber);
        }

        function rebook(rowNumber) {
            
            alert('Rebook for row ' + rowNumber);
        }

        // function share(rowNumber) {
        //     alert('Share for row ' + rowNumber);
        // }

        function uploadReceipt(rowNumber, input) {
            // Handle the upload receipt logic here
            var uploadStatus = document.querySelector('#paidStatus' + rowNumber);
            var uploadButton = document.querySelector('#paidStatus' + rowNumber + ' .upload-receipt-label');

            // Logic to handle receipt upload (you may replace this with your own logic)
            // For simplicity, this example just changes the status to "Paid" and adds a check mark
            uploadStatus.textContent = 'Paid';
            uploadStatus.classList.add('paid-status');
            uploadButton.style.display = 'none';

            // You can access the uploaded file using 'input.files[0]'
            var uploadedFile = input.files[0];
            console.log('Uploaded file:', uploadedFile);
        }

        function updateTravelStatus(rowNumber, isPaid) {
            var travelStatus = document.querySelector('.travel-status-buttons');
            var statusButton = document.createElement('button');
            statusButton.textContent = isPaid ? '✔ Successful' : '✘ Cancelled';
            statusButton.className = isPaid ? 'paid-status' : 'cancel-status';
            statusButton.onclick = function () {
                updateTravelStatus(rowNumber, !isPaid);
            };
            travelStatus.innerHTML = '';
            travelStatus.appendChild(statusButton);
        }

        function deleteRow(rowNumber) {
            var table = document.querySelector('table');
            table.deleteRow(rowNumber);
        }

        function deleteTable() {
            var table = document.querySelector('table');
            table.querySelectorAll('tbody tr').forEach(function (row) {
                row.remove();
            });
        }

        function sortTable() {
            var table = document.querySelector('table');
            var rows = Array.from(table.rows).slice(1); // Exclude the header row

            var sortByDate = document.getElementById('date-filter').value === 'current';

            rows.sort(function (a, b) {
                var dateA = new Date(a.cells[2].textContent);
                var dateB = new Date(b.cells[2].textContent);

                if (sortByDate) {
                    return dateB - dateA; // Sort from current date to oldest date
                } else {
                    return dateA - dateB; // Sort from oldest date to current date
                }
            });

            // Clear the table body
            table.querySelector('tbody').innerHTML = '';

            // Append the sorted rows to the table body
            rows.forEach(function (row) {
                table.querySelector('tbody').appendChild(row);
            });
        }

        function openPopup(imageSrc) {
            var popup = document.querySelector('.image-popup');
            var popupImage = document.getElementById('popupImage');

            popupImage.src = imageSrc;
            popup.style.display = 'flex';
        }

        function closePopup() {
            var popup = document.querySelector('.image-popup');
            popup.style.display = 'none';
        }

        function openReviewWindow(rowNumber) {
            var reviewPopup = document.createElement('div');
            reviewPopup.classList.add('review-popup');
            reviewPopup.innerHTML = `
                <div class="popup-content">
                    <span class="close-button" onclick="closeReviewPopup()">&times;</span>
                    <div class="review-box">
                    <form method='POST'>
                        <textarea name='review' placeholder="Add Review"></textarea>
                        <input type='hidden' name='packid' value='`+rowNumber+`' />
                        <button name='submit'  class="add-review-button">Submit Review</button>
                        </form>
                    </div>
                </div>
            `;
            document.body.appendChild(reviewPopup);
        }

        function closeReviewPopup() {
            var reviewPopup = document.querySelector('.review-popup');
            reviewPopup.parentNode.removeChild(reviewPopup);
        }

        function submitReview(rowNumber) {
            // Handle the review submission logic here
            alert('Review submitted for row ' + rowNumber);
            closeReviewPopup();
        }
    </script>
                    </section>



            </div>
        </div>
        </div>
    </main>
    <div class="ttr-overlay"></div>
    <script src="js/jquery.min.js"></script>
    <script type="text/javascript">
        $('#deyt').change(function() {
            var date = $(this).val();
            $("#deytend").attr("min", date);
        });
    </script>
    <script src="vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendors/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
    <script src="vendors/magnific-popup/magnific-popup.js"></script>
    <script src="vendors/counter/waypoints-min.js"></script>
    <script src="vendors/counter/counterup.min.js"></script>
    <script src="vendors/imagesloaded/imagesloaded.js"></script>
    <script src="vendors/masonry/masonry.js"></script>
    <script src="vendors/masonry/filter.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.js"></script>
    <script src='vendors/scroll/scrollbar.min.js'></script>
    <script src="js/functions.js"></script>
    <script src="vendors/chart/chart.min.js"></script>
    <script src="js/admin.js"></script>
    <script src='vendors/calendar/moment.min.js'></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap4.min.js"></script>
    <script src="vendors/bootstrap/js/popper.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            var charge = 0;
            $(".charged").each(function() {
                if ($(this).text() != "0") {
                    charge = charge + parseInt($(this).text().slice(2));
                }
            });
            if (isNaN(charge)) {
                charge = 0;
            }
            $('#total-charged').html('Total Charged: ₱' + charge);


            var total = 0;
            $(".paid").each(function() {
                if ($(this).text() != "0") {
                    total = total + parseInt($(this).text().slice(2));
                }
            });
            if (isNaN(total)) {
                total = 0;
            }
            $('#total-price').html('Total Paid: ₱' + total);


            $('#table').DataTable();
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</body>

</html>