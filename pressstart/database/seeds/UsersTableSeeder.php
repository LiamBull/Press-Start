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
        DB::table('users')->delete();
        
        DB::table('users')->insert([
          'userName' => 'admin',
          'password' => bcrypt('password'),
          'fullName' => 'admin man',
          'type' => 'A',
          'SIN' => '12345',
          'email' => 'admin@pressstart.com',
          'phoneNumber' => '9054361234',
          'address' => 'home'
      ]);

        DB::table('users')->insert([
            'userName' => 'general',
            'password' => bcrypt('password'),
            'fullName' => 'general man',
            'type' => 'G',
            'SIN' => '12345',
            'email' => 'general@pressstart.com',
            'phoneNumber' => '9054361234',
            'address' => 'home'
        ]);
    }
}
