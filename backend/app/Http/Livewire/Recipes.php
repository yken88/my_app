<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Recipe;

class Recipes extends Component
{
    public function render()
    {
        return view('livewire.recipe.recipes', [
            'recipes' => Recipe::all(),
        ]);
    }
}
