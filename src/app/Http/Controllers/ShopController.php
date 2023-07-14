<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use App\Models\Area;
use App\Models\Genre;


class ShopController extends Controller
{
    public function index()
    {
        $shops = Shop::with('Area')->get();
        $shops = Shop::with('Genre')->get();
        $areas = Area::all();
        $genres = Genre::all();
        return view('index', ['shops' => $shops, 'areas' => $areas, 'genres' => $genres]);
    }

    public function search(Request $request)
    {
        $shops = Shop::with('area')->AreaSearch($request->area_id)->KeywordSearch($request->keyword)->get();
        $shops = Shop::with('genre')->GenreSearch($request->genre_id)->KeywordSearch($request->keyword)->get();
        $areas = Area::all();
        $genres = Genre::all();
        return view('index', ['shops' => $shops, 'areas' => $areas, 'genres' => $genres]);
    }

    public function showDetail($id)
    {
        $shop = Shop::find($id);

        return view('detail', ['shop' => $shop]);
    }
}
