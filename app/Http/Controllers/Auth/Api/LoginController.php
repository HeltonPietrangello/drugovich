<?php

namespace App\Http\Controllers\Auth\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

use App\Models\Gerente;

class LoginController extends Controller
{
    public function login(Request $request, Gerente $gerente)
    {
        $input = $request->all();

        $validation = \Validator::make($input, [
            'email' => 'required|email',
            'password' => 'required'
        ]);


        if($validation->fails())
        {
            return response()->json(['error' => $validation->errors()], 422);
        }


        if(Auth::guard('gerente')->attempt(['email' => $input['email'], 'password' => $input['password']]))
        {
            $user = Auth::guard('gerente')->user();

            if($user->nivel == "1")
            {
                $token = $user->createToken('MyApp', ['nivel_1'])->plainTextToken;
            }
            if($user->nivel == "2")
            {
                $token = $user->createToken('MyApp', ['nivel_2'])->plainTextToken;
            }

            return response()->json(['token' => $token]);
        }
    }
}
