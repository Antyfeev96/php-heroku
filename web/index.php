<?php
include 'index.html';
if (isset($_SESSION['username'])) {
  echo 'Hello, ' . $_SESSION['username'];
} else {
  echo '123';
}