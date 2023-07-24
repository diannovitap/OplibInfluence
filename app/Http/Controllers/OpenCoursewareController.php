<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OpenCoursewareController extends Controller
{
    public function index(){
        return view('opencourseware.index');
    }
}
