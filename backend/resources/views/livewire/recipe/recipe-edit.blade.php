<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit') }}
        </h2>
    </x-slot>
    <x-jet-form-section submit="update">
    <x-slot name="title">
        {{ __('レシピ編集') }}
    </x-slot>

    <x-slot name="description">
        {{ __('レシピの情報を入力してください。') }}
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="recipe_name" value="{{ __('recipe_name') }}" />
            <x-jet-input wire:model="recipe.recipe_name" type="text" class="mt-1 block w-full"/>
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="procedure" value="{{ __('procedure') }}" />
            <x-jet-textarea wire:model="recipe.procedure" cols="30" rows="10" class="mt-1 block w-full"></x-jet-textarea>

        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="materials" value="{{ __('materials') }}" />
            <x-jet-textarea wire:model="recipe.materials" cols="30" rows="10" class="mt-1 block w-full"></x-jet-textarea>

        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="time_required" value="{{ __('time_required') }}" />
            <x-jet-input wire:model="recipe.time_required" type="number" class="mt-1 block w-full" autocomplete="" />

        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="cocking_day" value="{{ __('cocking_day') }}" />
            <x-jet-input wire:model="recipe.cocking_day" type="date" class="mt-1 block w-full" autocomplete="" />

        </div>

    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Saved.') }}
        </x-jet-action-message>

        <x-jet-button>
            {{ __('Save') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>
</div>