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
            <form action="addalumnirecord" role="form" method="POST" class="form-horizontal" >
                 {!! csrf_field() !!}
                <div>
                    <label class="col-md-4 control-label">First Name: </label>
                    <div class="col-md-6">
                        <input class="reg-input" type="text" name="firstname"/>
                        <p>&nbsp;</p>
                    </div>
                </div>
                <div>
                    <label class="col-md-4 control-label">Middle Name:</label>
                    <div class="col-md-6">
                        <input class="reg-input" type="text" name="middlename"/>
                        <p>&nbsp;</p>
                    </div>
                </div>
                <div>
                    <label class="col-md-4 control-label">Last Name:</label>
                    <div class="col-md-6">
                        <input class="reg-input" type="text" name="lastname"/>
                        <p>&nbsp;</p>
                    </div>
                </div>
                <div>
                    <label class="col-md-4 control-label">Address</label>
                    <div class="col-md-6">
                        <input class="reg-input" type="text" name="address"/>
                        <p>&nbsp;</p>
                    </div>
                </div>
                <div>
                    <label class="col-md-4 control-label">Contact Number: </label>
                    <div class="col-md-6">
                        <input class="reg-input" type="text" name="contactno"/>
                        <p>&nbsp;</p>
                    </div>
                </div>
                <div>
                    <label class="col-md-4 control-label">Email Address: </label>
                    <div class="col-md-6">
                        <input class="reg-input" type="text" name="email"/>
                        <p>&nbsp;</p>
                    </div>
                </div>
                <div>
                    <label class="col-md-4 control-label">Father's Name: </label>
                    <div class="col-md-6">
                        <input class="reg-input" type="text" name="fathername"/>
                        <p>&nbsp;</p>
                    </div>
                </div>
                <div>
                    <label class="col-md-4 control-label">Mother's Name: </label>
                    <div class="col-md-6">
                        <input class="reg-input" type="text" name="mothername"/>
                        <p>&nbsp;</p>
                    </div>
                </div>
                <div>
                    <label class="col-md-4 control-label">Place of Birth: </label>
                    <div class="col-md-6">
                        <input class="reg-input" type="text" name="placebirth"/>
                        <p>&nbsp;</p>
                    </div>
                </div>
                <div>
                    <label class="col-md-4 control-label">Degree Program: </label>
                    <div class="col-md-6">
                    <select class="reg-input" class = "form-control" name="degree_program" id="degree_program" required title="Select your degree program.">
                                    <option disabled selected>select degree program</option>
                                    <optgroup label="College of Arts and Sciences">
                                        <option value="8">BS Applied Mathematics</option>
                                        <option value="9">BS Biology</option>
                                        <option value="10">BS Chemistry</option>
                                        <option value="7">BA Communication and Media Studies</option>
                                        <option value="1">BA Community Development</option>
                                        <option value="11">BS Computer Science</option>
                                        <option value="12">BS Economics</option>
                                        <option value="2">BA History</option>
                                        <option value="3">BA Literature</option>
                                        <option value="4">BA Political Science</option>
                                        <option value="5">BA Psychology</option>
                                        <option value="13">BS Public Health</option>
                                        <option value="6">BA Sociology</option>
                                        <option value="14">BS Statistics</option>
                                        <option value="33">Master of Chemistry</option>
                                        <option value="22">Master of Education (Biology)</option>
                                        <option value="23">Master of Education (English as a Second Language)</option>
                                        <option value="24">Master of Education (Filipino)</option>
                                        <option value="25">Master of Education (Guidance)</option>
                                        <option value="26">Master of Education (Mathematics)</option>
                                        <option value="27">Master of Education (Physics)</option>
                                        <option value="28">Master of Education (Reading)</option>
                                        <option value="29">Master of Education (Social Studies)</option>
                                        <option value="34">MS Biology</option>
                                        </optgroup>
                                    <optgroup label="College of Fisheries and Ocean Sciences">
                                        <option value="15">BS Fisheries</option>
                                        <option value="35">Master of Aquaculture</option>
                                        <option value="36">Master of Marine Affairs</option>
                                        <option value="37">MS Fisheries (Aquaculture)</option>
                                        <option value="38">MS Fisheries (Fisheries Biology)</option>
                                        <option value="39">MS Fisheries (Fish Processing Technology)</option>
                                        <option value="40">MS Ocean Sciences</option>
                                        <option value="41">Professional Masters in Tropical Marines</option>
                                        <option value="42">Ecosystems Management (PM-TMEM)</option>
                                        <option value="43">PhD Fisheries</option>
                                    </optgroup>
                                    <optgroup label="College of Management">
                                        <option value="16">BS Accountancy</option>
                                        <option value="17">BS Business Administration (Marketing)</option>
                                        <option value="18">BS Management</option>
                                        <option value="44">Master of Management (Business Management)</option>
                                        <option value="46">Master of Management (Public Management)</option>
                                        <option value="47">Diploman in Urban and Regional Planning</option>
                                    </optgroup>
                                    <optgroup label="School of Technology">
                                        <option value="20">BS Chemical Engineering</option>
                                        <option value="19">BS Food Technology</option>
                                    </optgroup>
                                    <optgroup label="Tacloban College">
                                        <option value="16">BS Accountancy</option>
                                        <option value="9">BS Biology</option>
                                        <option value="11">BS Computer Science</option>
                                        <option value="18">BS Management</option>
                                        <option value="7">BS Communication Arts</option>
                                        <option value="12">BA Social Sciences (Economics)</option>
                                        <option value="4">BA Social Sciences (Political Science)</option>
                                        <option value="5">BA Social Sciences (Psychology)</option>
                                    </optgroup>
                                </select>
                                <p>&nbsp;</p>
                        </div>
                </div>
                <div>
                    <label class="col-md-4 control-label">Year Attended: </label>
                    <div class="col-md-6">
                        <input class="reg-input" type="text" name="year_started"/>
                        <p>&nbsp;</p>
                    </div>
                </div>
                <div>
                    <label class="col-md-4 control-label">Year Graduated: </label>
                    <div class="col-md-6">
                        <input class="reg-input" type="text" name="year_ended"/>
                        <p>&nbsp;</p>
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
