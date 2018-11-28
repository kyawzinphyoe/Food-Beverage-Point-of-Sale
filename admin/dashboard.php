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
                                <th>Cover</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            <?php
                            include "../config/product.php";
                            $pp=new Product();
                            $pro=$pp->showProduct();
                            foreach ($pro as $product):
                            ?>
                                <tr>
                                    <td><img src="../covers/<?php echo $product['cover']; ?>" class="img img-thumbnail" style="width:80px;height: 60px"> </td>
                                    <td><?php echo $product['title']; ?></td>
                                    <td><?php echo $product['category_name'];?></td>
                                    <td><?php echo $product['price'];  ?>KS</td>
                                    <td><a href="edit_dashboard.php?id=<?php echo $product['id']; ?>" ><i class="fa fa-edit"></i> </a> </td>
                                    <td><a href="delete_dashboard.php?id=<?php echo $product['id']; ?>" class="text-danger"><i class="fa fa-trash"></i> </a> </td>
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

            <div class="panel panel-primary">
                <div class="panel-heading">Add Categories</div>
                <div class="panel-body">
                    <form action="post_dashboard.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="control-label" for="title">Title</label>
                            <input type="text" id="title" name="title" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="price">Price</label>
                            <input type="number" id="price" name="price" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="cat_id">Choose Categories</label>
                            <select name="cat_id" id="cat_id" class="form-control">
                                <option value="">Select Categories</option>
                                <?php

                                $pp=new Product();
                                $mycat=$pp->showCategories();
                                foreach ($mycat as $cat):
                                ?>
                                    <option value="<?php echo $cat['id']; ?>"><?php echo $cat['category_name']; ?></option>
                                <?php
                                endforeach;

                                ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="cover">Cover</label>
                            <input type="file" id="cover" name="cover" class="form-control" style="height: auto">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Save Product</button>
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
