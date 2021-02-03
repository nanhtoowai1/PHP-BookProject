<?php
require "config/config.php";

$id = $_GET['id'];

$sql = "DELETE FROM books WHERE id=$id";
//echo $sql;
mysqli_query($conn, $sql);
header("location:book.php?result=3");
