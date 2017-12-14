<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('UsersTableSeeder');
        $this->command->info('Users table seeded.');

        $path = 'sql/inserts.sql';
        DB::unprepared(file_get_contents($path));
        $this->command->info('Inserts have run.');
    }
}

?>