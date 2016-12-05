<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()){
            if(Auth::user()->type == 'alumni')
                return view('user.account');
            elseif (Auth::user()->type == 'staff') {
                return view('admin.admin');
            }       
        }else {
            return view('welcome');
        }
    }
}
