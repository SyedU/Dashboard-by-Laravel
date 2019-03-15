<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lumino - Dashboard</title>
	<link href="dashboard_assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" rel="stylesheet">
	<link href="dashboard_assets/css/styles.css" rel="stylesheet">
	<!--Custom Font-->
	<link href="dashboard_assets/css/font.css" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Dynamic</span>Dashboard</a>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="picture/<?=$_SESSION['profile_photo'];?>" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">
					<?php
					echo $_SESSION['username'];
					?>
				</div>

				<div class="profile-usertitle-status">
					<?php
					echo $_SESSION['useremail'];
					?>
				</div>

			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<ul class="nav menu">
			<li class=""><a href=""><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			<li><a href="contactmessageview.php"><em class="fa fa-envelope">&nbsp;</em> View Message</a></li>
			<li><a href="profile.php"><em class="fa fa-user">&nbsp;</em> Your Profile</a></li>
			<li><a href="login.php"><em class="fa fa-user">&nbsp;</em> Add New User</a></li>

			<li class="parent "><a data-toggle="collapse" href="#sub-item-1">
				<em class="fa fa-briefcase">&nbsp;</em> Banner <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li><a class="" href="addbanner.php">
						<span class="fa fa-arrow-right">&nbsp;</span> Add Banner
					</a></li>
					<li><a class="" href="listbanner.php">
						<span class="fa fa-arrow-right">&nbsp;</span> List Banner
					</a></li>

				</ul>
			</li>

			<li class="parent "><a data-toggle="collapse" href="#sub-item-2">
				<em class="fa fa-briefcase">&nbsp;</em> About <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-2">
					<li><a class="" href="addabout.php">
						<span class="fa fa-arrow-right">&nbsp;</span> Add About
					</a></li>
					<li><a class="" href="listabout.php">
						<span class="fa fa-arrow-right">&nbsp;</span> List About
					</a></li>

				</ul>
			</li>

			<li class="parent "><a data-toggle="collapse" href="#sub-item-3">
				<em class="fa fa-briefcase">&nbsp;</em> About1 <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-3">
					<li><a class="" href="addabout1.php">
						<span class="fa fa-arrow-right">&nbsp;</span> Add About1
					</a></li>
					<li><a class="" href="listabout1.php">
						<span class="fa fa-arrow-right">&nbsp;</span> List About1
					</a></li>

				</ul>
			</li>


			<li class="parent "><a data-toggle="collapse" href="#sub-item-4">
				<em class="fa fa-briefcase">&nbsp;</em> Services <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-4">
					<li><a class="" href="addservice.php">
						<span class="fa fa-arrow-right">&nbsp;</span> Add Service
					</a></li>
					<li><a class="" href="listservice.php">
						<span class="fa fa-arrow-right">&nbsp;</span> List Service
					</a></li>

				</ul>
			</li>

			<li class="parent "><a data-toggle="collapse" href="#sub-item-5">
				<em class="fa fa-briefcase">&nbsp;</em> Services1 <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-5">
					<li><a class="" href="addservice1.php">
						<span class="fa fa-arrow-right">&nbsp;</span> Add Service1
					</a></li>
					<li><a class="" href="listservice1.php">
						<span class="fa fa-arrow-right">&nbsp;</span> List Service1
					</a></li>

				</ul>
			</li>


			<li class="parent "><a data-toggle="collapse" href="#sub-item-6">
				<em class="fa fa-briefcase">&nbsp;</em> Testimonials <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-6">
					<li><a class="" href="addtestimonials.php">
						<span class="fa fa-arrow-right">&nbsp;</span> Add Testimonials
					</a></li>
					<li><a class="" href="listtestimonials.php">
						<span class="fa fa-arrow-right">&nbsp;</span> List Testimonials
					</a></li>

				</ul>
			</li>




			<li class="parent "><a data-toggle="collapse" href="#sub-item-7">
				<em class="fa fa-briefcase">&nbsp;</em> Contact <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-7">
					<li><a class="" href="addcontact.php">
						<span class="fa fa-arrow-right">&nbsp;</span> Add Contact
					</a></li>
					<li><a class="" href="listcontact.php">
						<span class="fa fa-arrow-right">&nbsp;</span> List Contact
					</a></li>

				</ul>
			</li>

			<li class="parent "><a data-toggle="collapse" href="#sub-item-8">
				<em class="fa fa-briefcase">&nbsp;</em> Contact1 <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-8">
					<li><a class="" href="addcontact1.php">
						<span class="fa fa-arrow-right">&nbsp;</span> Add Contact1
					</a></li>
					<li><a class="" href="listcontact1.php">
						<span class="fa fa-arrow-right">&nbsp;</span> List Contact1
					</a></li>

				</ul>
			</li>



			<li class="parent "><a data-toggle="collapse" href="#sub-item-9">
				<em class="fa fa-briefcase">&nbsp;</em> Social <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-9">
					<li><a class="" href="addsocial.php">
						<span class="fa fa-arrow-right">&nbsp;</span> Add Social
					</a></li>
					<li><a class="" href="listsocial.php">
						<span class="fa fa-arrow-right">&nbsp;</span> List Social
					</a></li>

				</ul>
			</li>



			<li><a href="index.php" target="_blank"><em class="fa fa-file">&nbsp;</em>Visit Website</a></li>
			<li><a href="logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
