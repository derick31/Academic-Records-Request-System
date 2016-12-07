<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class SearchController extends Controller
{
    public function search(Request $request)
    {
    	if($request->ajax())
    	{
    		$result = '';
    		$alumni = DB::table('alumni')
    					->join('transactions', 'alumni.alumnus_id', '=', 'transactions.alummnus_id')
    					->where('first_name', 'LIKE', '%'.$request->search.'%')
    					->orWhere('last_name', 'LIKE', '%'.$request->search.'%')
    					->get();
    		if($alumni)
    		{
    			foreach($alumni as $key => $alumnus){
						$result.='<tr>'.
    					'<td>'.$alumnus->first_name.'</td>'.
    					'<td>'.$alumnus->last_name.'</td>'.
    					'<td>'.$alumnus->status.'</td>'.
    					'</tr>';    			
    			}

    			return Response($result);
    			
    		}
    	}
    }
}
