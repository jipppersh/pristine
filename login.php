<?php
require_once 'db.php';
$password = password_hash("hi", PASSWORD_DEFAULT);
$query    = "INSERT INTO account VALUES('helloaasdsd','$password')";
mysqli_query($db, $query);
echo "Affected rows: ".mysqli_affected_rows($db);
?>