<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;


class LoginController extends Controller
{
    public function login(Request $request)
    {
        $this->validateLogin($request);
        if(Auth::attempt($request->only("email", "password"))){
            return response()->json([
                "token"=>$request->user()->createToken($request->name)->plainTextToken,
                "message"=>"Login Successful",
            ], 201);
        }

        return response()->json([
            "message"=>"Login Failed",
        ], 401);
    }
    public function validateLogin(Request $request)
    {
        return $request->validate([
            "email"=>"required|email",
            "password"=>"required|min:6",
            "name"=>"required", //from which place is connecting to the database
        ]);
    }
    //

}
