<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coffee Village</title>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
</head>
<body>
<?php
session_start();
include 'partial/header.php';?>
<div class="container">
    <div class="" style="background: #ff3d00;height: 120px;border-radius: 5px;">
        <h2 style="text-align: center;padding-top: 2%;text-shadow: black;color:#ffff00;font-style: italic;">Food and Beverage Point of Sale System</h2>
        <h4 style="float: left;color: #ffffff;">Welcome My Shop</h4>
        <h5 style="float: right">Phone-09255760378<br>Mawlamyine</h5>
    </div>
    <?php include 'partial/inline_menu.php';?>

        <?php

        $pp=new PublicConfig();

        $cat_id=$_GET['cat_id'];
        $q=$_GET['q'];
        if($cat_id){
            $pro=$pp->getProductById($cat_id);
        }elseif ($q){
            $pro=$pp->searchProduct($q);
        }
        else{
            $pro=$pp->getProduct();
        }

        foreach($pro as $product):
            ?>
    <div class="col-md-3 col-ms-6">
            <div class="thumbnail">
                <img src="covers/<?php echo $product['cover']; ?>" class="img img-thumbnail" style="width: 240px;height: 170px">
                <div class="caption">
                    <h4 class="text-primary"><?php echo $product['title']; ?></h4>
                    <p class="text-success pull-right">category-<?php echo $product['category_name']; ?></p>
                    <p class="text-primary"><?php echo $product['price']; ?>KS</p>
                    <a href="add_to_cat.php?id=<?php echo $product['id']; ?>"><button type="submit" class="btn btn-primary btn-block" style="background: #ffcc80;border: none;"><i class="fa fa-shopping-basket"></i> </button> </a>
                </div>
            </div>
    </div>
        <?php
        endforeach;
        ?>

</div>


<script src="bootstrap/js/jquery.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>

</body>
</html>
