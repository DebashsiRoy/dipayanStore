<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        return view('Home.home');
    }


    function userRole()
    {
        return view('admin.dashboard');
    }
}
