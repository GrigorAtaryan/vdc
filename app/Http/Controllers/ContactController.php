<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


// Grigor development
use Input;
use Validator;
use Mail;
use App\Contact;
use App\Products;
use App\SubProducts;


class ContactController extends Controller {
	
	
	public function index(){
		$products = new Products(); 
		$sub_products = new SubProducts();		
		$result_category = $products->get_category();	
		foreach($result_category as $results_category){
			$menu_result[$results_category->category_name] = $sub_products->get_sub_category_by_category_id($results_category->id);	
		}
		
		return view ('contact', compact('result_category', 'menu_result', 'data_partners'));
	}
	
	public function send_mail(){
		$data_email = Input::all();
		
		$validator_email = Validator::make(
			array(
				'name' => $data_email['name'],
				'email' => $data_email['email'],
				'message' => $data_email['message']
			),
			array(
				'name' => 'required|min:3|alpha_num',
				'email' => 'required|email',
				'message' => 'required|min:5|max:100'
			)
		
		);
		
		$messages = $validator_email->errors();
		
		if($validator_email->fails()){
			return redirect()->back()->with('errors', $messages);
		}
		else{
			Mail::send('emails', array('key' => 'value'), function($message)
			{
				$message->to('dvl_grig@list.ru', 'name')->subject('message');
			});
		}
	}
	
	
}