<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller

{
    public function getLoginForm(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('login');
    }
    public function login(Request $request) {
        $validator = Validator::make($request->only(['email' ,'password']), [
            'email' => 'required|email|max:255',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        if (Auth::attempt($validator->validated())) {
            $request->session()->regenerate();
//            return auth()->user();
            if(\auth()->user()->role_id ==1)  return redirect()->route('post.index');
            else return  redirect()->route('home');

        } else return back()->withErrors($validator)->withInput();

    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
