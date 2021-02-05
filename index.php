<?php
require "admin/config/config.php";

// to show all categories on sidebar
$catobj = mysqli_query($conn, "SELECT * FROM categories");

//check to show all books or to show chosen books by category
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $books = mysqli_query($conn, "SELECT books.*,categories.name 
                                FROM books 
                                LEFT JOIN categories 
                                ON categories.id=books.category_id 
                                WHERE books.category_id=$id");
} else {
  $books = mysqli_query($conn, "SELECT * FROM books");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <?php require "head.php" ?>

</head>

<body>

  <!-- Navigation -->
  <?php require "nav.php" ?>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">
        <div class="list-group">

          <h5 class="mt-lg-4 mt-md-3 mt-sm-2">
            <a href="index.php" class="list-group-item">
              All Category
            </a>
          </h5>

          <?php while ($cat = mysqli_fetch_assoc($catobj)) : ?>
            <a href="index.php?id=<?php echo $cat['id'] ?>" class="list-group-item"><?php echo $cat['name'] ?></a>
          <?php endwhile; ?>
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">
        <!-- carousel start -->
        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="admin/photos/1new.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="admin/photos/2.png" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="admin/photos/3.png" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <!-- carousel end -->

        <!-- cards start -->
        <div class="row">

        <?php while ($book = mysqli_fetch_assoc($books)) : ?>
          <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="card h-100">
              <a href="showdetail.php?bookid=<?php echo $book['id']?>"><img class="card-img-top" src="admin/photos/<?php echo $book['cover'] ?>" height=100%></a>
              <div class="card-body">
                <h6 class="card-title">
                  <a href="showdetail.php?bookid=<?php echo $book['id']?>"><?php echo $book['title'] ?></a>
                </h6>
                <h6><?php echo number_format($book['price']) ?>ks</h6>
              </div>
              <?php if(isset($_SESSION['user'])): ?>
                    <a href="addtocart.php?cartid=<?php echo $book['id'] ?>" class="btn btn-outline-primary m-3">
                    Add to Cart <i class="fas fa-shopping-cart text-primary mr-auto"></i>
                    </a>

                  <?php else:?>
                  <a class="btn btn-outline-primary m-3" onclick="return alert('You need to login first!')">
                    Add to Cart <i class="fas fa-shopping-cart text-primary mr-auto"></i>
                  </a>
                <?php endif?>
            </div>
          </div>
          <?php endwhile?>
        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <?php require "footer.php"?>

  <!-- Bootstrap core JavaScript -->
  <?php require "scripts.php"?>

</body>

</html>