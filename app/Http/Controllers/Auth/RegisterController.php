<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string

     */
     
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
     protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255|alpha_spaces',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
            'date'=>['required'],
            'cin'=>'required|Numeric|min:8',
            'sexe'=>['required'],
            'select1'=>['required'],
            'select2'=>['required'],
            'tel'=>'required|min:8|Numeric',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        if(request()->role_id=='3'){
         $this->redirectTo = '/paymentf';  
        }

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'show_password' => $data['password'],
            'password_confirmation'=> Hash::make($data['password_confirmation']),
            'name' => $data['name'],
            'email' => $data['email'],
            
            'sexe' => $data['sexe'],
            'tel' => $data['tel'],
            'cin' => $data['cin'],

            'date' => $data['date'],
            'niveau' => $data['select1'],
            'specialite' => $data['select2'],
            'role_id' => $data['role_id'],

           
        ]);
    }
}
