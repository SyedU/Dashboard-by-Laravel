<?php
session_start();
require_once('db.php');
require_once('includes/header.php');

if(!isset($_SESSION['login_ok'])){
  header('location: login.php');
}
?>

<body>
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Banner</div>
				<div class="panel-body">
					<form role="form" action="addbannerpost.php" method="post">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Banner Name1" name="banner_name1" type="text" autofocus="">
							</div>
              <div class="form-group">
								<input class="form-control" placeholder="Banner Name2" name="banner_name2" type="text" autofocus="">
							</div>
              <div class="form-group">
								<input class="form-control" placeholder="Banner Name3" name="banner_name3" type="text" autofocus="">
							</div>
							<div class="form-group">
								<textarea class="form-control" name="banner_detail1" rows="5"></textarea>
							</div>
              <div class="form-group">
								<textarea class="form-control" name="banner_detail2" rows="5"></textarea>
							</div>
              <div class="form-group">
								<textarea class="form-control" name="banner_detail3" rows="5"></textarea>
							</div>
              <div class="form-group">
								<textarea class="form-control" name="banner_detail4" rows="5"></textarea>
							</div>

							<input type="submit" name="submit" value="Add banner" class="btn btn-primary btn-block btn-lg">
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->


<?php
require_once('includes/footer.php');
?>
