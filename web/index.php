<?php
session_start();
if (isset($_SESSION['username'])) {
  session_destroy();
  echo 'Hello, ' . $_SESSION['username'] . PHP_EOL;
  $content = "<a href='exit.php'>Нажми на меня!</a>";
  echo $content;
} else {
  include 'index.html';
}
