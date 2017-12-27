<?php
require_once 'db.php';

if (isset($_POST)) {
  $firstName = $_POST['txtFirstName'];
  $lastName  = $_POST['txtLastName'];
  $email     = $_POST['txtEmail'];
  $password  = $_POST['txtPassword'];
  $password  = password_hash($password, PASSWORD_DEFAULT);

  $query = "INSERT INTO account VALUES('$email','$password','$firstName','$lastName')";
  mysqli_query($db, $query);

  if (mysqli_affected_rows($db) > 0) {
    echo true;
  } else {
    echo false;
  }
}
?>