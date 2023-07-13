<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Shop;
use App\Model\Category;

class ShopController extends Controller
{
    public function index()
    {
        $shops = Shop::with('Category')->get();
        $categories = Category::all();
        return view('index', ['shops' => $shops, 'categories' => $categories]);
    }

    public function search(Request $request)
    {
        $shop = $request->only(['shop_name', 'area_id', 'genre_id']);
        $category = $request->only(['area_name', 'genre_name']);
        return redirect('/');
    }
}
