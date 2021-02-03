<?php
require "config/auth.php";
require "config/config.php";
$result = mysqli_query($conn, "SELECT * FROM categories");
//echo(mysqli_num_rows($result));
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

                <!-- Begin Page heading -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Category Lists</h1>
                        <a href="addcat.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><span>+</span>Add Category</a>
                    </div>
                    <!-- end page heading -->

                    <!-- show alert -->
                    <?php
                    if (isset($_REQUEST['result'])) {
                        $myresult = $_REQUEST['result'];
                        if ($myresult == 1) {
                            echo "<div class='alert alert-success' role='alert'>
                            A new category is added!
                            </div>";
                        } elseif ($myresult == 2) {
                            echo "<div class='alert alert-info' role='alert'>
                            This category is already used in another tables!
                            </div>";
                        } elseif ($myresult == 3) {
                            echo "<div class='alert alert-danger' role='alert'>
                                A category is deleted!
                                </div>";
                        } elseif ($myresult == 4) {
                            echo "<div class='alert alert-warning' role='alert'>
                            A category is edited!
                            </div>";
                        }
                    }
                    ?>
                    <!-- end show alert -->

                    <!-- start datatable -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Actions</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        $i = 1;
                                        while ($cats = mysqli_fetch_assoc($result)) :
                                        ?>
                                            <tr>
                                                <td><?php echo $i++ ?></td>
                                                <td><?php echo $cats['name'] ?></td>
                                                <td>
                                                    <a href="editcat.php?id=<?php echo $cats['id'] ?>"><i class="far fa-edit" style="color:green"></i></a>
                                                    <a href="deletecat.php?id=<?php echo $cats['id'] ?>" onclick="return confirm('Are you sure you want to delete?')"><i class="far fa-trash-alt" style="color:red"></i></a>
                                                </td>
                                            </tr>
                                        <?php endwhile ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- end datatable -->

                </div>
                <!--end page heading-->


            </div>
            <!-- end datatable -->

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