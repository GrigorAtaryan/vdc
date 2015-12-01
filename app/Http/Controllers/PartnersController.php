<?php
namespace App\Http\Controllers;


use App\Http\Controllers\Controller;


// Grigor development
use Input;
use App\Partners;
use App\Products;
use App\SubProducts;


class PartnersController extends Controller {
	
	
	public function get(){
		$partners = new Partners();
		$data_partners = $partners->get_partners();
		
		$products = new Products(); 
		$sub_products = new SubProducts();		
		$result_category = $products->get_category();	
		foreach($result_category as $results_category){
			$menu_result[$results_category->category_name] = $sub_products->get_sub_category_by_category_id($results_category->id);	
		}
		
		return view ('partners', compact('result_category', 'menu_result', 'data_partners'));
	}
	
	
}