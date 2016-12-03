@extends('layout')
@section('title', 'Academic Records Request System - Apply for New Request')
@section('content')
<div class="container">
    <div class="row" id="div-row">
        <div class="col-md-7 col-md-offset-3">
        <form method="POST" action="dashboard">
             {{ csrf_field() }}
            <div class="panel panel-default">
                <div class="panel-heading"><h4>Applying for</h4></div>
                <div class="panel-body">
                
                    <div id="panel1">
                        <div>
                            <a data-toggle="collapse" class="request-type-collapsibles" href="#otr-options"><span class="glyphicon glyphicon-plus-sign"></span> Official Transcript of Records</a>
                            <div id="otr-options" class="panel-collapse collapse">
                                <div class="row">
                                    <div class="checkbox col-md-5 col-md-offset-1">
                                        <label><input type="checkbox" class="checkbox-click" name="otr-authenticated-copies" id="otr-authenticated-copies"/> Authenticated copies</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control copies" placeholder="Enter no. of copies" name="authenticated-copies"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <a data-toggle="collapse" class="request-type-collapsibles" href="#cert-options"><span class="glyphicon glyphicon-plus-sign"></span> Certificates</a>
                            <div id="cert-options" class="panel-collapse collapse">
                                <div class="row">
                                    <div class="checkbox col-md-5 col-md-offset-1" id="certificates">
                                        <label><input type="checkbox" class="checkbox-click" name="cert-certificate-of-grad" id="cert-certificate-of-grad"/> Certificate of Graduation</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control copies" placeholder="Enter no. of copies" name="cert-grad"/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="checkbox col-md-5 col-md-offset-1">
                                       <label><input type="checkbox" class="checkbox-click" name="cert-english-as-a-medium-of-instruction" id="cert-english-as-a-medium-of-instruction"/> English as a medium of instruction</label>
                                   </div>
                                   <div class="col-md-6">
                                    <input type="text" class="form-control copies" placeholder="Enter no. of copies" name="eng-med-instr"/>
                            </div>
                            <div class="row">
                                <div class="checkbox col-md-5 col-md-offset-1">
                                    <label><input type="checkbox" class="checkbox-click" name="cert-cav" id="cert-cav"/> CAV (Authentication and Verification)</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control copies" placeholder="Enter no. of copies" name="cav"/>
                            </div>
                            <div class="row">
                                <div class="checkbox col-md-5 col-md-offset-1">
                                    <label><input type="checkbox" class="checkbox-click" name="cert-course-desc" id="cert-course-desc"/> Course description</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control copies" placeholder="Enter no. of copies" name="course-desc"/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="checkbox col-md-5 col-md-offset-1">
                                    <label><input type="checkbox" class="checkbox-click" name="cert-unites-earned" id="cert-unites-earned"/> Units earned</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control copies" placeholder="Enter no. of copies" name="units-earned"/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="checkbox col-md-5 col-md-offset-1">
                                    <label><input type="checkbox" class="checkbox-click" name="cert-bonafide-student" id="cert-bonafide-student"/> Bonafide Student</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control copies" placeholder="Enter no. of copies" name="bon-stud"/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="checkbox col-md-5 col-md-offset-1">
                                    <label><input type="checkbox" class="checkbox-click" name="cert-gwa" id="cert-gwa"/> General Weighted Average</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control copies" placeholder="Enter no. of copies" name="gwa"/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="checkbox col-md-5 col-md-offset-1">
                                    <label><input type="checkbox" class="checkbox-click" name="cert-gpa" id="cert-gpa"/> Grade Point Average</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control copies" placeholder="Enter no. of copies" name="gpa"/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="checkbox col-md-5 col-md-offset-1">
                                    <label><input type="checkbox" class="checkbox-click" name="cert-letter-of-no-objection" id="cert-letter-of-no-objection"/> Letter of No Objection</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control copies" placeholder="Enter no. of copies" name="letter-no-obj"/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="checkbox col-md-5 col-md-offset-1">
                                    <label><input type="checkbox" class="checkbox-click" name="cert-hd" id="cert-hd"/> HD (for graduated students only)</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control copies" placeholder="Enter no. of copies" name="hd-for-grad"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <a data-toggle="collapse" class="request-type-collapsibles" href="#others-options"><span class="glyphicon glyphicon-plus-sign"></span> Others</a>
                        <div id="others-options" class="panel-collapse collapse">
                            <div class="row">
                                <div class="checkbox col-md-5 col-md-offset-1">
                                    <label><input type="checkbox" class="checkbox-click" name="others-eng-diploma" id="others-eng-diploma"/> English Translation of Diploma</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control copies" placeholder="Enter no. of copies" name="eng-diploma"/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="checkbox col-md-5 col-md-offset-1">
                                    <label><input type="checkbox" class="checkbox-click" name="others-record-verification" id="others-record-verification"/> Record Verification</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control copies" placeholder="Enter no. of copies" name="record-verification"/>
                            </div>
                            <div class="row">
                                <div class="checkbox col-md-5 col-md-offset-1">
                                    <label><input type="checkbox" class="checkbox-click" name="others-authentication" id="others-authentication"/> Authentication</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control copies" placeholder="Enter no. of copies" name="authent"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="panel2">
                    <select id="category" class="form-control" name="category">
                        <option selected disabled>Please Choose Category:</option>
                        <option>Employment</option>
                        <option>Scholarship</option>
                        <option>Enrollment</option>
                        <option>UP Visayas/UP System</option>
                        <option>Transfer to other school</option>
                        <option>PRC Licensure Exam</option>
                        <option>Certification, Authentication, and Verification for DFA</option>
                        <option>Migration</option>
                        <option>Records Purposes</option>
                        <option>Others</option>
                    </select>
                    <p>&nbsp;</p>
                    <input id="others" type="text" class="form-control hide" placeholder="Others" name="others"/>
                </div>
            </div>
        </div>
        <div class="clearfix">
            <div class="pull-right">
                <button id="back" type="button" disabled="" class="btn btn-danger">Back</button>
                <button id="next" type="button" disabled="" class="btn btn-info">Next</button>
                <input id="add-request" type="submit" disabled="" class="btn btn-success" value="Submit Request"/>
            </div>
        </div>
        <div>&nbsp;</div>
        </form>
    </div>
</div>
</div>
@endsection
