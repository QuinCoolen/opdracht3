<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlbumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('albums')->insert([
            'name' => 'Black Holes & Revelations',
            'year' => '2006',
            'times_sold' => '1200000',
        ]);

        DB::table('albums')->insert([
            'name' => 'Humbug',
            'year' => '2009',
            'times_sold' => '320921',
        ]);

        DB::table('albums')->insert([
            'name' => 'Favourite Worst Nightmare',
            'year' => '2007',
            'times_sold' => '821128',
        ]);

        DB::table('albums')->insert([
            'name' => 'Suck It And See',
            'year' => '2007',
            'times_sold' => '287417',
        ]);

        DB::table('albums')->insert([
            'name' => 'AM',
            'year' => '2013',
            'times_sold' => '1304096',
        ]);
    }
}
