<?php namespace App\Http\Controllers;
use App\Products;
use App\SubProducts;


class WelcomeController extends Controller {
	

	public function index()
	{
	
		$products = new Products(); 
		$sub_products = new SubProducts();
		
		$result_category = $products->get_category();
	
		
		
		foreach($result_category as $results_category){
		
			$menu_result[$results_category->category_name] = $sub_products->get_sub_category_by_category_id($results_category->id);
	
		}

		return view('index', compact('result_category', 'menu_result'));
	}

}
