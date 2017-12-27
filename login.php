<?php
session_start();
require_once 'db.php';

$email    = $_POST['txtEmail'];
$password = $_POST['txtPassword'];

$query  = "SELECT * FROM account WHERE EmailAddress='$email'";
$result = mysqli_query($db, $query);
$rows   = mysqli_num_rows($result);

if ($rows > 0) {
  $row                   = mysqli_fetch_assoc($result);
  $_SESSION['firstName'] = $row['FirstName'];
  $_SESSION['lastName']  = $row['LastName'];
  $_SESSION['email']     = $row['EmailAddress'];
  echo true;
} else {
  echo false;
}
?>