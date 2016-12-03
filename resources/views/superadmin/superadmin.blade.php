@extends('layout')
@section('title', 'Superadmin Home')
@section('content')
<div class="jumbotron" style="margin-left: 2%; margin-right: 2%;">
	<div>
		<span style="text-align: center;"><h2>ADD ACCOUNT</h2></span>
		<div style="text-align: center;">
			<button class="btn btn-info" data-toggle="modal" data-target="#addalumnus">Alumnus</button>
			<button class="btn btn-info" data-toggle="modal" data-target="#addstaff">Staff</button>
		</div>
	</div>
</div>
<div class="modal fade" id="addalumnus" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content" style="width: 70%; margin-left: 20%">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Add Alumnus Account</h4>
            </div>
            <div class="modal-body">
                <form>
                    <label>Student Number:</label>
                    <div class="input-group" style="width: 100%;">
                      <!-- <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user"></span></span> -->
                      <input type="text" class="form-control" placeholder="(e.g.: 20nnxxxxx)" aria-describedby="basic-addon1" name="studentnum_add" style="border-radius: 5px; width: 100%;"/>
                    </div>
                    <br/>
                    <label>First Name:</label>
                    <div class="input-group" style="width: 100%;">
                      <!-- <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user"></span></span> -->
                      <input type="text" class="form-control" placeholder="(e.g.: Juan)" aria-describedby="basic-addon1" name="student_fname_add" style="border-radius: 5px; width: 100%;"/>
                    </div>
                    <br/>
                    <label>Last Name:</label>
                    <div class="input-group" style="width: 100%;">
                      <!-- <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user"></span></span> -->
                      <input type="text" class="form-control" placeholder="(e.g.: Dela Cruz)" aria-describedby="basic-addon1" name="student_lname_add" style="border-radius: 5px; width: 100%;"/>
                    </div>
                    <br/>
                    <label>Batch:</label>
                    <div class="input-group" style="width: 100%;">
                      <!-- <span class="input-group-addon" id="basic-addon1"><span class="glyphicon" style="font-weight: 200">#</span></span> -->
                      <input type="text" class="form-control" placeholder="(e.g.: 20nnxxxxx)" aria-describedby="basic-addon1" name="studentnum_add" style="border-radius: 5px; width: 100%;"/>
                    </div>
                    <br/>
                    <label>Password:</label>
                    <div class="input-group" style="width: 100%;">
                      <!-- <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-lock"></span></span> -->
                      <input type="password" class="form-control" placeholder="temporary password" aria-describedby="basic-addon1" name="superadmin_password"style="border-radius: 5px; width: 100%;"/>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
              <button type="button" name="perform_add_alumnus" class="btn btn-info" data-dismiss="modal"><span class="glyphicon glyphicon-ok" style="color: white;"></span>&nbsp;Add</button>
            </div>
      </div>
    </div>
</div>

<div class="modal fade" id="addstaff" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content" style="width: 70%; margin-left: 20%">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Add Staff Account</h4>
            </div>
            <div class="modal-body">
                <form>
                    <label>Employee Number:</label>
                    <div class="input-group" style="width: 100%;">
                      <!-- <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user"></span></span> -->
                      <input type="text" class="form-control" placeholder="(e.g.: 20nnxxxxx)" aria-describedby="basic-addon1" name="studentnum_add" style="border-radius: 5px; width: 100%;"/>
                    </div>
                    <br/>
                    <label>First Name:</label>
                    <div class="input-group" style="width: 100%;">
                      <!-- <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user"></span></span> -->
                      <input type="text" class="form-control" placeholder="(e.g.: Juana)" aria-describedby="basic-addon1" name="student_fname_add" style="border-radius: 5px; width: 100%;"/>
                    </div>
                    <br/>
                    <label>Last Name:</label>
                    <div class="input-group" style="width: 100%;">
                      <!-- <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user"></span></span> -->
                      <input type="text" class="form-control" placeholder="(e.g.: Dela Cruz)" aria-describedby="basic-addon1" name="student_lname_add" style="border-radius: 5px; width: 100%;"/>
                    </div>
                    <br/>
                    <label>Password:</label>
                    <div class="input-group" style="width: 100%;">
                      <!-- <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-lock"></span></span> -->
                      <input type="password" class="form-control" placeholder="temporary password" aria-describedby="basic-addon1" name="superadmin_password"style="border-radius: 5px; width: 100%;"/>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
              <button type="button" name="perform_add_alumnus" class="btn btn-info" data-dismiss="modal"><span class="glyphicon glyphicon-ok" style="color: white;"></span>&nbsp;Add</button>
            </div>
      </div>
    </div>
</div>
@endsection