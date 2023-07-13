<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
         'area_name' => '東京都',
         'genre_name' => '寿司',
        ];
        DB::table('categories')->insert($param);

        $param = [
         'area_name' => '大阪府',
         'genre_name' => '焼肉',
        ];
        DB::table('categories')->insert($param);

        $param = [
         'area_name' => '福岡県',
         'genre_name' => '居酒屋',
        ];
        DB::table('categories')->insert($param);

        $param = [
         'area_name' => '東京都',
         'genre_name' => 'イタリアン',
        ];
        DB::table('categories')->insert($param);

        $param = [
         'area_name' => '福岡県',
         'genre_name' => 'ラーメン',
        ];
        DB::table('categories')->insert($param);

        $param = [
         'area_name' => '東京都',
         'genre_name' => '焼肉',
        ];
        DB::table('categories')->insert($param);

        $param = [
         'area_name' => '大阪府',
         'genre_name' => 'イタリアン',
        ];
        DB::table('categories')->insert($param);

        $param = [
         'area_name' => '東京都',
         'genre_name' => 'ラーメン',
        ];
        DB::table('categories')->insert($param);

        $param = [
         'area_name' => '大阪府',
         'genre_name' => '居酒屋',
        ];
        DB::table('categories')->insert($param);

        $param = [
         'area_name' => '東京都',
         'genre_name' => '寿司',
        ];
        DB::table('categories')->insert($param);

        $param = [
         'area_name' => '大阪府',
         'genre_name' => '焼肉',
        ];
        DB::table('categories')->insert($param);

        $param = [
         'area_name' => '福岡県',
         'genre_name' => '焼肉',
        ];
        DB::table('categories')->insert($param);

        $param = [
         'area_name' => '東京都',
         'genre_name' => '居酒屋',
        ];
        DB::table('categories')->insert($param);

        $param = [
         'area_name' => '大阪府',
         'genre_name' => '寿司',
        ];
        DB::table('categories')->insert($param);

        $param = [
         'area_name' => '東京都',
         'genre_name' => 'ラーメン',
        ];
        DB::table('categories')->insert($param);

        $param = [
         'area_name' => '大阪府',
         'genre_name' => '居酒屋',
        ];
        DB::table('categories')->insert($param);

        $param = [
         'area_name' => '東京都',
         'genre_name' => '寿司',
        ];
        DB::table('categories')->insert($param);

        $param = [
         'area_name' => '東京都',
         'genre_name' => '焼肉',
        ];
        DB::table('categories')->insert($param);

        $param = [
         'area_name' => '福岡県',
         'genre_name' => 'イタリアン',
        ];
        DB::table('categories')->insert($param);

        $param = [
         'area_name' => '大阪府',
         'genre_name' => '寿司',
        ];
        DB::table('categories')->insert($param);
    }
}
