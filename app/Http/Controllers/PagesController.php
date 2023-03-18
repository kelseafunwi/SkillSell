<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function home() {
        return view('pages.welcome');
    }

    public function register(Request $request) {
        return view('pages.register');
    }

    public function structure() {
        return view('pages.structure');
    }

    public function portfolioDetails() {
        return view('pages.portfolio-details');
    }
}
