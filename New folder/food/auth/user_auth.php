<?php
session_start();

if(!$_SESSION['login']){
    header("location: ../auth/register.php");
    exit();
}