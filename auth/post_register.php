<?php
include '../config/register_config.php';

$name=$_POST['name'];
$password=$_POST['password'];
$confirm_password=$_POST['confirm_password'];
$phone=$_POST['phone'];
$user_role=$_POST['user_role'];
//echo $name,$password,$confirm_password,$phone,$user_role;
$re=new Register_config();
$re->registers($name,$password,$confirm_password,$phone,$user_role);