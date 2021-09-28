<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <h1>livewire recipes</h1>

        <div class="px-6 pt-4 pb-2">
            <table class="table-auto w-full">
                <thead>
                    <tr>
                        <th class="px-4 py-2">レシピ</th>
                        <th class="px-4 py-2">手順</th>
                        <th class="px-4 py-2">料理した日</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($recipes as $recipe)
                        <tr>
                            <td class="border px-4 py-2">{{ $recipe->recipe_name }}</td>
                            <td class="border px-4 py-2">{{ $recipe->procedure}}</td>
                            <td class="border px-4 py-2">{{ $recipe->cocking_day }}</td>
                            <td class="border px-4 py-2">編集</td>
                            <td class="border px-4 py-2">削除</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        
    </div>
</div>
