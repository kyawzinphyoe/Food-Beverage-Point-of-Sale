<?php
include '../config/product.php';
$id=$_GET['id'];
$pp=new Product();
$product1=$pp->editShow($id)->fetch(PDO::FETCH_ASSOC);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit dashboard | Coffee Village</title>
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.css" rel="stylesheet">
</head>
<body>
<?php
session_start();
include '../partial/header.php';?>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-primary">
                <div class="panel-heading"><?php echo $product1['title']; ?></div>
                <div class="panel-body">
                    <form action="post_edit_dashboard.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="hidden" value="<?php echo $product1['id']; ?>" name="id" id="id" class="form-control">
                        </div>
                        <div class="form-group text-center">
                            <img src="../covers/<?php echo $product1['cover']; ?>" width="100px" class="img img-thumbnail">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="title">Title</label>
                            <input type="text" value="<?php echo $product1['title']; ?>" id="title" name="title" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="price">Price</label>
                            <input type="number" value="<?php echo $product1['price']; ?>" id="price" name="price" class="form-control" required>
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
                                    <option value="<?php echo $cat['id']; ?>" <?php if($cat['id']==$product1['cat_id']){echo "selected";}  ?>><?php echo $cat['category_name']; ?></option>
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

                            <button type="submit" class="btn btn-primary">Edit Product</button>
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

