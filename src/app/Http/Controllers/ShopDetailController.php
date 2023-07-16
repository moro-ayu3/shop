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
        $reserves = Reserve::all();
        return view('index', ['shops' => $shops, 'reserves' => $reserves]);
    }

    public function create(Request $request)
    {
        $reserve = $request->only(['date', 'time', 'number']);

        Reserve::create($reserve);

        return view('done', ['reserve' => $reserve]);
    }
}
