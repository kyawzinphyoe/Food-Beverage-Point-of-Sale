<?php
session_start();
$id=$_GET['id'];

$_SESSION['cat'][$id]++;

header("location: index.php");