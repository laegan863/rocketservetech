<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class redirectionController extends Controller
{
    
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
