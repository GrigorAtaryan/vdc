<?php namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

#development
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;
use Input;

class AuthController extends Controller {

	public function __construct(Guard $auth, Registrar $registrar)
	{
		$this->auth = $auth;
		$this->registrar = $registrar;

		$this->middleware('guest', ['except' => 'getLogout']);
	}



	public function admin()
	{
		return view('auth/login');
	}
	
	
	public function login()
	{
	
	
		$data = Input::all();
		
		$validator_login = Validator::make(
			array(
				'username' => $data['username'],
				'password' => $data['password'],
			
			),
			array(
				'username' => 'required|alpha_num|min:5',
				'password' => 'required|min:5,'
				
			)
		);
		
		$message = $validator_login->errors();
		if($validator_login->fails()){
			return redirect()->back()->with('errors', $message);
		}else if($validator_login->passes()){
			 if (Auth::attempt(['username' => $data['username'], 'password' =>  $data['password']]))
			{
				
				 if ($this->auth->check())
				{
						return new RedirectResponse(url('auth/home'));
				}
			}
			else{
					return redirect()->back()->with('errors_login', 'Wrong username/password');
			}
		}
		
		
	}
	
	
	
	public function logout(){
		Auth::logout();
		return view('auth/login');
	}

}
