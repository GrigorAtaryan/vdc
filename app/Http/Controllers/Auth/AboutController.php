<?php
namespace App\Http\Controllers\Auth;
use App\About;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

// Grigor development
use Input;



class AboutController extends Controller {
	
	public function index(){
		$about = new About();
		$result = $about->get_about();
		
		return view('auth/about')->with('data_about', $result);
	}
	
	public function update_about(){
		$data = Input::all();
		$about = new About();
		$about->update_about($data);
		return redirect('auth/about')->with(array('success_update_about' => 'Successfully Updated'));
	}
}