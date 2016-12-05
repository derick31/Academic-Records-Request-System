@extends('layout')
@section('title', 'Superadmin Home')
@section('content')

<div class="col-md-12" style="margin-top: -20px;">
  <div class="jumbotron col-md-3 sidebar-column" style="margin-left: -15px; height: 633px;">
    <div>
      <span class="welcome-note-dashboard" style="margin-left: 20%; "><h4 class="heading-label">[Admin's Name]</h4></span> 
    </div>
    <div class="active-clicked" id="admin-dashboard">
      Dashboard
    </div>
    <div class="account-sidebar" id="alumnus-records">
      Alumni
    </div>
    <div class="account-sidebar" id="staff-records">
      Staff
    </div>
    <div class="account-sidebar" id="document-pricing-records">
      Document Pricing
    </div>
    <div class="account-sidebar" id="logout">
      <a href="{!! url('../') !!}">Logout</a>
    </div>
  </div>
  <div id="dashboard-content" class="col-md-9 dashboard-display pull-right admin-db-content">
    <div style="font-size: 30px; font-weight: 900; text-align: center; color: #7B1113;">Welcome Admin!</div>
    <form action="" method="get">
      <div class="col-md-6 col-md-offset-3 input-group">
          <input id="search-term" type="text" class="form-control input-search" placeholder="Search for Alumnus..." />
          <span class="input-group-btn">
            <button class="btn btn-default btn-search-record" type="button">Go!</button>
          </span>
      </div>
    </form>
    <div id="results-obtained" style="text-align: center; margin-top: 12px;">
      <div id="loading-div">
        <h2 style="color: #7B1113;">Loading...</h2><img class="image-loading" src="../img/loading_2.gif"/>
      </div>
    </div>
  </div>
  <div id="alumni-content" class="col-md-9 dashboard-display pull-right admin-db-content">
    Alumnus
    <div class="col-md-12">
      <div class="col-md-7 alumni-records">
        <span>Alumni Records</span>
        <table class="table-alumni-records">
          <th>Student #</th>
          <th>Last</th>
          <th>Middle</th>
          <th>First</th>
          <th colspan="2">Actions</th>

          <tr>
            <td>201371537</td>
            <td>Ian</td>
            <td>Magsayo</td>
            <td>Pinero</td>
            <td><button class="btn btn-action-edit" id="edit">Edit</button></td>
            <td><button class="btn btn-action-remove" id="rem">Remove</button></td>
          </tr>

          <tr>
            <td>201371537</td>
            <td>Ian</td>
            <td>Magsayo</td>
            <td>Pinero</td>
            <td><button class="btn btn-action-edit" id="edit">Edit</button></td>
            <td><button class="btn btn-action-remove" id="rem">Remove</button></td>
          </tr>
          <tr>
            <td>201371537</td>
            <td>Ian</td>
            <td>Magsayo</td>
            <td>Pinero</td>
            <td><button class="btn btn-action-edit" id="edit">Edit</button></td>
            <td><button class="btn btn-action-remove" id="rem">Remove</button></td>
          </tr>
          <tr>
            <td>201371537</td>
            <td>Ian</td>
            <td>Magsayo</td>
            <td>Pinero</td>
            <td><button class="btn btn-action-edit" id="edit">Edit</button></td>
            <td><button class="btn btn-action-remove" id="rem">Remove</button></td>
          </tr>
          <tr>
            <td>201371537</td>
            <td>Ian</td>
            <td>Magsayo</td>
            <td>Pinero</td>
            <td><button class="btn btn-action-edit" id="edit">Edit</button></td>
            <td><button class="btn btn-action-remove" id="rem">Remove</button></td>
          </tr>
          <tr>
            <td>201371537</td>
            <td>Ian</td>
            <td>Magsayo</td>
            <td>Pinero</td>
            <td><button class="btn btn-action-edit" id="edit">Edit</button></td>
            <td><button class="btn btn-action-remove" id="rem">Remove</button></td>
          </tr>
          <tr>
            <td>201371537</td>
            <td>Ian</td>
            <td>Magsayo</td>
            <td>Pinero</td>
            <td><button class="btn btn-action-edit" id="edit">Edit</button></td>
            <td><button class="btn btn-action-remove" id="rem">Remove</button></td>
          </tr>
          <tr>
            <td>201371537</td>
            <td>Ian</td>
            <td>Magsayo</td>
            <td>Pinero</td>
            <td><button class="btn btn-action-edit" id="edit">Edit</button></td>
            <td><button class="btn btn-action-remove" id="rem">Remove</button></td>
          </tr>
          <tr>
            <td>201371537</td>
            <td>Ian</td>
            <td>Magsayo</td>
            <td>Pinero</td>
            <td><button class="btn btn-action-edit" id="edit">Edit</button></td>
            <td><button class="btn btn-action-remove" id="rem">Remove</button></td>
          </tr>
          <tr>
            <td>201371537</td>
            <td>Ian</td>
            <td>Magsayo</td>
            <td>Pinero</td>
            <td><button class="btn btn-action-edit" id="edit">Edit</button></td>
            <td><button class="btn btn-action-remove" id="rem">Remove</button></td>
          </tr>
          <tr>
            <td>201371537</td>
            <td>Ian</td>
            <td>Magsayo</td>
            <td>Pinero</td>
            <td><button class="btn btn-action-edit" id="edit">Edit</button></td>
            <td><button class="btn btn-action-remove" id="rem">Remove</button></td>
          </tr>
          <tr>
            <td>201371537</td>
            <td>Ian</td>
            <td>Magsayo</td>
            <td>Pinero</td>
            <td><button class="btn btn-action-edit" id="edit">Edit</button></td>
            <td><button class="btn btn-action-remove" id="rem">Remove</button></td>
          </tr>
          <tr>
            <td>201371537</td>
            <td>Ian</td>
            <td>Magsayo</td>
            <td>Pinero</td>
            <td><button class="btn btn-action-edit" id="edit">Edit</button></td>
            <td><button class="btn btn-action-remove" id="rem">Remove</button></td>
          </tr>
          <tr>
            <td>201371537</td>
            <td>Ian</td>
            <td>Magsayo</td>
            <td>Pinero</td>
            <td><button class="btn btn-action-edit" id="edit">Edit</button></td>
            <td><button class="btn btn-action-remove" id="rem">Remove</button></td>
          </tr>
          <tr>
            <td>201371537</td>
            <td>Ian</td>
            <td>Magsayo</td>
            <td>Pinero</td>
            <td><button class="btn btn-action-edit" id="edit">Edit</button></td>
            <td><button class="btn btn-action-remove" id="rem">Remove</button></td>
          </tr>
          <tr>
            <td>201371537</td>
            <td>Ian</td>
            <td>Magsayo</td>
            <td>Pinero</td>
            <td><button class="btn btn-action-edit" id="edit">Edit</button></td>
            <td><button class="btn btn-action-remove" id="rem">Remove</button></td>
          </tr>
        </table>
      </div>
      <div class="col-md-5 add-record-column">
        <h3 style="font-weight: 900; color: #014421;">Add Alumnus Account</h3>
        <form action="#" method="get">
          <div class="input-divs">
              <label class="input-labels pull-left" style="margin-top: 13px;">First Name:</label>
              <input id="add-first-name" class="inputs-rows-add-rec pull-right" type="text" placeholder="e.g. Juan" value="" name="add-fname" required/>
          </div>
          <div class="input-divs">
              <label class="input-labels pull-left" style="margin-top: 13px;">Middle Name:</label>
              <input id="add-middle-name" class="inputs-rows-add-rec pull-right" type="text" placeholder="e.g. Geronimo" value="" name="add-mname" required/>
          </div>
          <div class="input-divs">
              <label class="input-labels pull-left" style="margin-top: 13px;">Last Name:</label>
              <input id="add-last-name" class="inputs-rows-add-rec pull-right" type="text" placeholder="e.g. Dela Cruz" value="" name="add-lname" required/>
          </div>
          <div class="input-divs">
              <label class="input-labels pull-left" style="margin-top: 13px;">Student Number:</label>
              <input id="add-student-number" class="inputs-rows-add-rec pull-right" type="text" placeholder="e.g. 201300000" value="" name="add-student-number" required/>
          </div>
          <div class="input-divs">
            <button class="btn btn-add glyphicon-plus" type="submit">&nbsp; Add Record</button>
          </div>
        </form>
      </div>
    </div> 
  </div>
  <div id="staff-content" class="col-md-9 dashboard-display pull-right admin-db-content">
    Staff
    <div class="col-md-12">
      <div class="col-md-7 staff-records">
        <span>Staff Records</span>
        <table class="table-staff-records">
          <th rowspan="2">Employee #</th>
          <th rowspan="1" colspan="3">NAME</th>
          <th rowspan="2" colspan="2">Actions</th>
          <tr>
            <td class="label-names">First</td>
            <td class="label-names">Middle</td>
            <td class="label-names">Last</td>
            <td colspan="2"></td>
          </tr>
          <tr>
            <td>201371537</td>
            <td>Ian</td>
            <td>Magsayo</td>
            <td>Pinero</td>
            <td><button class="btn btn-action-edit" id="edit">Edit</button></td>
            <td><button class="btn btn-action-remove" id="rem">Remove</button></td>
          </tr>

          <tr>
            <td>201371537</td>
            <td>Ian</td>
            <td>Magsayo</td>
            <td>Pinero</td>
            <td><button class="btn btn-action-edit" id="edit">Edit</button></td>
            <td><button class="btn btn-action-remove" id="rem">Remove</button></td>
          </tr>
          <tr>
            <td>201371537</td>
            <td>Ian</td>
            <td>Magsayo</td>
            <td>Pinero</td>
            <td><button class="btn btn-action-edit" id="edit">Edit</button></td>
            <td><button class="btn btn-action-remove" id="rem">Remove</button></td>
          </tr>
          <tr>
            <td>201371537</td>
            <td>Ian</td>
            <td>Magsayo</td>
            <td>Pinero</td>
            <td><button class="btn btn-action-edit" id="edit">Edit</button></td>
            <td><button class="btn btn-action-remove" id="rem">Remove</button></td>
          </tr>
          <tr>
            <td>201371537</td>
            <td>Ian</td>
            <td>Magsayo</td>
            <td>Pinero</td>
            <td><button class="btn btn-action-edit" id="edit">Edit</button></td>
            <td><button class="btn btn-action-remove" id="rem">Remove</button></td>
          </tr>
          <tr>
            <td>201371537</td>
            <td>Ian</td>
            <td>Magsayo</td>
            <td>Pinero</td>
            <td><button class="btn btn-action-edit" id="edit">Edit</button></td>
            <td><button class="btn btn-action-remove" id="rem">Remove</button></td>
          </tr>
          <tr>
            <td>201371537</td>
            <td>Ian</td>
            <td>Magsayo</td>
            <td>Pinero</td>
            <td><button class="btn btn-action-edit" id="edit">Edit</button></td>
            <td><button class="btn btn-action-remove" id="rem">Remove</button></td>
          </tr>
          <tr>
            <td>201371537</td>
            <td>Ian</td>
            <td>Magsayo</td>
            <td>Pinero</td>
            <td><button class="btn btn-action-edit" id="edit">Edit</button></td>
            <td><button class="btn btn-action-remove" id="rem">Remove</button></td>
          </tr>
          <tr>
            <td>201371537</td>
            <td>Ian</td>
            <td>Magsayo</td>
            <td>Pinero</td>
            <td><button class="btn btn-action-edit" id="edit">Edit</button></td>
            <td><button class="btn btn-action-remove" id="rem">Remove</button></td>
          </tr>
          <tr>
            <td>201371537</td>
            <td>Ian</td>
            <td>Magsayo</td>
            <td>Pinero</td>
            <td><button class="btn btn-action-edit" id="edit">Edit</button></td>
            <td><button class="btn btn-action-remove" id="rem">Remove</button></td>
          </tr>
          <tr>
            <td>201371537</td>
            <td>Ian</td>
            <td>Magsayo</td>
            <td>Pinero</td>
            <td><button class="btn btn-action-edit" id="edit">Edit</button></td>
            <td><button class="btn btn-action-remove" id="rem">Remove</button></td>
          </tr>
          <tr>
            <td>201371537</td>
            <td>Ian</td>
            <td>Magsayo</td>
            <td>Pinero</td>
            <td><button class="btn btn-action-edit" id="edit">Edit</button></td>
            <td><button class="btn btn-action-remove" id="rem">Remove</button></td>
          </tr>
          <tr>
            <td>201371537</td>
            <td>Ian</td>
            <td>Magsayo</td>
            <td>Pinero</td>
            <td><button class="btn btn-action-edit" id="edit">Edit</button></td>
            <td><button class="btn btn-action-remove" id="rem">Remove</button></td>
          </tr>
          <tr>
            <td>201371537</td>
            <td>Ian</td>
            <td>Magsayo</td>
            <td>Pinero</td>
            <td><button class="btn btn-action-edit" id="edit">Edit</button></td>
            <td><button class="btn btn-action-remove" id="rem">Remove</button></td>
          </tr>
          <tr>
            <td>201371537</td>
            <td>Ian</td>
            <td>Magsayo</td>
            <td>Pinero</td>
            <td><button class="btn btn-action-edit" id="edit">Edit</button></td>
            <td><button class="btn btn-action-remove" id="rem">Remove</button></td>
          </tr>
          <tr>
            <td>201371537</td>
            <td>Ian</td>
            <td>Magsayo</td>
            <td>Pinero</td>
            <td><button class="btn btn-action-edit" id="edit">Edit</button></td>
            <td><button class="btn btn-action-remove" id="rem">Remove</button></td>
          </tr>
        </table>
      </div>
      <div class="col-md-5 add-record-column add-staff-column">
        <h3 class="heading-label-add-staff">Add Staff Account</h3>
        <form action="#" method="get">
          <div class="input-divs">
              <label class="input-labels pull-left add-staff-account-labels">First Name:</label>
              <input id="add-first-name-staff" class="inputs-rows-add-rec pull-right" type="text" placeholder="e.g. Juan" value="" name="add-fname-staff" required/>
          </div>
          <div class="input-divs">
              <label class="input-labels pull-left add-staff-account-labels">Middle Name:</label>
              <input id="add-middle-name-staff" class="inputs-rows-add-rec pull-right" type="text" placeholder="e.g. Geronimo" value="" name="add-mname-staff" required/>
          </div>
          <div class="input-divs">
              <label class="input-labels pull-left add-staff-account-labels">Last Name:</label>
              <input id="add-last-name-staff" class="inputs-rows-add-rec pull-right" type="text" placeholder="e.g. Dela Cruz" value="" name="add-lname-staff" required/>
          </div>
          <div class="input-divs">
              <label class="input-labels pull-left add-staff-account-labels">Employee Number:</label>
              <input id="add-employee-number" class="inputs-rows-add-rec pull-right" type="text" placeholder="e.g. 201300000" value="" name="add-employee-number" required/>
          </div>
          <div class="input-divs">
            <button class="btn btn-add glyphicon-plus btn-add-emp" type="submit">&nbsp; Add Employee</button>
          </div>
        </form>
      </div>
    </div> 
  </div>
  <div id="document-content" class="col-md-9 dashboard-display pull-right" style="border-left: 4px solid #7B1113; min-height: 633px; margin-right: -12px;">
      <div class="col-md-7 alumni-records">
        <span>Document Pricing</span>
        <table class="table-alumni-records">
          <th>Document</th>
          <th>Price</th>
          <th colspan="2">Actions</th>

          <tr class="doc-pricing">
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr class="doc-pricing">
            <td>Official Transcript of Record</td>
            <td>Php 50.00</td>
            <td><button class="btn btn-action-edit" id="edit">Edit</button></td>
            <td><button class="btn btn-action-remove" id="rem">Remove</button></td>
          </tr>
          <tr class="doc-pricing">
            <td>Official Transcript of Record (Abroad - via registered mail)</td>
            <td>US $ 30.00</td>
            <td><button class="btn btn-action-edit" id="edit">Edit</button></td>
            <td><button class="btn btn-action-remove" id="rem">Remove</button></td>
          </tr>
          <tr class="doc-pricing">
            <td>Official Transcript of Record (Abroad - Asia &amp; US via courier)</td>
            <td>US $ 50.00</td>
            <td><button class="btn btn-action-edit" id="edit">Edit</button></td>
            <td><button class="btn btn-action-remove" id="rem">Remove</button></td>
          </tr>
          <tr class="doc-pricing">
            <td>Official Transcript of Record (Abroad - Europe &amp; Africa via courier)</td>
            <td>US $ 60.00</td>
            <td><button class="btn btn-action-edit" id="edit">Edit</button></td>
            <td><button class="btn btn-action-remove" id="rem">Remove</button></td>
          </tr>
        </table>
      </div>
  </div>
</div>
@endsection
