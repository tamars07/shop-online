<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index(){
    	$new_products = Product::where('new',1)
    	->orderBy('created_at','desc')
    	->get();

        $all_products = Product::all();

    	return view('ban-banh.index',array(
    		'new_products' => $new_products,
            'all_products' => $all_products,
    	));
    }

    public function getProducts(){
    	//get all products from products table
    	$products = Product::all();
    	foreach ($products as $key => $value) {
    		echo $key . ' - ' . $value->name . '<br>';
    	}
    }
}
