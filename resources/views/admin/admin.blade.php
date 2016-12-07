@extends('layout')
@section('title', 'Admin Account')
@section('icon', '../img/title_logo.jpg')
@section('content')
<div class="col-md-12" style="margin-top: -20px;">
	<div class="jumbotron col-md-3 sidebar-column" style="margin-left: -15px; height: 633px;">
		<div style="">
			<img class="prof-img" src="../img/UP.png" style="border-radius: 100%;"/>
			<span class="welcome-note-dashboard">Welcome,</span>
			<span class="welcome-name"> [name]</span> 
		</div>
		<div class="active-clicked" id="dashboard">
			Dashboard
		</div>
		<div class="account-sidebar" id="requests">
			View Requests
		</div>
		<div class="account-sidebar" id="logout">
            {{-- <a href="{!! url('../') !!}">Logout</a> --}}
            <a href="{{ url('/logout') }}"
                onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                Logout
            </a>
            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </div>
	</div>
	<div id="dashboard-content" class="col-md-9 dashboard-display" style="border-left: 4px solid #7B1113; min-height: 633px; margin-right: -12px;">
		<div>Welcome User</div>
		<div class="container">
			<div class="row">
				<div class="panel-default">
					<div class="panel-heading">
						<h1>Search Transactions</h1>
					</div>
					<div class="panel-body">
						<div class="form-group">
							<input type="text" class="form-control" id="search" name="search">
						</div>
						<table class="table table-stripped table-hover">
							<thead>
								<th>First Name</th>
								<th>Last Name</th>
								<th>Request Status</th>
							</thead>
							<tbody>
								
							</tbody>
							
						</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="request-content" class="col-md-9 dashboard-display" style="border-left: 4px solid #7B1113; min-height: 633px; margin-right: -12px;">
		<div>View Requests</div>
		<div class="col-md-12">
	      	<div class="col-md-7" style="border: 2px solid transparent; min-height: 100%;">
		        <table border='0' style="min-width: 100%;">
		          <th>REQUESTOR NAME</th>
		          <th>REQUEST TYPE</th>
		          <th>REQUEST DATE</th>
		          <th>REQUEST TIME</th>
		          <th>ACTION</th>

		          <tr>
		            <td>Grace Icay</td>
		            <td>Transcript of Records</td>
		            <td>July 12, 2016</td>
		            <td>09:00AM</td>
		            <td><button class="btn btn-action-view" id="view1" data-toggle="modal" data-target="#record-modal">View More</button></td>
		          </tr>
		         <tr>
		            <td>Grace Icay</td>
		            <td>Transcript of Records</td>
		            <td>July 12, 2016</td>
		            <td>09:00AM</td>
		            <td><button class="btn btn-action-view" id="view2" data-toggle="modal" data-target="#record-modal">View More</button></td>
		          </tr>
		          <tr>
		            <td>Grace Icay</td>
		            <td>Transcript of Records</td>
		            <td>July 12, 2016</td>
		            <td>09:00AM</td>
		            <td><button class="btn btn-action-view" id="view3" data-toggle="modal" data-target="#record-modal">View More</button></td>
		          </tr>
		          <tr>
		            <td>Grace Icay</td>
		            <td>Transcript of Records</td>
		            <td>July 12, 2016</td>
		            <td>09:00AM</td>
		            <td><button class="btn btn-action-view" id="view4" data-toggle="modal" data-target="#record-modal">View More</button></td>
		          </tr>
		          <tr>
		            <td>Grace Icay</td>
		            <td>Transcript of Records</td>
		            <td>July 12, 2016</td>
		            <td>09:00AM</td>
		            <td><button class="btn btn-action-view" id="view5" data-toggle="modal" data-target="#record-modal">View More</button></td>
		          </tr>
		          <tr>
		            <td>Grace Icay</td>
		            <td>Transcript of Records</td>
		            <td>July 12, 2016</td>
		            <td>09:00AM</td>
		            <td><button class="btn btn-action-view" id="view6" data-toggle="modal" data-target="#record-modal">View More</button></td>
		          </tr>
		          <tr>
		            <td>Grace Icay</td>
		            <td>Transcript of Records</td>
		            <td>July 12, 2016</td>
		            <td>09:00AM</td>
		            <td><button class="btn btn-action-view" id="view7" data-toggle="modal" data-target="#record-modal">View More</button></td>
		          </tr>
		        </table>
		    </div>
		</div>
	</div>
	<div class="modal fade" id="record-modal" role="dialog">
        <div class="modal-dialog" style="width: 100%;">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
            	<div class="panel panel-default">
            		<div class="panel panel-heading">
            			Requestor Name: Grace Icay
            		</div>
            		<div class="panel panel-body">
            			Request Type:
        				Transcript of Records
        				<br/>
        				Document Requested:
        				Authenticated OTR
        				<br/>
        				Request Date:
        				July 12, 2016
        				<br/>
        				Request Time:
        				9:00AM
        				<br/>
        				Number of Copies:
        				1
        				<br/>
        				Price:
        				PHP 100.00
        				<br/>
        			<form>
        				Payment Status:
	        			<label><input type="radio" name="payment" value="paid"/>Paid</label>
						<label><input type="radio" name="payment" value="unpaid" checked/>Unpaid</label>
						<br/>
	        			Processing Status:
	        			<label><input type="radio" name="processing" value="pending" checked/>Pending Request</label>
						<label><input type="radio" name="processing" value="processing"/>Processing</label>
						<label><input type="radio" name="processing" value="for pickup"/>For Pick-up</label>
						<br/>
						<button class="btn btn-action-view" name="update" id="update" type="submit">Update</button>
					</form>
					</div>
        		</div>
            </div>
        </div>
    </div>
</div>
@endsection('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('#search').keyup( function() {
			$value = $(this).val();
			$.ajax({
				type : 'get',
				url : '{{URL::to('search')}}',
				data : {'search':$value},
				success : function(data){
						$('tbody').html(data);				
				}

			});
		});
	});
</script>