@extends('layout')
@section('title', 'Academic Records Request System')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<div class="jumbotdon welcome-page-body" style="border: 0px solid tdansparent;">
    <div class="col-md-12">
        <div class="panel panel-default rates-table" style="background: rgba(255, 255, 255, 0.70);">
                <div class="panel" style="background: rgba(123, 17, 19, 0.30); margin-bottom: -1px;">
                <dl style="background: #7B1113">
                    <br/>
                    <dt style="margin-bottom: -2%; text-align: center; color: white;">REGISTER NEW ACCOUNT: </dt>
                </dl>
        </div>
        <div class="login-form-body" style="background: rgba(123, 17, 19, 0.30); border-radius: 15px;">
            <br/>
            <form action="{{ url('/register') }}" role="form" method="POST" class="form-horizontal" >
                 {!! csrf_field() !!}
                <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label">First Name: </label>
                    <div class="col-md-6">
                        <input class="reg-input" type="text" name="firstname"/>
                        @if ($errors->has('firstname'))
                            <span class="help-block">
                                <strong>{{ $errors->first('firstname') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('middlename') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label">Middle Name:</label>
                    <div class="col-md-6">
                        <input class="reg-input" type="text" name="middlename"/>
                        @if ($errors->has('middlename'))
                            <span class="help-block">
                                <strong>{{ $errors->first('middlename') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label">Last Name:</label>
                    <div class="col-md-6">
                        <input class="reg-input" type="text" name="lastname"/>
                        @if ($errors->has('lastname'))
                            <span class="help-block">
                                <strong>{{ $errors->first('lastname') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('user-id') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label">Student Number:</label>
                     <div class="col-md-6">
                        <input class="reg-input" type="text" name="student_no"/>
                        @if ($errors->has('student_no'))
                            <span class="help-block">
                                <strong>{{ $errors->first('student_no') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label">Password:</label>
                     <div class="col-md-6">
                        <input class="reg-input" type="password" name="password"/>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('paddress') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label">Permanent Address:</label>
                    <div class="col-md-6">
                        <input class="reg-input" type="text" name="paddress"/>
                        @if ($errors->has('paddress'))
                            <span class="help-block">
                                <strong>{{ $errors->first('paddress') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('caddress') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label">Current Address</label>
                    <div class="col-md-6">
                        <input class="reg-input" type="text" name="caddress"/>
                        @if ($errors->has('caddress'))
                            <span class="help-block">
                                <strong>{{ $errors->first('caddress') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('contactno') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label">Contact Number: </label>
                    <div class="col-md-6">
                        <input class="reg-input" type="text" name="contactno"/>
                        @if ($errors->has('contactno'))
                            <span class="help-block">
                                <strong>{{ $errors->first('contactno') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label">Email Address: </label>
                    <div class="col-md-6">
                        <input class="reg-input" type="text" name="email"/>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('fathername') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label">Father's Name: </label>
                    <div class="col-md-6">
                        <input class="reg-input" type="text" name="fathername"/>
                        @if ($errors->has('fathername'))
                            <span class="help-block">
                                <strong>{{ $errors->first('fathername') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('mothername') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label">Mother's Name: </label>
                    <div class="col-md-6">
                        <input class="reg-input" type="text" name="mothername"/>
                        @if ($errors->has('mothername'))
                            <span class="help-block">
                                <strong>{{ $errors->first('mothername') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('placebirth') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label">Place of Birth: </label>
                    <div class="col-md-6">
                        <input class="reg-input" type="text" name="placebirth"/>
                        @if ($errors->has('placebirth'))
                            <span class="help-block">
                                <strong>{{ $errors->first('placebirth') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('degree') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label">Degree Program: </label>
                    <div class="col-md-6">
                        <input class="reg-input" type="text" name="degree"/>
                        @if ($errors->has('degree'))
                            <span class="help-block">
                                <strong>{{ $errors->first('degree') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('college') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label">College: </label>
                    <div class="col-md-6">
                        <input class="reg-input" type="text" name="college"/>
                        @if ($errors->has('college'))
                            <span class="help-block">
                                <strong>{{ $errors->first('college') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('attended') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label">Year Attended: </label>
                    <div class="col-md-6">
                        <input class="reg-input" type="text" name="attended"/>
                        @if ($errors->has('attended'))
                            <span class="help-block">
                                <strong>{{ $errors->first('attended') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('graduated') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label">Year Graduated: </label>
                    <div class="col-md-6">
                        <input class="reg-input" type="text" name="graduated"/>
                        @if ($errors->has('graduated'))
                            <span class="help-block">
                                <strong>{{ $errors->first('graduated') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>  
                <div class="reg-divs">
                    <button class="btn btn-sbmt" type="submit" name="register" value="REGISTER" id="reg-acct">REGISTER</button>
                    <!-- <input type="submit" class="btn btn-sbmt" name="REGISTER" value="REGISTER" id="register-modal" data-toggle="modal" data-target="#modalpost"/> -->
                    <br/>
                </div>
                <div style="width: 100%; height: 1px; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px; "></div>
            </form>
    </div>
</div>
<script type="text/javascript"></script>

@endsection