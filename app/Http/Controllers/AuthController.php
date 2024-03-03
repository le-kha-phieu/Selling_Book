<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function viewLogin()
    {
        return view('layouts.authentication.login');
    }

    public function viewRegister()
    {
        return view('layouts.authentication.register');
    }

    public function postRegister(RegisterRequest $request)
    {
        try {
            $data = [
                'email' => $request['email'],
                'user_name' => $request['user_name'],
                'password' => $request['password']
            ];

            $message = '';
            $checkUserName = User::where('user_name', $data['user_name'])->first();
            $checkEmail = User::where('email', $data['email'])->first();
            if ($checkUserName)
                $message = 'User name already exists!';
            if ($checkEmail)
                $message = 'Email already exists!';
            if ($message != '') {
                return redirect()->route('view.register')->with('error', $message);
            }

            User::create([
                'user_name' => $data['user_name'],
                'email' => $data['email'],
                'password' => $data['password'],
            ]);

            return redirect()->route('view.login')
                ->with('success', 'You have successfully registered. Please Login');
        } catch (Exception $e) {
            return redirect()->route('view.register')->with('error', 'Unable to register due to system error!');
        }
    }

    public function postLogin(LoginRequest $request)
    {
        if (
            Auth::attempt([
                'email' => $request->get('email'),
                'password' => $request->get('password'),
            ])
        ) {
            if (Auth::user()->role === User::USER) {
                return redirect()->route('view.home');
            } elseif (Auth::user()->role === User::ADMIN) {
                return redirect()->route('view.admin');
            }
        }

        return redirect()->route('view.login')->with('error', 'Incorrect email or password. Please sign in again!');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('view.home');
    }

}
