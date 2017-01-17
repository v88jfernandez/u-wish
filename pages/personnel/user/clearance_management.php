		<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/head.php');?>
		<?php include($_SERVER['DOCUMENT_ROOT'].'/partials/admin_user_header.php');?>

		<!-- Modal -->
		<div class="modal fade" id="leave_application_modal" tabindex="-1" role="dialog" aria-labelledby="leave_application_modal_label">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="leave_application_modal_label">
							<span class="glyphicon glyphicon-ok-circle"></span>
						</h4>
					</div>
					<div class="modal-body">
						<h3>Your Leave Request was Successfully Sent.</h3>
						<span>Please wait for the approval. Thank you.</span>
						<!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
						<button id="leave_confirmation_button" data-dismiss="modal" type="button" class="user_btn">Ok</button>
					</div>
				</div>
			</div>
		</div>

		<section id="clearance_form_section">
			<form id="clearance_form" class="container" action="">
				<div id="clearance_form_data_container" class="hidden">
					<span id="clearance_purpose_data"></span>
					<span id="effective_date_data"></span>
					<span id="reason_data"></span>
				</div>
				<div id="clearance_credentials_container">
					<div id="user_profile_summary_container">
						<img src="/assets/img/Gurtiza, Jhaver Jan A.png" alt="">
						<ul class="user_profile_summary">
							<li class="">
								<h3 class="user_name user_color">Gurtiza, Jhaver Jan A.</h3>
							</li>
							<li class="agency_container">
								<h4 class="user_agency">DMMMSU - MLUC</h4>
							</li>
							<li class="work_position_container">
								<h4>Position:</h4>
								<h4 class="pull-right">Assistant Professor II</h4>
							</li>
							<li class="">
								<h4>Department:</h4>
								<h4 class="pull-right">CIT Faculty</h4>
							</li>
						</ul>
					</div>
					<ul id="clearance_questions_container">
						<li id="clearance_purpose_container" class="clearance_questions_item">
							<label for	="clearance_purpose_selectpicker">Clearance Purpose</label>
							<select id="clearance_purpose_selectpicker" class="selectpicker" title="Select Type">
								<option>Resignation</option>
								<option>Maternity Leave</option>
								<option>Study Leave</option>
								<option>Separation</option>
								<option>Retirement</option>
								<option>Transfer</option>
								<option>Leave of Absence for 30 days</option>
								<option>Proportional Leave (Summer)</option>
							</select>
						</li><!-- 
					 --><li id="effective_date_container" class="clearance_questions_item">
							<label for="inclusive_dates_datepicker" class="">Effective Date</label>
							<div id="" class="datepicker_container">
								<div class="input-group date effective_date" data-provide="datepicker">
    								<input type="text" class="form-control">
   									<div class="input-group-addon">
        								<span class="glyphicon glyphicon-calendar"></span>
								    </div>
								</div>
							</div>
					 </li><!-- 
					 --><li id="commutation_container" class="clearance_questions_item">
					 		<label for="" class="">Reason</label>
					 		<textarea name="" id="reason_textarea" cols="20" rows="4" ></textarea>

						</li>
					</ul>
				</div>
				<div id="apply_button_container">
					<button id="apply_leave_button" class="user_btn">
						<span class="glyphicon glyphicon-plus"></span>
						<span>Apply Clearance</span>
					</button>
					
				</div>
			</form>
		</section>

		<section id="clearance_status_section" class="table_with_header_section">
			<div class="container">
				<div class="section_header_container">
					<h4>Clearance Status</h4>
				</div>

				<table class="table table-striped table_with_buttons">
					<thead>
						<tr>
							<th class="user_color">Department</th>
							<th class="user_color">Assignee</th>
							<th class="user_color">Status</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Registar</td>
							<td>Dylan Ababou</td>
							<td>
								<span class="remarks_btn orange_bg">Pending</span>
							</td>
						</tr>
						<tr>
							<td>Dean</td>
							<td>Bong Abad</td>
							<td>
								<span class="remarks_btn orange_bg">Pending</span>
							</td>
						</tr>
						<tr>
							<td>Registar</td>
							<td>Aaron Aban</td>
							<td>
								<span class="remarks_btn orange_bg">Pending</span>
							</td>
						</tr>
						<tr>
							<td>IGP Coordinator</td>
							<td>Johnny Abarrientos</td>
							<td>
								<span class="remarks_btn orange_bg">Pending</span>
							</td>
						</tr>
						<tr>
							<td>Head Librarian Services</td>
							<td>Virgilio Abarrientos</td>
							<td>
								<span class="remarks_btn orange_bg">Pending</span>
							</td>
						</tr>
						<tr>
							<td>Accountant</td>
							<td>Dennis Abbatuan</td>
							<td>
								<span class="remarks_btn orange_bg">Pending</span>
							</td>
						</tr>
						<tr>
							<td>NTA/FAD Treasure</td>
							<td>Gee Abanilla</td>
							<td>
								<span class="remarks_btn orange_bg">Pending</span>
							</td>
						</tr>
						<tr>
							<td>HRMO</td>
							<td>Allan Abelgas</td>
							<td>
								<span class="remarks_btn orange_bg">Pending</span>
							</td>
						</tr>
						<tr>
							<td>Administrative Officer</td>
							<td>Freddie Abuda</td>
							<td>
								<span class="remarks_btn orange_bg">Pending</span>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</section>






	</div>
</body>
</html>