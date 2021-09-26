<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create') }}
        </h2>
    </x-slot>
    <x-jet-form-section submit="create">
    <x-slot name="title">
        {{ __('レシピ登録') }}
    </x-slot>

    <x-slot name="description">
        {{ __('レシピの情報を入力してください。') }}
    </x-slot>

    {{-- textareaを編集 --}}
    <x-slot name="form">
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="recipe_name" value="{{ __('recipe_name') }}" />
            <x-jet-input wire:model="posts.recipe_name" type="text" class="mt-1 block w-full" autocomplete="" />
            @error('posts.recipe_name') <span>{{ $message }}</span> @enderror

        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="procedure" value="{{ __('procedure') }}" />
            <x-jet-textarea wire:model="posts.procedure" cols="30" rows="10" class="mt-1 block w-full"></x-jet-textarea>
            @error('posts.procedure') <span>{{ $message }}</span> @enderror

        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="materials" value="{{ __('materials') }}" />
            <x-jet-textarea wire:model="posts.materials" cols="30" rows="10" class="mt-1 block w-full"></x-jet-textarea>
            @error('posts.materials') <span>{{ $message }}</span> @enderror

        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="time_required" value="{{ __('time_required') }}" />
            <x-jet-input wire:model="posts.time_required" type="number" class="mt-1 block w-full" autocomplete="" />
            @error('posts.time_required') <span>{{ $message }}</span> @enderror

        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="cocking_day" value="{{ __('cocking_day') }}" />
            <x-jet-input wire:model="posts.cocking_day" type="date" class="mt-1 block w-full" autocomplete="" />
            @error('posts.cocking_day') <span>{{ $message }}</span> @enderror

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