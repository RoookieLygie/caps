<?php
include ('connection.php');
include('restrict.php');

if($_SERVER['REQUEST']=="POST"){
    echo $_POST['networkId'];
}

?>