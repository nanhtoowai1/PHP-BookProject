<?php
require "config/config.php";
$name=htmlspecialchars($_POST['name']);

$name=str_replace("'", "''", $name);

$sql="insert into categories(name) values ('$name')";
$i=mysqli_query($conn,$sql);

if(!$i){
    echo $sql;
}else{
    
    header("location:category.php?result=1");
}