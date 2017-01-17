<?php 
	$query = $_SERVER['PHP_SELF'];
	$path = pathinfo( $query );
	$path['basename'];
?>
<body class="user_container_bg">
	<div id="wrapper">
		<header id="user_header" class="user_bg">
			<a id="portal_logo" class="user_bg" href="/">
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
						<a href="#"><img src="/assets/img/govph_logo.png" alt="#"></a>
						<a href="#"><img src="/assets/img/philippine_tranparency_logo.png" alt="#"></a>
						<a href="#"><img src="/assets/img/dmmmsu_logo_small.png" alt="#"></a>
					</li>
				</ul>
				<ul id="main_navigation_container">
					<li class="navigation_item <?= ($path['basename'] == "enrollment.php") ? "user_container_bg active_navigation" : "" ?>  ">
						<a href="enrollment.php" class="<?= ($path['basename'] == "enrollment.php") ? "user_color" : "" ?>">Enrollment</a>
					</li>
					<li class="navigation_item <?= ($path['basename'] == "grades.php") ? "user_container_bg active_navigation" : "" ?>  ">
						<a href="grades.php" class="<?= ($path['basename'] == "grades.php") ? "user_color" : "" ?>">My Grades</a>
					</li>
					<li class="navigation_item <?= ($path['basename'] == "financial_account.php") ? "user_container_bg active_navigation" : "" ?>">
						<a href="financial_account.php" class="<?= ($path['basename'] == "financial_account.php") ? "user_color" : "" ?>">My Financial Account</a>
					</li>
					<li class="pull-right user_dropdown_item user_bg">
						<div class="dropdown">
							<button class="btn btn-default dropdown-toggle user_bg" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
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
