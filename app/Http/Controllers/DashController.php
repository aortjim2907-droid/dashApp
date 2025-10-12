<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashController extends Controller
{
    function index() {
        return view('dashboard');
    }
}
