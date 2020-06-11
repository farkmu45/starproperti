<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function dashboard()
    {
        return view('agent.dashboard');
    }

    public function profile()
    {
        return view('agent.profile');
    }

    public function propertyDetails()
    {
        return view('property-details');
    }

    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function add()
    {
        return view('agent.properties.add');
    }

    public function search()
    {
        return view('search');
    }
}
