<?php
include '../config/product.php';

$cat_name=$_GET['name'];

$p=new Product();
$p->deleteCategories($cat_name);