<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'namizato',
            'email' => 'namizatork@icloud.com',
            'password' => Hash::make('Tatsuya0519'),
            'remember_token' => str_random(10),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
