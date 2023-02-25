<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller {

    public function home() {
        return view('home');
    }

    public function registration() {
        return view('registration');
    }
    public function registration_check(Request $request) {
        $valid = $request->validate([
            'user_name' => 'required|min:2|max:50',
            'user_password' => 'required|min:6|max:30',
            'email' => 'required|min:8|max:100|email'
        ]);
    }

    public function authorization() {
        return view('authorization');
    }
    public function authorization_check(Request $request) {
        $valid = $request->validate([
            'user_name' => 'required|min:2|max:50',
            'user_password' => 'required|min:6|max:30'
        ]);
    }

    public function myPage() {
        return view('myPage');
    }
}
