<?php
include '../config/product.php';

$id=$_GET['id'];

$p=new Product();
$p->deleteProduct($id);