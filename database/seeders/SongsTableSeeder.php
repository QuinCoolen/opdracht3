<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('songs')->insert([
            'title' => 'Out of the Black',
            'singer' => 'Royal Blood',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('songs')->insert([
            'title' => 'Brainstorm',
            'singer' => 'Arctic Monkeys',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('songs')->insert([
            'title' => 'My God Is The Sun',
            'singer' => 'Queens of the Stone Age',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('songs')->insert([
            'title' => 'Love/Paranoia',
            'singer' => 'Tame Impala',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('songs')->insert([
            'title' => 'Limbo',
            'singer' => 'Royal Blood',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
