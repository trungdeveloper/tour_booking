<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TitlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('titles')->insert(['label' => 'Mrs.']);
      DB::table('titles')->insert(['label' => 'Ms.']);
      DB::table('titles')->insert(['label' => 'Mr.']);
    }
}
