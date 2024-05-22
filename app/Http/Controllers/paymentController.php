<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Stripe\StripeClient;

use App\Models\order;

use Carbon\Carbon;

class paymentController extends Controller
{

	public function info_store(Request $request){
		try {

			$model = new order;
			$data = $request->all();
			$data["date_applied"] = Carbon::now('America/New_York')->format('Y-m-d');
			$data["status"] = "pending";
			$data["transaction_id"] = uniqid();
			unset($data["_token"]);
			$model->fill($data);
			$model->save();

			return redirect()->route('payment.checkout', ['amount' => $data["amount"], 'description' => $data["description"], 'transaction_id' => $data["transaction_id"] ]);
			
		} catch (Exception $e) {

			return response()->json(['message'=>$e->getMessage()]);
			
		}
		

	}

	public function payment_info(Request $request){

		return view('payment-info');
	}

    public function payment(Request $request,$amount,$description,$transaction_id){

    	try {

    		$stripe = new StripeClient(env('STRIPE_KEY'));

    		$location = 'http://127.0.0.1:8000/response?transaction_id='.$transaction_id;

	        $checkoutSession = $stripe->checkout->sessions->create([
	            'payment_method_types' => ['card'],
	            'line_items' => [[
	                'price_data' => [
	                    'currency' => 'usd',
	                    'product_data' => [
	                        'name' => $description,
	                    ],
	                    'unit_amount' => $amount,
	                ],
	                'quantity' => 1,
	            ]],
	            'mode' => 'payment',
	            'success_url' => $location,
	            'cancel_url' => 'http://127.0.0.1:8000/digital-marketing-services',
	        ]);

	        return redirect($checkoutSession->url);
    		
    	} catch (Exception $e) {

    		return response()->json(['message' => $e->getMessage()]);
    		
    	}
    	
    }

    public function validation(Request $request)
    {
    	try {

    		$transaction_id = $request->query('transaction_id');
    		order::where('transaction_id',$transaction_id)->update(['status' => 'successful']);
    		session()->flash('transaction_id',$transaction_id);
    		return redirect()->route('page.successful');
    		
    	} catch (Exception $e) {
    		
    		return response()->json(['message' => $e->getMessage()]);

    	}

    }

    public function successful(){

    	return view('success');

    }
}
