<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	public function index()
	{
		$this->params['sidebar_active'] = "none";
		return view('pages.index', $this->params);
	}
}
