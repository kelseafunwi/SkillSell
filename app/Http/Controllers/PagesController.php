<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class PagesController extends Controller
{

    public function home() {
        return redirect('/');
    }

    public function register(Request $request) {
        return view('pages.register');
    }

    public function login() {
        return view('pages.login');
    }

    public function structure() {
        return view('pages.structure');
    }

    public function portfolioDetails() {
        return view('pages.portfolio-details');
    }

    public function account($id) {
        $user = User::find($id);

        return view('pages.account')->with('user', $user);
    }
}
