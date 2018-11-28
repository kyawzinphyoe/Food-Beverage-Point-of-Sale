<?php
session_start();
$id=$_GET['id'];

foreach($_SESSION['cat'] as $cart_id=>$qty){
    if($id==$cart_id){
        if($qty<=1){
            unset($_SESSION['cat'][$id]);
        }else{
            $_SESSION['cat'][$id]--;
        }
    }
}
header("location: cat.php");