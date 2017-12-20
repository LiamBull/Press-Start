<?php

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('customers')->delete();

        DB::table('customers')->insert(array(
    		array('firstName'=>str_random(10), 'lastName'=>str_random(10), 'phoneNumber'=>rand(1000000000, 9999999999), 'email'=>str_random(10).'@gmail.com'),
    		array('firstName'=>str_random(10), 'lastName'=>str_random(10), 'phoneNumber'=>rand(1000000000, 9999999999), 'email'=>str_random(10).'@gmail.com'),
    		array('firstName'=>str_random(10), 'lastName'=>str_random(10), 'phoneNumber'=>rand(1000000000, 9999999999), 'email'=>str_random(10).'@gmail.com'),
    		array('firstName'=>str_random(10), 'lastName'=>str_random(10), 'phoneNumber'=>rand(1000000000, 9999999999), 'email'=>str_random(10).'@gmail.com'),
    		array('firstName'=>str_random(10), 'lastName'=>str_random(10), 'phoneNumber'=>rand(1000000000, 9999999999), 'email'=>str_random(10).'@gmail.com'),
    		array('firstName'=>str_random(10), 'lastName'=>str_random(10), 'phoneNumber'=>rand(1000000000, 9999999999), 'email'=>str_random(10).'@gmail.com'),
    		array('firstName'=>str_random(10), 'lastName'=>str_random(10), 'phoneNumber'=>rand(1000000000, 9999999999), 'email'=>str_random(10).'@gmail.com'),
    		array('firstName'=>str_random(10), 'lastName'=>str_random(10), 'phoneNumber'=>rand(1000000000, 9999999999), 'email'=>str_random(10).'@gmail.com'),
    		array('firstName'=>str_random(10), 'lastName'=>str_random(10), 'phoneNumber'=>rand(1000000000, 9999999999), 'email'=>str_random(10).'@gmail.com'),
    		array('firstName'=>str_random(10), 'lastName'=>str_random(10), 'phoneNumber'=>rand(1000000000, 9999999999), 'email'=>str_random(10).'@gmail.com'),
    		array('firstName'=>str_random(10), 'lastName'=>str_random(10), 'phoneNumber'=>rand(1000000000, 9999999999), 'email'=>str_random(10).'@gmail.com'),
    		array('firstName'=>str_random(10), 'lastName'=>str_random(10), 'phoneNumber'=>rand(1000000000, 9999999999), 'email'=>str_random(10).'@gmail.com'),
    		array('firstName'=>str_random(10), 'lastName'=>str_random(10), 'phoneNumber'=>rand(1000000000, 9999999999), 'email'=>str_random(10).'@gmail.com'),
    		array('firstName'=>str_random(10), 'lastName'=>str_random(10), 'phoneNumber'=>rand(1000000000, 9999999999), 'email'=>str_random(10).'@gmail.com'),
    		array('firstName'=>str_random(10), 'lastName'=>str_random(10), 'phoneNumber'=>rand(1000000000, 9999999999), 'email'=>str_random(10).'@gmail.com'),
    		array('firstName'=>str_random(10), 'lastName'=>str_random(10), 'phoneNumber'=>rand(1000000000, 9999999999), 'email'=>str_random(10).'@gmail.com'),
    		array('firstName'=>str_random(10), 'lastName'=>str_random(10), 'phoneNumber'=>rand(1000000000, 9999999999), 'email'=>str_random(10).'@gmail.com'),
    		array('firstName'=>str_random(10), 'lastName'=>str_random(10), 'phoneNumber'=>rand(1000000000, 9999999999), 'email'=>str_random(10).'@gmail.com'),
    		array('firstName'=>str_random(10), 'lastName'=>str_random(10), 'phoneNumber'=>rand(1000000000, 9999999999), 'email'=>str_random(10).'@gmail.com'),
    		array('firstName'=>str_random(10), 'lastName'=>str_random(10), 'phoneNumber'=>rand(1000000000, 9999999999), 'email'=>str_random(10).'@gmail.com'),
    		array('firstName'=>str_random(10), 'lastName'=>str_random(10), 'phoneNumber'=>rand(1000000000, 9999999999), 'email'=>str_random(10).'@gmail.com')
    	));
    }
}
