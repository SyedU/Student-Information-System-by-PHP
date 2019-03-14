<?php
require_once('db.php');
$query_string = "DELETE from contact_message";
mysqli_query($db_connection, $query_string);
header('location: contactmessageview.php');

?>
