<?php
include '../auth/user_auth.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Categories | Coffee Village</title>
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.css" rel="stylesheet">
</head>
<body>
<?php
session_start();
include '../partial/header.php';?>
<div class="container">
    <div class="row">
        <div class="col-md-8">
        <div class="panel panel-primary">
            <div class="panel-heading">Show Categories</div>
            <div class="panel-body">
                <div class="table table-responsive">
                    <table class="table table-hover">
                        <tr>
                            <th>Categories</th>
                            <th>Delete</th>

                        </tr>
                        <?php
                        include '../config/product.php';
                        $pp=new Product();
                        $mycat=$pp->showCategories();
                        foreach ($mycat as $cat):
                        ?>
                            <tr>
                                <td><?php echo $cat['category_name']; ?></td>
                                <td><a href="delete_categories.php?name=<?php echo $cat['category_name']; ?>" class="text-danger"><span class="glyphicon glyphicon-trash"></span> </a> </td>
                            </tr>
                        <?php
                        endforeach;
                        ?>
                    </table>
                </div>
            </div>
        </div>
        </div>
        <div class="col-md-4">
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
            <div class="panel panel-primary">
                <div class="panel-heading" style="background: #2874A6;border: none;">Add Categories</div>
                <div class="panel-body">
                    <form action="post_categories.php" method="post">
                        <div class="form-group">
                            <label class="control-label" for="category_name">Categories Name</label>
                            <input type="text" id="category_name" name="category_name" class="form-control" required>
                        </div>


                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg" style="background: #2874A6;border: none;">Add Product</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="../bootstrap/js/jquery.js"></script>
<script src="../bootstrap/js/bootstrap.js"></script>

</body>
</html>
