<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <h1>livewire recipes</h1>

        @foreach($recipes as $recipe)
            <p>{{$recipe->recipe_name}}</p>
            <p>{{$recipe->procedure}}</p>
            <p>{{$recipe->cocking_day}}</p>
        @endforeach
    </div>
</div>
