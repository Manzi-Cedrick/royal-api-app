<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('checkauth')->except('create','login','authenticate');
    }
    public function create() {
        return view('users.register');
    }
    public function login() {
        return view('users.login');
    }
    public function authenticate(Request $request) {
        $request -> validate([
            'email'=>'required',
            'password'=>'required'
        ]);
        $response = Http::post('https://symfony-skeleton.q-tests.com/api/v2/token', [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ]);
        if ($response->successful()) {
            $token_key = $response->json()['token_key'];
            Session::put('token_key', $token_key);
            Session::put('authenticated', true);
            Session::flash('success', 'Success: Done');
            return redirect('/');
        } else {
            Session::flash('error', 'Error: Token is null');
            return redirect()->back()->withInput();
        }
    }
}
