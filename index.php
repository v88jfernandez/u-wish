<?php include('includes/head.php');?>
<?php include('partials/index_header.php');?>
	<div class="container" id="index_container">
		<h2 class="user_color">Clickable Prototype Links</h2>
		
		<ul>
			<li class="first_column">
				<ul class="student_view_container">
					<li class="view_title">STUDENT VIEW</li>
					<li><a href="/pages/student/enrollment.php" class="user_btn links_button ">Enrollment</a></li>
					<li><a href="/pages/student/financial_account.php" class="user_btn links_button ">My Financial Account</a></li>
					<li><a href="/pages/student/grades.php" class="user_btn links_button ">My Grades</a></li>
				</ul>
				<ul class="login_view_container">
				<li class="view_title">LOGIN VIEW</li>
					<li><a href="/pages/" class="user_btn links_button">Login Page</a></li>
				</ul>
			</li>
			<li class="second_column">
				<ul class="personnel_view_container">
					<li class="view_title">PERSONNEL VIEW</li>
					<li class="personnel_view_item">
						<ul class="personnel_user_container">
							<li class="personnel_type">Personnel User</li>
							<li><a href="/pages/personnel/user/gate_management.php" class="user_btn links_button ">Gate Management</a></li>
							<li><a href="/pages/personnel/user/leave_management.php" class="user_btn links_button ">Leave Management</a></li>
							<li><a href="/pages/personnel/user/clearance_management.php" class="user_btn links_button ">Clearance Management</a></li>
						</ul>
					</li>
					<li class="personnel_view_item">
						<ul class="admin_user_container">
							<li class="personnel_type">Personnel Admin</li>
							<li><a href="/pages/personnel/admin/gate_management.php" class="user_btn links_button ">Gate Management</a></li>
							<li><a href="/pages/personnel/admin/leave_management.php" class="user_btn links_button ">Leave Management</a></li>
						</ul>
					</li>
				</ul>	
			</li>
		</ul>
		
	</div>

</body>
</html>