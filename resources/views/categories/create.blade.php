<x-app-layout>

    <h2 class="text-xl text-center uppercase pt-5">Create Category</h2>

    <div class="max-w-sm mx-auto mt-5">
        <form method="post" action="{{ route('categories.store') }}" class="space-y-4">
            @csrf
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Category Name</label>
                <input type="text" name="category_name" id="name" class="mt-1 p-2 w-full border rounded-md" />
                @error('name')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Create Category
                </button>
            </div>
        </form>

        @if ($categories->count() > 0)
        <h2 class="text-xl text-center uppercase pt-5">Existing Categories:</h2>
        <ul>
            @foreach ($categories as $existingCategory)
            <li class="flex justify-between my-2 p-2 rounded-md border-2 border-slate-500">
                <p class="text-lg font-semibold">{{ $existingCategory->category_name }}</p>
                <form action="{{ route('categories.destroy', $existingCategory->id) }}" method="post" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded ">Delete</button>
                </form>
            </li>
            @endforeach
        </ul>
        @endif
    </div>


</x-app-layout>
