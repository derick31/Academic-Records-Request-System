<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;
use Auth;


class StaffController extends Controller
{
    public function __construct()
    {
       
    }

    public function updatePayment(Request $request) {
        // return $request->transaction_id;
        return "test";
    }


    //
}
