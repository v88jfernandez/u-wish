		<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/admin_head.php');?>
		<?php include($_SERVER['DOCUMENT_ROOT'].'/partials/admin_header.php');?>

		<section class="table_with_header_section" id="admin_pending_leave_request_section">
			<div class="container">
				<div class="section_header_container">
					<h4>Pending Leave Request</h4>
				</div>

				<div class="table_head_fixer_container">
					<table class="table table-striped table_with_buttons table_head_fixer">
						<thead>
							<tr>
								<th class="admin_color">Name</th>
								<th class="admin_color">Date of Filing</th>
								<th class="admin_color">Inclusive Dates</th>
								<th class="admin_color">No.of Days</th>
								<th class="admin_color">Type</th>
								<th class="admin_color">Remarks</th>
								<th class="admin_color">Rmng. Leaves</th>
								<th class="admin_color">Action</th>
							</tr>
						</thead>
						<tbody>
							<tr data-user-id="0">
								<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="1" data-maternity-leave="0" data-vacation-leave="6" data-others="7" data-total-leaves="14">Cortez Ton</td>
								<td>January 03, 2017</td>
								<td>Jan 10, 2017, Jan 11, 2017	</td>
								<td>2</td>
								<td>Vacation</td>
								<td>Within the Philippines</td>
								<td>14 Days</td>
								<td data-leave-value="0">
									<select class="pending_leave_request_selectpicker" title="Pending">
										<option value="1">Approve</option>
										<option value="2">Dissaprove</option>
									</select>
								</td>									
							</tr>
							<tr data-user-id="1">
								<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="6" data-maternity-leave="0" data-vacation-leave="7" data-others="10" data-total-leaves="23">Greg Luton</td>
								<td>Dec 05, 2016</td>
								<td>Dec 23, 2016, Dec 24, 2016, Dec 24, 2016</td>
								<td>3</td>
								<td>Vacation</td>
								<td>Within the Philippines</td>
								<td>23 Days</td>
								<td data-leave-value="0">
									<select class="pending_leave_request_selectpicker" title="Pending">
										<option value="1">Approve</option>
										<option value="2">Dissaprove</option>
									</select>
								</td>
							</tr>
							<tr data-user-id="2">
								<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="3" data-maternity-leave="0" data-vacation-leave="4" data-others="3" data-total-leaves="10">Orval Talcott</td>
								<td>August 15, 2016</td>
								<td>August 15, 2016</td>
								<td>1</td>
								<td>Sick</td>
								<td>Hospital</td>
								<td>10 Days</td>
								<td data-leave-value="0">
									<select class="pending_leave_request_selectpicker" title="Pending">
										<option value="1">Approve</option>
										<option value="2">Dissaprove</option>
									</select>
								</td>
							</tr>
							<tr data-user-id="3">
								<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="1" data-maternity-leave="0" data-vacation-leave="6" data-others="7" data-total-leaves="14">Cortez Ton</td>
								<td>January 03, 2017</td>
								<td>Jan 10, 2017, Jan 11, 2017	</td>
								<td>2</td>
								<td>Vacation</td>
								<td>Within the Philippines</td>
								<td>14 Days</td>
								<td data-leave-value="0">
									<select class="pending_leave_request_selectpicker" title="Pending">
										<option value="1">Approve</option>
										<option value="2">Dissaprove</option>
									</select>
								</td>									
							</tr>
							<tr data-user-id="4">
								<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="6" data-maternity-leave="0" data-vacation-leave="7" data-others="10" data-total-leaves="23">Greg Luton</td>
								<td>Dec 05, 2016</td>
								<td>Dec 23, 2016, Dec 24, 2016, Dec 24, 2016</td>
								<td>3</td>
								<td>Vacation</td>
								<td>Within the Philippines</td>
								<td>23 Days</td>
								<td data-leave-value="0">
									<select class="pending_leave_request_selectpicker" title="Pending">
										<option value="1">Approve</option>
										<option value="2">Dissaprove</option>
									</select>
								</td>
							</tr>
							<tr data-user-id="5">
								<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="3" data-maternity-leave="0" data-vacation-leave="4" data-others="3" data-total-leaves="10">Orval Talcott</td>
								<td>August 15, 2016</td>
								<td>August 15, 2016</td>
								<td>1</td>
								<td>Sick</td>
								<td>Hospital</td>
								<td>10 Days</td>
								<td data-leave-value="0">
									<select class="pending_leave_request_selectpicker" title="Pending">
										<option value="1">Approve</option>
										<option value="2">Dissaprove</option>
									</select>
								</td>
							</tr>
							<tr data-user-id="6">
								<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="1" data-maternity-leave="0" data-vacation-leave="6" data-others="7" data-total-leaves="14">Cortez Ton</td>
								<td>January 03, 2017</td>
								<td>Jan 10, 2017, Jan 11, 2017	</td>
								<td>2</td>
								<td>Vacation</td>
								<td>Within the Philippines</td>
								<td>14 Days</td>
								<td data-leave-value="0">
									<select class="pending_leave_request_selectpicker" title="Pending">
										<option value="1">Approve</option>
										<option value="2">Dissaprove</option>
									</select>
								</td>									
							</tr>
							<tr data-user-id="7">
								<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="6" data-maternity-leave="0" data-vacation-leave="7" data-others="10" data-total-leaves="23">Greg Luton</td>
								<td>Dec 05, 2016</td>
								<td>Dec 23, 2016, Dec 24, 2016, Dec 24, 2016</td>
								<td>3</td>
								<td>Vacation</td>
								<td>Within the Philippines</td>
								<td>23 Days</td>
								<td data-leave-value="0">
									<select class="pending_leave_request_selectpicker" title="Pending">
										<option value="1">Approve</option>
										<option value="2">Dissaprove</option>
									</select>
								</td>
							</tr>
							<tr data-user-id="8">
								<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="3" data-maternity-leave="0" data-vacation-leave="4" data-others="3" data-total-leaves="10">Orval Talcott</td>
								<td>August 15, 2016</td>
								<td>August 15, 2016</td>
								<td>1</td>
								<td>Sick</td>
								<td>Hospital</td>
								<td>10 Days</td>
								<td data-leave-value="0">
									<select class="pending_leave_request_selectpicker" title="Pending">
										<option value="1">Approve</option>
										<option value="2">Dissaprove</option>
									</select>
								</td>
							</tr>
							<tr data-user-id="9">
								<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="1" data-maternity-leave="0" data-vacation-leave="6" data-others="7" data-total-leaves="14">Cortez Ton</td>
								<td>January 03, 2017</td>
								<td>Jan 10, 2017, Jan 11, 2017	</td>
								<td>2</td>
								<td>Vacation</td>
								<td>Within the Philippines</td>
								<td>14 Days</td>
								<td data-leave-value="0">
									<select class="pending_leave_request_selectpicker" title="Pending">
										<option value="1">Approve</option>
										<option value="2">Dissaprove</option>
									</select>
								</td>									
							</tr>
							<tr data-user-id="10">
								<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="6" data-maternity-leave="0" data-vacation-leave="7" data-others="10" data-total-leaves="23">Greg Luton</td>
								<td>Dec 05, 2016</td>
								<td>Dec 23, 2016, Dec 24, 2016, Dec 24, 2016</td>
								<td>3</td>
								<td>Vacation</td>
								<td>Within the Philippines</td>
								<td>23 Days</td>
								<td data-leave-value="0">
									<select class="pending_leave_request_selectpicker" title="Pending">
										<option value="1">Approve</option>
										<option value="2">Dissaprove</option>
									</select>
								</td>
							</tr>
							<tr data-user-id="11">
								<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="3" data-maternity-leave="0" data-vacation-leave="4" data-others="3" data-total-leaves="10">Orval Talcott</td>
								<td>August 15, 2016</td>
								<td>August 15, 2016</td>
								<td>1</td>
								<td>Sick</td>
								<td>Hospital</td>
								<td>10 Days</td>
								<td data-leave-value="0">
									<select class="pending_leave_request_selectpicker" title="Pending">
										<option value="1">Approve</option>
										<option value="2">Dissaprove</option>
									</select>
								</td>
							</tr>
							<tr data-user-id="12">
								<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="1" data-maternity-leave="0" data-vacation-leave="6" data-others="7" data-total-leaves="14">Cortez Ton</td>
								<td>January 03, 2017</td>
								<td>Jan 10, 2017, Jan 11, 2017	</td>
								<td>2</td>
								<td>Vacation</td>
								<td>Within the Philippines</td>
								<td>14 Days</td>
								<td data-leave-value="0">
									<select class="pending_leave_request_selectpicker" title="Pending">
										<option value="1">Approve</option>
										<option value="2">Dissaprove</option>
									</select>
								</td>									
							</tr>
							<tr data-user-id="13">
								<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="6" data-maternity-leave="0" data-vacation-leave="7" data-others="10" data-total-leaves="23">Greg Luton</td>
								<td>Dec 05, 2016</td>
								<td>Dec 23, 2016, Dec 24, 2016, Dec 24, 2016</td>
								<td>3</td>
								<td>Vacation</td>
								<td>Within the Philippines</td>
								<td>23 Days</td>
								<td data-leave-value="0">
									<select class="pending_leave_request_selectpicker" title="Pending">
										<option value="1">Approve</option>
										<option value="2">Dissaprove</option>
									</select>
								</td>
							</tr>
							<tr data-user-id="14">
								<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="3" data-maternity-leave="0" data-vacation-leave="4" data-others="3" data-total-leaves="10">Orval Talcott</td>
								<td>August 15, 2016</td>
								<td>August 15, 2016</td>
								<td>1</td>
								<td>Sick</td>
								<td>Hospital</td>
								<td>10 Days</td>
								<td data-leave-value="0">
									<select class="pending_leave_request_selectpicker" title="Pending">
										<option value="1">Approve</option>
										<option value="2">Dissaprove</option>
									</select>
								</td>
							</tr>
							<tr data-user-id="15">
								<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="1" data-maternity-leave="0" data-vacation-leave="6" data-others="7" data-total-leaves="14">Cortez Ton</td>
								<td>January 03, 2017</td>
								<td>Jan 10, 2017, Jan 11, 2017	</td>
								<td>2</td>
								<td>Vacation</td>
								<td>Within the Philippines</td>
								<td>14 Days</td>
								<td data-leave-value="0">
									<select class="pending_leave_request_selectpicker" title="Pending">
										<option value="1">Approve</option>
										<option value="2">Dissaprove</option>
									</select>
								</td>									
							</tr>
							<tr data-user-id="16">
								<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="6" data-maternity-leave="0" data-vacation-leave="7" data-others="10" data-total-leaves="23">Greg Luton</td>
								<td>Dec 05, 2016</td>
								<td>Dec 23, 2016, Dec 24, 2016, Dec 24, 2016</td>
								<td>3</td>
								<td>Vacation</td>
								<td>Within the Philippines</td>
								<td>23 Days</td>
								<td data-leave-value="0">
									<select class="pending_leave_request_selectpicker" title="Pending">
										<option value="1">Approve</option>
										<option value="2">Dissaprove</option>
									</select>
								</td>
							</tr>
							<tr data-user-id="17">
								<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="3" data-maternity-leave="0" data-vacation-leave="4" data-others="3" data-total-leaves="10">Orval Talcott</td>
								<td>August 15, 2016</td>
								<td>August 15, 2016</td>
								<td>1</td>
								<td>Sick</td>
								<td>Hospital</td>
								<td>10 Days</td>
								<td data-leave-value="0">
									<select class="pending_leave_request_selectpicker" title="Pending">
										<option value="1">Approve</option>
										<option value="2">Dissaprove</option>
									</select>
								</td>
							</tr>
							<tr data-user-id="18">
								<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="1" data-maternity-leave="0" data-vacation-leave="6" data-others="7" data-total-leaves="14">Cortez Ton</td>
								<td>January 03, 2017</td>
								<td>Jan 10, 2017, Jan 11, 2017	</td>
								<td>2</td>
								<td>Vacation</td>
								<td>Within the Philippines</td>
								<td>14 Days</td>
								<td data-leave-value="0">
									<select class="pending_leave_request_selectpicker" title="Pending">
										<option value="1">Approve</option>
										<option value="2">Dissaprove</option>
									</select>
								</td>									
							</tr>
							<tr data-user-id="19">
								<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="6" data-maternity-leave="0" data-vacation-leave="7" data-others="10" data-total-leaves="23">Greg Luton</td>
								<td>Dec 05, 2016</td>
								<td>Dec 23, 2016, Dec 24, 2016, Dec 24, 2016</td>
								<td>3</td>
								<td>Vacation</td>
								<td>Within the Philippines</td>
								<td>23 Days</td>
								<td data-leave-value="0">
									<select class="pending_leave_request_selectpicker" title="Pending">
										<option value="1">Approve</option>
										<option value="2">Dissaprove</option>
									</select>
								</td>
							</tr>
							
						</tbody>
					</table>
				</div>
			</div>
		</section>

		<section class="nav_tabs_section " id="gate_management_section">
			<div class="container">

				<div class="nav_tabs_options_container admin_container_bg">
					<div class="search_container pull-right">
						<input type="text" placeholder="Search Personnel" class="search_personnel_input"><span class="glyphicon glyphicon-search"></span>
					</div>
				</div>

				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active">
						<a href="#regular_tab" aria-controls="home" role="tab" data-toggle="tab">Regular</a>
					</li>
					<li role="presentation">
						<a href="#permanent_tab" aria-controls="profile" role="tab" data-toggle="tab">Permanent</a>
					</li>
					<li role="presentation">
						<a href="#temporary_tab" aria-controls="messages" role="tab" data-toggle="tab">Temporary</a>
					</li>
					<li role="presentation">
						<a href="#contractual_tab" aria-controls="settings" role="tab" data-toggle="tab">Contractual</a>
					</li>
				</ul>

				<!-- Tab panes -->
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="regular_tab">
						<table class="table table-striped">
							<thead>
								<tr >
									<th class="admin_color">Name</th>
									<th class="admin_color">ID Number</th>
									<th class="admin_color">Remaining Leaves</th>
								</tr>
							</thead>
							<tbody>
								<tr data-user-id="0">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="1" data-maternity-leave="0" data-vacation-leave="6" data-others="7" data-total-leaves="14">Cortez Ton</td>
									<td>091-2341</td>
									<td>14 Days</td>
								</tr>
								<tr data-user-id="1">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="6" data-maternity-leave="0" data-vacation-leave="7" data-others="10" data-total-leaves="23">Greg Luton</td>
									<td>091-2342</td>
									<td>23 Days</td>
								</tr>
								<tr data-user-id="2">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="3" data-maternity-leave="0" data-vacation-leave="4" data-others="3" data-total-leaves="10">Orval Talcott</td>
									<td>091-2343</td>
									<td>10 Days</td>
								</tr>
								<tr data-user-id="3">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="8" data-maternity-leave="0" data-vacation-leave="5" data-others="3" data-total-leaves="16">Vito Longshore</td>
									<td>091-2344</td>
									<td>16 Days</td>
								</tr>
								<tr data-user-id="4">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="9" data-maternity-leave="0" data-vacation-leave="4" data-others="7" data-total-leaves="20">Gene Bunger</td>
									<td>091-2345</td>
									<td>20 Days</td>
								</tr>
								<tr data-user-id="5">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="7" data-maternity-leave="0" data-vacation-leave="8" data-others="9" data-total-leaves="20">Billie Urbanek</td>
									<td>091-2365</td>
									<td>24 Days</td>
								</tr>
								<tr data-user-id="6">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="5" data-maternity-leave="0" data-vacation-leave="7" data-others="6" data-total-leaves="18">Alfonso Cuen</td>
									<td>091-2335</td>
									<td>18 Days</td>
								</tr>
								<tr data-user-id="7">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="8" data-maternity-leave="0" data-vacation-leave="1" data-others="6" data-total-leaves="15">Rocco Ryan</td>
									<td>091-2345</td>
									<td>15 Days</td>
								</tr>
								<tr data-user-id="8">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="3" data-maternity-leave="0" data-vacation-leave="3" data-others="0" data-total-leaves="6">Irvin Ryberg</td>
									<td>091-3245</td>
									<td>6 Days</td>
								</tr>
								<tr data-user-id="9">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="4" data-maternity-leave="0" data-vacation-leave="9" data-others="1" data-total-leaves="14">Junior Mooneyhan</td>
									<td>091-4345</td>
									<td>14 Days</td>
								</tr>
								<tr data-user-id="10">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="5" data-maternity-leave="0" data-vacation-leave="9" data-others="2" data-total-leaves="16">Emery Polson</td>
									<td>091-5345</td>
									<td>16 Days</td>
								</tr>
								<tr data-user-id="11">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="6" data-maternity-leave="0" data-vacation-leave="0" data-others="7" data-total-leaves="13">Bernie Catlett</td>
									<td>091-6345</td>
									<td>13 Days</td>
								</tr>
								<tr data-user-id="12">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="2" data-maternity-leave="0" data-vacation-leave="0" data-others="0" data-total-leaves="6">Cody Stocks</td>
									<td>091-2345</td>
									<td>6 Days</td>
								</tr>
								<tr data-user-id="13">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="6" data-maternity-leave="0" data-vacation-leave="7" data-others="5" data-total-leaves="18">Herbert Stelle</td>
									<td>091-7345</td>
									<td>18 Days</td>
								</tr>
								<tr data-user-id="14">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="3" data-maternity-leave="0" data-vacation-leave="1" data-others="4" data-total-leaves="8">Raymond Funderburk</td>
									<td>091-2345</td>
									<td>8 Days</td>
								</tr>
								<tr data-user-id="15">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="4" data-maternity-leave="0" data-vacation-leave="8" data-others="5" data-total-leaves="17">Lyle Truman</td>
									<td>091-8345</td>
									<td>17 Days</td>
								</tr>
								<tr data-user-id="16">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="1" data-maternity-leave="0" data-vacation-leave="2" data-others="7" data-total-leaves="10">Gaylord Cuadra</td>
									<td>091-2245</td>
									<td>10 Days</td>
								</tr>
								<tr data-user-id="17">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="5" data-maternity-leave="0" data-vacation-leave="4" data-others="8" data-total-leaves="17">Roberto Thomson</td>
									<td>091-2245</td>
									<td>17 Days</td>
								</tr>
								<tr data-user-id="18">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="4" data-maternity-leave="0" data-vacation-leave="0" data-others="4" data-total-leaves="8">Wilburn Krebbs</td>
									<td>091-2145</td>
									<td>8 Days</td>
								</tr>
								<tr data-user-id="19">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="1" data-maternity-leave="0" data-vacation-leave="2" data-others="3" data-total-leaves="6">Bernard Penix</td>
									<td>091-2355</td>
									<td>6 Days</td>
								</tr>
							</tbody>
						</table>
						<div class="pagination_container">
							<ul class="pagination_list">
								<li class="pagination_item active"><a href="#">1</a></li>
								<li class="pagination_item"><a href="#">2</a></li>
								<li class="pagination_item"><a href="#">3</a></li>
								<li class="pagination_item"><a href="#">4</a></li>
								<li class="pagination_item"><a href="#">5</a></li>
								<li class="pagination_item"><a href="#">6</a></li>
								<li class="pagination_item"><a href="#">7</a></li>
								<li class="pagination_item"><a href="#">8</a></li>
							</ul>
						</div>
					</div>
					<div role="tabpanel" class="tab-pane fade" id="permanent_tab">
						<table class="table table-striped">
							<thead>
								<tr >
									<th class="admin_color">Name</th>
									<th class="admin_color">ID Number</th>
									<th class="admin_color">Remaining Leaves</th>
								</tr>
							</thead>
							<tbody>
								<tr data-user-id="0">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="1" data-maternity-leave="0" data-vacation-leave="6" data-others="7" data-total-leaves="14">Cortez Ton</td>
									<td>091-2341</td>
									<td>14 Days</td>
								</tr>
								<tr data-user-id="1">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="6" data-maternity-leave="0" data-vacation-leave="7" data-others="10" data-total-leaves="23">Greg Luton</td>
									<td>091-2342</td>
									<td>23 Days</td>
								</tr>
								<tr data-user-id="2">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="3" data-maternity-leave="0" data-vacation-leave="4" data-others="3" data-total-leaves="10">Orval Talcott</td>
									<td>091-2343</td>
									<td>10 Days</td>
								</tr>
								<tr data-user-id="3">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="8" data-maternity-leave="0" data-vacation-leave="5" data-others="3" data-total-leaves="16">Vito Longshore</td>
									<td>091-2344</td>
									<td>16 Days</td>
								</tr>
								<tr data-user-id="4">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="9" data-maternity-leave="0" data-vacation-leave="4" data-others="7" data-total-leaves="20">Gene Bunger</td>
									<td>091-2345</td>
									<td>20 Days</td>
								</tr>
								<tr data-user-id="5">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="7" data-maternity-leave="0" data-vacation-leave="8" data-others="9" data-total-leaves="20">Billie Urbanek</td>
									<td>091-2365</td>
									<td>24 Days</td>
								</tr>
								<tr data-user-id="6">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="5" data-maternity-leave="0" data-vacation-leave="7" data-others="6" data-total-leaves="18">Alfonso Cuen</td>
									<td>091-2335</td>
									<td>18 Days</td>
								</tr>
								<tr data-user-id="7">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="8" data-maternity-leave="0" data-vacation-leave="1" data-others="6" data-total-leaves="15">Rocco Ryan</td>
									<td>091-2345</td>
									<td>15 Days</td>
								</tr>
								<tr data-user-id="8">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="3" data-maternity-leave="0" data-vacation-leave="3" data-others="0" data-total-leaves="6">Irvin Ryberg</td>
									<td>091-3245</td>
									<td>6 Days</td>
								</tr>
								<tr data-user-id="9">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="4" data-maternity-leave="0" data-vacation-leave="9" data-others="1" data-total-leaves="14">Junior Mooneyhan</td>
									<td>091-4345</td>
									<td>14 Days</td>
								</tr>
								<tr data-user-id="10">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="5" data-maternity-leave="0" data-vacation-leave="9" data-others="2" data-total-leaves="16">Emery Polson</td>
									<td>091-5345</td>
									<td>16 Days</td>
								</tr>
								<tr data-user-id="11">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="6" data-maternity-leave="0" data-vacation-leave="0" data-others="7" data-total-leaves="13">Bernie Catlett</td>
									<td>091-6345</td>
									<td>13 Days</td>
								</tr>
								<tr data-user-id="12">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="2" data-maternity-leave="0" data-vacation-leave="0" data-others="0" data-total-leaves="6">Cody Stocks</td>
									<td>091-2345</td>
									<td>6 Days</td>
								</tr>
								<tr data-user-id="13">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="6" data-maternity-leave="0" data-vacation-leave="7" data-others="5" data-total-leaves="18">Herbert Stelle</td>
									<td>091-7345</td>
									<td>18 Days</td>
								</tr>
								<tr data-user-id="14">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="3" data-maternity-leave="0" data-vacation-leave="1" data-others="4" data-total-leaves="8">Raymond Funderburk</td>
									<td>091-2345</td>
									<td>8 Days</td>
								</tr>
								<tr data-user-id="15">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="4" data-maternity-leave="0" data-vacation-leave="8" data-others="5" data-total-leaves="17">Lyle Truman</td>
									<td>091-8345</td>
									<td>17 Days</td>
								</tr>
								<tr data-user-id="16">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="1" data-maternity-leave="0" data-vacation-leave="2" data-others="7" data-total-leaves="10">Gaylord Cuadra</td>
									<td>091-2245</td>
									<td>10 Days</td>
								</tr>
								<tr data-user-id="17">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="5" data-maternity-leave="0" data-vacation-leave="4" data-others="8" data-total-leaves="17">Roberto Thomson</td>
									<td>091-2245</td>
									<td>17 Days</td>
								</tr>
								<tr data-user-id="18">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="4" data-maternity-leave="0" data-vacation-leave="0" data-others="4" data-total-leaves="8">Wilburn Krebbs</td>
									<td>091-2145</td>
									<td>8 Days</td>
								</tr>
								<tr data-user-id="19">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="1" data-maternity-leave="0" data-vacation-leave="2" data-others="3" data-total-leaves="6">Bernard Penix</td>
									<td>091-2355</td>
									<td>6 Days</td>
								</tr>
							</tbody>
						</table>
						<div class="pagination_container">
							<ul class="pagination_list">
								<li class="pagination_item active"><a href="#">1</a></li>
								<li class="pagination_item"><a href="#">2</a></li>
								<li class="pagination_item"><a href="#">3</a></li>
								<li class="pagination_item"><a href="#">4</a></li>
								<li class="pagination_item"><a href="#">5</a></li>
								<li class="pagination_item"><a href="#">6</a></li>
								<li class="pagination_item"><a href="#">7</a></li>
								<li class="pagination_item"><a href="#">8</a></li>
							</ul>
						</div>
					</div>
					<div role="tabpanel" class="tab-pane fade" id="temporary_tab">
						<table class="table table-striped">
							<thead>
								<tr >
									<th class="admin_color">Name</th>
									<th class="admin_color">ID Number</th>
									<th class="admin_color">Remaining Leaves</th>
								</tr>
							</thead>
							<tbody>
								<tr data-user-id="0">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="1" data-maternity-leave="0" data-vacation-leave="6" data-others="7" data-total-leaves="14">Cortez Ton</td>
									<td>091-2341</td>
									<td>14 Days</td>
								</tr>
								<tr data-user-id="1">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="6" data-maternity-leave="0" data-vacation-leave="7" data-others="10" data-total-leaves="23">Greg Luton</td>
									<td>091-2342</td>
									<td>23 Days</td>
								</tr>
								<tr data-user-id="2">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="3" data-maternity-leave="0" data-vacation-leave="4" data-others="3" data-total-leaves="10">Orval Talcott</td>
									<td>091-2343</td>
									<td>10 Days</td>
								</tr>
								<tr data-user-id="3">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="8" data-maternity-leave="0" data-vacation-leave="5" data-others="3" data-total-leaves="16">Vito Longshore</td>
									<td>091-2344</td>
									<td>16 Days</td>
								</tr>
								<tr data-user-id="4">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="9" data-maternity-leave="0" data-vacation-leave="4" data-others="7" data-total-leaves="20">Gene Bunger</td>
									<td>091-2345</td>
									<td>20 Days</td>
								</tr>
								<tr data-user-id="5">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="7" data-maternity-leave="0" data-vacation-leave="8" data-others="9" data-total-leaves="20">Billie Urbanek</td>
									<td>091-2365</td>
									<td>24 Days</td>
								</tr>
								<tr data-user-id="6">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="5" data-maternity-leave="0" data-vacation-leave="7" data-others="6" data-total-leaves="18">Alfonso Cuen</td>
									<td>091-2335</td>
									<td>18 Days</td>
								</tr>
								<tr data-user-id="7">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="8" data-maternity-leave="0" data-vacation-leave="1" data-others="6" data-total-leaves="15">Rocco Ryan</td>
									<td>091-2345</td>
									<td>15 Days</td>
								</tr>
								<tr data-user-id="8">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="3" data-maternity-leave="0" data-vacation-leave="3" data-others="0" data-total-leaves="6">Irvin Ryberg</td>
									<td>091-3245</td>
									<td>6 Days</td>
								</tr>
								<tr data-user-id="9">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="4" data-maternity-leave="0" data-vacation-leave="9" data-others="1" data-total-leaves="14">Junior Mooneyhan</td>
									<td>091-4345</td>
									<td>14 Days</td>
								</tr>
								<tr data-user-id="10">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="5" data-maternity-leave="0" data-vacation-leave="9" data-others="2" data-total-leaves="16">Emery Polson</td>
									<td>091-5345</td>
									<td>16 Days</td>
								</tr>
								<tr data-user-id="11">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="6" data-maternity-leave="0" data-vacation-leave="0" data-others="7" data-total-leaves="13">Bernie Catlett</td>
									<td>091-6345</td>
									<td>13 Days</td>
								</tr>
								<tr data-user-id="12">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="2" data-maternity-leave="0" data-vacation-leave="0" data-others="0" data-total-leaves="6">Cody Stocks</td>
									<td>091-2345</td>
									<td>6 Days</td>
								</tr>
								<tr data-user-id="13">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="6" data-maternity-leave="0" data-vacation-leave="7" data-others="5" data-total-leaves="18">Herbert Stelle</td>
									<td>091-7345</td>
									<td>18 Days</td>
								</tr>
								<tr data-user-id="14">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="3" data-maternity-leave="0" data-vacation-leave="1" data-others="4" data-total-leaves="8">Raymond Funderburk</td>
									<td>091-2345</td>
									<td>8 Days</td>
								</tr>
								<tr data-user-id="15">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="4" data-maternity-leave="0" data-vacation-leave="8" data-others="5" data-total-leaves="17">Lyle Truman</td>
									<td>091-8345</td>
									<td>17 Days</td>
								</tr>
								<tr data-user-id="16">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="1" data-maternity-leave="0" data-vacation-leave="2" data-others="7" data-total-leaves="10">Gaylord Cuadra</td>
									<td>091-2245</td>
									<td>10 Days</td>
								</tr>
								<tr data-user-id="17">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="5" data-maternity-leave="0" data-vacation-leave="4" data-others="8" data-total-leaves="17">Roberto Thomson</td>
									<td>091-2245</td>
									<td>17 Days</td>
								</tr>
								<tr data-user-id="18">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="4" data-maternity-leave="0" data-vacation-leave="0" data-others="4" data-total-leaves="8">Wilburn Krebbs</td>
									<td>091-2145</td>
									<td>8 Days</td>
								</tr>
								<tr data-user-id="19">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="1" data-maternity-leave="0" data-vacation-leave="2" data-others="3" data-total-leaves="6">Bernard Penix</td>
									<td>091-2355</td>
									<td>6 Days</td>
								</tr>
							</tbody>
						</table>
						<div class="pagination_container">
							<ul class="pagination_list">
								<li class="pagination_item active"><a href="#">1</a></li>
								<li class="pagination_item"><a href="#">2</a></li>
								<li class="pagination_item"><a href="#">3</a></li>
								<li class="pagination_item"><a href="#">4</a></li>
								<li class="pagination_item"><a href="#">5</a></li>
								<li class="pagination_item"><a href="#">6</a></li>
								<li class="pagination_item"><a href="#">7</a></li>
								<li class="pagination_item"><a href="#">8</a></li>
							</ul>
						</div>
					</div>
					<div role="tabpanel" class="tab-pane fade" id="contractual_tab">
						<table class="table table-striped">
							<thead>
								<tr >
									<th class="admin_color">Name</th>
									<th class="admin_color">ID Number</th>
									<th class="admin_color">Remaining Leaves</th>
								</tr>
							</thead>
							<tbody>
								<tr data-user-id="0">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="1" data-maternity-leave="0" data-vacation-leave="6" data-others="7" data-total-leaves="14">Cortez Ton</td>
									<td>091-2341</td>
									<td>14 Days</td>
								</tr>
								<tr data-user-id="1">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="6" data-maternity-leave="0" data-vacation-leave="7" data-others="10" data-total-leaves="23">Greg Luton</td>
									<td>091-2342</td>
									<td>23 Days</td>
								</tr>
								<tr data-user-id="2">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="3" data-maternity-leave="0" data-vacation-leave="4" data-others="3" data-total-leaves="10">Orval Talcott</td>
									<td>091-2343</td>
									<td>10 Days</td>
								</tr>
								<tr data-user-id="3">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="8" data-maternity-leave="0" data-vacation-leave="5" data-others="3" data-total-leaves="16">Vito Longshore</td>
									<td>091-2344</td>
									<td>16 Days</td>
								</tr>
								<tr data-user-id="4">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="9" data-maternity-leave="0" data-vacation-leave="4" data-others="7" data-total-leaves="20">Gene Bunger</td>
									<td>091-2345</td>
									<td>20 Days</td>
								</tr>
								<tr data-user-id="5">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="7" data-maternity-leave="0" data-vacation-leave="8" data-others="9" data-total-leaves="20">Billie Urbanek</td>
									<td>091-2365</td>
									<td>24 Days</td>
								</tr>
								<tr data-user-id="6">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="5" data-maternity-leave="0" data-vacation-leave="7" data-others="6" data-total-leaves="18">Alfonso Cuen</td>
									<td>091-2335</td>
									<td>18 Days</td>
								</tr>
								<tr data-user-id="7">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="8" data-maternity-leave="0" data-vacation-leave="1" data-others="6" data-total-leaves="15">Rocco Ryan</td>
									<td>091-2345</td>
									<td>15 Days</td>
								</tr>
								<tr data-user-id="8">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="3" data-maternity-leave="0" data-vacation-leave="3" data-others="0" data-total-leaves="6">Irvin Ryberg</td>
									<td>091-3245</td>
									<td>6 Days</td>
								</tr>
								<tr data-user-id="9">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="4" data-maternity-leave="0" data-vacation-leave="9" data-others="1" data-total-leaves="14">Junior Mooneyhan</td>
									<td>091-4345</td>
									<td>14 Days</td>
								</tr>
								<tr data-user-id="10">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="5" data-maternity-leave="0" data-vacation-leave="9" data-others="2" data-total-leaves="16">Emery Polson</td>
									<td>091-5345</td>
									<td>16 Days</td>
								</tr>
								<tr data-user-id="11">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="6" data-maternity-leave="0" data-vacation-leave="0" data-others="7" data-total-leaves="13">Bernie Catlett</td>
									<td>091-6345</td>
									<td>13 Days</td>
								</tr>
								<tr data-user-id="12">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="2" data-maternity-leave="0" data-vacation-leave="0" data-others="0" data-total-leaves="6">Cody Stocks</td>
									<td>091-2345</td>
									<td>6 Days</td>
								</tr>
								<tr data-user-id="13">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="6" data-maternity-leave="0" data-vacation-leave="7" data-others="5" data-total-leaves="18">Herbert Stelle</td>
									<td>091-7345</td>
									<td>18 Days</td>
								</tr>
								<tr data-user-id="14">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="3" data-maternity-leave="0" data-vacation-leave="1" data-others="4" data-total-leaves="8">Raymond Funderburk</td>
									<td>091-2345</td>
									<td>8 Days</td>
								</tr>
								<tr data-user-id="15">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="4" data-maternity-leave="0" data-vacation-leave="8" data-others="5" data-total-leaves="17">Lyle Truman</td>
									<td>091-8345</td>
									<td>17 Days</td>
								</tr>
								<tr data-user-id="16">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="1" data-maternity-leave="0" data-vacation-leave="2" data-others="7" data-total-leaves="10">Gaylord Cuadra</td>
									<td>091-2245</td>
									<td>10 Days</td>
								</tr>
								<tr data-user-id="17">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="5" data-maternity-leave="0" data-vacation-leave="4" data-others="8" data-total-leaves="17">Roberto Thomson</td>
									<td>091-2245</td>
									<td>17 Days</td>
								</tr>
								<tr data-user-id="18">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="4" data-maternity-leave="0" data-vacation-leave="0" data-others="4" data-total-leaves="8">Wilburn Krebbs</td>
									<td>091-2145</td>
									<td>8 Days</td>
								</tr>
								<tr data-user-id="19">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_leave_personnel_details_modal" data-sick-leave="1" data-maternity-leave="0" data-vacation-leave="2" data-others="3" data-total-leaves="6">Bernard Penix</td>
									<td>091-2355</td>
									<td>6 Days</td>
								</tr>
							</tbody>
						</table>
						<div class="pagination_container">
							<ul class="pagination_list">
								<li class="pagination_item active"><a href="#">1</a></li>
								<li class="pagination_item"><a href="#">2</a></li>
								<li class="pagination_item"><a href="#">3</a></li>
								<li class="pagination_item"><a href="#">4</a></li>
								<li class="pagination_item"><a href="#">5</a></li>
								<li class="pagination_item"><a href="#">6</a></li>
								<li class="pagination_item"><a href="#">7</a></li>
								<li class="pagination_item"><a href="#">8</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Modal -->
		<div class="modal fade view_leave_personnel_details_modal" tabindex="-1" role="dialog" aria-labelledby="view_leave_personnel_details_modal">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<input type="hidden" name="user_id" value="">
					<div>
						<div class="user_profile_summary_container">
							<img src="/assets/img/Gurtiza, Jhaver Jan A.png" alt="">

							<ul class="user_profile_summary">
								<li class="user_name_container">
									<h3 class="user_name admin_color">Gurtiza, Jhaver Jan A.</h3>
								</li>
								<li class="agency_container">
									<h4 class="user_agency">DMMMSU - MLUC</h4>
								</li>
								<li class="work_position_container">
									<h4>Position:</h4>
									<h4 class="pull-right work_position">Assistant Professor II</h4>
								</li>
								<li class="user_salary">
									<h4>Salary (monthly):</h4>
									<h4 class="pull-right salary">P 20,000.00</h4>
								</li>
							</ul>
						</div>

						<div class="leaves_container">
							<span>Available Leaves</span>
							<ul class="list-unstyled available_leaves_list">
								<li>
									<span>Sick Leave:</span> 
									<span class="available_leave_count sick_leave">5</span>
								</li>
								<li>
									<span>Maternity Leave: </span>
									<span class="available_leave_count maternity_leave">0</span></li>
								<li>
									<span>Vacation Leave:</span> 
									<span class="available_leave_count vacation_leave">5</span>
								</li>
								<li>
									<span>Others:</span> 
									<span class="available_leave_count others_leave">5</span>
								</li>
							</ul>

							<div class="total_leaves_container">
								<span>Total Leaves</span>
								<span class="total_leaves">15</span>
							</div>
						</div>

						<div class="navigation_container pull-right">
							<a href="#" class="previous_user"><span class="glyphicon glyphicon-chevron-left"></span></a>
							<a href="#" class="next_user"><span class="glyphicon glyphicon-chevron-right"></span></a>
						</div>
						<!-- <button class="admin_btn pull-right download_dtr_btn"><span class="glyphicon glyphicon-save"></span> Download DTR</button>	 -->
					</div>

					<section class="table_with_header_section">
						<div class="section_header_container">
							<h4>Leave History</h4>
						</div>
						<div class="table_head_fixer_container">

							<table class="table table-striped table_with_buttons table_head_fixer">
								<thead>
									<tr>
										<th class="user_color">Filling Date</th>
										<th class="user_color">Dates</th>
										<th class="user_color">No. of Days</th>
										<th class="user_color">Type</th>
										<th class="user_color">Remarks</th>
										<th class="user_color">Status</th>
										
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>January 03, 2017</td>
										<td>Jan 10, 2017, Jan 11, 2017</td>
										<td>2</td>
										<td>Vacation</td>
										<td>within the Philippines</td>
										<td>
											<span class="remarks_btn green_bg">Approved</span>
										</td>
									</tr>
									<tr>
										<td>Dec 05, 2016</td>
										<td>Dec 23, 2016, Dec 24, 2016, Dec 24, 2016</td>
										<td>3</td>
										<td>Vacation</td>
										<td>within the Philippines</td>
										<td>
											<span class="remarks_btn green_bg">Approved</span>
										</td>
									</tr>
									<tr>
										<td>August 15, 2016</td>
										<td>August 15, 2016</td>
										<td>2</td>
										<td>Sick</td>
										<td>Hospital</td>
										<td>
											<span class="remarks_btn green_bg">Approved</span>
										</td>
									</tr>
									<tr>
										<td>January 03, 2017</td>
										<td>Jan 10, 2017, Jan 11, 2017</td>
										<td>2</td>
										<td>Vacation</td>
										<td>within the Philippines</td>
										<td>
											<span class="remarks_btn green_bg">Approved</span>
										</td>
									</tr>
									<tr>
										<td>Dec 05, 2016</td>
										<td>Dec 23, 2016, Dec 24, 2016, Dec 24, 2016</td>
										<td>3</td>
										<td>Vacation</td>
										<td>within the Philippines</td>
										<td>
											<span class="remarks_btn green_bg">Approved</span>
										</td>
									</tr>
									<tr>
										<td>August 15, 2016</td>
										<td>August 15, 2016</td>
										<td>2</td>
										<td>Sick</td>
										<td>Hospital</td>
										<td>
											<span class="remarks_btn green_bg">Approved</span>
										</td>
									</tr><tr>
										<td>January 03, 2017</td>
										<td>Jan 10, 2017, Jan 11, 2017</td>
										<td>2</td>
										<td>Vacation</td>
										<td>within the Philippines</td>
										<td>
											<span class="remarks_btn green_bg">Approved</span>
										</td>
									</tr>
									<tr>
										<td>Dec 05, 2016</td>
										<td>Dec 23, 2016, Dec 24, 2016, Dec 24, 2016</td>
										<td>3</td>
										<td>Vacation</td>
										<td>within the Philippines</td>
										<td>
											<span class="remarks_btn green_bg">Approved</span>
										</td>
									</tr>
									<tr>
										<td>August 15, 2016</td>
										<td>August 15, 2016</td>
										<td>2</td>
										<td>Sick</td>
										<td>Hospital</td>
										<td>
											<span class="remarks_btn green_bg">Approved</span>
										</td>
									</tr><tr>
										<td>January 03, 2017</td>
										<td>Jan 10, 2017, Jan 11, 2017</td>
										<td>2</td>
										<td>Vacation</td>
										<td>within the Philippines</td>
										<td>
											<span class="remarks_btn green_bg">Approved</span>
										</td>
									</tr>
									<tr>
										<td>Dec 05, 2016</td>
										<td>Dec 23, 2016, Dec 24, 2016, Dec 24, 2016</td>
										<td>3</td>
										<td>Vacation</td>
										<td>within the Philippines</td>
										<td>
											<span class="remarks_btn green_bg">Approved</span>
										</td>
									</tr>
									<tr>
										<td>August 15, 2016</td>
										<td>August 15, 2016</td>
										<td>2</td>
										<td>Sick</td>
										<td>Hospital</td>
										<td>
											<span class="remarks_btn green_bg">Approved</span>
										</td>
									</tr><tr>
										<td>January 03, 2017</td>
										<td>Jan 10, 2017, Jan 11, 2017</td>
										<td>2</td>
										<td>Vacation</td>
										<td>within the Philippines</td>
										<td>
											<span class="remarks_btn green_bg">Approved</span>
										</td>
									</tr>
									<tr>
										<td>Dec 05, 2016</td>
										<td>Dec 23, 2016, Dec 24, 2016, Dec 24, 2016</td>
										<td>3</td>
										<td>Vacation</td>
										<td>within the Philippines</td>
										<td>
											<span class="remarks_btn green_bg">Approved</span>
										</td>
									</tr>
									<tr>
										<td>August 15, 2016</td>
										<td>August 15, 2016</td>
										<td>2</td>
										<td>Sick</td>
										<td>Hospital</td>
										<td>
											<span class="remarks_btn green_bg">Approved</span>
										</td>
									</tr><tr>
										<td>January 03, 2017</td>
										<td>Jan 10, 2017, Jan 11, 2017</td>
										<td>2</td>
										<td>Vacation</td>
										<td>within the Philippines</td>
										<td>
											<span class="remarks_btn green_bg">Approved</span>
										</td>
									</tr>
									<tr>
										<td>Dec 05, 2016</td>
										<td>Dec 23, 2016, Dec 24, 2016, Dec 24, 2016</td>
										<td>3</td>
										<td>Vacation</td>
										<td>within the Philippines</td>
										<td>
											<span class="remarks_btn green_bg">Approved</span>
										</td>
									</tr>
									<tr>
										<td>August 15, 2016</td>
										<td>August 15, 2016</td>
										<td>2</td>
										<td>Sick</td>
										<td>Hospital</td>
										<td>
											<span class="remarks_btn green_bg">Approved</span>
										</td>
									</tr><tr>
										<td>January 03, 2017</td>
										<td>Jan 10, 2017, Jan 11, 2017</td>
										<td>2</td>
										<td>Vacation</td>
										<td>within the Philippines</td>
										<td>
											<span class="remarks_btn green_bg">Approved</span>
										</td>
									</tr>
									<tr>
										<td>Dec 05, 2016</td>
										<td>Dec 23, 2016, Dec 24, 2016, Dec 24, 2016</td>
										<td>3</td>
										<td>Vacation</td>
										<td>within the Philippines</td>
										<td>
											<span class="remarks_btn green_bg">Approved</span>
										</td>
									</tr>
									<tr>
										<td>August 15, 2016</td>
										<td>August 15, 2016</td>
										<td>2</td>
										<td>Sick</td>
										<td>Hospital</td>
										<td>
											<span class="remarks_btn green_bg">Approved</span>
										</td>
									</tr><tr>
										<td>January 03, 2017</td>
										<td>Jan 10, 2017, Jan 11, 2017</td>
										<td>2</td>
										<td>Vacation</td>
										<td>within the Philippines</td>
										<td>
											<span class="remarks_btn green_bg">Approved</span>
										</td>
									</tr>
									<tr>
										<td>Dec 05, 2016</td>
										<td>Dec 23, 2016, Dec 24, 2016, Dec 24, 2016</td>
										<td>3</td>
										<td>Vacation</td>
										<td>within the Philippines</td>
										<td>
											<span class="remarks_btn green_bg">Approved</span>
										</td>
									</tr>
									<tr>
										<td>August 15, 2016</td>
										<td>August 15, 2016</td>
										<td>2</td>
										<td>Sick</td>
										<td>Hospital</td>
										<td>
											<span class="remarks_btn green_bg">Approved</span>
										</td>
									</tr>
								</tbody>
							</table>
						</div>


					</section>
				</div>
			</div>
		</div>
	</div>
</body>

<script>
	$(document).ready(function(){
		// $("body").prepend($(window).outerWidth()," " ,$(window).outerHeight());
	});
</script>
</html>

