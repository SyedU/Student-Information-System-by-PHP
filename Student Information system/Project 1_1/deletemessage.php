<?php
require_once('db.php');
$id = $_GET['id'];


$query_string = "DELETE from contact_message WHERE id=$id";
mysqli_query($db_connection, $query_string);
header('location: contactmessageview.php');

?>
