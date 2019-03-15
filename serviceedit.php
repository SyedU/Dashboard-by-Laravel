<?php
session_start();
require_once('db.php');
require_once('includes/header.php');
if(!isset($_SESSION['login_ok'])){
  header('location: login.php');
}

$id = $_GET['id'];
$query_string ="SELECT * FROM services WHERE id=$id";
$db_return = mysqli_query($db_connection, $query_string);
$after_assoc = mysqli_fetch_assoc($db_return);

?>

<body>
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">
          Add Service
          <?php
          if($after_assoc['service_photo'] != 'service_default_photo.jpg'){
            ?>

          <button type="button" class="btn-sm btn-info">Set Default</button>

          <?php
          }
          ?>


        </div>
				<div class="panel-body">
					<form role="form" action="editservicepost.php" method="post" enctype="multipart/form-data">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Service Name" name="service_name" type="text" value="<?=$after_assoc['service_name']?>">
								<input class="form-control" name="service_id" type="hidden" value="<?=$id?>">
							</div>
							<div class="form-group">
								<textarea class="form-control" name="service_detail" rows="5"><?=$after_assoc['service_detail']?></textarea>
							</div>
              <div class="form-group">
								<input class="form-control" name="service_photo" type="file">
							</div>
							<input type="submit" name="submit" value="Edit Service" class="btn btn-primary btn-block btn-lg">
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->


<?php
require_once('includes/footer.php');
?>
