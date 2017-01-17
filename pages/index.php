<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/login_head.php');?>
<body id="login_bg">
	<div id="wrapper">
		<div class="modal fade" id="student_login_modal" tabindex="-1" role="dialog" aria-labelledby="student_login_modal_label">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<img src="/assets/img/u_wish_student_logo.png" alt="">
					</div>
					<form class="modal-body" id="student_login_form" action="">
						<input id="student_id_number_input" type="text" placeholder="ID Number">
						<input id="student_username_input" type="text" placeholder="Username">
						<input id="student_password_input" type="password" placeholder="Password">
						<button id="student_login_button" type="submit" class="user_btn" >LOGIN</button>
						<!-- <a href="student/grades.html" id="student_access_button" class="hidden">asasasd</a> -->
						<!-- <span data-dismiss="modal">Login via Personnel Portal</span> -->
					</form>

				</div>
			</div>
		</div>
		<div class="modal fade" id="personnel_login_modal" tabindex="-1" role="dialog" aria-labelledby="personnel_login_modal_label">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<img src="/assets/img/u_wish_personnel_logo.png" alt="">
					</div>
					<form class="modal-body" id="personnel_login_form" action="">
						<input id="personnel_id_number_input" type="text" placeholder="ID Number">
						<input id="personnel_username_input" type="text" placeholder="Username">
						<input id="personnel_password_input" type="password" placeholder="Password">
						<button id="personnel_login_button" type="submit" class="user_btn">LOGIN</button>
						<!-- <a href="personnel/user/gate_management.html" id="student_access_button" class="hidden">asasasd</a> -->
						<!-- <span data-dismiss="modal">Login via Personnel Portal</span> -->
					</form>
				</div>
			</div>
		</div>
		<section id="login_content_container">
			<img id="dmmmsu_logo" src="/assets/img/dmmmsu_logo.png" alt="#">
			<h1 id="u_wish_logo">U-Wish</h1>
			<div class="title_container">
				<h2 class="school_name">Don Mariano Marcos Memorial State University</h2>
				<h2 class="campus_name">Mid -  La Union Campus</h2>
			</div>
			<div id="login_button_container">
				<button id="student_login_button" class="login_btn btn" data-toggle="modal" data-target="#student_login_modal">STUDENT</button>
				<button id="personnel_login_button" class="login_btn btn" data-toggle="modal" data-target="#personnel_login_modal">PERSONNEL</button>
			</div>
		</section>


		
	</div>
	
</body>
</html>