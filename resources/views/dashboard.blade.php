<x-app-layout>
    <x-slot name="header">
        <ul class="flex flex-row gap-6">
            <li>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Add Category
                </h2>
            </li>
            <li>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Add Task
                </h2>
            </li>
        </ul>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{-- @livewire('category-list') --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
