<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create') }}
        </h2>
    </x-slot>
    <x-jet-form-section submit="updatePassword">
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
            <x-jet-input id="" type="text" class="mt-1 block w-full" autocomplete="" />
            <x-jet-input-error for="" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="procedure" value="{{ __('procedure') }}" />
            <x-jet-textarea name="procedure" id="" cols="30" rows="10" class="mt-1 block w-full"></x-jet-textarea>
            <x-jet-input-error for="" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="materials" value="{{ __('materials') }}" />
            <x-jet-textarea name="materials" id="" cols="30" rows="10" class="mt-1 block w-full"></x-jet-textarea>
            <x-jet-input-error for="" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="time_required" value="{{ __('time_required') }}" />
            <x-jet-input name="time_required" id="" type="number" class="mt-1 block w-full" autocomplete="" />
            <x-jet-input-error for="" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="cocking_day" value="{{ __('cocking_day') }}" />
            <x-jet-input id="" name="cocking_day" type="date" class="mt-1 block w-full" autocomplete="" />
            <x-jet-input-error for="" class="mt-2" />
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
