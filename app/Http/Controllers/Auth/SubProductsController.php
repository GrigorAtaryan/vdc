<?php
namespace App\Http\Controllers\Auth;
use App\SubProducts;
use App\Products;

use App\Http\Controllers\Controller;


// Grigor development
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Input;
use Request;


class SubProductsController extends Controller {
	
	public function index(){
		
		$subProducts = new SubProducts();
		$result_sub_category = $subProducts->get_sub_category();
		
		return view('auth/show_subproducts')->with(array('result_category' => $result_category));
	}

	
	public function add_sub_category($id){
	
		$data_sub_category = Input::all();
	
		$validator_sub_category = Validator::make(
			array(
				'sub_category_name' => $data_sub_category['sub_category_name'],
			
			),
			array(
				'sub_category_name' => 'required|min:2|max:25',	
			)
		);
		
		$message = $validator_sub_category->errors();
		
		if($validator_sub_category->fails()){
			return redirect()->back()->with('errors', $message);
		}
		else{

			$Products = new Products();
			$result_category = $Products->get_category_by_id($id);

			$subProducts = new SubProducts();
			$subProducts->insert_sub_category($id, $data_sub_category);
			$result_sub_category = $subProducts->get_sub_category_by_category_id($id);
			
			return view('auth/show_products')->with(array('result_category' => $result_category, 'result_sub_category' => $result_sub_category));
		}
	}

	
	
	
}