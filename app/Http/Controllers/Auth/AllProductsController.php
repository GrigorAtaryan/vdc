<?php
namespace App\Http\Controllers\Auth;
use App\Products;
use App\SubProducts;
use App\AllProducts;

use App\Http\Controllers\Controller;


// Grigor development
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Input;
use Image;
use Request;



class AllProductsController extends Controller {
	
	public function index($id){
		
		$all_products  = new AllProducts();
		$products = $all_products->get_products($id);
		
		return view('auth/all_products', compact('products', 'id'));
	}


	
	public function add_new_product($id, Request $request){
		$data_product = Input::all();
       //    dd($data_product);
			$validator_product = Validator::make(
				array(
					'name_product' => $data_product['name_product'],
					'description_product' => $data_product['description_product'],
					'price_product' => $data_product['price_product']

				),
				array(
					'name_product' => 'Required|Min:3|Max:50',
					'description_product' => 'Required|Min:3|Max:100',
					'price_product' => 'Required'

				)

			);



		$errors = $validator_product->messages();

		if($validator_product->fails()){
			return redirect()->back()->with('errors', $errors);
		}else{
            $path = '../public/images/products_images';
            foreach(Input::file('file_product') as $file => $value) {
                $filename = str_random(12) . '.' . $value->getClientOriginalExtension();
                $value->move($path, $filename);
            }

            unset($data_product['file_product']);
            $data_product['sub_category_id'] = $id;
            $product = new AllProducts();
            $product->create($data_product);

            $all_product = new AllProducts();
            $products = $all_product->get_products($id);
            return view('auth/all_products', compact('products', 'id'));

        }


		}
		
	

	
	
}