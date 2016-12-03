@extends('layout')
@section('title', 'Academic Records Request System - Edit Account')
@section('content')
<div class="container">
	<div class="row" id="div-row">
		<div class="col-md-7 col-md-offset-3" id="edit-col">
			
			@if(Session::has('alert-success'))
				<div class="alert alert-success alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				{{ Session::get('alert-success') }}
				</div>
			@endif	
			
			<form action="updateaccount" method="post">
				{{ csrf_field() }}
			<div class="panel panel-default panel-edit-width">
			    	<div class="panel-heading">
			    		<h4>Edit Profile</h4>
			    	</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-2"><label class="edit-label">Address:</label></div>
						<div class="col-md-10"><input type="text" class="form-control" value= "{{ $address }}" name="address" /></div>
					</div>
					<br/>
					<div class="row">
						<div class="col-md-2"><label class="edit-label">Contact #:</label></div>
						<div class="col-md-10"><input type="number" class="form-control" value = "{{ $contact_number }}" name="contact" /></div>
					</div>
					<br/>
					<div class="row">
						<div class="col-md-2"><label class="edit-label">Email:</label></div>
						<div class="col-md-10"><input type="email" class="form-control" value="{{ $email }}" name="email" /></div>
					</div>
					<br/>
					<div class="row">
						<div class="col-md-2"><label class="edit-label">Birth place:</label></div>
						<div class="col-md-10"><input type="text" class="form-control" value="{{ $birthplace }}"  name="birth" /></div>
					</div>
					<br/>
					<div class="row">
						<div class="col-md-2"><label class="edit-label">Father's name:</label></div>
						<div class="col-md-10"><input type="text" class="form-control" value="{{ $father_name }}" name="father" /></div>
					</div>		
					<br/>
					<div class="row">
						<div class="col-md-2"><label class="edit-label">Mother's name:</label></div>
						<div class="col-md-10"><input type="text" class="form-control" value="{{ $mother_name }}" name="mother" /></div>
					</div>																														
				</div>
			</div>
			<div class="clearfix">
				<div class="pull-right">
					<button id="back" class="btn btn-danger">Reset</button>
					<button id="next" class="btn btn-info">Submit</button>
				</div>
			</div>	
			</form>		
		</div>
	</div>
</div>
@endsection
