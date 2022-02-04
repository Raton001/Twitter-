<?php

namespace Database\Factories;

use Faker\Factory as FakerFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TweetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     * 
     */
   

    public function definition()
    {
        return [
            'user_id'=>$this->factory(App\Models\User::class),
            'body'=>$this->faker->sentence,

        ];
    }
}
