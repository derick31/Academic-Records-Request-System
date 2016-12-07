@extends('layout')
@section('title', 'Academic Records Request System')
@section('img/title_logo.jpg', 'Academic Records Request System')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<div class="jumbotron welcome-page-body">
    <div class="col-md-12">
        <div class="col-md-6 rates-table-container">
            <div class="panel panel-default rates-table">
                <div class="panel rates-table-panel">
                <dl>
                    <dt class="dt-title">RATES:</dt>
                    <hr/>
                </dl>
                <dl class="dl-space">
                    <dt>Official Transcript of Records</dt>
                    <dt class="prices-subtype">Pph 50.00/page (on security paper)</dd>
                    <dt>OTR Application from Abroad</dt>
                    <dt class="prices-subtype">inclusive of mailing, exclusive of bank charges</dt>
                    <dt class="prices-subtype">US $ 30.00 via registered mail</dt>
                    <dt class="prices-subtype">US $ 50.00 Asia &amp; US via courier</dt>
                    <dt class="prices-subtype">US $ 60.00 Europe &amp; Africa via courier</dt>
                    <dt>Certificates &nbsp;&nbsp; Php 40.00/page</dt>
                    <dt>English translation of diploma &nbsp;&nbsp; Php 50.00/copy</dt>
                    <dt>Computation of GWA/GPA&nbsp;&nbsp; Php 100.00/computation</dt>
                    <dt>Authentication of documents&nbsp;&nbsp; Php 20.00/page</dt>
                    <dt>English translation of diploma &nbsp;&nbsp; Php 50.00/copy</dt>
                    <dt>Envelop &nbsp;&nbsp; Php 10.00/envelop</dt>
                    <dt>Administrative cost &nbsp;&nbsp; Php 10.00</dt>
                    <dt>Verification of Records</dt>
                    <dt class="prices-subtype">Local Php 100/student</dt>
                    <dt class="prices-subtype">Application from abroad US $ 20.00</dt>
                    <dt class="prices-subtype">(exclusive of OTR and bank charges)</dt>
                    <dt>Mailing fees are subject to prevailing postal rates</dt>
                </dl></div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="pull-right login-body-bg">
                <div class="login-form-body login-body-wrapper">
                    <span class="col-md-6 pill-login alumnus-init-style" id="alumnus-login"><br/>ALUMUNUS</span>
                    <span class="col-md-6 pill-login admin-init-style" id="admin-login"><br/>ADMIN</span>
                    <hr class="hr-style"/>
                    <div class="alumnus-field" id="alumnus-field">
                        <form action="{!! url('/user/account/')!!}" method="get">
                            <label>&nbsp;<span id="user-id-label" class="input-labels">User ID:</span></label>
                            <div class="input-divs">
                                <input id="user-id" class="inputs-rows" type="text" placeholder="User ID" value="" name="user-id" />
                            </div>
                            <label>&nbsp;<span id="user-password-label" class="input-labels">Password:</span></label>
                            <div class="input-divs">
                                <input id="user-password" class="inputs-rows" type="password" placeholder="Password" value="" name="password"/>
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
                        </form>
                    </div>
                    <div class="admin-field" id="admin-field">
                        <form action="{!! url('/superadmin')!!}" method="get">
                            <label>&nbsp;<span id="admin-id-label" class="input-labels">Admin ID:</span></label>
                            <div class="input-divs">
                                <input id="admin-id" class="inputs-rows" type="text" placeholder="Admin ID" value="" name="admin-id" />
                            </div>
                            <label>&nbsp;<span id="admin-password-label" class="input-labels">Password:</span></label>
                            <div class="input-divs">
                                <input id="admin-password" class="inputs-rows" type="password" placeholder="Password" value="" name="admin-password"/>
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
