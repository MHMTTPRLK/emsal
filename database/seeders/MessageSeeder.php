<?php

namespace Database\Seeders;

use App\Models\Message;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Message::insert([

            'user_id'=>'1',
            'room_id'=>'1',
            'message'=>'Test Mesajı',
            'created_at'=>now(),
            'updated_at'=>now(),

        ]);
    }
}
