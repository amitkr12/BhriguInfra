<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserAddSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createUser();
    }

    private function createUser()
    {
        $user = User::create([
            'name' => 'Chirag vats',
            'email' => 'chiragvats@yopmail.com',
            'password' => Hash::make('Password@188'),
            'email_verified_at' => now(),
        ]);
    }
}
