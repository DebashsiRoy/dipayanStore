<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function userRole()
    {
        return view('admin.dashboard');
    }
}
