<?php
session_start();
require_once('db.php');


$guest_name = $_POST['guest_name'];
$guest_email = $_POST['guest_email'];
$guest_message = $_POST['guest_message'];

$query_string = "INSERT INTO contact_message(guest_name, guest_email, guest_message) VALUES ('$guest_name','$guest_email','$guest_message')";

mysqli_query($db_connection, $query_string);
$_SESSION['messagesent'] = 'ok';
echo "Data Inserted";
header('location: index.php#footer');


?>
