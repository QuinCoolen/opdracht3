<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bands')->insert([
            'name' => 'Arctic Monkeys',
            'genre' => 'Alt Rock',
            'founded' => 2002,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('bands')->insert([
            'name' => 'Royal Blood',
            'genre' => 'Rock',
            'founded' => 2011,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('bands')->insert([
            'name' => 'Cleopatrick',
            'genre' => 'Rock',
            'founded' => 2015,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
