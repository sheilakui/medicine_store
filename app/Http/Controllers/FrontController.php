<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class FrontController extends Controller
{
    //
    public function index()
    {
        $medicines= Product::all();
    	return view('front.home', compact('medicines'));
    }

    public function medicines()
    {
        $medicines= Product::all();
    	return view('front.medicines', compact('medicines'));
    }

    public function medicine()
    {
    	return view('front.medicine');
    }
}