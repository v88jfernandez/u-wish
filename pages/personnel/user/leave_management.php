		<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/admin_head.php');?>
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

		<div id="apply_leave_form_button_container" class="container">
			<button id="apply_leave_form_button" class="user_btn fadeout_btn">
				<span class="glyphicon glyphicon-plus"></span>
				<span>Apply Leave</span>
			</button>	
		</div>

		<section id="available_leave_section" class="table_with_header_section">
			<div class="container">
				<div class="section_header_container">
					<h4>Available Leaves</h4>
				</div>

				<table class="table table-striped table_with_buttons">
					<thead>
						<tr>
							<th class="user_color">Sick</th>
							<th class="user_color">Vacation</th>
							<th class="user_color">Maternity</th>
							<th class="user_color">Others</th>
							<th class="user_color">Total</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td id="sick_leave_credit">3</td>
							<td id="vacation_leave_credit">3</td>
							<td id="maternity_leave_credit">3</td>
							<td id="others_leave_credit">3</td>
							<td id="total_leave_credit">12</td>
						</tr>
					</tbody>
				</table>
			</div>
		</section>

		<section id="leave_form_section">
			<div id="leave_form_data" class="hidden">
				<span id="leave_type_data"></span>
				<span id="leave_condition_data"></span>
				<span id="leave_remarks"></span>
				<span id="number_of_days_data"></span>
				<span id="inclusive_dates_data"></span>
				<span id="commutation_data"></span>
			</div>
			<form id="online_leave_form" class="container" action="">
				<div id="leave_credentials_container">
					<div id="user_profile_summary_container">
						<img src="/assets/img/Gurtiza, Jhaver Jan A.png" alt="">
						<ul class="user_profile_summary">
							<li class="user_name_container">
								<h3 class="user_name user_color">Gurtiza, Jhaver Jan A.</h3>
							</li>
							<li class="agency_container">
								<h4 class="user_agency">DMMMSU - MLUC</h4>
							</li>
							<li class="filling_date_container">
								<h4>Date of Filling:</h4>
								<h4 id="leave_filling_date" class="text_allign_right pull-right">January 18, 2017</h4>
							</li>
							<li class="work_position_container">
								<h4>Position:</h4>
								<h4 class="pull-right">Assistant Professor II</h4>
							</li>
							<li class="suer_salary">
								<h4>Salary (monthly):</h4>
								<h4 class="pull-right">P 20,000.00</h4>
							</li>
						</ul>
					</div>
					<ul id="leave_questions_container">
						<li id="type_of_leave_container" class="leave_questions_item">
							<label for="leave_type_selectpicker">Type of Leave</label>
							<select id="leave_type_selectpicker" class="selectpicker" title="Select Type">
								<option>Sick</option>
								<option>Vacation</option>
								<option>Maternity</option>
								<option>Others</option>
							</select>
							<ul id="sick_leave_condition" class="leave_conditions">
								<li class="sick_leave_condition_item radio_button_container">
									<input type="radio" id="in_hospital_sick_leave" class="radio_button_input" name="sick_leave" value="In Hospital">
									<label for="in_hospital_sick_leave" id="in_hospital_sick_leave_label" class="radio_button_label">
										<span class="radio_button">
											<span class="radio_marker"></span>
										</span>
										<span>In Hospital</span>
									</label>
								</li>
								<li class="sick_leave_condition_item radio_button_container">
									<input type="radio" id="out_patient_sick_leave" class="radio_button_input" name="sick_leave" value="Out Patient">
									<label for="out_patient_sick_leave" id="out_patient_sick_leave_label" class="radio_button_label">
										<span class="radio_button">
											<span class="radio_marker"></span>
										</span>
										<span>Out Patient</span>
									</label>
								</li>
								<li class="sick_leave_condition_item specify_leave_input_container">
									<input class="specify_leave_input" type="text" placeholder="Specify">
								</li>
							</ul>
							<ul id="vacation_leave_condition" class="leave_conditions">
								<li class="sick_leave_condition_item radio_button_container">
									<input type="radio" id="philippines_vacation_leave" class="radio_button_input" name="vacation_leave" value="Philippines">
									<label for="philippines_vacation_leave" id="philippines_vacation_leave_label" class="radio_button_label">
										<span class="radio_button">
											<span class="radio_marker"></span>
										</span>
										<span>Philippines</span>
									</label>
								</li>
								<li class="sick_leave_condition_item radio_button_container">
									<input type="radio" id="abroad_vacation_leave" class="radio_button_input" name="vacation_leave" value="Abroad">
									<label for="abroad_vacation_leave" id="abroad_vacation_leave_label" class="radio_button_label">
										<span class="radio_button">
											<span class="radio_marker"></span>
										</span>
										<span>Abroad</span>
									</label>
								</li>
								<li class="sick_leave_condition_item  specify_leave_input_container">
									<input class="specify_leave_input" type="text" placeholder="Specify">
								</li>
							</ul>
							<ul id="others_leave_condition" class="leave_conditions">
								<li class="sick_leave_condition_item specify_leave_input_container">
									<input id="others_leave_input" class="specify_leave_input" type="text" placeholder="Specify">
								</li>
							</ul>
						</li><!-- 
					 --><li id="days_dates_container" class="leave_questions_item">
					 		<label for="number_of_days_input">Number of Days</label>
							<input type="number" id="number_of_days_input" placeholder="Input Number">
							<label for="inclusive_dates_datepicker" class="inclusive_dates_datepicker_label">Inclusive Dates</label>
							<div id="inclusive_dates_datepicker" class="datepicker_container">
								<div class="input-group date" data-provide="datepicker">
    								<input type="text" class="form-control">
   									<div class="input-group-addon">
        								<span class="glyphicon glyphicon-calendar"></span>
								    </div>
								</div>
							</div>
					 </li><!-- 
					 --><li id="commutation_container" class="leave_questions_item">
					 		<label for="" class="">Commutation</label>
					 		<ul id="commutation_list">
					 			<li class="commutation_item radio_button_container">
					 				<input type="radio" id="requested_commutation" class="radio_button_input" name="commutation" value="Requested">
									<label for="requested_commutation" id="requested_commutation_label" class="radio_button_label">
										<span class="radio_button">
											<span class="radio_marker"></span>
										</span>
										<span>Requested</span>
									</label>
					 			</li>
					 			<li class="commutation_item radio_button_container">
					 				<input type="radio" id="non_requested_commutation" class="radio_button_input" name="commutation" value="Not Requested">
									<label for="non_requested_commutation" id="not_requested_commutation_label" class="radio_button_label">
										<span class="radio_button">
											<span class="radio_marker"></span>
										</span>
										<span>Not Requested</span>
									</label>
					 			</li>
					 		</ul>

						</li>
					</ul>
				</div>
				<div id="apply_button_container">
					<button id="apply_leave_button" class="user_btn">
						<span class="glyphicon glyphicon-plus"></span>
						<span>Apply Leave</span>
					</button>
					
				</div>
			</form>
		</section>

		<section id="leave_history_section" class="table_with_header_section">
			<div class="container">
				<div class="section_header_container">
					<h4>Leave History</h4>
				</div>

				<table class="table table-striped table_with_buttons">
					<thead>
						<tr>
							<th class="user_color">Date of Filling</th>
							<th class="user_color">Inclusive Dates</th>
							<th class="user_color">Number of Days</th>
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
</body>
</html>