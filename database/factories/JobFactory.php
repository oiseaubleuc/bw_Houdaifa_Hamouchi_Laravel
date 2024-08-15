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
            'naam' => $this->faker->lastName,  // Generates a random last name
            'voornaam' => $this->faker->firstName,  // Generates a random first name
            'username' => $this->faker->userName,  // Generates a random username
            'email' => $this->faker->unique()->safeEmail, // Ensures each email is unique
            'beschrijving' => $this->faker->paragraph,  // Generates a random paragraph of text
            'bijlage' => null,  // Optionally, you can set this to null or add logic to generate a file path
        ];
    }
}
