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
        DB::table('users')->insert([
            'name' => 'Example User',
            'email' => 'email@address.here',
            'password' => app('hash')->make('YourPasswordHere'),
        ]);
    }
}
