<?php
require_once('db.php');
$social_icon = $_POST['social_icon'];
$social_link = $_POST['social_link'];


$query_string2 = "INSERT INTO socials(social_icon, social_link) VALUES ('$social_icon','$social_link')";
mysqli_query($db_connection, $query_string2);
header('location: addsocial.php');



?>
