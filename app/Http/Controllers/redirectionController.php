<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class redirectionController extends Controller
{
    public function about(){

    	return view('about-us');

    }
    public function contact(){

    	return view('contact-us');

    }
    public function terms(){

    	return view('terms');

    }
    public function privacy(){

    	return view('privacy');

    }
    public function index(){

    	return view('index');

    }
    public function web_development(){

    	return view('web-development');

    }

    public function digital_marketing(){
    	return view('digital-marketing');
    }

}
