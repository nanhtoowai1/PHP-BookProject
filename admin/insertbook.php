<?php
require "config/config.php";
echo "<pre>";
print_r($_FILES);

//title=>"sdlfkjsdlfj"
$title = htmlspecialchars($_POST['title']);
$summary = htmlspecialchars($_POST['summary']);
$author = htmlspecialchars($_POST['author']);
$category = htmlspecialchars($_POST['category']);
$price = htmlspecialchars($_POST['price']);

$cover = $_FILES['cover']['name'];
$type = $_FILES['cover']['type'];
$tmp = $_FILES['cover']['tmp_name'];
$target = "photos/" . $cover;

$summary = str_replace("'", "''", $summary);
$summary = str_replace("!", " ", $summary);

$title = str_replace("'", "''", $title);
$title = str_replace("!", " ", $title);

$author = str_replace("'", "''", $author);
$author = str_replace("!", " ", $author);

$error = "";

//price error
if (!(strlen($price) < 6 && strlen($price) > 2)) {
	$error .= "&price=error";
}

if (!($type == "image/jpeg" || $type == "image/jpg" || $type == "image/png" || $type == "image/gif")) {
    $error .="&cover=error";
}

if($error==""){
    move_uploaded_file($tmp, $target);

    $sql = "INSERT INTO books(title,summary,category_id,author,price,cover) 
    VALUES ('$title','$summary','$category','$author',$price,'$cover')";

    $i = mysqli_query($conn, $sql);

        if ($i) {
            header("location:book.php?result=1");
        } else {
            echo "$sql";
        }
}
else{
    header("location:addbook.php?$error");
}

   