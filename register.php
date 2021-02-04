<?php
$emailerr = "";
require "admin/config/config.php";

if (isset($_POST['btn_register'])) {
	$name = htmlspecialchars($_POST['username']);
	$email = htmlspecialchars($_POST['email']);
	$password = htmlspecialchars($_POST['password']);
	$hashpassword = md5($password);

	$users = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
	$rowcount = mysqli_num_rows($users);
	//echo $rowcount;
	if ($rowcount > 0) {
		$emailerr = "*Email is already exist!";
	} else {
		$sql = "INSERT INTO users(name,email,password) VALUES ('$name','$email','$hashpassword')";
		$i = mysqli_query($conn, $sql);
		if ($i) {
			$_SESSION['user'] = $name;
			$_SESSION['email'] = $email;
			header("location:index.php");
		} else {
			echo $sql;
		}
	}
}
