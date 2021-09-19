<?php

namespace Database\Factories;

use App\Models\Recipe;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class RecipeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Recipe::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'recipe_name' => $this->faker->title(),
            'procedure' => $this->faker->paragraph(),
            'materials' => $this->faker->paragraph(),
            'time_required' => $this->faker->randomNumber(),
            'cocking_day' => $this->faker->date(),
            'user_id' => User::factory(),
        ];
    }
}
