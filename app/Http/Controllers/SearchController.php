<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Alumnus;
use App\Transaction;

class SearchController extends Controller
{
    public function search(Request $request)
    {
    	if($request->ajax())
    	{
            if($request->search == '') {
                $transactions = Transaction::where('status','!=','received')->orderBy('created_at', 'desc')->get();
                $data = array(
                    'transactions' => $transactions
                    );
                return view('admin.search',$data);

            } else {
        		$result = '';
                $alumni = Alumnus::where('first_name', 'LIKE', '%'.$request->search.'%')
                            ->orWhere('last_name', 'LIKE', '%'.$request->search.'%')
                            ->get();
        		if($alumni)
        		{
                     foreach($alumni as $alumnus){
                        $transactions = $alumnus->transactions;
                        $data = array(
                        'transactions' => $transactions
                        );
                        $result .= view('admin.search',$data);
                     }
                     return $result;
        		}
            }
    	}
    }
}
