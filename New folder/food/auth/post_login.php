<?php
include '../config/register_config.php';

$name=$_POST['name'];
$password=$_POST['password'];

$re=new Register_config();
$re->login($name,$password);