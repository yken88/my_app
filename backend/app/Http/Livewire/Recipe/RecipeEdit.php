<?php

namespace App\Http\Livewire\Recipe;

use Livewire\Component;
use App\Models\Recipe;

class RecipeEdit extends Component
{
    public $recipe;

    protected $rules = [
        'recipe.recipe_name' => 'required',
        'recipe.procedure' => 'required',
        'recipe.materials' => 'required|max:255',
        'recipe.time_required' => 'required',
        'recipe.cocking_day' => 'required',
        ];
    
    
    public function mount($id){
        $this->recipe = Recipe::find($id);
    }

    public function render()
    {
        return view('livewire.recipe.recipe-edit');
    }

    public function update(){
        $this->validate();

        $recipe = $this->recipe->toArray();

        $this->recipe->update($recipe);

        return redirect('/recipes');;
    }
}
