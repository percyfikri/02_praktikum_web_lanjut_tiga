<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cobaController extends Controller
{
    
    public function index()
    {
        return '<iframe src="https://www.educastudio.com/contact-us" width="100%" height="100%"></iframe>';
    }

    public function create()
    {
        return view('contact-us-from-controller');
    }
}
