
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Details</title>
    <header>
        <a href="packages.php"> <img src="IMAGES/DAYO LOGO.png"  alt="Dayo Logo"></a>
       </header>
</head>
<body>
    <form action="index.php">

        <h2>YOU HAVE SUCCESSFULLY BOOKED!!!</h2>

        

        <center><button type="submit" class="reservation">Thank You</button></center>

    </form>


</body>

<style>
    body {
        font-family: Arial, sans-serif;
        background-image: linear-gradient(rgba(74, 113, 165, 0.179),rgba(19, 96, 100, 0.201)),url(IMAGES/WALLPAPER.png);
      height: auto;
        display: flex;
        flex-direction: column;
        align-items: center;
        color: #333;
    }

    header {
        text-align: center;
    }

    header img {
        max-width: 50%;
        height: auto;
        cursor: pointer;
    }

    button {
      background-color: #19ac14;
      color: #fff;
      padding: 20px 100px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
     

    }

    button:hover {
        background-color: #18866a;
        text-align: center;
    }

   h2{
    text-align: center;
    color: #ffffff;
    font-size: 40px;
   }

   form{
    
    padding: 20px 50px 20px 50px;
   }

   form{
  color: white;
  background-color: #18866acc;
  padding: 40px 50px 40px 50px;
  border-radius: 8px;
}
  
</style>
</html>
