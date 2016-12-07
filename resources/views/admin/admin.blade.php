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
		<div class="page-header">
            <h1>Transactions <small>manage your requests here</small></h1>
        </div>
        
        <div class="col-md-8">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                <button class="btn btn-default" type="button">Go!</button>
                </span>
            </div>
            <div class="dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    Sort by:
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a href="#">Date</a></li>
                    <li><a href="#">Status</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                </ul>
            </div>
            <br>
            <div class="panel panel-default">
                <div class="panel-heading">Transaction #: 0123-5739-1231    <span class="label label-success">paid</span></div>
                <div class="panel-body">
                    <span>Juan Dela Cruz</span>
                    <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal">View</button>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <h4>Updates:</h4>
            <div class="panel panel-default">
                <div class="panel-heading">Transaction #: 0123-5739-1231    <span class="label label-warning">pending</span></div>
                <div class="panel-body">
                    <span>Juan Dela Cruz</span>
                    <button type="button" class="btn btn-primary pull-right">View</button>
                </div>
            </div>
        </div>
	</div>
	<div id="request-content" class="col-md-9 dashboard-display" style="border-left: 4px solid #7B1113; min-height: 633px; margin-right: -12px;">
		<div>View Requests</div>

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
@include('modals.transaction')
@endsection('content')