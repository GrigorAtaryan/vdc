<?php
namespace App\Http\Controllers;


use App\Http\Controllers\Controller;


// Grigor development
use Input;
use App\About;
use App\Products;
use App\SubProducts;



class AboutController extends Controller {
	
	
	public function get(){
		$about = new About();
		$data_about = $about->get_about();
		
		$products = new Products(); 
		$sub_products = new SubProducts();		
		$result_category = $products->get_category();	
		foreach($result_category as $results_category){
			$menu_result[$results_category->category_name] = $sub_products->get_sub_category_by_category_id($results_category->id);	
		}
		
		return view ('about', compact('result_category', 'menu_result', 'data_about'));
	}
	
	
}