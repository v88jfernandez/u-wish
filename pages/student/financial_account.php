		<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/head.php');?>
		<?php include($_SERVER['DOCUMENT_ROOT'].'/partials/user_header.php');?>

		<section class="accordion_section" id="financial_account_section">
			<div class="container">
				<div class="panel-group" id="financial_account_accordion" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="financial_account_heading_1">
							<a role="button" data-toggle="collapse" data-parent="#financial_account_accordion" href="#financial_account_collapse_1" aria-expanded="true" aria-controls="financial_account_collapse_1">
								School Year <span class="school_year user_color">2016 - 2017</span>
							</a>
						</div>
						<div id="financial_account_collapse_1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="financial_account_heading_1">
							<div class="panel-body">

								<!-- Nav tabs -->
								<ul class="nav nav-tabs" role="tablist">
									<li role="presentation" class="active">
										<a href="#first_semested_tab" aria-controls="home" role="tab" data-toggle="tab" class="">First Semester</a>
									</li><!-- 
								 --><li role="presentation">
										<a href="#second_semester_tab" aria-controls="profile" role="tab" data-toggle="tab" class="">Second Semester</a>
									</li>
								</ul>

								<!-- Tab panes -->
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane active" id="first_semested_tab">

										<div class="account_summary_container">
											<h4 class="account_summary_title">Account Summary</h4>

											<ul class="list-unstyled account_details_list">
												<li>
													<span>Total Assesment</span>
													<span class="amount">P 3,000.00</span>
												</li>
												<li>
													<span>Total Amount</span> 
													<span class="amount">P 2,000.00</span>
												</li>
												<li>
													<span>Balance</span>
													<span class="amount">P 1,000.00</span>
												</li>
												<li>
													<a href="#" class="user_btn" data-toggle="modal" data-target="#assessment_modal">View Assesment</a>
												</li>
											</ul>
										</div>

										<div class="table_with_header_container">
											<div class="table_header_container">
												<h4>Payment Transaction</h4>
											</div>

											<div class="table_head_fixer_container">
												<table class="table table-striped table_with_buttons table_head_fixer">
													<thead>
														<tr>
															<th class="user_color">Date</th>
															<th class="user_color">O.R. No.</th>
															<th class="user_color">Amount</th>
															<th class="user_color">Check No.</th>
															<th class="user_color">Check Bank</th>
															<th class="user_color">Received By</th>
															<th class="user_color">Printed By</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>Dec 22, 2016</td>
															<td>97161297</td>
															<td>P 1,150.00</td>
															<td></td>
															<td></td>
															<td>Gurtiza, Jhaver</td>
															<td>Gurtiza, Jhaver</td>
														</tr>
														<tr>
															<td>Sep 27, 2016</td>
															<td>00768747</td>
															<td>P 2,252.00</td>
															<td></td>
															<td></td>
															<td>Fernandez, Jerwin</td>
															<td>Fernandez, Jerwin</td>
														</tr>
														<tr>
															<td>Aug 24, 2016</td>
															<td>46453041</td>
															<td>P 3,654.00</td>
															<td></td>
															<td></td>
															<td>Caccam, Erick</td>
															<td>Caccam, Erick</td>
														</tr>
														<tr>
															<td>Mar 15, 2016</td>
															<td>26645094</td>
															<td>P 1,655.00</td>
															<td></td>
															<td></td>
															<td>Balanza, Demy</td>
															<td>Balanza, Demy</td>
														</tr>
														<tr>
															<td>Dec 22, 2016</td>
															<td>97161297</td>
															<td>P 1,150.00</td>
															<td></td>
															<td></td>
															<td>Gurtiza, Jhaver</td>
															<td>Gurtiza, Jhaver</td>
														</tr>
														<tr>
															<td>Sep 27, 2016</td>
															<td>00768747</td>
															<td>P 2,252.00</td>
															<td></td>
															<td></td>
															<td>Fernandez, Jerwin</td>
															<td>Fernandez, Jerwin</td>
														</tr>
														<tr>
															<td>Aug 24, 2016</td>
															<td>46453041</td>
															<td>P 3,654.00</td>
															<td></td>
															<td></td>
															<td>Caccam, Erick</td>
															<td>Caccam, Erick</td>
														</tr>
														<tr>
															<td>Mar 15, 2016</td>
															<td>26645094</td>
															<td>P 1,655.00</td>
															<td></td>
															<td></td>
															<td>Balanza, Demy</td>
															<td>Balanza, Demy</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
									<div role="tabpanel" class="tab-pane fade" id="second_semester_tab">
										<div class="account_summary_container">
											<h4 class="account_summary_title">Account Summary</h4>

											<ul class="list-unstyled account_details_list">
												<li>
													<span>Total Assesment</span>
													<span class="amount">P 3,000.00</span>
												</li>
												<li>
													<span>Total Amount</span> 
													<span class="amount">P 2,000.00</span>
												</li>
												<li>
													<span>Balance</span>
													<span class="amount">P 1,000.00</span>
												</li>
												<li>
													<a href="#" class="user_btn" data-toggle="modal" data-target="#assessment_modal">View Assesment</a>
												</li>
											</ul>
										</div>

										<div class="table_with_header_container">
											<div class="table_header_container">
												<h4>Payment Transaction</h4>
											</div>
											<div class="table_head_fixer_container">
												<table class="table table-striped table_with_buttons table_head_fixer">
													<thead>
														<tr>
															<th class="user_color">Date</th>
															<th class="user_color">O.R. No.</th>
															<th class="user_color">Amount</th>
															<th class="user_color">Check No.</th>
															<th class="user_color">Check Bank</th>
															<th class="user_color">Received By</th>
															<th class="user_color">Printed By</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>Dec 22, 2016</td>
															<td>97161297</td>
															<td>P 1,150.00</td>
															<td></td>
															<td></td>
															<td>Gurtiza, Jhaver</td>
															<td>Gurtiza, Jhaver</td>
														</tr>
														<tr>
															<td>Sep 27, 2016</td>
															<td>00768747</td>
															<td>P 2,252.00</td>
															<td></td>
															<td></td>
															<td>Fernandez, Jerwin</td>
															<td>Fernandez, Jerwin</td>
														</tr>
														<tr>
															<td>Aug 24, 2016</td>
															<td>46453041</td>
															<td>P 3,654.00</td>
															<td></td>
															<td></td>
															<td>Caccam, Erick</td>
															<td>Caccam, Erick</td>
														</tr>
														<tr>
															<td>Mar 15, 2016</td>
															<td>26645094</td>
															<td>P 1,655.00</td>
															<td></td>
															<td></td>
															<td>Balanza, Demy</td>
															<td>Balanza, Demy</td>
														</tr>
														<tr>
															<td>Dec 22, 2016</td>
															<td>97161297</td>
															<td>P 1,150.00</td>
															<td></td>
															<td></td>
															<td>Gurtiza, Jhaver</td>
															<td>Gurtiza, Jhaver</td>
														</tr>
														<tr>
															<td>Sep 27, 2016</td>
															<td>00768747</td>
															<td>P 2,252.00</td>
															<td></td>
															<td></td>
															<td>Fernandez, Jerwin</td>
															<td>Fernandez, Jerwin</td>
														</tr>
														<tr>
															<td>Aug 24, 2016</td>
															<td>46453041</td>
															<td>P 3,654.00</td>
															<td></td>
															<td></td>
															<td>Caccam, Erick</td>
															<td>Caccam, Erick</td>
														</tr>
														<tr>
															<td>Mar 15, 2016</td>
															<td>26645094</td>
															<td>P 1,655.00</td>
															<td></td>
															<td></td>
															<td>Balanza, Demy</td>
															<td>Balanza, Demy</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>

					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="financial_account_heading_1">
							<a class="collapsed" role="button" data-toggle="collapse" data-parent="#financial_account_accordion" href="#financial_account_collapse_2" aria-expanded="false" aria-controls="financial_account_collapse_2">
								School Year <span class="school_year user_color">2016 - 2017</span>
							</a>
						</div>
						<div id="financial_account_collapse_2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="financial_account_heading_2">
							<div class="panel-body">
								<!-- Nav tabs -->
								<ul class="nav nav-tabs" role="tablist">
									<li role="presentation" class="active">
										<a href="#first_semested_tab_2" aria-controls="home" role="tab" data-toggle="tab" class="">First Semester</a>
									</li><!-- 
								 --><li role="presentation">
										<a href="#second_semester_tab_2" aria-controls="profile" role="tab" data-toggle="tab" class="">Second Semester</a>
									</li>
								</ul>

								<!-- Tab panes -->
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane active" id="first_semested_tab_2">
										<div class="account_summary_container">
											<h4 class="account_summary_title">Account Summary</h4>

											<ul class="list-unstyled account_details_list">
												<li>
													<span>Total Assesment</span>
													<span class="amount">P 3,000.00</span>
												</li>
												<li>
													<span>Total Amount</span> 
													<span class="amount">P 2,000.00</span>
												</li>
												<li>
													<span>Balance</span>
													<span class="amount">P 1,000.00</span>
												</li>
												<li>
													<a href="#" class="user_btn" data-toggle="modal" data-target="#assessment_modal">View Assesment</a>
												</li>
											</ul>
										</div>

										<div class="table_with_header_container">
											<div class="table_header_container">
												<h4>Payment Transaction</h4>
											</div>
											<div class="table_head_fixer_container">
												<table class="table table-striped table_with_buttons table_head_fixer">
													<thead>
														<tr>
															<th class="user_color">Date</th>
															<th class="user_color">O.R. No.</th>
															<th class="user_color">Amount</th>
															<th class="user_color">Check No.</th>
															<th class="user_color">Check Bank</th>
															<th class="user_color">Received By</th>
															<th class="user_color">Printed By</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>Dec 22, 2016</td>
															<td>97161297</td>
															<td>P 1,150.00</td>
															<td></td>
															<td></td>
															<td>Gurtiza, Jhaver</td>
															<td>Gurtiza, Jhaver</td>
														</tr>
														<tr>
															<td>Sep 27, 2016</td>
															<td>00768747</td>
															<td>P 2,252.00</td>
															<td></td>
															<td></td>
															<td>Fernandez, Jerwin</td>
															<td>Fernandez, Jerwin</td>
														</tr>
														<tr>
															<td>Aug 24, 2016</td>
															<td>46453041</td>
															<td>P 3,654.00</td>
															<td></td>
															<td></td>
															<td>Caccam, Erick</td>
															<td>Caccam, Erick</td>
														</tr>
														<tr>
															<td>Mar 15, 2016</td>
															<td>26645094</td>
															<td>P 1,655.00</td>
															<td></td>
															<td></td>
															<td>Balanza, Demy</td>
															<td>Balanza, Demy</td>
														</tr>
														<tr>
															<td>Dec 22, 2016</td>
															<td>97161297</td>
															<td>P 1,150.00</td>
															<td></td>
															<td></td>
															<td>Gurtiza, Jhaver</td>
															<td>Gurtiza, Jhaver</td>
														</tr>
														<tr>
															<td>Sep 27, 2016</td>
															<td>00768747</td>
															<td>P 2,252.00</td>
															<td></td>
															<td></td>
															<td>Fernandez, Jerwin</td>
															<td>Fernandez, Jerwin</td>
														</tr>
														<tr>
															<td>Aug 24, 2016</td>
															<td>46453041</td>
															<td>P 3,654.00</td>
															<td></td>
															<td></td>
															<td>Caccam, Erick</td>
															<td>Caccam, Erick</td>
														</tr>
														<tr>
															<td>Mar 15, 2016</td>
															<td>26645094</td>
															<td>P 1,655.00</td>
															<td></td>
															<td></td>
															<td>Balanza, Demy</td>
															<td>Balanza, Demy</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
									<div role="tabpanel" class="tab-pane fade" id="second_semester_tab_2">
										<div class="account_summary_container">
											<h4 class="account_summary_title">Account Summary</h4>

											<ul class="list-unstyled account_details_list">
												<li>
													<span>Total Assesment</span>
													<span class="amount">P 3,000.00</span>
												</li>
												<li>
													<span>Total Amount</span> 
													<span class="amount">P 2,000.00</span>
												</li>
												<li>
													<span>Balance</span>
													<span class="amount">P 1,000.00</span>
												</li>
												<li>
													<a href="#" class="user_btn" data-toggle="modal" data-target="#assessment_modal">View Assesment</a>
												</li>
											</ul>
										</div>

										<div class="table_with_header_container">
											<div class="table_header_container">
												<h4>Payment Transaction</h4>
											</div>
											<div class="table_head_fixer_container">
												<table class="table table-striped table_with_buttons table_head_fixer">
													<thead>
														<tr>
															<th class="user_color">Date</th>
															<th class="user_color">O.R. No.</th>
															<th class="user_color">Amount</th>
															<th class="user_color">Check No.</th>
															<th class="user_color">Check Bank</th>
															<th class="user_color">Received By</th>
															<th class="user_color">Printed By</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>Dec 22, 2016</td>
															<td>97161297</td>
															<td>P 1,150.00</td>
															<td></td>
															<td></td>
															<td>Gurtiza, Jhaver</td>
															<td>Gurtiza, Jhaver</td>
														</tr>
														<tr>
															<td>Sep 27, 2016</td>
															<td>00768747</td>
															<td>P 2,252.00</td>
															<td></td>
															<td></td>
															<td>Fernandez, Jerwin</td>
															<td>Fernandez, Jerwin</td>
														</tr>
														<tr>
															<td>Aug 24, 2016</td>
															<td>46453041</td>
															<td>P 3,654.00</td>
															<td></td>
															<td></td>
															<td>Caccam, Erick</td>
															<td>Caccam, Erick</td>
														</tr>
														<tr>
															<td>Mar 15, 2016</td>
															<td>26645094</td>
															<td>P 1,655.00</td>
															<td></td>
															<td></td>
															<td>Balanza, Demy</td>
															<td>Balanza, Demy</td>
														</tr>
														<tr>
															<td>Dec 22, 2016</td>
															<td>97161297</td>
															<td>P 1,150.00</td>
															<td></td>
															<td></td>
															<td>Gurtiza, Jhaver</td>
															<td>Gurtiza, Jhaver</td>
														</tr>
														<tr>
															<td>Sep 27, 2016</td>
															<td>00768747</td>
															<td>P 2,252.00</td>
															<td></td>
															<td></td>
															<td>Fernandez, Jerwin</td>
															<td>Fernandez, Jerwin</td>
														</tr>
														<tr>
															<td>Aug 24, 2016</td>
															<td>46453041</td>
															<td>P 3,654.00</td>
															<td></td>
															<td></td>
															<td>Caccam, Erick</td>
															<td>Caccam, Erick</td>
														</tr>
														<tr>
															<td>Mar 15, 2016</td>
															<td>26645094</td>
															<td>P 1,655.00</td>
															<td></td>
															<td></td>
															<td>Balanza, Demy</td>
															<td>Balanza, Demy</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Modal -->
		<div class="modal fade" id="assessment_modal" tabindex="-1" role="dialog" aria-labelledby="assessment_modal">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="table_with_header_container">
						<div class="table_header_container">
							<h4>Assessment</h4>
						</div>
						<table class="table table-striped">
							<thead>
								<tr>
									<th class="user_color">Fee Name</th>
									<th class="user_color">Amount</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Athletic Fee</td>
									<td>P 50.00</td>
								</tr>
								<tr>
									<td>Cultural Fee</td>
									<td>P 60.00</td>
								</tr>
								<tr>
									<td>Development Fee</td>
									<td>P 1,000.00</td>
								</tr>
								<tr>
									<td>Guidance Fee</td>
									<td>P 50.00</td>
								</tr>
								<tr>
									<td>ILS Fee</td>
									<td>P 150.00</td>
								</tr>
								<tr>
									<td>Library Fee</td>
									<td>P 150.00</td>
								</tr>
								<tr>
									<td>Medical/Dental Fee</td>
									<td>P 50.00</td>
								</tr>
								<tr>
									<td>Mutual Aid</td>
									<td>P 50.00</td>
								</tr>
								<tr>
									<td>Registration Fee</td>
									<td>P 60.00</td>
								</tr>
								<tr>
									<td>School Publication</td>
									<td>P 80.00</td>
								</tr>
								<tr>
									<td>SCUAA</td>
									<td>P 100.00</td>
								</tr>
								<tr>
									<td>Student Body Organization</td>
									<td>P 50.00</td>
								</tr>
								<tr>
									<td>Tuition Fee</td>
									<td>P 900.00</td>
								</tr>
								<tr>
									<td>OJT/Practicum</td>
									<td>P 150.00</td>
								</tr>
							</tbody>
							<tfoot>
								<tr>
									<td> <span class="total_assessment_amount_label">Total Amount</span></td>
									<td> <span class="total_assessment_amount">P 2,900.00</span></td>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>