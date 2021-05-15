<?php
session_start();
$_SESSION['username'] = $_POST['username'];
header("Location: https://still-badlands-96861.herokuapp.com//index.php", true, 301);
