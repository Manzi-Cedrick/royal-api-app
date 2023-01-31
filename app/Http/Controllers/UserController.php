<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
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
        # Send a request to an external api. 
        $response = Http::post('https://symfony-skeleton.q-tests.com/api/v2/token', [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ]);
        if ($response->successful()) {
            $token_key = $response->json()['token_key'];
            Session::put('token_key', $token_key);
            Session::flash('success', 'Success: Done');
            return redirect('/');
            // Store the token for future API requests
        } else {
            Session::flash('error', 'Error: Token is null');
            // $error = $response->json()['error'];
            // Handle the error
            return redirect()->back()->withInput();
            // dd($error);
            
        }
        // $token = $response->json('token');
        // if (is_null($token)) {
    //     Session::flash('error', 'Error: Token is null');
        //     return redirect()->back();
        // } else {
        //     session(['token' => $token]);
        //     return redirect('/');
        // } 
    }
}
