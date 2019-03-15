<?php
require_once('db.php');
$banner_name1 = $_POST['banner_name1'];
$banner_name2 = $_POST['banner_name2'];
$banner_name3 = $_POST['banner_name3'];
$banner_detail1 = $_POST['banner_detail1'];
$banner_detail2 = $_POST['banner_detail2'];
$banner_detail3 = $_POST['banner_detail3'];
$banner_detail4 = $_POST['banner_detail4'];


$query_string2 = "INSERT INTO banner1(banner_name1, banner_name2, banner_name3, banner_detail1, banner_detail2, banner_detail3, banner_detail4) VALUES ('$banner_name1','$banner_name2','$banner_name3','$banner_detail1','$banner_detail2','$banner_detail3','$banner_detail4')";
mysqli_query($db_connection, $query_string2);
header('location: addbanner.php');



?>
