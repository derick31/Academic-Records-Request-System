<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="css/bootstrap.min.css"  rel="stylesheet" type="text/css">
        <link href="css/alumni/alumni.css"  rel="stylesheet" type="text/css">
        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/alumni/alumni.js"></script>
        <title>Apply</title>
    </head>
    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="panel panel-default" id="panel1">
                        <div class="panel-heading">
                            <h4>APPLICATION STATUS</h4>
                        </div>
                        <div class="panel-body">
                            <h5 class="text-center"><label>1st time to Apply?</label></h5>
                            <div class="text-center status-div">
                                <span class=''><label><input type="radio" name="status" value="1"/>&nbsp;Yes</label></span>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <span><label><input type="radio" name="status" value="2"/>&nbsp;No</label></span>
                                <p id="invalid-apply"></p>
                                <div class="date-application hide">
                                    <label>Date of Application</label>
                                    <input type="date" class="form-control" name="date-application"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default" id="panel2">
                        <div class="panel-heading"><h4>APPLICATION FOR</h4></div>
                        <div class="panel-body">
                            <div>
                                <a data-toggle="collapse" href="#otr-options">Official Transcript of Records</a>
                                <div id="otr-options" class="panel-collapse collapse">
                                    <div class="row">
                                        <div class="checkbox col-md-6">
                                            <label><input type="checkbox" class="checkbox-click" name="otr-authenticated-copies" id="otr-authenticated-copies"/> Authenticated copies</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control copies" placeholder="Enter no. of copies" name=""/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <a data-toggle="collapse" href="#cert-options">Certificates</a>
                                <div id="cert-options" class="panel-collapse collapse">
                                    <div class="row">
                                        <div class="checkbox col-md-6" id="certificates">
                                            <label><input type="checkbox" class="checkbox-click" name="cert-certificate-of-grad" id="cert-certificate-of-grad"/> Certificate of Graduation</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control copies" placeholder="Enter no. of copies" name=""/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="checkbox col-md-6">
                                             <label><input type="checkbox" class="checkbox-click" name="cert-english-as-a-medium-of-instruction" id="cert-english-as-a-medium-of-instruction"/> English as a medium of instruction</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control copies" placeholder="Enter no. of copies" name=""/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="checkbox col-md-6">
                                            <label><input type="checkbox" class="checkbox-click" name="cert-cav" id="cert-cav"/> CAV (Authentication and Verification)</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control copies" placeholder="Enter no. of copies" name=""/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="checkbox col-md-6">
                                                <label><input type="checkbox" class="checkbox-click" name="cert-course-desc" id="cert-course-desc"/> Course description</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control copies" placeholder="Enter no. of copies" name=""/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="checkbox col-md-6">
                                            <label><input type="checkbox" class="checkbox-click" name="cert-unites-earned" id="cert-unites-earned"/> Units earned</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control copies" placeholder="Enter no. of copies" name=""/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="checkbox col-md-6">
                                                <label><input type="checkbox" class="checkbox-click" name="cert-bonafide-student" id="cert-bonafide-student"/> Bonafide Student</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control copies" placeholder="Enter no. of copies" name=""/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="checkbox col-md-6">
                                            <label><input type="checkbox" class="checkbox-click" name="cert-gwa" id="cert-gwa"/> General Weighted Average</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control copies" placeholder="Enter no. of copies" name=""/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="checkbox col-md-6">
                                            <label><input type="checkbox" class="checkbox-click" name="cert-gpa" id="cert-gpa"/> Grade Point Average</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control copies" placeholder="Enter no. of copies" name=""/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="checkbox col-md-6">
                                            <label><input type="checkbox" class="checkbox-click" name="cert-letter-of-no-objection" id="cert-letter-of-no-objection"/> Letter of No Objection</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control copies" placeholder="Enter no. of copies" name=""/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="checkbox col-md-6">
                                            <label><input type="checkbox" class="checkbox-click" name="cert-hd" id="cert-hd"/> HD (for graduated students only)</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control copies" placeholder="Enter no. of copies" name=""/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <a data-toggle="collapse" href="#others-options">Others</a>
                                <div id="others-options" class="panel-collapse collapse">
                                    <div class="row">
                                        <div class="checkbox col-md-6">
                                            <label><input type="checkbox" class="checkbox-click" name="others-eng-diploma" id="others-eng-diploma"/> English Translation of Diploma</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control copies" placeholder="Enter no. of copies" name=""/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="checkbox col-md-6">
                                            <label><input type="checkbox" class="checkbox-click" name="others-record-verification" id="others-record-verification"/> Record Verification</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control copies" placeholder="Enter no. of copies" name=""/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="checkbox col-md-6">
                                            <label><input type="checkbox" class="checkbox-click" name="others-authentication" id="others-authentication"/> Authentication</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control copies" placeholder="Enter no. of copies" name=""/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default" id="panel3">
                        <div class="panel-heading"><h4>PURPOSE OF APPLICATION</h4></div>
                        <div class="panel-body">
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
                    <div class="clearfix">
                        <div class="pull-right">
                            <button id="back" disabled="" class="btn btn-danger">Back</button>
                            <button id="next" class="btn btn-info">Next</button>
                            <button id="add-request" type="submit" class="btn btn-success">SUBMIT</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
