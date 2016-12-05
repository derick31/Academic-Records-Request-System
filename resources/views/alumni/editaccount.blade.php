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
						<div class="col-md-10">
							<input id="address" type="text" class="form-control" value= "{{ $address }}" name="address" />
							<p id="address-error-message" class="error">&nbsp;</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2"><label class="edit-label">Contact #:</label></div>
						<div class="col-md-10">
							<input id="contact-number" type="number" class="form-control" value = "{{ $contact_number }}" name="contact" />
							<p id="contact-error-message" class="error">&nbsp;</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2"><label class="edit-label">Email:</label></div>
						<div class="col-md-10">
							<input id="email" type="email" class="form-control" value="{{ $email }}" name="email" />
							<p id="email-error-message" class="error">&nbsp;</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2"><label class="edit-label">Birth place:</label></div>
						<div class="col-md-10">
							<input id="birth" type="text" class="form-control" value="{{ $birthplace }}"  name="birth" />
							<p id="birth-error-message" class="error">&nbsp;</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2"><label class="edit-label">Father's name:</label></div>
						<div class="col-md-10">
							<input id="father" type="text" class="form-control" value="{{ $father_name }}" name="father" />
							<p id="father-error-message" class="error">&nbsp;</p>
						</div>
					</div>		
					<div class="row">
						<div class="col-md-2"><label class="edit-label">Mother's name:</label></div>
						<div class="col-md-10">
							<input id="mother" type="text" class="form-control" value="{{ $mother_name }}" name="mother" />
							<p id="mother-error-message" class="error">&nbsp;</p>
						</div>
					</div>																														
				</div>
			</div>
			<div class="clearfix">
				<div class="pull-right">
					<button id="reset" type="reset" class="btn btn-danger">Reset</button>
					<button id="submit" class="btn btn-info">Submit</button>
				</div>
			</div>	
			</form>		
		</div>
	</div>
</div>
@endsection
