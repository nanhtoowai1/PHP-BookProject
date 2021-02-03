<?php
require "config/auth.php";
require "config/config.php";
$result = mysqli_query($conn, "SELECT * FROM categories");
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <?php require "head.php" ?>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php require "sidebar.php" ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php require "topbar.php" ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Add Book Form</h1>
                    </div>

                    <!-- Add book form start -->
                    <form action="insertbook.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="name">Title</label>
                            <input type="text" class="form-control" id="name" name="title" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Author</label>
                            <input type="text" class="form-control" id="name" name="author" required>
                        </div>
                        <div class="form-group">
                            <label for="">Category</label>
                            <select class="form-control" name="category">
                                <?php while ($cats = mysqli_fetch_assoc($result)) : ?>
                                    <option value="<?php echo $cats['id'] ?>">
                                        <?php echo $cats['name'] ?>
                                    </option>
                                <?php endwhile; ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1" required>Summary</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="summary"></textarea>
                        </div>

                        <?php 
                            if(isset($_GET['cover'])){
                                echo "<p class='text-danger'>* Your file type is wrong</p>";
                            }
                        ?>
                        <div class="form-group">
                            <label for="name">Cover</label>
                            <input type="file" id="name" name="cover" class="mt-2" required>
                        </div>

                        <?php 
                            if(isset($_GET['price'])){
                                echo "<p class='text-danger'>* Your price is invalid</p>";
                            }
                        ?>
                        <div class="form-group">
                            <label for="name">Price</label>
                            <input type="number" class="form-control" id="name" name="price" maxlength="5" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="book.php" class="btn btn-info">Cancel</a>
                    </form>
                    <!-- Add book form end -->

                    <!-- Content Row -->

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php require "footer.php" ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <?php require "scripts.php" ?>

</body>

</html>