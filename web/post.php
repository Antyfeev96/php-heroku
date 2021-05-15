<?php
echo $_POST['username'];
session_start();
$_SESSION['username'] = $_POST['username'];
header('Location: http://localhost/index.html',true, 301);
