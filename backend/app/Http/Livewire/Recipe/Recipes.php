<?php

namespace App\Http\Livewire\Recipe;

use Livewire\Component;
use App\Models\Recipe;
use Illuminate\Support\Facades\Auth;


class Recipes extends Component
{
    public function render()
    {
        return view('livewire.recipe.recipes', [
            'recipes' => Recipe::where('user_id', Auth::id())->get(),
        ]);
    }

    public function delete($id)
    {
        Recipe::destroy($id);
    }
}
