<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Requests\VerifierRequest as Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class VerifierController extends Controller
{
    public function getEmail(Request $request){
        return response()->json(true);
    }

    public function getPassword(Request $request){
        return response()->json(true);
    }

    public function isExistEmail(Request $request){
        $is_user_email = User::where('email', $request->email)->first();

        if(!!$is_user_email){
            return ($is_user_email->is_verify == false) ? (response()->json(true)) : (response()->json(false));
        }

        return response()->json(false);
    }

    public function verifyToken(Request $request){

        $validate = Validator::make($request->all(), []);
        $is_sign_user = User::where('email', $request->email)->where('remember_token', $request->token)->first();

        if(!($is_sign_user)){
            return response()->json($validate->errors()->add('token', 'Данный ключ является не действителен.'), 412);
        }else{
            $is_sign_user->update([
                'is_verify' => true,
                'remember_token' => null,
            ]);
        }
        return response()->json(true);
    }
}
