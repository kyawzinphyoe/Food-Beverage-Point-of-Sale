<?php
session_start();
if($_SESSION['login'])
    header("location: ../index.php");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | Coffee Village</title>
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
            <h1 class="text-center text-primary">Login</h1>
            <form action="post_login.php" method="post">
                <div class="form-group">
                    <label class="control-label" for="name">User Name</label>
                    <input type="text" style="border-bottom-style: groove;" id="name" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label class="control-label" for="password">Password</label>
                    <input type="password" style="border-bottom-style: groove;" id="password" name="password" class="form-control" required>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>

        </div>
    </div>
</div>


<script src="../bootstrap/js/bootstrap.js"></script>
<script src="../bootstrap/js/jquery.js"></script>
</body>
</html>
