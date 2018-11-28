<?php
session_start();

unset($_SESSION['login'],
    $_SESSION['name'],
    $_SESSION['user_role']

);
    header("location: ../auth/login.php");