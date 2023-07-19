<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KatalogController extends Controller
{
        
    public function index(){
        return view('katalog.index');
    }

    public function detail()
    {
        return view('katalog.detail');
    }
}
