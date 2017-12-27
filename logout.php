<?php
session_start();
if (session_destroy()) {
  unset($_SESSION);
  echo "<script>alert('Logout Successfully');location.href='index.php';</script>";
}
?>