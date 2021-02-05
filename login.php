<?php
//session_start();
require "admin/config/config.php";
$passerr = "";
$emailerr = "";
if (isset($_POST['btn_login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hashpassword = md5($password);
    //echo $hashpassword;

    $sql = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
    $result = mysqli_fetch_assoc($sql);
    //print_r($result);

    //email ရှိနေတဲ့ အခြေအနေ 
    if (mysqli_num_rows($sql) > 0) {
        if( $result['password'] != $hashpassword){
            $passerr = "*Your password is invalid";
        }else{
            $_SESSION['user'] = $result['name'];
            $_SESSION['email'] = $result['email'];
        }
    }
    else {
        $emailerr = "*Your email doesn't exists";
    }
    
    if ($passerr == "" && $emailerr == "" ){
        header("location:index.php");
    }
   
}
