<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ReserveTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
         'number' => 1
        ];
        DB::table('reserves')->insert($param);

        $param = [
         'number' => 2
        ];
        DB::table('reserves')->insert($param);

        $param = [
         'number' => 3
        ];
        DB::table('reserves')->insert($param);

        $param = [
         'number' => 4
        ];
        DB::table('reserves')->insert($param);

        $param = [
         'number' => 5
        ];
        DB::table('reserves')->insert($param);

        $param = [
         'number' => 6
        ];
        DB::table('reserves')->insert($param);

        $param = [
         'number' => 7
        ];
        DB::table('reserves')->insert($param);

        $param = [
         'number' => 8
        ];
        DB::table('reserves')->insert($param);

        $param = [
         'number' => 9
        ];
        DB::table('reserves')->insert($param);

        $param = [
         'number' => 10
        ];
        DB::table('reserves')->insert($param);
    }
}
