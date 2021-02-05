<?php
session_start();
// for new add to cart and increment
if(isset($_GET['cartid'])){
	$id=$_GET['cartid'];//1

	if(!isset($_SESSION['cart'][$id])){
		$_SESSION['cart'][$id]=0;
		$_SESSION['cart'][$id]++;//1=>1
	}else{
		$_SESSION['cart'][$id]++;//1=>2
    }
    echo "<pre>";
    print_r($_SESSION);
}