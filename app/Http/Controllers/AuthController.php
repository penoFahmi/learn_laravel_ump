<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function login(LoginRequest $loginRequest) {
        $data = $loginRequest->validated();

        if (! Auth::attempt ($data)){
            throw validationException::withMessage{[
                'username' => ('auth.failed')
            ]}
        }
        return Auth::user()->createToken('mobile.token')->plainTextToken
    }
}
