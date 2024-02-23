<?php   if (isset($_GET['id'])) { 
    include "connection.php";
    $id=$_GET['id'];
    $select=mysqli_query($db,"SELECT * FROM reserve_booking2 WHERE id='$id'");
    if(mysqli_num_rows($select)>0){
        while($row=mysqli_fetch_array($select)){
      
       
    ?>

<!DOCTYPE html>
<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
<title>Dayo Travle Access</title>
<style type="text/css">

body, table, td, a { -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }
table, td { mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
img { -ms-interpolation-mode: bicubic; }

img { border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; }
table { border-collapse: collapse !important; }
body { height: 100% !important; margin: 0 !important; padding: 0 !important; width: 100% !important; font-family:'Poppins',sans-serif; }


a[x-apple-data-detectors] {
    color: inherit !important;
    text-decoration: none !important;
    font-size: inherit !important;
    font-family: inherit !important;
    font-weight: inherit !important;
    line-height: inherit !important;
}

@media screen and (max-width: 480px) {
    .mobile-hide {
        display: none !important;
    }
    .mobile-center {
        text-align: center !important;
    }
}
div[style*="margin: 16px 0;"] { margin: 0 !important; }

form {border: 3px solid #f1f1f1;}

input[type=email], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>


<body style=" margin: 0 !important; padding: 0 !important; background-color: #eeeeee;" bgcolor="#eeeeee; ">


<div style="display: none; font-size: 1px; color: #fefefe; line-height: 1px;  max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;">
</div>

<table border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td align="center" style="background-color: #eeeeee;" bgcolor="#eeeeee">
        
        <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;">
            <tr>
                <td align="center" valign="top" style="font-size:0; padding: 35px;" bgcolor="#F44336">
               
                <div style="display:inline-block; max-width:50%; min-width:100px; vertical-align:top; width:100%;">
                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:300px;">
                        <tr>
                            <td align="left" valign="top" style=" font-size: 36px; font-weight: 800; line-height: 48px;" class="mobile-center">
                                <h4 style="font-size: 20px; font-weight: 800; margin: 0; color: #ffffff;">Dayo Travle Access</h4>
                            </td>
                        </tr>
                    </table>
                </div>
                
                <div style="display:inline-block; max-width:50%; min-width:100px; vertical-align:top; width:100%;" class="mobile-hide">
                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:300px;">
                        <tr>
                            <td align="right" valign="top" style=" font-size: 48px; font-weight: 400; line-height: 48px;">
                                <table cellspacing="0" cellpadding="0" border="0" align="right">
                                    <tr>
                                        <td style=" font-size: 18px; font-weight: 400;">
                                            <p style="font-size: 18px; font-weight: 400; margin: 0; color: #ffffff;"><a href="#" target="_blank" style="color: #ffffff; text-decoration: none;">Recepit For Booking &nbsp;</a></p>
                                        </td>
                                        <td style="font-size: 18px; font-weight: 400; line-height: 24px;">
                                            <a href="#" target="_blank" style="color: #ffffff; text-decoration: none;"><img src="IMAGES/DAYO LOGO.png" width="27" height="23" style="display: block; border: 0px;"/></a>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </div>
              
                </td>
            </tr>
            <tr>
                <td align="center" style="padding: 35px 35px 20px 35px; background-color: #ffffff;" bgcolor="#ffffff">
                <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;">
                    <tr>
                        <td align="center" style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 25px;">
                            <img src="IMAGES/DAYO LOGO.png" width="125" height="120" style="display: block; border: 0px;" /><br>
                            <h2 style="font-size: 30px; font-weight: 800; line-height: 36px; color: #333333; margin: 0;">
                                Thank You For Your Booking!
                            </h2>
                        </td>
                    </tr>
                    <tr>
                        <td align="left" style=" font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;">
                            <p style="font-size: 16px; font-weight: 400; line-height: 24px; color: #777777;">
                                We Really Appreciate Your Booking 
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td align="left" style="padding-top: 20px;">
                            <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                <tr>
                                    <td width="75%" align="left" bgcolor="#eeeeee" style=" font-size: 16px; font-weight: 800; line-height: 24px; padding: 10px;">
                                         Name
                                    </td>
                                    <td width="25%" align="left" bgcolor="#eeeeee" style=" font-size: 16px; font-weight: 800; line-height: 24px; padding: 10px;">
                                       <?php echo $row['fm2']  ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="75%" align="left" style=" font-size: 16px; font-weight: 400; line-height: 24px; padding: 15px 10px 5px 10px;">
                                        Adult And Kid( <?php echo ' Aldult,Kid'; ?>)
                                    </td>
                                    <td width="25%" align="left" style=" font-size: 16px; font-weight: 800; line-height: 24px; padding: 15px 10px 5px 10px;">
                                     <?php  echo $row['adult_count'] .' Adult' , $row['kid_count'] .' Kid' ; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="75%" align="left" style=" font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">
                                        Package
                                    </td>
                                    <td width="25%" align="left" style=" font-size: 16px; font-weight: 800; line-height: 24px; padding: 5px 10px;">
                                    <?php  if(($row['package'])==''){
                    echo 'Itinerary Booking';
                }else{
                    echo $row['package'];
                }
                    ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="75%" align="left" style=" font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">
                                       Payment Date
                                    </td>
                                    <td width="25%" align="left" style=" font-size: 16px; font-weight: 800; line-height: 24px; padding: 5px 10px;">
                                   <?php  echo $row['p_date']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="75%" align="left" style=" font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">
                                       Refrence Id
                                    </td>
                                    <td width="25%" align="left" style=" font-size: 16px; font-weight: 800; line-height: 24px; padding: 5px 10px;">
                                   <?php  echo $row['req_id']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="75%" align="left" style=" font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">
                                       Vehicle
                                    </td>
                                    <td width="25%" align="left" style=" font-size: 16px; font-weight: 800; line-height: 24px; padding: 5px 10px;">
                                   <?php  echo $row['vehicle']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="75%" align="left" style=" font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">
                                       Payment Method
                                    </td>
                                    <td width="25%" align="left" style=" font-size: 16px; font-weight: 800; line-height: 24px; padding: 5px 10px;">
                                   <?php  echo $row['p_method']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="75%" align="left" style=" font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">
                                       Travel date
                                    </td>
                                    <td width="25%" align="left" style=" font-size: 16px; font-weight: 800; line-height: 24px; padding: 5px 10px;">
                                   <?php  echo $row['trav_date']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="75%" align="left" style=" font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">
                                       Days And Night Booked
                                    </td>
                                    <td width="25%" align="left" style=" font-size: 16px; font-weight: 800; line-height: 24px; padding: 5px 10px;">
                                   <?php  echo $row['days_and_nights']; ?>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td align="left" style="padding-top: 20px;">
                            <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                <tr>
                                    <td width="75%" align="left" style=" font-size: 16px; font-weight: 800; line-height: 24px; padding: 10px; border-top: 3px solid #eeeeee; border-bottom: 3px solid #eeeeee;">
                                        Amount Paid 
                                    </td>
                                    <td width="25%" align="left" style=" font-size: 16px; font-weight: 800; line-height: 24px; padding: 10px; border-top: 3px solid #eeeeee; border-bottom: 3px solid #eeeeee;">
                                       <?php echo $row['price'] ?>
                                    </td>
                                </tr>

                                <tr>
    <td align="center" style="padding-top: 20px;">
        <button id="downloadReceiptBtn" style="background-color: #04AA6D; color: white; padding: 14px 20px; border: none; cursor: pointer; width: 50%;">Download Receipt</button>
    </td>
</tr>
                            </table>
                        </td>
                    </tr>
                    
                    
                        <!-- <tr>
                        <td align="left" style="padding-top: 20px;">
                            <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                <tr>
                                    <td width="75%" align="left" style=" font-size: 16px; font-weight: 800; line-height: 24px; padding: 10px; border-top: 3px solid #eeeeee; border-bottom: 3px solid #eeeeee;">
                                        TOTAL x Days
                                    </td>
                                    <td width="25%" align="left" style=" font-size: 16px; font-weight: 800; line-height: 24px; padding: 10px; border-top: 3px solid #eeeeee; border-bottom: 3px solid #eeeeee;">
                                        
                                        <?php
                                       
                                        
                                        ?>
                                        
                                        
                                       <?php   ?>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                
                </td>
            </tr>
             <tr>
                <td align="center" height="100%" valign="top" width="100%" style="padding: 0 35px 35px 35px; background-color: #ffffff;" bgcolor="#ffffff">
                <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:660px;">
                    <tr>
                        <td align="center" valign="top" style="font-size:0;">
                            <div style="display:inline-block; max-width:50%; min-width:240px; vertical-align:top; width:100%;">

                                <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:300px;">
                                    <tr>
                                        <td align="left" valign="top" style=" font-size: 16px; font-weight: 400; line-height: 24px;">
                                            <p style="font-weight: 800;">Check-in Date</p>
                                            <p><?php  ?></p>

                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div style="display:inline-block; max-width:50%; min-width:240px; vertical-align:top; width:100%;">
                                <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:300px;">
                                    <tr>
                                        <td align="left" valign="top" style=" font-size: 16px; font-weight: 400; line-height: 24px;">
                                            <p style="font-weight: 800;">Check-Out Date</p>
                                            <p><?php ?></p>
                                        </td>
                                    </tr> -->
                                </table>
                            </div>
                        </td>
                    </tr>
                </table>
                </td>
            </tr>
        

 
                   
                </table>
                </td>
            </tr>
        </table>
        </td>
    </tr>
</table>
    
</body>
</html>


<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.js"></script>
<script>
    document.getElementById('downloadReceiptBtn').addEventListener('click', function () {
      
        var contentToDownload = document.createElement('div');
        contentToDownload.innerHTML = document.documentElement.outerHTML;

       
        var downloadButton = contentToDownload.querySelector('#downloadReceiptBtn');
        if (downloadButton) {
            downloadButton.parentNode.removeChild(downloadButton);
        }

        
        contentToDownload.style.height = '2000px'; 

       
        html2pdf(contentToDownload, {
            margin: 10,
            filename: 'receipt.pdf',
            image: { type: 'jpeg', quality: 0.98 },
            html2canvas: { scale: 2 },
            jsPDF: { unit: 'mm', format: 'a4', orientation: 'portrait' }
        });
    });
</script>


<?php  }}}  ?>