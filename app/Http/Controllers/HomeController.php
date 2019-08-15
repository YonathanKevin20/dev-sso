<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cas;

class HomeController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
        $this->middleware('cas.auth');
    }

    public function index()
    {
        return view('home', [
            'user' => Cas::getAttributes()
        ]);
    }
}
