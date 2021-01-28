<?php
require "config/config.php";

$id = $_GET['id'];

$catrows = mysqli_query($conn, "SELECT * FROM books where category_id=$id");
if (mysqli_num_rows($catrows) > 0) {
	header("location:category.php?result=2");
} else {
	$sql = "DELETE FROM categories WHERE id=$id";
	//echo $sql;
	mysqli_query($conn, $sql);
	header("location:category.php?result=3");
}