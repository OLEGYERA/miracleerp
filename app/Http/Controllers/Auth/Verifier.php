<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\EmailRequest as Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class Verifier extends Controller
{
    public function getEmail(Request $request){

        return response()->json(true);
    }

    public function getPassword(Request $request){

        return response()->json(true);
    }
}
