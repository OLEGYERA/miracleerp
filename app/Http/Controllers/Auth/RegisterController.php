<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Dirape\Token\Token;
use App\Mail\UserVerify;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Http\Requests\UserRequest as Request;
use Illuminate\Http\Response;

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

    protected function signin(Request $request){
        $data['email'] = $request->email;
        $data['password'] = $request->password;

        $signin_res = $this->create($request->all());

        if($signin_res){
            Mail::to($signin_res->email)->send(new UserVerify($signin_res));
        }

        return response()->json(true);
    }


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'email' => $data['email'],
            'remember_token' => (new Token())->Unique('users', 'remember_token', 32),
            'password' => bcrypt($data['password']),
        ]);
    }

}
