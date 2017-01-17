<?php 
	$query = $_SERVER['PHP_SELF'];
	$path = pathinfo( $query );
	$what_you_want = $path['basename'];
?>
<body class="admin_container_bg">
	<div id="wrapper">
		<header id="user_header" class="admin_bg">
			<a id="portal_logo" class="admin_bg" href="/">
				<img src="/assets/img/u_wish_logo.png" alt="#">
				<img  class="small_version_logo" src="/assets/img/u_wish_logo_sm.png" alt="#">
				<span class="portal_category">Personnel Portal</span>		
			</a>
			<div id="navigation_container">
				<ul id="sub_navigation_container">
					<li id="school_name_container">
						<h3 class="school_name">Don Mariano Marcos Memorial State University</h3>
						<h3 class="campus_name">Mid - La Union Campus</h3>
					</li>
					<li id="partner_sites_container" class="pull-right">
						<a target="_blank" href="http://www.gov.ph/"><img src="/assets/img/govph_logo.png" alt="#"></a>
						<a target="_blank" href="http://www.immigration.gov.ph/information/philippine-transparency-seal"><img src="/assets/img/philippine_tranparency_logo.png" alt="#"></a>
						<a target="_blank" href="http://www.dmmmsu.edu.ph/"><img src="/assets/img/dmmmsu_logo_small.png" alt="#"></a>
					</li>
				</ul>
				<ul id="main_navigation_container">
					<li class="navigation_item <?= ($path['basename'] == "gate_management.php") ? "active_navigation admin_container_bg" : "" ?> ">
						<a href="gate_management.php" class="">Gate Management</a>
					</li>
					<li class="navigation_item <?= ($path['basename'] == "leave_management.php") ? "active_navigation admin_container_bg" : "" ?>">
						<a href="leave_management.php">Leave Management</a>
					</li>
					
					<li class="pull-right user_dropdown_item admin_bg">
						<div class="dropdown">
							<button class="btn btn-default dropdown-toggle admin_bg" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
								<img src="/assets/img/Gurtiza, Jhaver Jan A.png" alt="">
								<span class="login_name">John Doe </span>
								<span class="caret"></span>
							</button>
							<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
								<li><a href="/pages/index.php">Logout</a></li>
							</ul>
						</div>
					</li>
				</ul>
			</div>
		</header>