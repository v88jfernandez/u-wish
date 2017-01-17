<?php 
	$query = $_SERVER['PHP_SELF'];
	$path = pathinfo( $query );
	$path['basename'];
?>
<body class="user_container_bg">
	<div id="wrapper">
		<header id="user_header" class="user_bg index_bg">
			<a id="portal_logo" class="user_bg" href="/">
				<img src="/assets/img/u_wish_logo.png" alt="#">
				<img  class="small_version_logo" src="/assets/img/u_wish_logo_sm.png" alt="#">
				<span class="portal_category">University Portal</span>		
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
				</ul>
			</div>
		</header>
