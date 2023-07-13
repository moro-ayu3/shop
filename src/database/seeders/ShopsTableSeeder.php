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
         'area_id' => 1,
         'genre_id' => 1
        ];
        DB::table('shops')->insert($param);

        $param = [
         'shop_name' => '牛助',
         'area_id' => 2,
         'genre_id' => 2
        ];
        DB::table('shops')->insert($param);

        $param = [
         'shop_name' => '戦慄',
         'area_id' => 3,
         'genre_id' => 3
        ];
        DB::table('shops')->insert($param);

        $param = [
         'shop_name' => 'ルーク',
         'area_id' => 1,
         'genre_id' => 4
        ];
        DB::table('shops')->insert($param);

        $param = [
         'shop_name' => '志摩屋',
         'area_id' => 3,
         'genre_id' => 5
        ];
        DB::table('shops')->insert($param);

        $param = [
         'shop_name' => '香',
         'area_id' => 1,
         'genre_id' => 2
        ];
        DB::table('shops')->insert($param);

        $param = [
         'shop_name' => 'JJ',
         'area_id' => 2,
         'genre_id' => 4
        ];
        DB::table('shops')->insert($param);

        $param = [
         'shop_name' => 'ラーメン極み',
         'area_id' => 1,
         'genre_id' => 5
        ];
        DB::table('shops')->insert($param);

        $param = [
         'shop_name' => '鳥雨',
         'area_id' => 2,
         'genre_id' => 3
        ];
        DB::table('shops')->insert($param);

        $param = [
         'shop_name' => '築地色合',
         'area_id' => 1,
         'genre_id' => 1
        ];
        DB::table('shops')->insert($param);

        $param = [
         'shop_name' => '晴海',
         'area_id' => 2,
         'genre_id' => 2
        ];
        DB::table('shops')->insert($param);

        $param = [
         'shop_name' => '三子',
         'area_id' => 3,
         'genre_id' => 2
        ];
        DB::table('shops')->insert($param);

        $param = [
         'shop_name' => '八戒',
         'area_id' => 1,
         'genre_id' => 3
        ];
        DB::table('shops')->insert($param);

        $param = [
         'shop_name' => '福助',
         'area_id' => 2,
         'genre_id' => 1
        ];
        DB::table('shops')->insert($param);

        $param = [
         'shop_name' => 'ラー北',
         'area_id' => 1,
         'genre_id' => 5
        ];
        DB::table('shops')->insert($param);

        $param = [
         'shop_name' => '翔',
         'area_id' => 2,
         'genre_id' => 3
        ];
        DB::table('shops')->insert($param);

        $param = [
         'shop_name' => '経緯',
         'area_id' => 1,
         'genre_id' => 1
        ];
        DB::table('shops')->insert($param);

        $param = [
         'shop_name' => '漆',
         'area_id' => 1,
         'genre_id' => 2
        ];
        DB::table('shops')->insert($param);

        $param = [
         'shop_name' => 'THE TOOL',
         'area_id' => 3,
         'genre_id' => 4
        ];
        DB::table('shops')->insert($param);

        $param = [
         'shop_name' => '木船',
         'area_id' => 2,
         'genre_id' => 1
        ];
        DB::table('shops')->insert($param);

    }
}
