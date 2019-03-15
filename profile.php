<?php
session_start();
require_once('includes/header.php');
if(!isset($_SESSION['login_ok'])){
header('location: login.php');
}
?>

<h1>Welcome to your Profile</h1>

<?php
 require_once('includes/footer.php');
?>
