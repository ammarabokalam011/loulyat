<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

class AuthenticationController extends \App\Http\Controllers\AppBaseController
{
    public function __construct()
    {

    }

    //use this method to signin users
    public function signin(Request $request)
    {
        $attr = $request->validate([
            'phone' => 'required|string|',
            'password' => 'required|string|min:6'
        ]);
        if (!auth()->guard('user')->attempt($attr)) {
            return $this->sendError('Credentials not match', 401);
        }
        $authenticationToken=auth()->guard('user')->user()->createToken('API Token')->plainTextToken;
        return $this->sendResponse([
            'authenticationToken' => $authenticationToken
        ],'success');
    }

    // this method signs out users by removing tokens
    public function signout()
    {
        auth()->guard('user')->user()->tokens()->delete();

        return [
            'message' => 'Tokens Revoked'
        ];
    }
}
