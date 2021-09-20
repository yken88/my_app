<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Recipe;

class Recipes extends Component
{
    public function render()
    {
        return view('livewire.recipes', [
            'recipes' => Recipe::all(),
        ]);
    }
}
