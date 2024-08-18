<?php

namespace Database\Factories;

//use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{

    protected $model = Job::class;

    public function definition()
    {
        return [
            'naam' => $this->faker->lastName,
            'voornaam' => $this->faker->firstName,
            'username' => $this->faker->userName,
            'email' => $this->faker->unique()->safeEmail,
            'beschrijving' => $this->faker->paragraph,
            'bijlage' => null,
        ];
    }
}

