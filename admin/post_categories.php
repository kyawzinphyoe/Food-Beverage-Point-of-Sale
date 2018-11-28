<?php
include '../config/product.php';

$cat_name=$_POST['category_name'];
//echo $cat_name;
$p=new Product();
$p->newCategories($cat_name);