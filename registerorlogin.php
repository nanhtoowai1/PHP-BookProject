<!DOCTYPE html>
<html lang="en">

<head>
    <?php require "head.php" ?>
    <title>Register or Login</title>
</head>

<body>
    <?php require "nav.php" ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <?php require "login.php"?>
                <h3>Login Form</h3>
                <!-- login form start-->
                <form action="" method="post">
                    <div class="form-group">
                        <form action="" method="post">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputEmail3" name="email" required>
                                    <div class="text-danger"><?php echo $emailerr ?></div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label" required>Password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="inputPassword3" name="password" maxlength="12" required>
                                    <div class="text-danger"><?php echo $passerr ?></div>
                                </div>
                            </div>
                            <div class="text-right">
                                <a href="index.php" type="button" class="btn btn-primary">Cancel</a>
                                <button type="submit" class="btn btn-primary" name="btn_login">Log in</button>
                            </div>
                        </form>
                    </div>
                </form>
                <!-- login form end-->
            </div>
            <div class="col-lg-6 col-md-12">
                <h3>Register Form</h3>
                <?php require "register.php" ?>
                <!-- register form start-->
                <form action="" method="post">
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="username" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" name="email" required>
                            <div class="text-danger" id="error"><?php echo $emailerr ?></div>
                        </div>

                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="password" name="password" maxlength="12" required>
                        </div>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary" name="btn_register">Register</button>
                        <a href="index.php" type="button" class="btn btn-primary">Cancel</a>
                    </div>
                </form>
                <!-- register form end-->
            </div>
        </div>
    </div>
</body>
<?php require "footer.php" ?>
<?php require "scripts.php" ?>

</html>