<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProvisionController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    // middlewares of a controller can be assigned in the controllers constructor method.
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        return "Hello from the ProvisionController";
    }
}
