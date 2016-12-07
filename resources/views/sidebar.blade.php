@if(Auth::user()->type=='alumni' AND $sidebar_active!='none')
<div class="jumbotron col-md-3 sidebar-column" style="margin-left: -15px; height: 633px;">
            <div style="">
                <img class="prof-img" src="../img/UP.png" style="border-radius: 100%;"/>
                <span class="welcome-note-dashboard">Welcome,</span>
                <span class="welcome-name"> [name]</span> 
            </div>

            <div
            @if($sidebar_active == 'dashboard')
                class="active-clicked"
            @endif class="account-sidebar">
                <a href="{{ url('/dashboard') }}">Dashboard</a>
            </div>
            <div 
            @if($sidebar_active == 'editaccount')
                class="active-clicked"
            @endif class="account-sidebar" id="editprofile">
               <a href="{{ url('/editaccount') }}">Edit Profile</a>
            </div>
            <div 
            @if($sidebar_active == 'requestrecord')
                class="active-clicked"
            @endif class="account-sidebar" id="requests">
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
