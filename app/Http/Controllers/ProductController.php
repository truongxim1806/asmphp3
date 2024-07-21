<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function show()
    {
        return view('detail');
    }

    public function list()
    {
        return view('list');
    }
    public function login()
    {
        return view('login');
    }
    
}
