<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CrudModel>
 */
class CrudModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'user_id' => $this->faker->numberBetween(1, 10),
            'subject' => $this->faker->sentence(10), // 3단어로 된 문장
            'content' => $this->faker->paragraph(5), // 5문단으로 된 내용
        ];
    }
}
