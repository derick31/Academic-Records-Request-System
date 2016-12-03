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

    function home(){
        return view('welcome');
    }

    function acct_user (){
        return view('user.account');
    }
    function register(){
        return view('register');
    }
    function acct_admin(){
        return view('admin.account');
    }
}
