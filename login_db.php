<?php
session_start();
include 'connection.php';
if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $select=mysqli_query($db,"SELECT * FROM registration WHERE email='$email' AND password='$password'");
    if(mysqli_num_rows($select)>0){
        $_SESSION['login']="true";
        $_SESSION['email']=$email;
        header("Location: index.php");
    }else{
        echo "wrong inputs";
    }

}



?>