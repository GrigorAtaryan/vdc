<?php
namespace App\Http\Controllers\Auth;
use App\Products;
use App\SubProducts;

use App\Http\Controllers\Controller;


// Grigor development
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Input;



class ProductsController extends Controller {
	
	
	public function index(){
		$products = new Products();
		$result_category = $products->get_category();
		
		return view('auth/products')->with(array('result_category' => $result_category));
	}
	
	public function add_category(){
		$data_category = Input::all();
		
		$validator_category = Validator::make(
			array(
				'category_name' => $data_category['category_name'],
			
			),
			array(
				'category_name' => 'required|min:3|max:30',	
			)
		);
		
		$message = $validator_category->errors();
		
		if($validator_category->fails()){
			return redirect()->back()->with('errors', $message);
		}
		else{
			$products = new Products();
			$products->insert_category($data_category);
			$result_category = $products->get_category();
			
			return view('auth/products')->with('result_category', $result_category);
		}
	}
	
	public function show_product($id){
		$products = new Products();
		$result_category = $products->get_category_by_id($id);



		$subProducts = new SubProducts();
		$result_sub_category = $subProducts->get_sub_category_by_category_id($id);

		return view('auth/show_products')->with(array('result_category' => $result_category, 'result_sub_category' => $result_sub_category));
	}
	
	
	
	
}