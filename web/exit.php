<?php
unset($_SESSION['username']);
header("Location: https://still-badlands-96861.herokuapp.com/index.php", true, 301);