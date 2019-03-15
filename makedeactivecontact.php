<?php
require_once('db.php');
$id = $_GET['id'];
$query_string = "UPDATE contact SET status=2 WHERE id=$id";
mysqli_query($db_connection, $query_string);
header('location: listcontact.php');

?>
