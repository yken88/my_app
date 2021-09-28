<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\Recipe;

class RecipeCreate extends Component
{
    public $recipe;

    protected $rules = [
        'recipe.recipe_name' => 'required',
        'recipe.procedure' => 'required',
        'recipe.materials' => 'required|max:255',
        'recipe.time_required' => 'required',
        'recipe.cocking_day' => 'required',
        ];
    
    // エラーメッセージの設定
    protected $messages = [
        'recipe.*.required' => '必須項目です',
    ];


    public function mount(){
        $this->recipe['user_id'] = Auth::id();
    }

    public function render()
    {
        return view('livewire.recipe.recipe-create');
    }

    public function create(){
        $this->validate();
        Recipe::create($this->recipe);

        return redirect('/recipes');;
    }
}
