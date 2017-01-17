		<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/admin_head.php');?>
		<?php include($_SERVER['DOCUMENT_ROOT'].'/partials/admin_header.php');?>
		
		<section class="nav_tabs_section " id="gate_management_section">
			<div class="container">
				<div class="nav_tabs_options_container admin_container_bg">
					<div class="search_container pull-right">
						<input type="text" placeholder="Search Personnel" class="search_personnel_input"><span class="glyphicon glyphicon-search"></span>
					</div>
					<a class="admin_btn pull-right" href="../../assets/files/hello_world.txt" download><span class="glyphicon glyphicon-save"></span> Download Master List</a>
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
								<tr>
									<th class="admin_color">Name</th>
									<th class="admin_color">ID Number</th>
									<th class="admin_color">Remarks</th>
								</tr>
							</thead>
							<tbody>
								<tr data-user-id="0">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_gate_personnel_details_modal">Cortez Ton</td>
									<td>091-2341</td>
									<td>14 Days</td>
								</tr>
								<tr data-user-id="1">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_gate_personnel_details_modal">Greg Luton</td>
									<td>091-2342</td>
									<td>23 Days</td>
								</tr>
								<tr data-user-id="2">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_gate_personnel_details_modal">Orval Talcott</td>
									<td>091-2343</td>
									<td>10 Days</td>
								</tr>
								<tr data-user-id="3">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_gate_personnel_details_modal">Vito Longshore</td>
									<td>091-2344</td>
									<td>16 Days</td>
								</tr>
								<tr data-user-id="4">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_gate_personnel_details_modal">Gene Bunger</td>
									<td>091-2345</td>
									<td>20 Days</td>
								</tr>
								<tr data-user-id="5">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_gate_personnel_details_modal" >Billie Urbanek</td>
									<td>091-2365</td>
									<td>24 Days</td>
								</tr>
								<tr data-user-id="6">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_gate_personnel_details_modal">Alfonso Cuen</td>
									<td>091-2335</td>
									<td>18 Days</td>
								</tr>
								<tr data-user-id="7">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_gate_personnel_details_modal">Rocco Ryan</td>
									<td>091-2345</td>
									<td>15 Days</td>
								</tr>
								<tr data-user-id="8">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_gate_personnel_details_modal">Irvin Ryberg</td>
									<td>091-3245</td>
									<td>6 Days</td>
								</tr>
								<tr data-user-id="9">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_gate_personnel_details_modal">Junior Mooneyhan</td>
									<td>091-4345</td>
									<td>14 Days</td>
								</tr>
								<tr data-user-id="10">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_gate_personnel_details_modal">Emery Polson</td>
									<td>091-5345</td>
									<td>16 Days</td>
								</tr>
								<tr data-user-id="11">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_gate_personnel_details_modal">Bernie Catlett</td>
									<td>091-6345</td>
									<td>13 Days</td>
								</tr>
								<tr data-user-id="12">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_gate_personnel_details_modal">Cody Stocks</td>
									<td>091-2345</td>
									<td>6 Days</td>
								</tr>
								<tr data-user-id="13">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_gate_personnel_details_modal">Herbert Stelle</td>
									<td>091-7345</td>
									<td>18 Days</td>
								</tr>
								<tr data-user-id="14">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_gate_personnel_details_modal" >Raymond Funderburk</td>
									<td>091-2345</td>
									<td>8 Days</td>
								</tr>
								<tr data-user-id="15">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_gate_personnel_details_modal" >Lyle Truman</td>
									<td>091-8345</td>
									<td>17 Days</td>
								</tr>
								<tr data-user-id="16">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_gate_personnel_details_modal">Gaylord Cuadra</td>
									<td>091-2245</td>
									<td>10 Days</td>
								</tr>
								<tr data-user-id="17">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_gate_personnel_details_modal">Roberto Thomson</td>
									<td>091-2245</td>
									<td>17 Days</td>
								</tr>
								<tr data-user-id="18">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_gate_personnel_details_modal">Wilburn Krebbs</td>
									<td>091-2145</td>
									<td>8 Days</td>
								</tr>
								<tr data-user-id="19">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_gate_personnel_details_modal">Bernard Penix</td>
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
								<tr>
									<th class="admin_color">Name</th>
									<th class="admin_color">ID Number</th>
									<th class="admin_color">Remarks</th>
								</tr>
							</thead>
							<tbody>
								<tr data-user-id="0">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_gate_personnel_details_modal">Cortez Ton</td>
									<td>091-2341</td>
									<td>14 Days</td>
								</tr>
								<tr data-user-id="1">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_gate_personnel_details_modal">Greg Luton</td>
									<td>091-2342</td>
									<td>23 Days</td>
								</tr>
								<tr data-user-id="2">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_gate_personnel_details_modal">Orval Talcott</td>
									<td>091-2343</td>
									<td>10 Days</td>
								</tr>
								<tr data-user-id="3">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_gate_personnel_details_modal">Vito Longshore</td>
									<td>091-2344</td>
									<td>16 Days</td>
								</tr>
								<tr data-user-id="4">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_gate_personnel_details_modal">Gene Bunger</td>
									<td>091-2345</td>
									<td>20 Days</td>
								</tr>
								<tr data-user-id="5">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_gate_personnel_details_modal" >Billie Urbanek</td>
									<td>091-2365</td>
									<td>24 Days</td>
								</tr>
								<tr data-user-id="6">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_gate_personnel_details_modal">Alfonso Cuen</td>
									<td>091-2335</td>
									<td>18 Days</td>
								</tr>
								<tr data-user-id="7">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_gate_personnel_details_modal">Rocco Ryan</td>
									<td>091-2345</td>
									<td>15 Days</td>
								</tr>
								<tr data-user-id="8">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_gate_personnel_details_modal">Irvin Ryberg</td>
									<td>091-3245</td>
									<td>6 Days</td>
								</tr>
								<tr data-user-id="9">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_gate_personnel_details_modal">Junior Mooneyhan</td>
									<td>091-4345</td>
									<td>14 Days</td>
								</tr>
								<tr data-user-id="10">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_gate_personnel_details_modal">Emery Polson</td>
									<td>091-5345</td>
									<td>16 Days</td>
								</tr>
								<tr data-user-id="11">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_gate_personnel_details_modal">Bernie Catlett</td>
									<td>091-6345</td>
									<td>13 Days</td>
								</tr>
								<tr data-user-id="12">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_gate_personnel_details_modal">Cody Stocks</td>
									<td>091-2345</td>
									<td>6 Days</td>
								</tr>
								<tr data-user-id="13">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_gate_personnel_details_modal">Herbert Stelle</td>
									<td>091-7345</td>
									<td>18 Days</td>
								</tr>
								<tr data-user-id="14">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_gate_personnel_details_modal" >Raymond Funderburk</td>
									<td>091-2345</td>
									<td>8 Days</td>
								</tr>
								<tr data-user-id="15">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_gate_personnel_details_modal" >Lyle Truman</td>
									<td>091-8345</td>
									<td>17 Days</td>
								</tr>
								<tr data-user-id="16">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_gate_personnel_details_modal">Gaylord Cuadra</td>
									<td>091-2245</td>
									<td>10 Days</td>
								</tr>
								<tr data-user-id="17">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_gate_personnel_details_modal">Roberto Thomson</td>
									<td>091-2245</td>
									<td>17 Days</td>
								</tr>
								<tr data-user-id="18">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_gate_personnel_details_modal">Wilburn Krebbs</td>
									<td>091-2145</td>
									<td>8 Days</td>
								</tr>
								<tr data-user-id="19">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_gate_personnel_details_modal">Bernard Penix</td>
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
								<tr>
									<th class="admin_color">Name</th>
									<th class="admin_color">ID Number</th>
									<th class="admin_color">Remarks</th>
								</tr>
							</thead>
							<tbody>
								<tr data-user-id="0">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_gate_personnel_details_modal">Cortez Ton</td>
									<td>091-2341</td>
									<td>14 Days</td>
								</tr>
								<tr data-user-id="1">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_gate_personnel_details_modal">Greg Luton</td>
									<td>091-2342</td>
									<td>23 Days</td>
								</tr>
								<tr data-user-id="2">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_gate_personnel_details_modal">Orval Talcott</td>
									<td>091-2343</td>
									<td>10 Days</td>
								</tr>
								<tr data-user-id="3">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_gate_personnel_details_modal">Vito Longshore</td>
									<td>091-2344</td>
									<td>16 Days</td>
								</tr>
								<tr data-user-id="4">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_gate_personnel_details_modal">Gene Bunger</td>
									<td>091-2345</td>
									<td>20 Days</td>
								</tr>
								<tr data-user-id="5">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_gate_personnel_details_modal" >Billie Urbanek</td>
									<td>091-2365</td>
									<td>24 Days</td>
								</tr>
								<tr data-user-id="6">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_gate_personnel_details_modal">Alfonso Cuen</td>
									<td>091-2335</td>
									<td>18 Days</td>
								</tr>
								<tr data-user-id="7">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_gate_personnel_details_modal">Rocco Ryan</td>
									<td>091-2345</td>
									<td>15 Days</td>
								</tr>
								<tr data-user-id="8">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_gate_personnel_details_modal">Irvin Ryberg</td>
									<td>091-3245</td>
									<td>6 Days</td>
								</tr>
								<tr data-user-id="9">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_gate_personnel_details_modal">Junior Mooneyhan</td>
									<td>091-4345</td>
									<td>14 Days</td>
								</tr>
								<tr data-user-id="10">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_gate_personnel_details_modal">Emery Polson</td>
									<td>091-5345</td>
									<td>16 Days</td>
								</tr>
								<tr data-user-id="11">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_gate_personnel_details_modal">Bernie Catlett</td>
									<td>091-6345</td>
									<td>13 Days</td>
								</tr>
								<tr data-user-id="12">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_gate_personnel_details_modal">Cody Stocks</td>
									<td>091-2345</td>
									<td>6 Days</td>
								</tr>
								<tr data-user-id="13">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_gate_personnel_details_modal">Herbert Stelle</td>
									<td>091-7345</td>
									<td>18 Days</td>
								</tr>
								<tr data-user-id="14">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_gate_personnel_details_modal" >Raymond Funderburk</td>
									<td>091-2345</td>
									<td>8 Days</td>
								</tr>
								<tr data-user-id="15">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_gate_personnel_details_modal" >Lyle Truman</td>
									<td>091-8345</td>
									<td>17 Days</td>
								</tr>
								<tr data-user-id="16">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_gate_personnel_details_modal">Gaylord Cuadra</td>
									<td>091-2245</td>
									<td>10 Days</td>
								</tr>
								<tr data-user-id="17">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_gate_personnel_details_modal">Roberto Thomson</td>
									<td>091-2245</td>
									<td>17 Days</td>
								</tr>
								<tr data-user-id="18">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_gate_personnel_details_modal">Wilburn Krebbs</td>
									<td>091-2145</td>
									<td>8 Days</td>
								</tr>
								<tr data-user-id="19">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_gate_personnel_details_modal">Bernard Penix</td>
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
								<tr>
									<th class="admin_color">Name</th>
									<th class="admin_color">ID Number</th>
									<th class="admin_color">Remarks</th>
								</tr>
							</thead>
							<tbody>
								<tr data-user-id="0">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_gate_personnel_details_modal">Cortez Ton</td>
									<td>091-2341</td>
									<td>14 Days</td>
								</tr>
								<tr data-user-id="1">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_gate_personnel_details_modal">Greg Luton</td>
									<td>091-2342</td>
									<td>23 Days</td>
								</tr>
								<tr data-user-id="2">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_gate_personnel_details_modal">Orval Talcott</td>
									<td>091-2343</td>
									<td>10 Days</td>
								</tr>
								<tr data-user-id="3">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_gate_personnel_details_modal">Vito Longshore</td>
									<td>091-2344</td>
									<td>16 Days</td>
								</tr>
								<tr data-user-id="4">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_gate_personnel_details_modal">Gene Bunger</td>
									<td>091-2345</td>
									<td>20 Days</td>
								</tr>
								<tr data-user-id="5">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_gate_personnel_details_modal" >Billie Urbanek</td>
									<td>091-2365</td>
									<td>24 Days</td>
								</tr>
								<tr data-user-id="6">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_gate_personnel_details_modal">Alfonso Cuen</td>
									<td>091-2335</td>
									<td>18 Days</td>
								</tr>
								<tr data-user-id="7">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_gate_personnel_details_modal">Rocco Ryan</td>
									<td>091-2345</td>
									<td>15 Days</td>
								</tr>
								<tr data-user-id="8">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_gate_personnel_details_modal">Irvin Ryberg</td>
									<td>091-3245</td>
									<td>6 Days</td>
								</tr>
								<tr data-user-id="9">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_gate_personnel_details_modal">Junior Mooneyhan</td>
									<td>091-4345</td>
									<td>14 Days</td>
								</tr>
								<tr data-user-id="10">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_gate_personnel_details_modal">Emery Polson</td>
									<td>091-5345</td>
									<td>16 Days</td>
								</tr>
								<tr data-user-id="11">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_gate_personnel_details_modal">Bernie Catlett</td>
									<td>091-6345</td>
									<td>13 Days</td>
								</tr>
								<tr data-user-id="12">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_gate_personnel_details_modal">Cody Stocks</td>
									<td>091-2345</td>
									<td>6 Days</td>
								</tr>
								<tr data-user-id="13">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_gate_personnel_details_modal">Herbert Stelle</td>
									<td>091-7345</td>
									<td>18 Days</td>
								</tr>
								<tr data-user-id="14">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_gate_personnel_details_modal" >Raymond Funderburk</td>
									<td>091-2345</td>
									<td>8 Days</td>
								</tr>
								<tr data-user-id="15">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_gate_personnel_details_modal" >Lyle Truman</td>
									<td>091-8345</td>
									<td>17 Days</td>
								</tr>
								<tr data-user-id="16">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_gate_personnel_details_modal">Gaylord Cuadra</td>
									<td>091-2245</td>
									<td>10 Days</td>
								</tr>
								<tr data-user-id="17">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_gate_personnel_details_modal">Roberto Thomson</td>
									<td>091-2245</td>
									<td>17 Days</td>
								</tr>
								<tr data-user-id="18">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_gate_personnel_details_modal">Wilburn Krebbs</td>
									<td>091-2145</td>
									<td>8 Days</td>
								</tr>
								<tr data-user-id="19">
									<td class="name_text_left view_details" data-toggle="modal" data-target=".view_gate_personnel_details_modal">Bernard Penix</td>
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
		<div class="modal fade view_gate_personnel_details_modal " tabindex="-1" role="dialog" aria-labelledby="view_gate_personnel_details_modal">
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

						<div class="navigation_container pull-right">
							<a href="#" class="previous_user"><span class="glyphicon glyphicon-chevron-left"></span></a>
							<a href="#" class="next_user"><span class="glyphicon glyphicon-chevron-right"></span></a>
						</div>
						<a class="admin_btn pull-right download_dtr_btn" href="../../assets/files/hello_world.txt" download><span class="glyphicon glyphicon-save"></span> Download DTR</a>	
					</div>

					<section class="table_with_header_section">
						<div class="section_header_container section_header_with_button">
							<h4>Daily Time Record</h4>

							<ul class="list-unstyled">
								<li>
									<select class="selectpicker filter_simulation">
									  <option>2017</option>
									  <option>2016</option>
									  <option>2015</option>
									  <option>2014</option>
									  <option>2013</option>
									  <option>2012</option>
									  <option>2011</option>
									  <option>2010</option>
									</select>
								</li>
								<li>
									<select class="selectpicker filter_simulation">
									  <option>JANUARY</option>
									  <option>FEBRUARY</option>
									  <option>MARCH</option>
									  <option>APRIL</option>
									  <option>MAY</option>
									  <option>JUNE</option>
									  <option>JULY</option>
									  <option>AUGUST</option>
									  <option>SEPTEMBER</option>
									  <option>OCTOBER</option>
									  <option>NOVEMBER</option>
									  <option>DECEMBER</option>
									</select>
								</li>
							</ul>
						</div>

						<div class="table_head_fixer_container">
							
							<table id="dtr_table_modal" class="table table-striped table_with_buttons table_with_header_colspan table_head_fixer">
								<thead>
									<tr>
										<th class="user_color" rowspan="2">Dates</th>
										<th class="user_color" colspan="2"><span>A.M.</span></th>
										<th class="user_color" colspan="2"><span>P.M.</span></th>
										<th class="user_color" rowspan="2">Total Hours</th>
										<th class="user_color" rowspan="2">Remarks</th>
									</tr>
									<tr>
										<th class="user_color">Time In</th>
										<th class="user_color">Time Out</th>
										<th class="user_color">Time In</th>
										<th class="user_color">Time Out</th>
									</tr>
								</thead>
								<tbody>
						<tr>
							<td>1</td>
							<td>08:00</td>
							<td>12:00</td>
							<td>13:00</td>
							<td>17:00</td>
							<td>8</td>
							<td>
								<span class="remarks_btn green_bg">Present</span>
							</td>
						</tr>
						<tr>
							<td>2</tds>
							<td>08:10</td>
							<td>12:10</td>
							<td>13:13</td>
							<td>16:32</td>
							<td>8</td>
							<td>
								<span class="remarks_btn green_bg">Present</span>
							</td>
						</tr>
						<tr>
							<td>3</td>
							<td>08:02</td>
							<td>12:00</td>
							<td>13:00</td>
							<td>16:05</td>
							<td>8</td>
							<td>
								<span class="remarks_btn green_bg">Present</span>
							</td>
						</tr>
						<tr>
							<td>4</td>
							<td>07:49</td>
							<td>12:00</td>
							<td>13:05</td>
							<td>16:41</td>
							<td>8</td>
							<td>
								<span class="remarks_btn green_bg">Present</span>
							</td>
						</tr>
						<tr>
							<td>5</td>
							<td>08:16</td>
							<td>12:00</td>
							<td>13:05</td>
							<td>16:41</td>
							<td>8</td>
							<td>
								<span class="remarks_btn red_bg">Undertime</span>
							</td>
						</tr>
						<tr>
							<td>6</td>
							<td>08:15</td>
							<td>12:00</td>
							<td>13:00</td>
							<td>17:00</td>
							<td>8</td>
							<td>
								<span class="remarks_btn orange_bg">Late</span>
							</td>
						</tr>
						<tr>
							<td>7</td>
							<td>08:00</td>
							<td>12:00</td>
							<td>13:00</td>
							<td>17:00</td>
							<td>8</td>
							<td>
								<span class="remarks_btn green_bg">Present</span>
							</td>
						</tr>
						<tr>
							<td>8</tds>
							<td>08:10</td>
							<td>12:10</td>
							<td>13:13</td>
							<td>16:32</td>
							<td>8</td>
							<td>
								<span class="remarks_btn green_bg">Present</span>
							</td>
						</tr>
						<tr>
							<td>9</td>
							<td>08:02</td>
							<td>12:00</td>
							<td>13:00</td>
							<td>16:05</td>
							<td>8</td>
							<td>
								<span class="remarks_btn green_bg">Present</span>
							</td>
						</tr>
						<tr>
							<td>10</td>
							<td>07:49</td>
							<td>12:00</td>
							<td>13:05</td>
							<td>16:41</td>
							<td>8</td>
							<td>
								<span class="remarks_btn green_bg">Present</span>
							</td>
						</tr>
						<tr>
							<td>11</td>
							<td>08:16</td>
							<td>12:00</td>
							<td>13:05</td>
							<td>16:41</td>
							<td>8</td>
							<td>
								<span class="remarks_btn red_bg">Undertime</span>
							</td>
						</tr>
						<tr>
							<td>12</td>
							<td>08:15</td>
							<td>12:00</td>
							<td>13:00</td>
							<td>17:00</td>
							<td>8</td>
							<td>
								<span class="remarks_btn orange_bg">Late</span>
							</td>
						</tr>
						<tr>
							<td>13</td>
							<td>08:00</td>
							<td>12:00</td>
							<td>13:00</td>
							<td>17:00</td>
							<td>8</td>
							<td>
								<span class="remarks_btn green_bg">Present</span>
							</td>
						</tr>
						<tr>
							<td>14</tds>
							<td>08:10</td>
							<td>12:10</td>
							<td>13:13</td>
							<td>16:32</td>
							<td>8</td>
							<td>
								<span class="remarks_btn green_bg">Present</span>
							</td>
						</tr>
						<tr>
							<td>15</td>
							<td>08:02</td>
							<td>12:00</td>
							<td>13:00</td>
							<td>16:05</td>
							<td>8</td>
							<td>
								<span class="remarks_btn green_bg">Present</span>
							</td>
						</tr>
						<tr>
							<td>16</td>
							<td>07:49</td>
							<td>12:00</td>
							<td>13:05</td>
							<td>16:41</td>
							<td>8</td>
							<td>
								<span class="remarks_btn green_bg">Present</span>
							</td>
						</tr>
						<tr>
							<td>17</td>
							<td>08:16</td>
							<td>12:00</td>
							<td>13:05</td>
							<td>16:41</td>
							<td>8</td>
							<td>
								<span class="remarks_btn red_bg">Undertime</span>
							</td>
						</tr>
						<tr>
							<td>18</td>
							<td>08:15</td>
							<td>12:00</td>
							<td>13:00</td>
							<td>17:00</td>
							<td>8</td>
							<td>
								<span class="remarks_btn orange_bg">Late</span>
							</td>
						</tr>
						<tr>
							<td>19</td>
							<td>08:00</td>
							<td>12:00</td>
							<td>13:00</td>
							<td>17:00</td>
							<td>8</td>
							<td>
								<span class="remarks_btn green_bg">Present</span>
							</td>
						</tr>
						<tr>
							<td>20</tds>
							<td>08:10</td>
							<td>12:10</td>
							<td>13:13</td>
							<td>16:32</td>
							<td>8</td>
							<td>
								<span class="remarks_btn green_bg">Present</span>
							</td>
						</tr>
						<tr>
							<td>21</td>
							<td>08:02</td>
							<td>12:00</td>
							<td>13:00</td>
							<td>16:05</td>
							<td>8</td>
							<td>
								<span class="remarks_btn green_bg">Present</span>
							</td>
						</tr>
						<tr>
							<td>22</td>
							<td>07:49</td>
							<td>12:00</td>
							<td>13:05</td>
							<td>16:41</td>
							<td>8</td>
							<td>
								<span class="remarks_btn green_bg">Present</span>
							</td>
						</tr>
						<tr>
							<td>23</td>
							<td>08:16</td>
							<td>12:00</td>
							<td>13:05</td>
							<td>16:41</td>
							<td>8</td>
							<td>
								<span class="remarks_btn red_bg">Undertime</span>
							</td>
						</tr>
						<tr>
							<td>24</td>
							<td>08:15</td>
							<td>12:00</td>
							<td>13:00</td>
							<td>17:00</td>
							<td>8</td>
							<td>
								<span class="remarks_btn orange_bg">Late</span>
							</td>
						</tr>
						<tr>
							<td>25</td>
							<td>08:00</td>
							<td>12:00</td>
							<td>13:00</td>
							<td>17:00</td>
							<td>8</td>
							<td>
								<span class="remarks_btn green_bg">Present</span>
							</td>
						</tr>
						<tr>
							<td>26</tds>
							<td>08:10</td>
							<td>12:10</td>
							<td>13:13</td>
							<td>16:32</td>
							<td>8</td>
							<td>
								<span class="remarks_btn green_bg">Present</span>
							</td>
						</tr>
						<tr>
							<td>27</td>
							<td>08:02</td>
							<td>12:00</td>
							<td>13:00</td>
							<td>16:05</td>
							<td>8</td>
							<td>
								<span class="remarks_btn green_bg">Present</span>
							</td>
						</tr>
						<tr>
							<td>28</td>
							<td>07:49</td>
							<td>12:00</td>
							<td>13:05</td>
							<td>16:41</td>
							<td>8</td>
							<td>
								<span class="remarks_btn green_bg">Present</span>
							</td>
						</tr>
						<tr>
							<td>29</td>
							<td>08:16</td>
							<td>12:00</td>
							<td>13:05</td>
							<td>16:41</td>
							<td>8</td>
							<td>
								<span class="remarks_btn red_bg">Undertime</span>
							</td>
						</tr>
						<tr>
							<td>30</td>
							<td>08:15</td>
							<td>12:00</td>
							<td>13:00</td>
							<td>17:00</td>
							<td>8</td>
							<td>
								<span class="remarks_btn orange_bg">Late</span>
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
		$(window).outerHeight();
		$("#gate_management_section table tbody").css("max-height", $(window).outerHeight() - 350);
	});
</script>
</html>

