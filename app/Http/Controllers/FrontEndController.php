<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index()
    {
    	return view('frontend.home');
    }
    public function products()
    {
    	return view('frontend.products');
    }
    public function product()
    {
    	return view('frontend.product');
    }



}	
