<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\order;

use Carbon\Carbon;

class adminController extends Controller
{
    public function dashboard(){

    	try {
    		$date = Carbon::now('America/New_York')->format('Y-m-d');
    		$successful = order::where('date_applied',$date)->where('status','successful')->count();
    		$completed = order::where('date_applied',$date)->where('status','completed')->count();
    		$pending = order::where('date_applied',$date)->where('status','pending')->count();
    		return view('admin.index',[
    			'successful' => $successful,
    			'pending' => $pending,
    			'completed' => $completed
	    	]);
    		
    	} catch (Exception $e) {
    		return response()->json(['message' => $e->getMessage()]);
    	}
    	
    }

    public function pending(){
    	try {
    		$date = Carbon::now('America/New_York')->format('Y-m-d');
    		$pending = order::where('date_applied',$date)->where('status','pending')->get();
    		return view('admin.pending',[
    			'data' => $pending
    		]);

    	} catch (Exception $e) {
    		return response()->json(['message' => $e->getMessage()]);
    	}
    	
    }
    public function successful(){
    	try {
    		$date = Carbon::now('America/New_York')->format('Y-m-d');
    		$successful = order::where('date_applied',$date)->where('status','successful')->get();
    		return view('admin.successful',[
    			'data' => $successful
    		]);

    	} catch (Exception $e) {
    		return response()->json(['message' => $e->getMessage()]);
    	}
    }
    public function completed(){
    	try {
    		$date = Carbon::now('America/New_York')->format('Y-m-d');
    		$completed = order::where('date_applied',$date)->where('status','completed')->get();
    		return view('admin.completed',[
    			'data' => $completed
    		]);

    	} catch (Exception $e) {
    		return response()->json(['message' => $e->getMessage()]);
    	}
    }

    public function info($transaction_id){

    	try {

    		$data = order::where('transaction_id',$transaction_id)->first();
    		return view('admin.info', [
    			'key' => $data 
    		]);
    		
    	} catch (Exception $e) {
    		return response()->json(['message' => $e->getMessage()]);
    	}

    }

    public function update(Request $req,$transaction_id){

    	
    	try {
    		order::where('transaction_id',$transaction_id)->update(['status' => $req->input('status')]);
    		return redirect()->route('admin.successful');	
    	} catch (Exception $e) {
    		return response()->json(['message' => $e->getMessage()]);
    	}

    }
}
