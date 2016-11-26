@extends('layout')
@section('title', 'Login')
@section('content')
<br/>
<div class="container">
<div class="row">
<div class="col-md-8 col-md-offset-3">
<form>
	<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

<div class="form-group">
	<label for="student-number">Student Number:</label>
	<input type="text" class="form-control" id="student-number">
</div>
<div class="form-group">
	<label for="pwd">Password:</label>
	<input type="password" class="form-control" id="pwd">
</div>
  <button type="submit" class="btn btn-default">Submit</button>
 </form>
 </div>
 </div>
 </div>
@endsection
