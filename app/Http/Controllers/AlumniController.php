<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AlumniController extends Controller
{
	public function __construct()
    {
    	$this->middleware(function ($request, $next) {
			if(Auth::user()->type != 'alumni'){
				return redirect('home');
			}
	    	return $next($request);
		});
    }

	public function dashboard()
	{
		return Auth::user();
		$this->params['sidebar_active'] = 'dashboard';
		return view('alumni.dashboard', $this->params);
	}

	public function editaccount()
	{
		$this->params['sidebar_active'] = 'editaccount';
		return view('alumni.editaccount', $this->params);
	}

	public function requestrecord()
	{
		$this->params['sidebar_active'] = 'requestrecord';
		return view('alumni.requestrecord', $this->params);
	}
}
