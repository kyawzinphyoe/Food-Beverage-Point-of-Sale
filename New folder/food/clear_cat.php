<?php

session_start();

unset($_SESSION['cat']);

header("location: index.php");