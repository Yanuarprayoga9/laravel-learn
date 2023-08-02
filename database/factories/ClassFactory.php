<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ClassRoom>
 */
class ClassFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        \Faker\Factory::create();
        return [
            'name' => generateRandomValue(),
            'student_id' => Arr::random([1,2]),

        ];
    }
}

function generateRandomValue()
{
    $numbers = range(1, 3); // Rentang angka dari 1 hingga 3
    $letters = range('A', 'C'); // Rentang huruf dari A hingga C

    $randomNumber = array_rand($numbers); // Ambil angka random dari rentang angka
    $randomLetter = array_rand($letters); // Ambil huruf random dari rentang huruf

    return $numbers[$randomNumber] . $letters[$randomLetter];
}