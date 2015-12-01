<?php
namespace App\Http\Controllers\Auth;
use App\Partners;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

// Grigor development
use Input;



class PartnersController extends Controller {
	
	public function index(){
		$partners = new Partners();
		$result = $partners->get_partners();
		
		return view('auth/partners')->with('data_partners', $result);
	}
	
	public function update_partners(){
		$data = Input::all();
		$partners = new Partners();
		$partners->update_partners($data);
		return redirect('auth/partners')->with(array('success_update_partners' => 'Successfully Updated'));
	}
}