<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/


namespace Database\Factories;

use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Factory;

class AuthorFactory extends Factory
{

    protected $model = Author::class;




    public function definition()
    {
        return [
            'gender' => $gender = $this->faker->randomElement(['male', 'female']),
            'name' => $this->faker->name($gender),
            'country' => $this->faker->country,
        ];
    }
}
