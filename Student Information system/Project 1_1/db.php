<?php

$host_name = "localhost";
$user_name = "root";
$password = "";
$database_name = "lion2";

$db_connection = mysqli_connect("$host_name", "$user_name", "$password", "$database_name");

if(mysqli_connect_errno()){
  echo "ERROR";
}

?>
