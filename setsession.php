<?php
include 'connection.php';
session_start();
$_SESSION['postarray'] = [];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$_SESSION['postarray'][] = $_POST ;


}

foreach($_SESSION['postarray'] as $host){
    echo $host['fullname'];
    echo $host['street'];
}

?>