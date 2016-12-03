@extends('layout')
@section('title', 'Academic Records Request System')
@section('img/title_logo.jpg', 'Academic Records Request System')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<div class="jumbotron welcome-page-body" style="border: 0px solid transparent;">
    <div class="col-md-12">
        <div class="col-md-6" style="border: 1px solid transparent;">
            <div class="panel panel-default rates-table" style="background: rgba(255, 255, 255, 0.70);">
                <div class="panel" style="background: rgba(123, 17, 19, 0.30); margin-bottom: -1px;">
                <dl>
                    <dt style="margin-left: 1%; margin-top: 1%;">RATES:</dt>
                    <hr/>
                </dl>
                <dl style="margin-left: 5%;">
                    <dt>Official Transcript of Records</dt>
                    <dt style="margin-left: 5%; font-style: italic;">Pph 50.00/page (on security paper)</dd>
                    <dt>OTR Application from Abroad</dt>
                    <dt style="margin-left: 5%; font-style: italic;">inclusive of mailing, exclusive of bank charges</dt>
                    <dt style="margin-left: 5%; font-style: italic;">US $ 30.00 via registered mail</dt>
                    <dt style="margin-left: 5%; font-style: italic;">US $ 50.00 Asia &amp; US via courier</dt>
                    <dt style="margin-left: 5%; font-style: italic;">US $ 60.00 Europe &amp; Africa via courier</dt>
                    <dt>Certificates &nbsp;&nbsp; Php 40.00/page</dt>
                    <dt>English translation of diploma &nbsp;&nbsp; Php 50.00/copy</dt>
                    <dt>Computation of GWA/GPA&nbsp;&nbsp; Php 100.00/computation</dt>
                    <dt>Authentication of documents&nbsp;&nbsp; Php 20.00/page</dt>
                    <dt>English translation of diploma &nbsp;&nbsp; Php 50.00/copy</dt>
                    <dt>Envelop &nbsp;&nbsp; Php 10.00/envelop</dt>
                    <dt>Administrative cost &nbsp;&nbsp; Php 10.00</dt>
                    <dt>Verification of Records</dt>
                    <dt style="margin-left: 5%; font-style: italic;">Local Php 100/student</dt>
                    <dt style="margin-left: 5%; font-style: italic;">Application from abroad US $ 20.00</dt>
                    <dt style="margin-left: 5%; font-style: italic;">(exclusive of OTR and bank charges)</dt>
                    <dt>Mailing fees are subject to prevailing postal rates</dt>
                </dl></div>
            </div>
        </div>
        <div class="col-md-6" style="">
            <div class="pull-right" style="width: 58%; background: rgba(255, 255, 255, 0.70); border-radius: 15px;">
                <div class="login-form-body" style="background: rgba(123, 17, 19, 0.30); border-radius: 15px;">
                    <!-- <div style="width: 100%; height: 50px; background: #7B1113; border-top-left-radius: 15px; border-top-right-radius: 15px;" class="col-md-12"> -->
                        <!-- <div style="margin-bottom: 4%;"> -->
                            <span class="col-md-6 pill-login" id="alumnus-login" style="width: 50%; height: 50px; background: #7B1113; border-top-left-radius: 15px;"><br/>ALUMUNUS</span>
                            <span class="col-md-6 pill-login" id="admin-login" style="width: 50%; height: 50px; background: white; border-top-right-radius: 15px; color: #7B1113;"><br/>ADMIN</span>
                        <!-- </div> -->
                    <!-- </div> -->
                    <hr style="border: 1px solid #7B1113; width: 99%; margin-top: 12%;"/>
                    <div style="margin-left: 5%; margin-right: 5%; margin-top: 5%; margin-bottom: -15px;" id="alumnus-field">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                            {{ csrf_field() }}
                            <label>&nbsp;<span id="user-id-label" class="input-labels">User ID:</span></label>
                            <div class="input-divs">
                                <input id="user-id" class="inputs-rows" name="user_id" value="{{ old('user_id') }}" placeholder="Alumni ID" required autofocus>
                                @if ($errors->has('user_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('user_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <label>&nbsp;<span id="user-password-label" class="input-labels">Password:</span></label>
                            <div class="input-divs">
                                <input id="password" type="password" class="inputs-rows" name="password" placeholder="Password" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="input-divs">
                                <input type="submit" class="btn btn-sbmt" name="login" value="LOGIN"/>
                            </div>
                            <div>
                                <p class="no-account">
                                    No Account yet? Register <a href="{!! url('/register')!!}">here</a>!
                                </p>
                            </div>
                            <div><p>&nbsp;</p></div>
                            <!-- <hr style="border: 1px solid #7B1113;"/> -->
                            <!-- <div style="width: 100%; height: 50px; background: #7B1113; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px; "></div> -->
                        </form>
                    </div>
                    <div style="margin-left: 5%; margin-right: 5%; margin-top: 5%; margin-bottom: -15px;" id="admin-field">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                            {{ csrf_field() }}
                            <label>&nbsp;<span id="admin-id-label" class="input-labels">Admin ID:</span></label>
                            <div class="input-divs">
                                <input id="admin-id" class="inputs-rows" name="user_id" value="{{ old('user_id') }}" required autofocus>
                                @if ($errors->has('user_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('user_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <label>&nbsp;<span id="admin-password-label" class="input-labels">Password:</span></label>
                            <div class="input-divs">
                                <input id="admin-password" type="password" class="inputs-rows" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="input-divs">
                                <input type="submit" class="btn btn-sbmt" name="login-admin" value="LOGIN"/>
                            </div>
                            <div>
                                <p>&nbsp;</p>
                            </div>
                            <div class="notes">
                                <p>&nbsp;</p>
                            </div>
                            <!-- <hr style="border: 1px solid #7B1113;"/> -->
                            <!-- <div style="width: 100%; height: 50px; background: #7B1113; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px; "></div> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Script -->
<script type="text/javascript"></script>
@endsection