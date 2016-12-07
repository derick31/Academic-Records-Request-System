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
            if(Auth::user()->type == 'alumni'){
                $alumni = count(Alumnus::where('alumnus_id', Auth::user()->user_id)->first());
                if($alumni == 1){
                    return redirect('dashboard');
                }
                else{
                    return redirect('alumniregister');
                }
            }
            elseif (Auth::user()->type == 'staff') {
                return view('admin.admin');
            }       
        }else {
            return view('welcome');
        }
    }
}
