<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MypageContoller extends Controller
{
    public function index()
    {
        return view('index');
    }
}
