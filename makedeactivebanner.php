<?php
require_once('db.php');
$id = $_GET['id'];
$query_string = "UPDATE banner1 SET status=2 WHERE id=$id";
mysqli_query($db_connection, $query_string);
header('location: listbanner.php');

?>
