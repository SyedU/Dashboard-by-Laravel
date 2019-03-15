<?php
require_once('db.php');
$about1_name = $_POST['about1_name'];



$query_string2 = "INSERT INTO about1 (about1_name) VALUES ('$about1_name')";
mysqli_query($db_connection, $query_string2);
header('location: addabout1.php');



?>
