<?php

session_start();

$_SESSION['postarray'] = [];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$_SESSION['postarray'][] = $_POST ;
header('location: plan_2.php');
}
?>