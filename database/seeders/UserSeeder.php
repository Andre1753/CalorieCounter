<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        try {
            User::create([
                'name' => 'Andre Luiz',
                'email' => 'a@a.com',
                'password' => bcrypt('12345678'), 
            ]);
            
        } catch (\Exception $exception){}     
    }
}
