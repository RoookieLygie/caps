<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dayo Travel Access</title>

        <!-- links--> 
        <link rel="stylesheet" href="styles.css"/>
        <!--Icon link-->
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
         <!-- font links--> 
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kalam&display=swap" rel="stylesheet">
        <style>
body{
    color: white;
}
              form {
            background-color: #197e1a9b;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(111, 19, 19, 0.1);
            padding: 20px;
            width: 300px;
            margin: 20px auto;
        }

         .footer h2 {
    color: #fff;
        }


       
        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #09651e;
        }

        .form-switch {
            text-align: center;
            margin-top: 30px;
        }

        .form-switch a {
            text-decoration: none;
            color: #09550b;
            font-weight: bold;
        }

      

  


 
        </style>
    </head>

<body>
    
 <nav>
        <div class="navbar">
           
                <!-- logo nav/ size adjust--> 
                <div class="logo-container">
                    <img src="IMAGES/DAYO LOGO.png" width="100" height="100">
                  </div>
                    

                    <i class='bx bx-x' onclick="hideMenu()"></i>
                    
                   
                    </div>
                
<section class="banner"></section>
<script type="text/javascript">
    window.addEventListener("scroll", function () {
      var header = document.querySelector("nav");
      header.classList.toggle("sticky", window.scrollY > 0);
    });
  </script>
  
                </div>
                
 </nav>
        </div>
    </section>



</div>
    <form  id="loginForm" method="POST">
        <?php
         session_start();
         include "connection.php";
         if(isset($_POST['login'])){
             $email=$_POST['email'];
             $password=$_POST['password'];
             $select=mysqli_query($db,"SELECT * FROM admin WHERE email='$email' AND password='$password'");
             if(mysqli_num_rows($select)>0){
                 $_SESSION['logi']="true";
                 $_SESSION['email']=$email;
                 header("Location:admin.php");
             }else{
                 echo " <h3 style='color:red';> wrong inputs </h3>";
             }
         
         }
        ?>
    <h2>Admin Login</h2>
    
    <label for="loginEmail">Email</label>
    <input name="email" type="email" required>

    <label for="loginPassword">Password</label>
    <input name="password" type="password" required>

    <button type="submit" name="login">Login</button>

   
  </form>


 

  <script>
    function switchForm(formId) {
      document.getElementById('loginForm').style.display = 'none';
      document.getElementById('registerForm').style.display = 'none';

      document.getElementById(formId).style.display = 'block';
    }
  </script>


       <!--Footer-->
       <?php include ("footer.php");?>


        <script src="script.js"></script>

    </body>

</html>