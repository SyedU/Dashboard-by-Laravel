<?php
require_once('db.php');
$id = $_GET['id'];
$query_string = "UPDATE about SET status=2 WHERE id=$id";
mysqli_query($db_connection, $query_string);
header('location: listabout.php');

?>
