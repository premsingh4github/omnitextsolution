<?php namespace App\Services;

use App\User;
use Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class Registrar implements RegistrarContract {

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	public function validator(array $data)
	{
		return Validator::make($data, [
			'name' => 'required|max:255',
			'email' => 'required|email|max:255|unique:users',
			'password' => 'required|confirmed|min:6',
		]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return User
	 */
	public function create(array $data)
	{
		$user = new User;
		$activation_code = str_random(60) . $data['email'];
		$user->name = $data['name'];
		$user->email = $data['email'];
		$user->password = bcrypt($data['password']);
		$user->how_know = $data['how_know'];
		$user->activation_code = $activation_code;
		if($user->save()){
			\Session::flash('success_message',"Activation link is send to {$data['email']}. Please activite your account");
			return view('auth.register');
		}
		
	}

}
