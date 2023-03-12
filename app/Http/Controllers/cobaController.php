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
    
    public function store(Request $request)
    {
        return "<pre><h3>Judul : $request->title</h3><h3>Deskripsi : $request->description</h3></pre>";
    }
}
