<?php
require "config/config.php";

$id = $_POST['editid'];
//echo $id;
$title = $_POST['title'];
$author = $_POST['author'];
$category = $_POST['category'];
$summary = $_POST['summary'];
$price = $_POST['price'];

$newcover = $_FILES['newcover']['name'];
$type = $_FILES['newcover']['type'];
$tmp = $_FILES['newcover']['tmp_name'];
$target = "photos/" . $newcover;

$summary = str_replace("'", "''", $summary);
$summary = str_replace("•", "<br>•", $summary);
$summary = str_replace("•", "<br>•", $summary);

$title = str_replace("'", "''", $title);
$title = str_replace("!", " ", $title);

$error = "";

//price error
if (!(strlen($price) < 6 && strlen($price) > 2)) {
	$error .= "&price=error";
}

//cover photo
if (!$newcover) {
	if ($error == "") {
		$sql = "UPDATE books SET title='$title', author='$author',category_id='$category',summary='$summary',price=$price
				WHERE id=$id";

		$i = mysqli_query($conn, $sql);

		if ($i) {
			header("location:book.php?result=4");
		} else {
			echo $sql;
		}
	}
	else {
		header("location:editbook.php?id=$id" . $error);
	}
} else {
	if (!($type == "image/jpg" || $type == "image/jpeg" || $type == "image/png" || $type == "image/gif")) {
		$error .= "&cover=error";
	}

	if ($error == "") {
		move_uploaded_file($tmp, $target);

		$sql = "UPDATE books SET title='$title',author='$author',category_id='$category',summary='$summary',cover='$newcover',price=$price 
				WHERE id=$id";

		$i = mysqli_query($conn, $sql);

		if ($i) {
			header("location:book.php?result=4");
		} else {
			echo $sql;
		}
	} else {
		header("location:editbook.php?id=$id" . $error);
	}
}
