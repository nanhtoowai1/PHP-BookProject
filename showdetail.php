<?php
require "admin/config/config.php";
$bookid = $_GET['bookid'];
$result = mysqli_query($conn, "SELECT * FROM books WHERE id=$bookid");
$book = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require "head.php" ?>
    <title>Detail Page</title>
</head>

<body>
    <?php require "nav.php" ?>
    <div class="container my-3">
        <div class="row">
            <div class="col-lg-3">
                <img src="admin/photos/<?php echo $book['cover'] ?>" class="img-fluid shadow" alt="">
            </div>
            <div class="col-lg-9">
                <h1 class="text-primary">
                    <?php echo $book['title'] ?>
                </h1>
                <p>By <i class="text-success"><?php echo $book['author'] ?></i> (Author): 
					<span class="text-danger p-1">
						<?php echo number_format($book['price']) ?> ks
					</span>
				</p>
                <p>
					<?php echo $book['summary'] ?>
				</p>
                <a href="#">
                <button class="btn btn-primary">Add to Cart</button>
                </a>
            </div>
        </div>
    </div>
</body>
<?php require "footer.php" ?>
<?php require "scripts.php" ?>

</html>