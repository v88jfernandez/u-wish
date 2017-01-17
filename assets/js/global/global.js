$(document).ready(function(){
	$(".table_head_fixer").tableHeadFixer();

	$('#inclusive_dates_datepicker').find(".date").datepicker({
	    multidate: true,
	    format: ' M dd, yyyy',
	});

	$('#days_dates_container').find(".date").datepicker({
	    format: ' M dd, yyyy',
	});

	$("body").on("change", ".filter_simulation", function(){
		$("#dtr_table_modal").fadeOut();
		$("#dtr_table_modal").fadeIn();
		return false;
	});

	



	$("body").on("click", ".enroll_button", function(){
		var bootstrap_select_button = $(this).closest("tr").find(".btn")



		var select_subject_schedule_data =  $(this).closest("tr").find(".subject_schedule_data").text();

		console.log(select_subject_schedule_data.length);

		if(select_subject_schedule_data.length == 0){
			bootstrap_select_button.addClass("error_border");
		}
		else{
			$(this).text("Enrolled");
			$(this).addClass("enrolled_button");
			bootstrap_select_button.removeClass("error_border");

		}
	});

	$("body").on("change", ".select_subject_schedule", function(){

		
			var select_subject_schedule = $(this);
			var select_subject_schedule_value = select_subject_schedule.val();
	
			$(this).closest(".select_schedule").find(".subject_schedule_data").text(select_subject_schedule_value);
	
			return false;
		
	});




// personnel

// leave management
	$("body").on("click", "#apply_leave_form_button", function(){
		$("#available_leave_section").slideUp();

		setTimeout(function(){
			$("#apply_leave_form_button").fadeOut();
			$("#leave_form_section").slideDown();
		},400);	
	});



// leave_type_selectpicker
	$("body").on("change", "select#leave_type_selectpicker", function(){
		var leave_type_selectpicker = $(this);
		var leave_type_selectpicker_value = leave_type_selectpicker.val()

		$("#leave_type_data").text(leave_type_selectpicker_value);
		$("#leave_condition_data").text("");
		$("#leave_remarks").text("");
		$(".specify_leave_input").val("");


		if(leave_type_selectpicker_value == "Sick"){

			$(".leave_conditions").fadeOut();
			$("#vacation_leave_condition").find(".specify_leave_input").slideUp();
			$("#sick_leave_condition").find(".specify_leave_input").slideUp();
			$("input[name=sick_leave]").removeAttr("checked");

			setTimeout(function(){
				$("#sick_leave_condition").fadeIn();
			},400);
		};

		if(leave_type_selectpicker_value == "Vacation"){

			$(".leave_conditions").fadeOut();
			$("#vacation_leave_condition").find(".specify_leave_input").slideUp();
			$("#sick_leave_condition").find(".specify_leave_input").slideUp();

			setTimeout(function(){
				$("#vacation_leave_condition").fadeIn();
			},400);
		};

		if(leave_type_selectpicker_value == "Maternity"){
			$(".leave_conditions").fadeOut();
			$("#leave_remarks").text("--");
			$("#leave_condition_data").text("--");
		};
		
		if(leave_type_selectpicker_value == "Others"){

			$(".leave_conditions").fadeOut();
			$("#leave_remarks").text("--");
			$("#leave_condition_data").text("--");

			
			setTimeout(function(){
				$("#others_leave_condition").fadeIn();
			},400);
		};

		$(".radio_button_input").prop("checked", false);
	});

// sick_leave_condition_data_value
	$("body").on("change", "input[name=sick_leave]", function(){
		var sick_leave_condition_value = $(this).val();
		$("#leave_condition_data").text(sick_leave_condition_value);
	});

// vacation_leave_condition_data_value
	$("body").on("change", "input[name=vacation_leave]", function(){
		var vacation_leave_condition_value = $(this).val();
		$("#leave_condition_data").text(vacation_leave_condition_value);
	})

// leave_remarks
	$("body").on("focusout", ".specify_leave_input", function(){
		var leave_remarks = $(this).val();
		$("#leave_remarks").text(leave_remarks);
	});


// number_of_days_input
	$("body").on("focusout", "#number_of_days_input", function(){
		var number_of_days_data_value = $(this).val();
		$("#number_of_days_data").text(number_of_days_data_value);
	})


// inclusive_dates_data_value
	$("body").on("focusout", "input.form-control", function(){

		var inclusive_dates_data_value = $(this).val();

		$("#inclusive_dates_data").text(inclusive_dates_data_value);
	});

// commutation_value
	$("body").on("change", "input[name=commutation]", function(){
		var commutation_value = $(this).val();
		$("#commutation_data").text(commutation_value);
	});

	$("body").on("change", "input[name=sick_leave]", function(){
		$(this).closest("#sick_leave_condition").find(".specify_leave_input").slideDown();
	});

	$("body").on("change", "input[name=vacation_leave]", function(){
		$(this).closest("#vacation_leave_condition").find(".specify_leave_input").slideDown();
	});


	// click apply button

	$("body").on("submit", "#online_leave_form", function(e){
		e.preventDefault();

		var leave_type_data_value = $("#leave_type_data").text();
		var leave_condition_data_value =  $("#leave_condition_data").text();
		var leave_remarks_data_value = $("#leave_remarks").text();
		var number_of_days_data_value = $("#number_of_days_data").text();
		var inclusive_dates_data_value = $("#inclusive_dates_data").text();
		var commutation_data_value = $("#commutation_data").text();

		if(
			leave_type_data_value == "" ||
			leave_condition_data_value == "" ||
			leave_remarks_data_value == "" ||
			number_of_days_data_value == "" ||
			inclusive_dates_data_value == "" ||
			commutation_data_value == ""
			){
				if(leave_type_data_value == ""){
					$("#type_of_leave_container").find(".btn").addClass("error_border");
				}
				else{
					$("#type_of_leave_container").find(".btn").removeClass("error_border");
				};
				if(number_of_days_data_value == ""){
					$("#number_of_days_input").addClass("error_border");
				}
				else{
					$("#number_of_days_input").removeClass("error_border");
				};
				if(inclusive_dates_data_value == ""){
					$("#days_dates_container").find(".form-control").addClass("error_border");
				}
				else{
					$("#days_dates_container").find(".form-control").removeClass("error_border");
				};
				if(commutation_data_value == ""){
					$("#commutation_list").addClass("error_border");
				}
				else{
					$("#commutation_list").removeClass("error_border");
				};
				if(leave_condition_data_value == ""){
					$("#sick_leave_condition").addClass("error_border");
					$("#vacation_leave_condition").addClass("error_border");
				}
				else{
					$("#sick_leave_condition").removeClass("error_border");
					$("#vacation_leave_condition").removeClass("error_border");
				};
				if(leave_remarks_data_value == ""){
					$("#sick_leave_condition").addClass("error_border");
					$("#vacation_leave_condition").addClass("error_border");
				}
				else{
					$("#sick_leave_condition").removeClass("error_border");
					$("#vacation_leave_condition").removeClass("error_border");
				}

				

			return false;
		}
		else{
			
			submit_application();
			
			return false
		}
	})


	$("body").on("click", ".download_grades_btn", function(){
		$(this).closest(".panel").collapse('show');
	});


	/* Showing of Download Certificate of Grades Button*/
	$('#grades_accordion .panel').on('show.bs.collapse', function () {
		$(this).addClass("showned_panel").siblings().removeClass("showned_panel");
	});	
	
	$('#grades_accordion .panel').on('hide.bs.collapse', function () {
		$(this).removeClass("showned_panel");
	});



// login page

	$("body").on("submit", "#student_login_form", function(e){
		e.preventDefault();
		var student_id_number_input_value = $("#student_id_number_input").val();
		var student_username_input_value = $("#student_username_input").val();
		var student_password_input_value =  $("#student_password_input").val();

		if(
			student_id_number_input_value == "111111" &&
			student_username_input_value == "student_user" &&
			student_password_input_value == "student"
			){
			$(this)[0].reset();
			window.location.href = "student/grades.php";
		}
		else{
			if(student_id_number_input_value != "111111"){
				$("#student_id_number_input").addClass("error_border");
			}
			else{
				$("#student_id_number_input").removeClass("error_border");
			};
			if(student_username_input_value != "student_user"){
				$("#student_username_input").addClass("error_border");
			}
			else{
				$("#student_username_input").removeClass("error_border");
			};
			if(student_password_input_value != "student"){
				$("#student_password_input").addClass("error_border");
			}
			else{
				$("#student_password_input").removeClass("error_border");
			};

		}
		return false;
	});
	$("body").on("focusin", "#student_id_number_input", function(){
		$(this).removeClass("error_border");
	});
	$("body").on("focusin", "#student_username_input", function(){
		$(this).removeClass("error_border");
	});
	$("body").on("focusin", "#student_password_input", function(){
		$(this).removeClass("error_border");
	});



	$("body").on("submit", "#personnel_login_form", function(e){
		e.preventDefault();
		var personnel_id_number_input = $("#personnel_id_number_input").val();
		var personnel_username_input = $("#personnel_username_input").val();
		var personnel_password_input =  $("#personnel_password_input").val();


		if(
			personnel_id_number_input == "222222" ||
			personnel_id_number_input == "333333"
			){

			$("#personnel_id_number_input").removeClass("error_border");
			$("#personnel_username_input").removeClass("error_border");
			$("#personnel_password_input").removeClass("error_border");

			if(personnel_id_number_input == "222222"){
				if(personnel_username_input == "personnel_user" ){

					$("#personnel_username_input").removeClass("error_border");

					if(personnel_password_input == "personnel"){
						window.location.href = "personnel/user/gate_management.php";
					}
					else{
						$("#personnel_password_input").addClass("error_border");

					}
				}
				else{
					$("#personnel_username_input").addClass("error_border");
					$("#personnel_password_input").addClass("error_border");
				}
			}
			else if(personnel_id_number_input == "333333"){
				if(personnel_username_input == "personnel_admin" ){

					$("#personnel_username_input").removeClass("error_border");

					if(personnel_password_input == "admin"){
						window.location.href = "personnel/admin/gate_management.php";
					}
					else{
						$("#personnel_password_input").addClass("error_border");

					}
				}
				else{
					$("#personnel_username_input").addClass("error_border");
					$("#personnel_password_input").addClass("error_border");
				}
			}
		}

		else{
			$("#personnel_id_number_input").addClass("error_border");
			$("#personnel_username_input").addClass("error_border");
			$("#personnel_password_input").addClass("error_border");
		}

		return false;
	});

	$("body").on("change", ".section_header_with_button select.selectpicker", function(){
		$(this).closest(".section_header_with_button").siblings("table").find("tbody tr").fadeOut();
		$(this).closest(".section_header_with_button").siblings("table").find("tbody tr").fadeIn();
	});

	$("body").on("change", "#clearance_purpose_selectpicker", function(){
		var clearance_purpose_value =  $(this).val();
		$("#clearance_purpose_data").text(clearance_purpose_value);
	});

	$("body").on("focusout", "input.form-control", function(){

		var inclusive_dates_data_value = $(this).val();

		$("#effective_date_data").text(inclusive_dates_data_value);
	});

	$("body").on("focusout", "#reason_textarea", function(){

		$("#reason_data").text($(this).val());
	})

	$("body").on("submit", "#clearance_form", function(e){
		e.preventDefault();

		var clearance_purpose_data =  $("#clearance_purpose_data").text();
		var effective_date_data =$("#effective_date_data").text();
		var reason_data = $("#reason_data").text();

		if(
			clearance_purpose_data == "" ||
			effective_date_data == "" ||
			reason_data == "" 
			){
			
			if(clearance_purpose_data == ""){
				$("#clearance_purpose_container").find(".btn").addClass("error_border");
			}
			else{
				$("#clearance_purpose_container").find(".btn").removeClass("error_border");
			};
			if(effective_date_data == ""){
				$("#effective_date_container").find(".form-control").addClass("error_border");
			}
			else{
				$("#effective_date_container").find(".form-control").removeClass("error_border");
			};
			if(reason_data == ""){
				$("#reason_textarea").addClass("error_border");
			}
			else{
				$("#reason_textarea").removeClass("error_border");
			};
			
		}
		else{
			
			$("#clearance_form_section").slideUp();
			$("#clearance_status_section").slideDown();
			$('#leave_application_modal').modal("show");
		}
	});


	



});



function submit_application(submit_application){

	var leave_type_data_value = $("#leave_type_data").text();
	var leave_condition_data_value =  $("#leave_condition_data").text();
	var leave_remarks_data_value = $("#leave_remarks").text();
	var number_of_days_data_value = $("#number_of_days_data").text();
	var inclusive_dates_data_value = $("#inclusive_dates_data").text();
	var commutation_data_value = $("#commutation_data").text();


	$("#apply_leave_form_button").fadeIn();
	$("#leave_form_section").slideUp();

	setTimeout(function(){
		$("#available_leave_section").slideDown();
	},400);

	var clone = $("#leave_history_section").find("tbody").find("tr").first().clone();

	clone.find("td:eq(0)").text($("#leave_filling_date").text());
	clone.find("td:eq(1)").text(inclusive_dates_data_value);
	clone.find("td:eq(2)").text(number_of_days_data_value);
	clone.find("td:eq(3)").text(leave_type_data_value);
	clone.find("td:eq(4)").text(leave_remarks_data_value);

	clone.find(".remarks_btn").removeAttr("class").addClass("remarks_btn orange_bg").text("Pending")
	clone.find("td").closest("tr").addClass("recent_append_bg");

	$("#leave_history_section"). find("tbody").prepend(clone);

	$('#online_leave_form')[0].reset();
	$('.selectpicker').selectpicker('refresh');

	$('.date').datepicker('update', '');


	console.log(leave_type_data_value);



	if(leave_type_data_value == "Sick"){
		var sick_leave_credit_value = $("#sick_leave_credit").text()
		var total_leave_credit_value =  $("#total_leave_credit").text();
		var current_sick_leave_credit_value = parseInt(sick_leave_credit_value) - parseInt(number_of_days_data_value);
		var current_total_leave_credit_value = parseInt(total_leave_credit_value) - parseInt(number_of_days_data_value);
		$("#sick_leave_credit").text(current_sick_leave_credit_value);
		$("#total_leave_credit").text(current_total_leave_credit_value);
	}
	if(leave_type_data_value == "Vacation"){
		var vacation_leave_credit_value = $("#vacation_leave_credit").text()
		var total_leave_credit_value =  $("#total_leave_credit").text();
		var current_vacation_leave_credit_value = parseInt(vacation_leave_credit_value) - parseInt(number_of_days_data_value);
		var current_total_leave_credit_value = parseInt(total_leave_credit_value) - parseInt(number_of_days_data_value);
		$("#vacation_leave_credit").text(current_vacation_leave_credit_value);
		$("#total_leave_credit").text(current_total_leave_credit_value);
	}
	if(leave_type_data_value == "Maternity"){
		var maternity_leave_credit_value = $("#maternity_leave_credit").text()
		var total_leave_credit_value =  $("#total_leave_credit").text();
		var current_maternity_leave_credit_value = parseInt(maternity_leave_credit_value) - parseInt(number_of_days_data_value);
		var current_total_leave_credit_value = parseInt(total_leave_credit_value) - parseInt(number_of_days_data_value);
		$("#maternity_leave_credit").text(current_maternity_leave_credit_value);
		$("#total_leave_credit").text(current_total_leave_credit_value);
	}
	if(leave_type_data_value == "Others"){
		var others_leave_credit_value = $("#others_leave_credit").text()
		var total_leave_credit_value =  $("#total_leave_credit").text();
		var current_others_leave_credit_value = parseInt(others_leave_credit_value) - parseInt(number_of_days_data_value);
		var current_total_leave_credit_value = parseInt(total_leave_credit_value) - parseInt(number_of_days_data_value);
		$("#others_leave_credit").text(current_others_leave_credit_value);
		$("#total_leave_credit").text(current_total_leave_credit_value);
	}

	$("#leave_type_data").text("");
	$("#leave_condition_data").text("");
	$("#leave_remarks").text("");
	$("#number_of_days_data").text("");
	$("#inclusive_dates_data").text("");
	$("#commutation_data").text("");

	$(".error_border").removeClass("error_border");

	$('#leave_application_modal').modal("show");

	$("#available_leave_section").find()

	return false;

};
