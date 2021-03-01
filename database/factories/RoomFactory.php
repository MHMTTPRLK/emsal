<?php

namespace Database\Factories;

use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class RoomFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Room::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $name='Mesaj Odası1';
        $description='Bu Mesaj Odasının Açıklaması Mesaj Odası1';
        return [
            'name'=>$name,
            'description'=>$description,


        ];
    }
}
