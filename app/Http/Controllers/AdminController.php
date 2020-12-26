<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class AdminController extends Controller
{
    //
    public function index(){
    	return view('admin.index');
    	//return view('layouts.admin.master');
    }

    public function getProducts(){
    	$products = Product::all();    
    	return view('admin.products',array(
    		'products' => $products
    	));
    }
}
