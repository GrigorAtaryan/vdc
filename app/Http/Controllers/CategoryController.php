<?php
namespace App\Http\Controllers;
use App\Products;

use App\Http\Controllers\Controller;


// Grigor development
use Input;



class CategoryController extends Controller {
	
	
	public function get_category(){
		$products = new Products(); 
		$result = $products->get_category();
		return view ('partners')->with('data_partners', $result);
	}
	
	
}