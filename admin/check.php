<?php 
session_start();
$email=htmlspecialchars($_POST['email']);
$password=htmlspecialchars($_POST['password']);

if($email=="admin@gmail.com" && $password==123){
    $_SESSION['auth']=true;
    header("location:category.php");
}
else{
    header("location:index.php?invalid=1");
}
?>