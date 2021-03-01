<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'name'=>'Mehmet Parlak',
            'email'=>'mhmttparlak@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2b$10$pL4ML77DYChNciipQpAkJ.KujUxqPgQ5McVeFVkx9hAgsRNnYx6W6', // 12345678
            'remember_token' => Str::random(10),
        ]);
    }
}
