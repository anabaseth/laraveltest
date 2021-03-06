<?php namespace App\Services;

use App\User;
use App\enterprise;
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
		$user= User::create([
			'name' => $data['name'],
			'last_name' => $data['last_name'],
			'email' => $data['email'],
			'activity' => $data['activity'],
			'password' => bcrypt($data['password']),
		]);
                $enterprise=enterprise::create([
			'name' => $data['enterpriseName'],
			'adress' => $data['enterpriseAdress'],
			'user_id' => $user->id,
		]);
                $user->enterprise()->save($enterprise);
                
                return $user;
	}

}
