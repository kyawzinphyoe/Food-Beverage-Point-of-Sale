<?php
include 'config/order_config.php';

$id=$_GET['id'];

$or=new OrderConfig();
$or->deleteOrderPrint($id);