<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert ([
        [
          'user_type_id'            =>  3,
          'title_id'                =>  3,
          'last_name'               =>  'Admin',
          'first_name'              =>  'General',
          'date_of_birth'           =>  '1901-01-01',
          'address'                 =>  'Danang',
          'email'                   =>  'admin@pnv.vn',
          'phone'                   =>  '+84777',
          'country_id'              =>  1,
          'identification_type_id'  =>  1,
          'identification_number'   =>  'GX417GNV',
          'password'                =>  Hash::make('pnv99tht')
        ]
      ]);
    }
}
