<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('home');
    }
    public function about(){
        return view('about-us');
    }
    public function adminhome(){
        return view('admin.home');
    }
}
