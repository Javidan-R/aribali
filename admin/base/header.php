<?php ob_start();session_start(); date_default_timezone_set("Asia/Baku");  ?>

<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
	<?php

	require_once '../settings/db.php';
	/*class*/
	require_once '../settings/class/umumi.php';
	require_once '../settings/class/nizam.php';
	require_once '../settings/class/haqqinda.php';

	require_once '../settings/class/course_about.php';
	require_once '../settings/class/meqale.php';

	require_once '../settings/class/team.php';
	require_once '../settings/class/tedbir.php';	
	require_once '../settings/class/foto-Class.php';		

	require_once '../settings/code/contact.php';
	require_once '../settings/class/courses.php';



	$umumi = new Umumi();
	?>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta name="description" content="bootstrap admin template">
	<meta name="author" content="aribali Mentroship">

	<title>Javidan Rajabli Admin Template | 2020</title>

	<link rel="apple-touch-icon" href="../aribalilogo.jpg">
	<link rel="shortcut icon" href="../aribalilogo.jpg">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="../global/css/bootstrap.min599c.css?v4.0.2">
	<link rel="stylesheet" href="../global/css/bootstrap-extend.min599c.css?v4.0.2">
	<link rel="stylesheet" href="assets/css/site.min599c.css?v4.0.2">

	<!-- Skin tools (demo site only) -->
	<link rel="stylesheet" href="../global/css/skintools.min599c.css?v4.0.2">
	<script src="assets/js/Plugin/skintools.min599c.js?v4.0.2"></script>

	<!-- Plugins -->
	<link rel="stylesheet" href="../global/vendor/animsition/animsition.min599c.css?v4.0.2">
	<link rel="stylesheet" href="../global/vendor/asscrollable/asScrollable.min599c.css?v4.0.2">
	<link rel="stylesheet" href="../global/vendor/switchery/switchery.min599c.css?v4.0.2">
	<link rel="stylesheet" href="../global/vendor/intro-js/introjs.min599c.css?v4.0.2">
	<link rel="stylesheet" href="../global/vendor/slidepanel/slidePanel.min599c.css?v4.0.2">
	<link rel="stylesheet" href="../global/vendor/flag-icon-css/flag-icon.min599c.css?v4.0.2">

	<!-- Plugins For This Page -->
	<link rel="stylesheet" href="../global/vendor/chartist/chartist.min599c.css?v4.0.2">
	<link rel="stylesheet" href="../global/vendor/jvectormap/jquery-jvectormap.min599c.css?v4.0.2">
	<link rel="stylesheet" href="../global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.min599c.css?v4.0.2">

	<!-- Page -->
	<link rel="stylesheet" href="assets/examples/css/dashboard/v1.min599c.css?v4.0.2">

	<!-- Fonts -->
	<link rel="stylesheet" href="../global/fonts/web-icons/web-icons.min599c.css?v4.0.2">
	<link rel="stylesheet" href="../global/fonts/brand-icons/brand-icons.min599c.css?v4.0.2">
	<link rel='stylesheet' href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic">
	<link rel="stylesheet" href="../global/fonts/brand-icons/brand-icons.min599c.css?v4.0.2">

	<link rel="stylesheet" href="../global/fonts/font-awesome.min599c.css">

	<!-- Plugins For This Page -->
	<link rel="stylesheet" href="../global/vendor/blueimp-file-upload/jquery.fileupload.min599c.css?v4.0.2">
	<link rel="stylesheet" href="../global/vendor/dropify/dropify.min599c.css?v4.0.2">

	<!-- Plugins For This Page -->
	<link rel="stylesheet" href="../global/vendor/datatables.net-bs4/dataTables.bootstrap4.min599c.css?v4.0.2">
	<link rel="stylesheet" href="../global/vendor/datatables.net-fixedheader-bs4/dataTables.fixedheader.bootstrap4.min599c.css?v4.0.2">
	<link rel="stylesheet" href="../global/vendor/datatables.net-fixedcolumns-bs4/dataTables.fixedcolumns.bootstrap4.min599c.css?v4.0.2">
	<link rel="stylesheet" href="../global/vendor/datatables.net-rowgroup-bs4/dataTables.rowgroup.bootstrap4.min599c.css?v4.0.2">
	<link rel="stylesheet" href="../global/vendor/datatables.net-scroller-bs4/dataTables.scroller.bootstrap4.min599c.css?v4.0.2">
	<link rel="stylesheet" href="../global/vendor/datatables.net-select-bs4/dataTables.select.bootstrap4.min599c.css?v4.0.2">
	<link rel="stylesheet" href="../global/vendor/datatables.net-responsive-bs4/dataTables.responsive.bootstrap4.min599c.css?v4.0.2">
	<link rel="stylesheet" href="../global/vendor/datatables.net-buttons-bs4/dataTables.buttons.bootstrap4.min599c.css?v4.0.2">


	<!-- Scripts -->
	<script src="../global/vendor/breakpoints/breakpoints.min599c.js?v4.0.2"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script>
		Breakpoints();
	</script>
</head>
<body class="animsition dashboard">
	<nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega navbar-expand-md"
	role="navigation">

	<div class="navbar-header" >
		<button type="button" class="navbar-toggler hamburger hamburger-close navbar-toggler-left hided"
		data-toggle="menubar">
		<span class="sr-only">Toggle navigation</span>
		<span class="hamburger-bar"></span>
	</button>
	<button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-collapse"
	data-toggle="collapse">
	<i class="icon wb-more-horizontal" aria-hidden="true"></i>
</button>
<a href="../../index.php" title="admin panel">
	<div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="gridmenu" style="background-color: white;">
		<img class="navbar-brand-logo" src="../global/aribalilogo.jpg" title="Remark">
		<span class="navbar-brand-text hidden-xs-down" style=" color: #000;"> Aribali Mentroship </span>
	</div>
</a>

</div>

<div class="navbar-container container-fluid">
	<!-- Navbar Collapse -->
	<div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
		<!-- Navbar Toolbar -->
		<ul class="nav navbar-toolbar">
			<li class="nav-item hidden-float" id="toggleMenubar">
				<a class="nav-link" data-toggle="menubar" href="#" role="button">
					<i class="icon hamburger hamburger-arrow-left">
						<span class="sr-only">Toggle menubar</span>
						<span class="hamburger-bar"></span>
					</i>
				</a>
			</li>
		</ul>
		<!-- End Navbar Toolbar -->

		<!-- Navbar Toolbar Right -->
		<ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
			<li class="nav-item dropdown">
				<a class="nav-link navbar-avatar" data-toggle="dropdown" href="#" aria-expanded="false"
				data-animation="scale-up" role="button">
				<span class="avatar avatar-online">
					<img src="../global/aribalilogo.jpg" alt="...">
					<i></i>
				</span>
			</a>
			<div class="dropdown-menu" role="menu">
				<a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-user" aria-hidden="true"></i>ARIBALI </a>
				<div class="dropdown-divider" role="presentation"></div>
				<a class="dropdown-item" href="logout.php" role="menuitem"><i class="icon wb-power" aria-hidden="true"></i> ÇIXIŞ</a>
			</div>
		</li>
	</ul>
	<!-- End Navbar Toolbar Right -->
</div>
<!-- End Navbar Collapse -->

</div>
</nav>