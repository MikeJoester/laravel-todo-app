<x-app-layout>
    <div class="py-12">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                @if ($errors->any())
                    <div class="mb-4 rounded-lg bg-red-100 px-6 py-5 text-base text-red-700">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="POST" action="{{ route('category.add') }}">
                    @csrf

                    <!-- Category Name -->
                    <div>
                        <x-input-label for="name" :value="__('Category / Project Name')" class="text-xl"/>
                        <x-text-input id="name" class="block mt-1 w-full p-2 border-2 bg-gray-50" type="text" name="category_name"/>
                    </div>

                    <!-- Category Description -->
                    <div class="mt-4">
                        <x-input-label for="textarea" :value="__('Color')" class="text-xl"/>

                        <textarea id="textarea" class="block mt-1 w-full p-2 border-2 bg-gray-50"
                                        type="text"
                                        rows="5" cols="5"
                                        name="color"></textarea>

                        {{-- <x-input-error :messages="$errors->get('password')" class="mt-2" /> --}}
                    </div>

                    <div class="flex flex-row items-center justify-end gap-4 mt-4">
                        <x-secondary-button class="p-3">
                            {{ __('Return') }}
                        </x-secondary-button>

                        <x-primary-button class="p-3">
                            {{ __('Add') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
