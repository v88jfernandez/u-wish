$(document).ready(function(){
	/* DUMMY DATA */
	var dummy_position_array = ["Academic Advisor", "Academic Support Coordinator", "Administrator", "Admissions Assistant", "Admissions Representative", "Coach", "Crossing Guard", "Dean", "Lead Teacher", "Preschool Lead Teacher", "Special Education Coordinator", "Youth Care Worker", "Registrar", "Teacher Aide", "Teacher", "Superintendent of Schools", "Substitute Teacher", "School Secretary", "School Nurse", "School Bus Driver", "Principal"];
	var dummy_name_array = ["Cortez Ton", "Greg Luton", "Orval Talcott", "Vito Longshore", "Gene Bunger", "Billie Urbanek", "Alfonso Cuen", "Rocco Ryan", "Irvin Ryberg", "Junior Mooneyhan", "Emery Polson", "Bernie Catlett", "Cody Stocks", "Herbert Stelle", "Raymond Funderburk", "Lyle Truman", "Gaylord Cuadra", "Roberto Thomson", "Wilburn Krebbs", "Bernard Penix"];
	var dummy_image_array = ["aguilar", "caguioa", "cruz", "deguzman", "devance", "ellis", "ferrer", "helterbrand", "jamito", "marcelo", "mariano", "mercado", "slaughter", "taha", "tenorio", "thompson"]

	$("body").on("click", ".next_user", function(){
		view_personnel_details( $("."+ $(this).closest(".modal").attr("aria-labelledby") +""), ( Number( $(this).closest(".modal").find("input[name='user_id']").val()) + 1) );
	});

	$("body").on("click", ".previous_user", function(){
		view_personnel_details( $("."+ $(this).closest(".modal").attr("aria-labelledby") +""), ( Number( $(this).closest(".modal").find("input[name='user_id']").val()) - 1) );
	});

	$("body").on("click", ".view_details", function(){
		view_personnel_details( $( $(this).attr("data-target")), $(this).closest("tr").attr("data-user-id"));
	});


	function view_personnel_details(modal, user_id){
		console.log(user_id);


		var user = $("tr[data-user-id='"+ user_id +"']").children("td");

		modal.find("input[name='user_id']").val(user_id);
		modal.find(".user_name").text(dummy_name_array[user_id]);
		modal.find(".work_position").text(dummy_position_array[get_random_number(0,21)]);
		modal.find(".user_profile_summary_container img").attr("src", "/assets/img/dummy_image/"+dummy_image_array[get_random_number(0,15)]+".jpg");
		modal.find(".salary").text("P "+ get_random_number(20000, 50000) +".00").digits();
		
		modal.find(".next_user, .previous_user").addClass("disabled");
		modal.find("tbody tr").fadeOut();
		modal.find("tbody tr").fadeIn(function(){
			(user_id <= 0) ? modal.find(".previous_user").addClass("disabled") : modal.find(".previous_user").removeClass("disabled");
			(user_id >= 19) ? modal.find(".next_user").addClass("disabled") : modal.find(".next_user").removeClass("disabled");
		});



		/* For Leave Management */
		modal.find(".sick_leave").text(user.attr("data-sick-leave"));
		modal.find(".maternity_leave").text(user.attr("data-maternity-leave"));
		modal.find(".vacation_leave").text(user.attr("data-vacation-leave"));
		modal.find(".others_leave").text(user.attr("data-others"));
		modal.find(".total_leaves").text(user.attr("data-total-leaves"));
	}

	/* Pending Leave Request Selectpicker */
	$("body").on("change", "select.pending_leave_request_selectpicker", function(){
		var selectpicker = $(this);
		
		selectpicker.closest("td").attr("data-leave-value", selectpicker.val());
	});

	/* Pagination */
	$("body").on("click", ".pagination_item", function(){
		var pagination_item = $(this);

		pagination_item.closest("li").addClass("active").siblings().removeClass("active");
		pagination_item.closest(".pagination_container").siblings("table").find("tbody tr").fadeOut();
		pagination_item.closest(".pagination_container").siblings("table").find("tbody tr").fadeIn();
	});

	/* Search */

	$("body").on("keyup", ".search_personnel_input", function(){
		var search_input = $(this);

		// Show only matching TR, hide rest of them
		$.each($("#gate_management_section .tab-pane.active tbody tr"), function() {
		    if($(this).text().toLowerCase().indexOf(search_input.val().toLowerCase()) === -1)
		       $(this).hide();
		    else
		       $(this).show();                
		});
	});

   	$(".pending_leave_request_selectpicker").selectpicker({container: "body"});

   	/* Next and Previous BTN Trigger thru keyboard*/
   	$(document).keydown(function(e) {
   		if($(".disabled").length <= 0){
	   	    switch(e.which) {
	   	        case 37: 
	   	        	$(".modal.in .previous_user").trigger("click");
	   	        break;

	   	        case 39: // right
	   	        	$(".modal.in .next_user").trigger("click");
	   	        break;

	   	        default: return; // exit this handler for other keys
	   	    }
	   	    e.preventDefault(); // prevent the default action (scroll / move caret)
   		}
   	});
});

/* Get random number */
function get_random_number(min, max) {
    return Math.round( Math.random() * (max - min) + min);
}

/* Add's comma to numbers every three digits */
$.fn.digits = function(){ 
    return this.each(function(){ 
        $(this).text( $(this).text().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") ); 
    });
}
