<?php
 $db = mysqli_connect('localhost', 'root', '') or
        die ('Unable to connect. Check your connection parameters.');
        mysqli_select_db($db, 'dayotravel' ) or die(mysqli_error($db));
?>
<!-- host  dayotravelaccess.online
userane   u288427758.DayoAccessuser
port        21
password @dM1n1234 -->