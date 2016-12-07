@extends('layout')
@section('title', 'User Account')
@section('icon', '../img/title_logo.jpg')
@section('content')
<div class="col-md-12" style="margin-top: -20px;">
	<div class="jumbotron col-md-3 sidebar-column" style="margin-left: -15px; height: 633px;">
		<div style="margin-bottom: 4%;">
			<span class="welcome-note-dashboard" style="margin-left: 20%; "><h4 class="heading-label">[Student's Name]</h4></span> 
		</div>
		<div class="active-clicked" id="dashboard">
			Dashboard
		</div>
		<div class="account-sidebar" id="request-acad-record">
			Request Academic Record
		</div>
		<div class="account-sidebar" id="logout">
			<a href="{!! url('../') !!}">Logout</a>
		</div>
	</div>
	<div id="dashboard-content" class="col-md-9 dashboard-display" style="border-left: 2px solid #7B1113; min-height: 633px; margin-right: -12px;">
		<div>
			<div class="greetings-user"><h1 class="heading-label">Welcome [student-number]!</h3></div>
			<div>
				<h4 class="heading-label reqs-label">Unprocessed Requests:</h4>
				<div class="col-md" style="color: black; font-weight: 900;">
					To view receipt, please <button class="btn btn-view-receipt" data-toggle="modal" data-target="#receipt-form" title="View Receipt">Click here!</button>
				</div>
				<div id="receipt-form" class="modal fade" role="dialog">
  					<div class="modal-dialog">
					    <div class="modal-content">
					    	<div class="modal-header">
	        					<button type="button" class="close" data-dismiss="modal">&times;</button>
	        					<h4 class="modal-title heading-label">Modal Header</h4>
	      					</div>
	      					<div class="modal-body">
	      						<div class="receipt-header">
		      						<h5 class="heading-label">OFFICE OF THE UNIVERSITY REGISTRAR</h5>
		      						<h5 class="heading-label">U.P. Visayas</h5>
		      						<h5 class="heading-label">5023 Miagao, Iloilo</h5>
		      						<h5 class="heading-label">Tel. No. (033) 315-8556</h5>
		      						<h5 class="heading-label">Email: <a href="javascript: void();">our_upvisayas@yahoo.com</a>;&nbsp;<a href="javascript: void();">our@upv.edu.ph</a></h5>
		      						<h4 class="heading-label">Billing Slip</h4>
	      						</div>
	      						<div class="receipt-header">
		      						<p style="text-align: right">Date: ____[date here]____</p>
		      						<p style="text-align: left">Name: ____[name here]____</p>
		      						<p style="text-align: left">Degree: ____[degree here]____</p>
		      						<p style="text-align: left">College: ____[degree here]____</p>
		      						<p style="text-align: left">Purpose: ____[purpose here]____</p>
		      						<table class="receipt-body">
		      							<th>APPLICATION FOR: </th>
		      							<th class="receipt-align-right">No. of Copies</th>
		      							<th class="receipt-align-right">Amount</th>
		      							<tr>
		      								<td class="receipt-align-left">Official Transcript of Records (OTR)</td>
		      								<td class="receipt-align-right">[-]</td>
		      								<td class="receipt-align-right">&#8369; [-]</td>
		      							</tr>
		      							<tr>
		      								<td class="receipt-align-left">&nbsp;&nbsp;Authenticated OTR</td>
		      								<td class="receipt-align-right">[-]</td>
		      								<td class="receipt-align-right">&#8369; [-]</td>
		      							</tr>
		      							<tr>
		      								<td class="receipt-align-left">Certificates:</td>
		      								<td></td>
		      								<td></td>
		      							</tr>
		      							<tr>
		      								<td class="receipt-align-left">&nbsp;&nbsp;Certificate of Graduation</td>
		      								<td class="receipt-align-right">[-]</td>
		      								<td class="receipt-align-right">[-]</td>
		      							</tr>
		      							<tr>
		      								<td class="receipt-align-left">&nbsp;&nbsp;English as a medium of instruction</td>
		      								<td class="receipt-align-right">[-]</td>
		      								<td class="receipt-align-right">[-]</td>
		      							</tr>
		      							<tr>
		      								<td class="receipt-align-left">&nbsp;&nbsp;CAV (Authentication and Verification)</td>
		      								<td class="receipt-align-right">[-]</td>
		      								<td class="receipt-align-right">[-]</td>
		      							</tr>
		      							<tr>
		      								<td class="receipt-align-left">&nbsp;&nbsp;Course Description</td>
		      								<td class="receipt-align-right">[-]</td>
		      								<td class="receipt-align-right">[-]</td>
		      							</tr>
		      							<tr>
		      								<td class="receipt-align-left">&nbsp;&nbsp;Units Earned</td>
		      								<td class="receipt-align-right">[-]</td>
		      								<td class="receipt-align-right">[-]</td>
		      							</tr>
		      							<tr>
		      								<td class="receipt-align-left">&nbsp;&nbsp;Bonafide Student</td>
		      								<td class="receipt-align-right">[-]</td>
		      								<td class="receipt-align-right">[-]</td>
		      							</tr>
		      							<tr>
		      								<td class="receipt-align-left">&nbsp;&nbsp;General Weighted Average</td>
		      								<td class="receipt-align-right">[-]</td>
		      								<td class="receipt-align-right">[-]</td>
		      							</tr>
		      							<tr>
		      								<td class="receipt-align-left">&nbsp;&nbsp;Grade Point Average</td>
		      								<td class="receipt-align-right">[-]</td>
		      								<td class="receipt-align-right">[-]</td>
		      							</tr>
		      							<tr>
		      								<td class="receipt-align-left">&nbsp;&nbsp;Law Aptitude Examination</td>
		      								<td class="receipt-align-right">[-]</td>
		      								<td class="receipt-align-right">[-]</td>
		      							</tr>
		      							<tr>
		      								<td class="receipt-align-left">&nbsp;&nbsp;Prospective Candidate for Graduation</td>
		      								<td class="receipt-align-right">[-]</td>
		      								<td class="receipt-align-right">[-]</td>
		      							</tr>
		      							<tr>
		      								<td class="receipt-align-left">&nbsp;&nbsp;Grading System</td>
		      								<td class="receipt-align-right">[-]</td>
		      								<td class="receipt-align-right">[-]</td>
		      							</tr>
		      							<tr>
		      								<td class="receipt-align-left">&nbsp;&nbsp;Letter of No Objection</td>
		      								<td class="receipt-align-right">[-]</td>
		      								<td class="receipt-align-right">[-]</td>
		      							</tr>
		      							<tr>
		      								<td class="receipt-align-left">&nbsp;&nbsp;Honorable Dismissal</td>
		      								<td class="receipt-align-right">[-]</td>
		      								<td class="receipt-align-right">[-]</td>
		      							</tr>
		      							<tr>
		      								<td class="receipt-align-left">&nbsp;&nbsp;Statement of Accounts</td>
		      								<td class="receipt-align-right">[-]</td>
		      								<td class="receipt-align-right">[-]</td>
		      							</tr>
		      							<tr>
		      								<td class="receipt-align-left">Others:</td>
		      								<td></td>
		      								<td></td>
		      							</tr>
		      							<tr>
		      								<td class="receipt-align-left">&nbsp;&nbsp;ID Fee</td>
		      								<td class="receipt-align-right">[-]</td>
		      								<td class="receipt-align-right">[-]</td>
		      							</tr>
		      							<tr>
		      								<td class="receipt-align-left">&nbsp;&nbsp;Application for Addmission</td>
		      								<td class="receipt-align-right">[-]</td>
		      								<td class="receipt-align-right">[-]</td>
		      							</tr>
		      							<tr>
		      								<td class="receipt-align-left">&nbsp;&nbsp;Graduation Fee</td>
		      								<td class="receipt-align-right">[-]</td>
		      								<td class="receipt-align-right">[-]</td>
		      							</tr>
		      							<tr>
		      								<td class="receipt-align-left">&nbsp;&nbsp;English Translation of Diploma</td>
		      								<td class="receipt-align-right">[-]</td>
		      								<td class="receipt-align-right">[-]</td>
		      							</tr>
		      							<tr>
		      								<td class="receipt-align-left">&nbsp;&nbsp;Record Verification</td>
		      								<td class="receipt-align-right">[-]</td>
		      								<td class="receipt-align-right">[-]</td>
		      							</tr>
		      							<tr>
		      								<td class="receipt-align-left">&nbsp;&nbsp;Envelope</td>
		      								<td class="receipt-align-right">[-]</td>
		      								<td class="receipt-align-right">[-]</td>
		      							</tr>
		      							<tr>
		      								<td class="receipt-align-left">&nbsp;&nbsp;Mailing Expenses</td>
		      								<td class="receipt-align-right">[-]</td>
		      								<td class="receipt-align-right">[-]</td>
		      							</tr>
		      							<tr>
		      								<td class="receipt-align-left">&nbsp;&nbsp;Administrative Cost</td>
		      								<td class="receipt-align-right">[-]</td>
		      								<td class="receipt-align-right">[-]</td>
		      							</tr>
		      							<tr>
		      								<td class="receipt-align-left">&nbsp;&nbsp;Authentication _________</td>
		      								<td class="receipt-align-right">[-]</td>
		      								<td class="receipt-align-right">[-]</td>
		      							</tr>
		      							<tr>
		      								<td class="receipt-align-left">&nbsp;&nbsp;Other Document _________</td>
		      								<td class="receipt-align-right">[-]</td>
		      								<td class="receipt-align-right">[-]</td>
		      							</tr>

		      							<tr>
		      								<td colspan="2" class="receipt-align-center">TOTAL AMOUNT</td>
		      								<td class="receipt-align-right">&#8369; [-]</td>
		      							</tr>
		      						</table>
	      						</div>
	      						<hr style="border: 1px solid #7B1113;"/>
	      						<!-- <h5 class="heading-label receipt-align-center">CLAIM STUB</h5>
	      						<h6 class="heading-label receipt-align-left">Note: To be FILLED-OUT by O.U.R. Staff</h6>
	      						<h6 class="heading-label receipt-align-left">Date Paid: ____________</h6>
	      						<h6 class="heading-label receipt-align-left">Due Date:&nbsp; ____________</h6>
	      						<div class="receipt-header">
	      							<table class="receipt-body" border="1">
	      								<th>&nbsp;</th>
	      								<th class="receipt-ital">First Time Application</th>
	      								<th class="receipt-ital">Succeeding Applications</th>
	      								<tr>
	      									<td class="receipt-ital">&nbsp;Off Peak</td>
	      									<td class="receipt-ital">Within 2 Weeks</td>
	      									<td class="receipt-ital">Within 3 Working Days</td>
	      								</tr>
	      								<tr>
	      									<td class="receipt-ital">&nbsp;Peak Season<br/>&nbsp;&nbsp;(May-August)</td>
	      									<td class="receipt-ital">1 Month</td>
	      									<td class="receipt-ital">Within 1 Week</td>
	      								</tr>
	      							</table>
	      						</div> -->
	      					</div>
	      					<div class="modal-footer">
	        					<button type="button" class="btn btn-add-emp btn-close-receipt" data-dismiss="modal">Close</button>
	      					</div>
	    				</div>
  					</div>
				</div>
			</div>
			<div>
				<h4 class="heading-label reqs-label">Requests History:</h4>
				<div class="col-md-8">

					<table class="table-requests-made">
					<th>Request Number</th>
					<th>Documents Requested</th>
					<th>Status</th>
					<th>Transaction Date</th>
					<tr class="doc-pricing">
		            	<td></td>
		            	<td></td>
			            <td></td>
			            <td></td>
		          	</tr>

		        	<tr>
						<td>211</td>
			            <td>Diploma</td>
			            <td>Pending</td>
			            <td>October 12, 2015</td>
			        </tr>
		        	<tr>
						<td>211</td>
			            <td>Diploma</td>
			            <td>Pending</td>
			            <td>October 12, 2015</td>
			        </tr>
		        	<tr>
						<td>211</td>
			            <td>Diploma</td>
			            <td>Pending</td>
			            <td>October 12, 2015</td>
			        </tr>
		        	<tr>
						<td>211</td>
			            <td>Diploma</td>
			            <td>Pending</td>
			            <td>October 12, 2015</td>
			        </tr>
		        	<tr>
						<td>211</td>
			            <td>Diploma</td>
			            <td>Pending</td>
			            <td>October 12, 2015</td>
			        </tr>

				</table>
				</div>
				
			</div>
		</div>
	</div>
	<div id="request-acad-rec-content" class="col-md-9 dashboard-display acad-record-request-db">
		<div class="container pull-left request-body">
		    <div class="row" style="margin-top: 5%;">
		        <div class="col-md-7 col-md-offset-1">
		        <form method="POST" action="dashboard">
		             {{ csrf_field() }}
		            <div class="panel panel-default">
		                <div class="panel-heading"><h4 class="heading-label">Applying for</h4></div>
			                <div class="form-body">
			                <div class="panel-body">
			                    
			                    <div id="panel1">
			                        <div>
			                            <a data-toggle="collapse" class="request-type-collapsibles" href="#otr-options"><span class="glyphicon glyphicon-plus-sign"></span> Official Transcript of Records</a>
			                            <div id="otr-options" class="panel-collapse collapse">
			                                <div class="row">
			                                    <div class="checkbox col-md-5 col-md-offset-1">
			                                        <label><input type="checkbox" class="checkbox-click" name="otr-authenticated-copies" id="otr-authenticated-copies"/> Authenticated copies</label>
			                                    </div>
			                                    <div class="col-md-6">
			                                        <input type="text" class="form-control copies" placeholder="Enter no. of copies" id="1" name="authenticated-copies"/>
			                                    </div>
			                                </div>
			                            </div>
			                        </div>
			                        <div>
			                            <a data-toggle="collapse" class="request-type-collapsibles" href="#cert-options"><span class="glyphicon glyphicon-plus-sign"></span> Certificates</a>
			                            <div id="cert-options" class="panel-collapse collapse">
			                                <div class="row">
			                                    <div class="checkbox col-md-5 col-md-offset-1" id="certificates">
			                                        <label><input type="checkbox" class="checkbox-click" name="cert-certificate-of-grad" id="cert-certificate-of-grad"/> Certificate of Graduation</label>
			                                    </div>
			                                    <div class="col-md-6">
			                                        <input type="text" class="form-control copies" placeholder="Enter no. of copies" id="2" name="cert-grad"/>
			                                    </div>
			                                </div>
			                                <div class="row">
			                                    <div class="checkbox col-md-5 col-md-offset-1">
			                                       <label><input type="checkbox" class="checkbox-click" name="cert-english-as-a-medium-of-instruction" id="cert-english-as-a-medium-of-instruction"/> English as a medium of instruction</label>
			                                   </div>
			                                   <div class="col-md-6">
			                                    <input type="text" class="form-control copies" placeholder="Enter no. of copies" id="3" name="eng-med-instr"/>
			                                </div>
			                            </div>
			                            <div class="row">
			                                <div class="checkbox col-md-5 col-md-offset-1">
			                                    <label><input type="checkbox" class="checkbox-click" name="cert-cav" id="cert-cav"/> CAV (Authentication and Verification)</label>
			                                </div>
			                                <div class="col-md-6">
			                                    <input type="text" class="form-control copies" placeholder="Enter no. of copies" id="4" name="cav"/>
			                                </div>
			                            </div>
			                            <div class="row">
			                                <div class="checkbox col-md-5 col-md-offset-1">
			                                    <label><input type="checkbox" class="checkbox-click" name="cert-course-desc" id="cert-course-desc"/> Course description</label>
			                                </div>
			                                <div class="col-md-6">
			                                    <input type="text" class="form-control copies" placeholder="Enter no. of copies" id="5" name="course-desc"/>
			                                </div>
			                            </div>
			                            <div class="row">
			                                <div class="checkbox col-md-5 col-md-offset-1">
			                                    <label><input type="checkbox" class="checkbox-click" name="cert-unites-earned" id="cert-unites-earned"/> Units earned</label>
			                                </div>
			                                <div class="col-md-6">
			                                    <input type="text" class="form-control copies" placeholder="Enter no. of copies" id="6" name="units-earned"/>
			                                </div>
			                            </div>
			                            <div class="row">
			                                <div class="checkbox col-md-5 col-md-offset-1">
			                                    <label><input type="checkbox" class="checkbox-click" name="cert-bonafide-student" id="cert-bonafide-student"/> Bonafide Student</label>
			                                </div>
			                                <div class="col-md-6">
			                                    <input type="text" class="form-control copies" placeholder="Enter no. of copies" id="7" name="bon-stud"/>
			                                </div>
			                            </div>
			                            <div class="row">
			                                <div class="checkbox col-md-5 col-md-offset-1">
			                                    <label><input type="checkbox" class="checkbox-click" name="cert-gwa" id="cert-gwa"/> General Weighted Average</label>
			                                </div>
			                                <div class="col-md-6">
			                                    <input type="text" class="form-control copies" placeholder="Enter no. of copies" id="8" name="gwa"/>
			                                </div>
			                            </div>
			                            <div class="row">
			                                <div class="checkbox col-md-5 col-md-offset-1">
			                                    <label><input type="checkbox" class="checkbox-click" name="cert-gpa" id="cert-gpa"/> Grade Point Average</label>
			                                </div>
			                                <div class="col-md-6">
			                                    <input type="text" class="form-control copies" placeholder="Enter no. of copies" id="9" name="gpa"/>
			                                </div>
			                            </div>
			                            <div class="row">
			                                <div class="checkbox col-md-5 col-md-offset-1">
			                                    <label><input type="checkbox" class="checkbox-click" name="cert-letter-of-no-objection" id="cert-letter-of-no-objection"/> Letter of No Objection</label>
			                                </div>
			                                <div class="col-md-6">
			                                    <input type="text" class="form-control copies" placeholder="Enter no. of copies" id="10" name="letter-no-obj"/>
			                                </div>
			                            </div>
			                            <div class="row">
			                                <div class="checkbox col-md-5 col-md-offset-1">
			                                    <label><input type="checkbox" class="checkbox-click" name="cert-hd" id="cert-hd"/> HD (for graduated students only)</label>
			                                </div>
			                                <div class="col-md-6">
			                                    <input type="text" class="form-control copies" placeholder="Enter no. of copies" id="11" name="hd-for-grad"/>
			                                </div>
			                            </div>
			                        </div>
			                    </div>
			                    <div>
			                        <a data-toggle="collapse" class="request-type-collapsibles" href="#others-options"><span class="glyphicon glyphicon-plus-sign"></span> Others</a>
			                        <div id="others-options" class="panel-collapse collapse">
			                            <div class="row">
			                                <div class="checkbox col-md-5 col-md-offset-1">
			                                    <label><input type="checkbox" class="checkbox-click" name="others-eng-diploma" id="others-eng-diploma"/> English Translation of Diploma</label>
			                                </div>
			                                <div class="col-md-6">
			                                    <input type="text" class="form-control copies" placeholder="Enter no. of copies" id="12" name="eng-diploma"/>
			                                </div>
			                            </div>
			                            <div class="row">
			                                <div class="checkbox col-md-5 col-md-offset-1">
			                                    <label><input type="checkbox" class="checkbox-click" name="others-record-verification" id="others-record-verification"/> Record Verification</label>
			                                </div>
			                                <div class="col-md-6">
			                                    <input type="text" class="form-control copies" placeholder="Enter no. of copies" id="13" name="record-verification"/>
			                                </div>
			                            </div>
			                            <div class="row">
			                                <div class="checkbox col-md-5 col-md-offset-1">
			                                    <label><input type="checkbox" class="checkbox-click" name="others-authentication" id="others-authentication"/> Authentication</label>
			                                </div>
			                                <div class="col-md-6">
			                                    <input type="text" class="form-control copies" placeholder="Enter no. of copies" id="14" name="authent"/>
			                                </div>
			                            </div>
			                        </div>
			                    </div>
			                </div>
			                <div id="panel2">
			                    <select id="category" class="form-control categories" name="category">
			                        <option selected disabled>Please Choose Category:</option>
			                        <option>Employment</option>
			                        <option>Scholarship</option>
			                        <option>Enrollment</option>
			                        <option>UP Visayas/UP System</option>
			                        <option>Transfer to other school</option>
			                        <option>PRC Licensure Exam</option>
			                        <option>Certification, Authentication, and Verification for DFA</option>
			                        <option>Migration</option>
			                        <option>Records Purposes</option>
			                        <option>Others</option>
			                    </select>
			                    <p>&nbsp;</p>
			                    <input id="others" type="text" class="form-control hide" placeholder="Others" name="others"/>
			                </div>
			                
			            </div>
			        </div>
		        </div>
		        <div class="clearfix">
		            <div class="pull-right">
		                <button id="back" type="button" disabled="" class="btn btn-danger btn-to-back">Back</button>
		                <button id="next" type="button" disabled="" class="btn btn-info btn-to-next">Next</button>
		                {{-- <input id="add-request" type="submit" disabled="" class="btn btn-success" value="Submit Request"/> --}}
		                <button id="add-request" type="button" class="btn btn-info btn-rev-req" data-toggle="modal" data-target="#myModal">Review Request</button>
		            </div>
		        </div>
		        <div>&nbsp;</div>
		        </form>
		    </div>
		</div>
		</div>
		<div id="myModal" class="modal fade" role="dialog">
		  <div class="modal-dialog">

		    <!-- Modal content-->
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Assessment of Payment</h4>
		      </div>
		      <div class="modal-body">
		        <p>Some text in the modal.</p>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		      </div>
		    </div>

		  </div>
		</div>



	</div>
</div>
@endsection('content')
