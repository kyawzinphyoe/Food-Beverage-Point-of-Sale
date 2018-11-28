<?php
include '../config/product.php';

$id=$_POST['id'];
$title=$_POST['title'];
$price=$_POST['price'];
$cat_id=$_POST['cat_id'];

$cover_name=$_FILES['cover']['name'];
$cover_tmp=$_FILES['cover']['tmp_name'];

$pp=new Product();
$pp->editProduct($id,$title,$price,$cat_id,$cover_name,$cover_tmp);