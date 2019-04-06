<?php
 require 'session_check.php';
 require 'db.php';
 $userEmail=$_SESSION['check_login'];
 $getuserQueryFromDatabase="SELECT name,photo FROM users_table WHERE email='$userEmail'";
 $confirmQuery=mysqli_query($connectionQuery,$getuserQueryFromDatabase);
 $data=mysqli_fetch_array($confirmQuery);
//echo $data['photo'];

$afterexplode=explode("/",$_SERVER['PHP_SELF']);
$page=end($afterexplode);
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css"> -->
	<!--Custom Font-->
	<link href="css/font.css" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Lumino</span>Admin</a>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="pro_pic/<?php echo $data['photo']; ?>" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name"><?php echo $data['name']; ?></div>
				<div class="profile-usertitle-status"><?php echo $userEmail; ?></div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<ul class="nav menu">
			<li class="<?php if($page=="Desh.php"){echo "active";} ?>"><a href="index.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>

			<!-- <li class="<?php //if($page=="contact_list.php"){echo "active";} ?>"><a href="contact_list.php"><em class="fa fa-envelope">&nbsp;</em> All Messages</a></li> -->
			<li class="<?php if($page=="registration.php"){echo "active";} ?>"><a href="registration.php"><em class="fa fa-user">&nbsp;</em> Add user</a></li>
      <li class="<?php if($page=="menu.php"){echo "active";} ?>"><a href="menu.php"><em class="fa fa-toggle-off">&nbsp;</em>Create Menu</a></li>
      <li class="<?php if($page=="city.php"){echo "active";} ?>"><a href="city.php"><em class="fa fa-toggle-off">&nbsp;</em>Menu inner</a></li>
      <li class="<?php if($page=="dropdown.php"){echo "active";} ?>"><a href="dropdown.php"><em class="fa fa-toggle-off">&nbsp;</em>DropDown</a></li>
      <li class="<?php if($page=="dropdowndelete.php"){echo "active";} ?>"><a href="dropdowndelete.php"><em class="fa fa-toggle-off">&nbsp;</em>Delete DropDown</a></li>
			<li class="<?php if($page=="logochange.php"){echo "active";} ?>"><a href="logochange.php"><em class="fa fa-toggle-off">&nbsp;</em> Change LOGO</a></li>
      <li class="<?php if($page=="all_agency.php"){echo "active";} ?>"><a href="all_agency.php"><em class="fa fa-toggle-off">&nbsp;</em>all agency</a></li>
      <li class="<?php if($page=="best_agency.php"){echo "active";} ?>"><a href="best_agency.php"><em class="fa fa-toggle-off">&nbsp;</em>Best agency</a></li>
      <li class="<?php if($page=="feature_agency.php"){echo "active";} ?>"><a href="feature_agency.php"><em class="fa fa-toggle-off">&nbsp;</em>Featured agency</a></li>
      <li class="<?php if($page=="all_bloge.php"){echo "active";} ?>"><a href="all_bloge.php"><em class="fa fa-toggle-off">&nbsp;</em>Bloges</a></li>
      <li class="<?php if($page=="allcomments.php"){echo "active";} ?>"><a href="allcomments.php"><em class="fa fa-toggle-off">&nbsp;</em>All Comments</a></li>
      <li class="<?php if($page=="footerch.php"){echo "active";} ?>"><a href="footerch.php"><em class="fa fa-toggle-off">&nbsp;</em>Disclaimer & Footer</a></li>
			<li class="<?php if($page=="banner.php"){echo "active";} ?>"><a href="banner.php"><em class="fa fa-wrench">&nbsp;</em>Change Banner</a></li>

			<li><a href="logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->

		<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
			<div class="row">
				<div class="col-md-12">
