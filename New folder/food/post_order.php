<?php
include 'config/order_config.php';

if($_SESSION['login']){

$tb_name=$_POST['tb_name'];
$user_name=$_SESSION['name'];

$order=new OrderConfig();
$order->orderInsert($tb_name,$user_name);


}else{
    $_SESSION['err']="Please, the user login must order";
    header("location: cat.php");
}