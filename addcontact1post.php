<?php
require_once('db.php');
$contact1_name = $_POST['contact1_name'];
$contact1_detail1 = $_POST['contact1_detail1'];
$contact1_detail2 = $_POST['contact1_detail2'];
$contact1_detail3 = $_POST['contact1_detail3'];


$query_string2 = "INSERT INTO contact1(contact1_name, contact1_detail1, contact1_detail2, contact1_detail3) VALUES ('$contact1_name','$contact1_detail1','$contact1_detail2','$contact1_detail3')";
mysqli_query($db_connection, $query_string2);
header('location: addcontact1.php');



?>
