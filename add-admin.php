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
        background-color: #18866a;
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
        background-color: #18866a;
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
        background-color: #18866a;
    }

    /*===================== 	Secondery text color =====================*/

    .text-secondry {
        color: #18866a;
    }

    .ovpr-light:after,
    .ovpr-middle:after,
    .ovpr-dark:after,
    .ovpr:after,
    .bg-primary {
        background-color: #18866a;
    }

    .footer-top,
    .footer-bottom {
        background-color: #121921;
    }

    .ovbl-middle::after,
    .ovbl-light::after,
    .ovbl-dark::after {
        /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#18866a+0,#18866a+50,110038+100 */
        background: #18866a;
        /* Old browsers */
        background: -moz-linear-gradient(45deg, #18866a 0%, #18866a 50%, #18866a 100%);
        /* FF3.6-15 */
        background: -webkit-linear-gradient(45deg, #18866a 0%, #18866a 50%, #18866a 100%);
        /* Chrome10-25,Safari5.1-6 */
        background: linear-gradient(45deg, #18866a 0%, #18866a 50%, #18866a 100%);
        /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#18866a', endColorstr='#18866a', GradientType=1);
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
        background: #18866a;
        /* Old browsers */
        background: -moz-linear-gradient(45deg, #18866a 0%, #18866a 100%);
        /* FF3.6-15 */
        background: -webkit-linear-gradient(45deg, #18866a 0%, #18866a 100%);
        /* Chrome10-25,Safari5.1-6 */
        background: linear-gradient(45deg, #18866a 0%, #18866a 100%);
        /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#18866a', endColorstr='#18866a', GradientType=1);
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
        background-color: #18866a;
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

   <?php include "header2.php";?>
    
</div>
<main class="ttr-wrapper" style="background-color: #FBFBFB;">
<?php include 'subh2.php'; ?>
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
              <section> <style>
                #profile-container {
                    max-width: 600px;
                    width: 100%;
                    padding: 20px;
                    background-color: #fff;
                    border-radius: 8px;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                }
        
                #profile-image-container {
                    width: 100%;
                    max-height: 200px;
                    overflow: hidden;
                    border-radius: 8px;
                    margin-bottom: 20px;
                }
        
                #profile-image {
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                }
        
                #image-input,
                #name-input,
                #email-input,
                #password-input,
                #bank-account-input {
                    margin-bottom: 10px;
                    padding: 10px;
                    width: 100%;
                    box-sizing: border-box;
                }
        
                #save-button {
                    margin-bottom: 10px;
                    padding: 10px;
                    width: 100%;
                    box-sizing: border-box;
                    background-color: #4CAF50;
                    color: white;
                    border: none;
                    border-radius: 4px;
                    cursor: pointer;
                }
        
                #save-button:hover {
                    background-color: #45a049;
                }
            </style>
        </head>
        <body>
            <div id="profile-container">
                <h1>Add New Admin</h1>
             
              
                <?php  
          if(isset($_POST['submit'])){
            $name = $_POST['username'];
            $pass = $_POST['password'];
            $em=$_POST['email'];
        
            $update = mysqli_query($db, "INSERT INTO  admin (fullname,password,email) VALUES ('$name','$pass','$em')");
               if($update){ echo "<script> 
                alert('New Admin Has Been Added'); 
                
              </script>";
                } else {
                echo "failed to add";
            }
        }
        ?>
            <center>
               
               <form method="POST" >
            
                <!-- <input type="file" accept="image/*" id="image-input" onchange="previewImage()"> -->
                <input type="text" name='username' id="name-input" placeholder="input name">
               
                <input type="text" name='password' id="password-input" placeholder="password">
                <input type="email" name='email' id="password-input" placeholder="email">
                
                <input type="submit" name="submit" id="save-button" value="Add Admin">
                <!-- <button id="save-button" name="submit" type='submit'>Save Changes</button> -->

            </form>
    </center>
            </div>
        
            <script>
                // function previewImage() {
                //     var input = document.getElementById('image-input');
                //     var image = document.getElementById('profile-image');
                //     var file = input.files[0];
        
                //     if (file) {
                //         var reader = new FileReader();
                //         reader.onload = function (e) {
                //             image.src = e.target.result;
                //         };
                //         reader.readAsDataURL(file);
                //     }
                // }
        
                // function saveChanges() {
                //     var name = document.getElementById('name-input').value;
                //     var email = document.getElementById('email-input').value;
                //     var password = document.getElementById('password-input').value;
                //     var bankAccount = document.getElementById('bank-account-input').value;
        
                //     // Send the data to the server for processing
                //     // This is where you would make an AJAX request to save the changes on the server
                //     // For simplicity, we're just logging the data to the console here
                //     console.log('Name:', name);
                //     console.log('Email:', email);
                //     console.log('Password:', password);
                //     console.log('Bank Account:', bankAccount);
                // }
            </script>
        </body>
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