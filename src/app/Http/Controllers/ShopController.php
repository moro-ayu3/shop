<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use App\Models\Area;
use App\Models\Genre;
use App\Models\Reserve;
use App\Models\Test;


class ShopController extends Controller
{
    public function index(Request $request)
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
        $shops = Shop::with('Reserve')->get();
        $reserves = Reserve::all();
        return view('detail', ['shop' => $shop, 'shops' => $shops, 'reserves' => $reserves]);
    }

    public function create(Request $request)
    {
        $user = Auth::user();
        $reserve = $request->only(['date', 'time', 'number']);
        Reserve::create($reserve);
        return view('done', ['reserve' => $reserve, 'user' => $user]);
    }

    public function add(Request $request)
    {
        $user = Auth::user();
        $test = $request->only(['score']);
        Test::create($test);
        return redirect('/');
    }

    public function delete()
    {
        $user = Auth::user();
        Test::where('score', $test)->delete();

        return redirect('/');
    }
}
