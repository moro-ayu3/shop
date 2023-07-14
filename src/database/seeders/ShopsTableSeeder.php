<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
         'shop_name' => '仙人',
         'shop_img' => 'sushi.jpg',
         'area_id' => 1,
         'genre_id' => 1
        ];
        DB::table('shops')->insert($param);

        $param = [
         'shop_name' => '牛助',
         'shop_img' => 'yakiniku.jpg',
         'area_id' => 2,
         'genre_id' => 2
        ];
        DB::table('shops')->insert($param);

        $param = [
         'shop_name' => '戦慄',
         'shop_img' => 'izakaya.jpg',
         'area_id' => 3,
         'genre_id' => 3
        ];
        DB::table('shops')->insert($param);

        $param = [
         'shop_name' => 'ルーク',
         'shop_img' => 'italian.jpg',
         'area_id' => 1,
         'genre_id' => 4
        ];
        DB::table('shops')->insert($param);

        $param = [
         'shop_name' => '志摩屋',
         'shop_img' => 'ramen.jpg',
         'area_id' => 3,
         'genre_id' => 5
        ];
        DB::table('shops')->insert($param);

        $param = [
         'shop_name' => '香',
         'shop_img' => 'yakiniku.jpg',
         'area_id' => 1,
         'genre_id' => 2
        ];
        DB::table('shops')->insert($param);

        $param = [
         'shop_name' => 'JJ',
         'shop_img' => 'italian.jpg',
         'area_id' => 2,
         'genre_id' => 4
        ];
        DB::table('shops')->insert($param);

        $param = [
         'shop_name' => 'ラーメン極み',
         'shop_img' => 'ramen.jpg',
         'area_id' => 1,
         'genre_id' => 5
        ];
        DB::table('shops')->insert($param);

        $param = [
         'shop_name' => '鳥雨',
         'shop_img' => 'izakaya.jpg',
         'area_id' => 2,
         'genre_id' => 3
        ];
        DB::table('shops')->insert($param);

        $param = [
         'shop_name' => '築地色合',
         'shop_img' => 'sushi.jpg',
         'area_id' => 1,
         'genre_id' => 1
        ];
        DB::table('shops')->insert($param);

        $param = [
         'shop_name' => '晴海',
         'shop_img' => 'yakiniku.jpg',
         'area_id' => 2,
         'genre_id' => 2
        ];
        DB::table('shops')->insert($param);

        $param = [
         'shop_name' => '三子',
         'shop_img' => 'yakiniku.jpg',
         'area_id' => 3,
         'genre_id' => 2
        ];
        DB::table('shops')->insert($param);

        $param = [
         'shop_name' => '八戒',
         'shop_img' => 'izakaya.jpg',
         'area_id' => 1,
         'genre_id' => 3
        ];
        DB::table('shops')->insert($param);

        $param = [
         'shop_name' => '福助',
         'shop_img' => 'sushi.jpg',
         'area_id' => 2,
         'genre_id' => 1
        ];
        DB::table('shops')->insert($param);

        $param = [
         'shop_name' => 'ラー北',
         'shop_img' => 'ramen.jpg',
         'area_id' => 1,
         'genre_id' => 5
        ];
        DB::table('shops')->insert($param);

        $param = [
         'shop_name' => '翔',
         'shop_img' => 'izakaya.jpg',
         'area_id' => 2,
         'genre_id' => 3
        ];
        DB::table('shops')->insert($param);

        $param = [
         'shop_name' => '経緯',
         'shop_img' => 'sushi.jpg',
         'area_id' => 1,
         'genre_id' => 1
        ];
        DB::table('shops')->insert($param);

        $param = [
         'shop_name' => '漆',
         'shop_img' => 'yakiniku.jpg',
         'area_id' => 1,
         'genre_id' => 2
        ];
        DB::table('shops')->insert($param);

        $param = [
         'shop_name' => 'THE TOOL',
         'shop_img' => 'italian.jpg',
         'area_id' => 3,
         'genre_id' => 4
        ];
        DB::table('shops')->insert($param);

        $param = [
         'shop_name' => '木船',
         'shop_img' => 'sushi.jpg',
         'area_id' => 2,
         'genre_id' => 1
        ];
        DB::table('shops')->insert($param);

    }
}
