<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('user_types')->insert(['label' => 'Customer']);
      DB::table('user_types')->insert(['label' => 'Cashier']);
      DB::table('user_types')->insert(['label' => 'Manager']);
    }
}
