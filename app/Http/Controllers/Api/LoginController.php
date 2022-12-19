<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    
    public function __invoke(LoginRequest $request)
    {
        $payload = $request->validated();

        if(Auth::attempt($payload)) {

            $user = Auth::user();

            $token = $user->createToken('api-token')->plainTextToken;

            return response()->json([
                "status" => "success",
                "data" => [
                    "token" => $token,
                    "user" => $user
                ]
            ]);
        }

        return response()->json([
            "status" => "failed",
            "message" => "Invalid credentials"
        ]);
    }
}
