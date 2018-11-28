<?php
session_start();

$id=$_GET['id'];

unset($_SESSION['cat'][$id]);

header("location: cat.php");