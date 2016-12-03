<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;
use App\TransactionRequests;
class AlumniController extends Controller
{

	public function __construct()
	{
		$this->middleware('alumnilogin');
	}
	
	public function dashboard(Request $request)
	{
		$transaction  = new Transaction();
		$transaction->alumnus_id = 1;
		$transaction->staff_id = 1;
		$transaction->mailing_adress = 'Miagao, Iloilo';
		$transaction->retrieval_type = '1';
		$transaction->claim_code = 1;
		$transaction->receipt_number = 1;
		$transaction->purpose_id = 1;
		$transaction->save();
		$transaction_id= $transaction->id;
		if($request->has('authenticated-copies')){
			$num_of_copies = $request->input('authenticated-copies');
			$transaction_requests = new TransactionRequests();
			$transaction_requests->request_id = 1;
			$transaction_requests->transaction_id = $transaction_id;
			$transaction_requests->copies = $num_of_copies;
			$transaction_requests->save();
		}
		if($request->has('cert-grad')){
			$num_of_copies = $request->input('authenticated-copies');
			$transaction_requests = new TransactionRequests();
			$transaction_requests->request_id = 2;
			$transaction_requests->transaction_id = $transaction_id;
			$transaction_requests->copies = $num_of_copies;
			$transaction_requests->save();

		}
		if($request->has('eng-med-instr')){
			$num_of_copies = $request->input('eng-med-instr');
			$transaction_requests = new TransactionRequests();
			$transaction_requests->request_id = 3;
			$transaction_requests->transaction_id = $transaction_id;
			$transaction_requests->copies = $num_of_copies;
			$transaction_requests->save();
		}
		if($request->has('cav')){
			$num_of_copies = $request->input('cav');
			$transaction_requests = new TransactionRequests();
			$transaction_requests->request_id = 4;
			$transaction_requests->transaction_id = $transaction_id;
			$transaction_requests->copies = $num_of_copies;
			$transaction_requests->save();
		}
		if($request->has('course-desc')){
			$num_of_copies = $request->input('course-desc');
			$transaction_requests = new TransactionRequests();
			$transaction_requests->request_id = 5;
			$transaction_requests->transaction_id = $transaction_id;
			$transaction_requests->copies = $num_of_copies;
			$transaction_requests->save();
		}
		if($request->has('units-earned')){
			$num_of_copies = $request->input('units-earned');
			$transaction_requests = new TransactionRequests();
			$transaction_requests->request_id = 6;
			$transaction_requests->transaction_id = $transaction_id;
			$transaction_requests->copies = $num_of_copies;
			$transaction_requests->save();
		}
		if($request->has('bon-stud')){
			$num_of_copies = $request->input('bon-stud');
			$transaction_requests = new TransactionRequests();
			$transaction_requests->request_id = 7;
			$transaction_requests->transaction_id = $transaction_id;
			$transaction_requests->copies = $num_of_copies;
			$transaction_requests->save();
		}
		if($request->has('gwa')){
			$num_of_copies = $request->input('gwa');
			$transaction_requests = new TransactionRequests();
			$transaction_requests->request_id = 8;
			$transaction_requests->transaction_id = $transaction_id;
			$transaction_requests->copies = $num_of_copies;
			$transaction_requests->save();
		}
		if($request->has('gpa')){
			$num_of_copies = $request->input('gpa');
			$transaction_requests = new TransactionRequests();
			$transaction_requests->request_id = 9;
			$transaction_requests->transaction_id = $transaction_id;
			$transaction_requests->copies = $num_of_copies;
			$transaction_requests->save();
		}
		if($request->has('letter-no-obj')){
			$num_of_copies = $request->input('letter-no-obj');
			$transaction_requests = new TransactionRequests();
			$transaction_requests->request_id = 10;
			$transaction_requests->transaction_id = $transaction_id;
			$transaction_requests->copies = $num_of_copies;
			$transaction_requests->save();
		}
		if($request->has('hd-for-grad')){
			$num_of_copies = $request->input('hd-for-grad');
			$transaction_requests = new TransactionRequests();
			$transaction_requests->request_id = 11;
			$transaction_requests->transaction_id = $transaction_id;
			$transaction_requests->copies = $num_of_copies;
			$transaction_requests->save();
		}
		if($request->has('eng-diploma')){
			$num_of_copies = $request->input('eng-diploma');
			$transaction_requests = new TransactionRequests();
			$transaction_requests->request_id = 12;
			$transaction_requests->transaction_id = $transaction_id;
			$transaction_requests->copies = $num_of_copies;
			$transaction_requests->save();
		}
		if($request->has('record-verification')){
			$num_of_copies = $request->input('record-verification');
			$transaction_requests = new TransactionRequests();
			$transaction_requests->request_id = 13;
			$transaction_requests->transaction_id = $transaction_id;
			$transaction_requests->copies = $num_of_copies;
			$transaction_requests->save();
		}
		if($request->has('authent')){
			$num_of_copies = $request->input('authent');
			$transaction_requests = new TransactionRequests();
			$transaction_requests->request_id = 14;
			$transaction_requests->transaction_id = $transaction_id;
			$transaction_requests->copies = $num_of_copies;
			$transaction_requests->save();
		}

		$this->params['sidebar_active'] = 'dashboard';
		return view('alumni.dashboard', $this->params);
	}

	public function editaccount()
	{
		$alumnus = Alumnus::find( 1 );
		$this->params['sidebar_active'] = 'editaccount';
		$this->params['address'] = $alumnus->address;
		$this->params['contact_number'] = $alumnus->contact_number;
		$this->params['email'] = $alumnus->email;
		$this->params['birthplace'] = $alumnus->birthplace;
		$this->params['father_name'] = $alumnus->father_name;
		$this->params['mother_name'] = $alumnus->mother_name;
		return view('alumni.editaccount', $this->params);
	}

	public function updateaccount(Request $request)
	{
		$alumnus = Alumnus::find( 1 );
		$alumnus->address = $request->input('address');
		$alumnus->contact_number = $request->input('contact');
		$alumnus->email = $request->input('email');
		$alumnus->birthplace = $request->input('birth');
		$alumnus->father_name =$request->input('father');
		$alumnus->mother_name = $request->input('mother');
		$alumnus->update();
		$request->session()->flash('alert-success', 'Update Success!');		
		return redirect('editaccount');
	}

	public function requestrecord()
	{
		$this->params['sidebar_active'] = 'requestrecord';
		return view('alumni.requestrecord', $this->params);
	}

	
}
