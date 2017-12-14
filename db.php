<?php
$db = mysqli_connect("localhost", "root", "Yangyuanhua12", "pristinehotel");
if (!$db) {
  die("Connection failed: ".$db->connect_error);
}
?>