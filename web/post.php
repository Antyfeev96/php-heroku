<?php
echo $_POST['username'];
session_start();
$redirect = $_SERVER['HTTP_REFERER'];
$_SESSION['username'] = $_POST['username'];
header("Location: $redirect, true, 301");
