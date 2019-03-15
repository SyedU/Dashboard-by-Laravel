<?php
require_once('db.php');
$query_string = "UPDATE contact_message SET status=2";
mysqli_query($db_connection, $query_string);
header('location: contactmessageview.php');

?>
