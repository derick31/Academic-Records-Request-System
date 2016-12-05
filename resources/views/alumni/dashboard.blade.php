@extends('layout')
@section('title', 'Academic Records Request System - Dashboard')
@section('content')
<div class="col-md-12" style="margin-top: -20px;">
    <div class="jumbotron col-md-3 sidebar-column" style="margin-left: -15px; height: 633px;">
            <div style="">
                <img class="prof-img" src="../img/UP.png" style="border-radius: 100%;"/>
                <span class="welcome-note-dashboard">Welcome,</span>
                <span class="welcome-name"> [name]</span> 
            </div>
            <div class="active-clicked" id="dashboard">
                Dashboard
            </div>
            <div class="account-sidebar" id="requests">
                View Requests
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
    <div class="container">
    </div>
    {{-- CHARLES PLS EDIT --}}
</div>
@endsection
