@if(Auth::user()->type=='alumni')
<div class="jumbotron col-md-3 sidebar-column" style="margin-left: -15px; height: 633px;">
            <div style="">
                <img class="prof-img" src="../img/UP.png" style="border-radius: 100%;"/>
                <span class="welcome-note-dashboard">Welcome,</span>
                <span class="welcome-name"> [name]</span> 
            </div>
            <div class="active-clicked" id="dashboard">
                <a href="{{ url('/dashboard') }}">Dashboard</a>
            </div>
            <div class="account-sidebar" id="editprofile">
               <a href="{{ url('/editprofile') }}">Edit Profile</a>
            </div>
            <div class="account-sidebar" id="requests">
               <a href="{{ url('/requestrecord') }}">Request Records</a>
            </div>
            <div class="account-sidebar" id="logout">
                {{-- <a href="{!! url('../') !!}">Logout</a> --}}
                <a href="{{ url('/logout') }}"
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                    Logout
                </a>
                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
@endif
