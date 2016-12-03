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
            <form action="" method="get">
                <center>
                    <table style="width: 70%;">
                        <colgroup>
                            <col style="width: 15%"></col>
                            <col style="width: 60%"></col>
                        </colgroup>
                        <tr>
                            <td>
                                <label>&nbsp;<span class="reg-label">First Name:</span></label>
                            </td>
                           <td>
                                <input class="reg-input" type="text" name="firstname"/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>&nbsp;<span class="reg-label">Middle Name: </span></label>
                            </td>
                            <td>
                                <input class="reg-input" type="text" name="middlename"/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>&nbsp;<span class="reg-label">Last Name: </span></label>
                            </td>
                            <td>
                                <input class="reg-input" type="text" name="lastname"/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>&nbsp;<span class="reg-label">Student Number: </span></label>
                            </td>
                            <td>
                                <input class="reg-input" type="text" name="user-id"/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>&nbsp;<span class="reg-label">Password: </span></label>
                            </td>
                            <td>
                                <input class="reg-input" type="password" name="password"/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>&nbsp;<span class="reg-label">Permanent Address: </span></label>
                            </td>
                            <td>
                                <input class="reg-input" type="text" name="paddress"/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>&nbsp;<span class="reg-label">Current Address: </span></label>
                            </td>
                            <td>
                                <input class="reg-input" type="text" name="caddress"/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>&nbsp;<span class="reg-label">Contact Number: </span></label>
                            </td>
                            <td>
                                <input class="reg-input" type="text" name="contactno"/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>&nbsp;<span class="reg-label">Email Address: </span></label>
                            </td>
                            <td>
                                <input class="reg-input" type="text" name="email"/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>&nbsp;<span class="reg-label">Father's Name: </span></label>
                            </td>
                            <td>
                                <input class="reg-input" type="text" name="fathername"/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>&nbsp;<span class="reg-label">Mother's Name: </span></label>
                            </td>
                            <td>
                                <input class="reg-input" type="text" name="mothername"/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>&nbsp;<span class="reg-label">Place of Birth: </span></label>
                            </td>
                            <td>
                                <input class="reg-input" type="text" name="placebirth"/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>&nbsp;<span class="reg-label">Degree Program: </span></label>
                            </td>
                            <td>
                                <input class="reg-input" type="text" name="degree"/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>&nbsp;<span class="reg-label">College: </span></label>
                            </td>
                            <td>
                                <input class="reg-input" type="text" name="college"/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>&nbsp;<span class="reg-label">Year Attended:</span></label>
                            </td>
                            <td>
                                <input class="reg-input" type="text" name="attended"/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>&nbsp;<span class="reg-label">Year Graduated: </span></label>
                            </td>
                            <td>
                                <input class="reg-input" type="text" name="graduated"/>
                            </td>
                        </tr>
                    </table>
                </center>
                <div class="reg-divs">
                    <!-- <button class="btn btn-sbmt" type="submit" name="register" value="REGISTER" data-toggle="modal" data-target="#modalpost">REGISTER</button> -->
                    <input type="submit" class="btn btn-sbmt" name="REGISTER" value="REGISTER" id="register-modal" data-toggle="modal" data-target="#modalpost"/>
                    <br/>
                </div>
                <div style="width: 100%; height: 1px; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px; "></div>
            </form>
    </div>
</div>
<div class="modal fade" id="modalpost" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="vertalign"><img src="icon.png" style="width: 100%; height: 100%" alt="icon"/></div>
            </div>
        </div>
    </div>
</div>

<!-- Script -->
<script type="text/javascript"></script>

@endsection