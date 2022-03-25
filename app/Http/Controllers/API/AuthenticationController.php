<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

class AuthenticationController extends \App\Http\Controllers\AppBaseController
{
    //use this method to signin users
    public function signin(Request $request)
    {
        $attr = $request->validate([
            'email' => 'required|string|',
            'password' => 'required|string|min:6'
        ]);

        if (!\Illuminate\Support\Facades\Auth::attempt($attr)) {
            return $this->sendError('Credentials not match', 401);
        }
        $authenticationToken=auth()->user()->createToken('API Token')->plainTextToken;
        return $this->sendResponse($authenticationToken,'success');
    }

    // this method signs out users by removing tokens
    public function signout()
    {
        auth()->user()->tokens()->delete();

        return [
            'message' => 'Tokens Revoked'
        ];
    }
}
