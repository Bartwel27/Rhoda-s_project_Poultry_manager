<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "poultry_manager";

$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$connect) {
  die("connection to db failed");
  exit();
}
