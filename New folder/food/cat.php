

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cat | Coffee Village</title>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
</head>
<body>
<?php
session_start();
include 'partial/header.php';?>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <ul>
                <li class="list-group-item"><a href="clear_cat.php" class="text-danger"><i class="fa fa-remove">Clear Cat</i> </a> </li>
                <li class="list-group-item"><a href="index.php">Continue Shopping</a> </li>
            </ul>


        </div>
        <div class="col-md-8">
            <div class="panel panel-primary">
                <div class="panel-heading">Cat Show</div>
                <div class="panel-body">
                    <div class="table table-responsive">
                        <table class="table table-hover">
                            <tr>

                                <th>Title</th>
                                <th>Image</th>
                                <th>Price</th>
                                <th>Qty</th>
                                <th>Amount</th>
                                <th>Delete</th>
                            </tr>
                            <?php
                            include 'config/public_config.php';
                            $totalamount=0;
                            $p=new PublicConfig();
                            foreach ($_SESSION['cat'] as $id=>$qty):
                                $pro=$p->catShow($id);
                            foreach($pro as $cat):
                                $totalamount +=$qty*$cat['price'];
                                ?>
                                <tr>

                                    <td><?php echo $cat['title']; ?></td>
                                    <td><img src="covers/<?php echo $cat['cover']; ?>" class="img img-thumbnail" style="width: 80px;height: 50px"> </td>
                                    <td><?php echo $cat['price']; ?></td>
                                    <td><a href="decrease.php?id=<?php echo $cat['id']; ?>" class="text-danger"><i class="fa fa-minus-circle"></i> </a><span class="badge"><?php echo $qty; ?></span> <a href="increase.php?id=<?php echo $cat['id']; ?>"><i class="fa fa-plus-circle"></i> </a></td>
                                    <td><?php echo $qty*$cat['price']; ?></td>
                                    <td><a href="delete_cart.php?id=<?php echo $cat['id']; ?> " class="text-danger"><span class="glyphicon glyphicon-trash"></span> </a> </td>
                                </tr>

                            <?php

                                endforeach;
                            endforeach;
                            ?>
                            <tr><td colspan="4">Total Amount</td>
                                <td><?php echo $totalamount; ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <?php
            include 'config/order_config.php';
            if($_SESSION['err']){
                ?>
                <div class="alert alert-danger"><?php echo $_SESSION['err'] ?></div>
            <?php
            }
            unset($_SESSION['err']);

            if($_SESSION['info']){
                ?>
                <div class="alert alert-success"><?php echo $_SESSION['info'] ?></div>
                <?php
            }
            unset($_SESSION['info']);
            ?>
            <div class="panel panel-primary">
                <div class="panel-heading">CheckOut</div>
                <div class="panel-body">
                    <form action="post_order.php" method="post">
                        <div class="form-group">
                            <select name="tb_name" id="tb_name" class="form-control">
                                <option>No.1</option>
                                <option>No.2</option>
                                <option>No.3</option>
                                <option>No.4</option>
                                <option>No.5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Order</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>


</div>

<script src="bootstrap/js/jquery.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>

</body>
</html>
