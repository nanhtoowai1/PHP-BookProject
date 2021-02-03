<?php
require "config/auth.php";
require "config/config.php";
$result = mysqli_query($conn, "SELECT books.*,categories.name 
                            FROM books
                            LEFT JOIN categories ON categories.id=books.category_id");
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
                        <h1 class="h3 mb-0 text-gray-800">Book Lists</h1>
                        <a href="addbook.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><span>+</span>Add Book</a>
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
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Cover</th>
                                            <th>Title</th>
                                            <th>Author</th>
                                            <th>Summary</th>
                                            <th>Category</th>
                                            <th>Price</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Cover</th>
                                            <th>Title</th>
                                            <th>Author</th>
                                            <th>Summary</th>
                                            <th>Category</th>
                                            <th>Price</th>
                                            <th>Actions</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        $i = 1;
                                        while ($books = mysqli_fetch_assoc($result)) :
                                            // echo "<pre>";
                                            // print_r($books);
                                        ?>
                                            <tr>
                                                <td><?php echo $i++; ?></td>
                                                <td><img src="photos/<?php echo $books['cover'] ?>" alt="" width="100px" height="60px"></td>
                                                <td><?php echo $books['title'] ?></td>
                                                <td><?php echo $books['author'] ?></td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-primary py-0" data-toggle="modal" data-target="#id<?php echo $books['id']; ?>">
                                                        View Detail
                                                    </button>

                                                    <!-- view detail Modal -->
                                                    <div class="modal fade" id="id<?php echo $books['id']; ?>" data-keyboard="false" tabindex="-1">
                                                        <div class="modal-dialog modal-dialog-scrollable">
                                                            <div class="modal-content">
                                                                <div class="modal-body">
                                                                    <img src="photos/<?php echo $books['cover'] ?>" class="img-fluid">
                                                                    <p>
                                                                        <?php echo $books['summary'] ?>
                                                                    </p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end view detail Modal -->
                                                </td>
                                                <td><?php echo $books['name'] ?></td>
                                                <td><?php echo $books['price'] ?></td>
                                                <td>
                                                    <a href="editbook.php?id=<?php echo $books['id'] ?>" class="mr-3"><i class="far fa-edit" style="color:green"></i></a>
                                                    <a href="deletebook.php?id=<?php echo $books['id'] ?>" onclick="return confirm('Are you sure you want to delete')"><i class="fas fa-trash-alt" style="color:red"></i></a>
                                                </td>
                                            </tr>
                                        <?php endwhile; ?>
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