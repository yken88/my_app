<?php

namespace App\Http\Livewire;

use Livewire\Component;

class RecipeCreate extends Component
{
    public $posts;

    protected $rules = [
        'posts.recipe_name' => 'required',
        'posts.procedure' => 'required',
        'posts.materials' => 'required|255',
        'posts.time_required' => 'required',
        'posts.cocking_day' => 'required',
        ];
    
    // エラーメッセージの設定
    protected $messages = [
        'posts.*.required' => '必須項目です',
        'posts.mail.email' => '正しいメールアドレスを入力ください',
    ];


    public function mount(){
        $this->posts = session()->get('posts');
    }

    public function render()
    {
        return view('livewire.recipe-create');
    }

    public function create(){
        $this->validate();
        session()->put('posts', $this->posts);

        return redirect()->route('create');
    }
}
