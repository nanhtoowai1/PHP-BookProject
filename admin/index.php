<?php
session_start();
if (isset($_SESSION['auth'])) {
    header("location:category.php");
} else {
?>
    <!DOCTYPE html>
    <html lang="en">
    <?php require "head.php" ?>

    <body>
        <div class="container my-5">
            <div class="row">
                <div class="col-md-6 col-sm-12 mx-auto bg-light shadow p-5">
                    <h1 class="display-4">Admin Login</h1>
                    <!-- catch the result from url  -->
                    <?php
                    if (isset($_REQUEST['invalid'])) {
                        $message = '
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                Your email or Password is incorrect.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
              </div>';
                        echo $message;
                    }
                    ?>
                    <!-- end catch the result from url  -->

                    <!-- check email and pass form -->
                    <form action="check.php" method="post">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <!-- end check email and pass form -->

                </div>
            </div>
    </body>
    <?php require "footer.php" ?>
    <?php require "scripts.php" ?>

    </html>
<?php } ?>