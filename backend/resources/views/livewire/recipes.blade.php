<div>
    <h1>livewire recipes</h1>

    @foreach($recipes as $recipe)
        <p>{{$recipe->recipe_name}}</p>
        <p>{{$recipe->procedure}}</p>
        <p>{{$recipe->cocking_day}}</p>
    @endforeach
</div>
