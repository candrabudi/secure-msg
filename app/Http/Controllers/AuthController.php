<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
class AuthController extends Controller
{
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json($validator);
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if (Auth::attempt($request->only('username', 'password'))) {
            return redirect()->intended('dashboard');
        }

        return redirect()->back()->withInput($request->only('username'))->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ]);
    }
}
