<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlumniController extends Controller
{
	public function dashboard()
	{
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
