<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">UPV OUR Academic Records Request</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Account</a></li>
                <li><a href="#">Help</a></li>
                <li><a href="#">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>

{{-- DISPLAY ONLY IF ACCOUNT IS LOGGED IN (PUT Auth CONDITIONS) --}}
@if($sidebar_active!='none')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
                <li @if($sidebar_active == 'dashboard') class="active" @endif><a href="dashboard">Dashboard <span class="sr-only">(current)</span></a></li>
                <li @if($sidebar_active == 'editaccount') class="active" @endif><a href="editaccount">Edit Account Info</a></li>
                <li @if($sidebar_active == 'requestrecord') class="active" @endif><a href="requestrecord">Request Academic Records</a></li>
            </ul>
        </div>
    </div>
</div>
@endif