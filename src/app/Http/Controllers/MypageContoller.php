<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserve;
use App\Models\Test;


class MypageContoller extends Controller
{
    public function index()
    {
        $tests = Test::all();
        $reserves = Reserve::all();
        return view('index', ['tests' => $tests, 'reserve' => $reserve]);
    }

    public function delete()
    {
        $test = Test::where('user_id', $user_id)->first();
        $test_id = $test->id;

        Reserve::where('test_id', $test_id)->delete();
        return redirect('/');
    }
}
