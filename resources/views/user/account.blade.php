@extends('layout')
@section('title', 'User Account')
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
		<div class="account-sidebar" id="request-acad-record">
			Request Academic Record
		</div>
		<div class="account-sidebar" id="logout">
			<a href="{!! url('../') !!}">Logout</a>
		</div>
	</div>
	<div id="dashboard-content" class="col-md-9 dashboard-display" style="border-left: 4px solid #7B1113; min-height: 633px; margin-right: -12px;">
		<div>Welcome User</div>
	</div>
	<div id="request-acad-rec-content" class="col-md-9 dashboard-display" style="border-left: 4px solid #7B1113; min-height: 633px; margin-right: -12px;">
		THIS IS THE ACADEMIC REQUEST
	</div>
</div>
@endsection('content')