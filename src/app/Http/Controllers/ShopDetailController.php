<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use App\Models\Reserve;

class ShopDetailController extends Controller
{
    public function index()
    {
        $shops = Shop::all();
        return view('index', ['shops' => $shops]);
    }
}
