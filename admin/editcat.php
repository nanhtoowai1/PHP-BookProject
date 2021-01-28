<?php 
require 'config/config.php';
$id=$_GET['id'];

$result=mysqli_query($conn,"SELECT * FROM categories WHERE id=$id");
$cat=mysqli_fetch_assoc($result);
//print_r($cat)
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
                        <h1 class="h3 mb-0 text-gray-800">Add Category Form</h1>
                    </div>

                    <!-- Add cat form start -->
                    <form action="updatecat.php" method="post">
                        <div>
                            <input type="hidden" name="id" value="<?php echo $cat['id'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="name">Category Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="<?php echo $cat['name']?>" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="category.php" class="btn btn-info">Cancel</a>
                    </form>
                    <!-- Add cat form end -->
                    
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