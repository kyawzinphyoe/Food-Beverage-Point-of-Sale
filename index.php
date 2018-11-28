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
    <div class="" style="background: #2874A6;height: 120px;border-radius: 5px;">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                 <marquee direction="right"><h2 style="text-align: center;padding-top: 2%;text-shadow: red;color:white;font-style: italic;">Food and Beverage Point of Sale System</h2>         
                 </marquee>
            </div>
        </div>
        <div class="row" style="margin-top: -15px;margin-left: 10px">            
        <h5 style="float: middle;color:white;padding-top: 24px">Contact : Email - &nbsp;kzp96.cu@gmail.com&nbsp;&nbsp;Phone-09974425245&nbsp;&nbsp;Yangon</h5>
        </div>
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
                <img src="covers/<?php echo $product['cover']; ?>" class="img img-circle" style="width: 240px;height: 170px">
                <div class="caption">
                    <h4 class="text-primary"><?php echo $product['title']; ?></h4>
                    <p class="text-primary pull-right">Type - <?php echo $product['category_name']; ?></p>
                    <p class="text-primary"><?php echo $product['price']; ?> Ks</p>
                    <a href="add_to_cat.php?id=<?php echo $product['id']; ?>"><button type="submit" class="btn btn-primary btn-block" style="background: #2874A6;border: none;"><i class="fa fa-shopping-basket"></i> </button> </a>
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
