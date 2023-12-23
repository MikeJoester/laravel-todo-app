<div class="flex flex-row gap-4 my-4">
    <x-input-label for="search" :value="__('Search for category')" class="self-center text-xl font-bold"/>
    <input wire:model="search" type="text" placeholder="Filter by category" name="search" class="p-2 border border-slate-600 rounded-lg">

    <ul>
        @foreach ($categories as $category)
            <li data-category-id="{{ $category->id }}">{{ $category->name }}</li>
        @endforeach
    </ul>
</div>
