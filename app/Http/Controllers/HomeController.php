<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Transaction;

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
                return redirect('dashboard');
            elseif (Auth::user()->type == 'staff') {
                $transactions = Transaction::where('status','!=','received')->orderBy('created_at', 'desc')->get();
                $data = array(
                    'transactions' => $transactions
                    );
                // return $transactions;
                return view('admin.admin',$data);
            }       
        }else {
            return view('welcome');
        }
    }
}
