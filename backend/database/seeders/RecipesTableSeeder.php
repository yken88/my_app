<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RecipesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Recipe::factory()
            ->count(50)
            ->hasPosts(1)
            ->create();
    }
}
