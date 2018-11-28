<?php
session_start();
if($_SESSION['login'])
    header("location: ../admin/home.php");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register | Coffee Village</title>
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.css" rel="stylesheet">
</head>
<body>
<?php include '../partial/header.php';?>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <?php
            session_start();
            if($_SESSION['err'])
            {
                ?>
                <div class="alert alert-danger"><?php echo $_SESSION['err']; ?></div>
            <?php
            }
            unset($_SESSION['err']);
            if($_SESSION['info'])
            {
                ?>
                <div class="alert alert-success"><?php echo $_SESSION['info']; ?></div>
                <?php
            }
            unset($_SESSION['info']);
            ?>
            <h1 class="text-center text-primary">Register</h1>
            <form action="post_register.php" method="post">
                <div class="form-group">
                    <label class="control-label" for="name">User Name</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label class="control-label" for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control" required>
                </div>
                <div class="form-group">
                    <label class="control-label" for="confirm_password">Confirm Password</label>
                    <input type="password" id="confirm_password" name="confirm_password" class="form-control" required>
                </div>
                <div class="form-group">
                    <label class="control-label" for="phone">Phone</label>
                    <input type="text" id="phone" name="phone" class="form-control" required>
                </div>
                <div class="form-group">
                    <label class="control-label" for="user_role">User Role</label>
                    <div class="form-group">
                    <input type="radio" name="user_role" id="user_role" value="0" class="radio-inline">Admin
                        <input type="radio" name="user_role" id="user_role" value="1" class="radio-inline">Cashier
                        <input type="radio" name="user_role" id="user_role" value="2" class="radio-inline">Waiter
                    </div>
                </div>
                <div class="form-group">
                   <button type="submit" class="btn btn-primary btn-lg">Sign Up</button>
                </div>
            </form>
        </div>
    </div>
</div>


<script src="../bootstrap/js/bootstrap.js"></script>
<script src="../bootstrap/js/jquery.js"></script>
</body>
</html>
