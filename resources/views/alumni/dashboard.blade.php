@extends('layout')
@section('title', 'User Account')
@section('icon', '../img/title_logo.jpg')
@section('content')

	<div id="div-row">
		<div class="col-md-7 col-md-offset-1">
		
			<div class="greetings-user">
				@if(session('status'))
					<h1 class="heading-label">{{session('status')}}</h3>
				@else
				<h1 class="heading-label">Welcome, {{$student_number}}</h3>
				@endif
			</div>
			<div>
				<h4 class="heading-label reqs-label">Unprocessed Requests:</h4>
				<div class="receipt-note">
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
		      						<p class="text-align: right">Date: ____[date here]____</p>
		      						<p class="receipt-align-left">Name: ____[name here]____</p>
		      						<p class="receipt-align-left">Degree: ____[degree here]____</p>
		      						<p class="receipt-align-left">College: ____[degree here]____</p>
		      						<p class="receipt-align-left">Purpose: ____[purpose here]____</p>
		      						<table class="table receipt-body">
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
	      						<hr class="claim-stub-hr"/>
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
				<div class="col-md-12">

					<table class="table table-requests-made">
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
	
@endsection('content')
