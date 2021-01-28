<?php 
	require "config/config.php";

	$id=$_POST['id'];
    $name=htmlspecialchars($_POST['name']);
    
    $name=str_replace("'", "''", $name);

	$sql="UPDATE categories SET name='$name' WHERE id=$id";
	//echo $sql;
	$i=mysqli_query($conn,$sql);

    if(!$i){
        echo $sql;
    }else{
        
        header("location:category.php?result=4");
    }
 ?>