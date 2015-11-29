<?php namespace Modules\Admin\Http\Controllers;

use Pingpong\Modules\Routing\Controller;
use Illuminate\Http\Request;
use App\User;
use Validator;
use Auth;

class AdminController extends Controller {
	
	public function index(Request $request)
	{
		if(Auth::check()){
			return redirect('admin/home');
		}
		return redirect('/admin/login');
	}
	public function login(){
		if(Auth::check()){
			return redirect('admin/home');
		}
		return view('admin::login');
	}
	public function postLogin(Request $request){
		if (Auth::attempt(['email' => $request['email'], 'password' => $request['password'],'active' => 1]))
        {
            return redirect('admin/home');
        }
        else{
        	$request->flash();
        	return redirect('/admin/login')->withInput($request->only('email', 'remember'))
					->withErrors([
						'email' => 'These credentials do not match our records.',
					]);
        }
		
	}
	public function register(){
		return view('admin::register');
	}
	public function password(){
		return view('admin::password');
	}
	public function home(){
		return view('admin::home');
	}
	
}