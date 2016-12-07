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
        $transaction = Transaction::find($request->transaction_id);
        $receipt_number = $request->receipt_number;
        $transaction->status = "paid";
        $transaction->receipt_number = $receipt_number;
        $transaction->save();
    }

    public function getRequests(Request $request) {
        
    }


    //
}
