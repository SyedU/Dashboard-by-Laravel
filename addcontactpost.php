<?php
require_once('db.php');
$contact_name = $_POST['contact_name'];
$contact_detail = $_POST['contact_detail'];


$query_string2 = "INSERT INTO contact(contact_name, contact_detail) VALUES ('$contact_name','$contact_detail')";
mysqli_query($db_connection, $query_string2);
header('location: addcontact.php');



?>
