<x-app-layout>
    <div class="py-10">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg max-w-7xl mx-auto p-10">
            @if(Session::has('alert-success'))
            <div class="alert-success p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-100 " role="alert">
                {{ Session::get('alert-success') }}
            </div>
            @endif

            @if(Session::has('alert-info'))
            <div class="alert-info p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-100 " role="alert">
                {{ Session::get('alert-info') }}
            </div>
            @endif

            @if(Session::has('alert-error'))
            <div class="alert-success p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-100 " role="alert">
                {{ Session::get('error') }}
            </div>
            @endif
            <p class="font-bold text-3xl pb-4">Welcome to 2DO</p>

            <div class="flex flex-row gap-3 mb-4">
                <p class="font-bold text-xl">Create your Project / Category by clicking</p>
                <a href="{{ route('categories.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Create Category
                </a>
            </div>
            <div class="flex flex-row gap-3 mb-4">
                <p class="font-bold text-xl">Create your Task by clicking</p>
                <a href="{{ route('todos.create') }}" class="bg-slate-500 hover:bg-slate-700 text-white font-bold py-2 px-4 rounded-md">
                    Create Todo
                </a>
            </div>

            <form action="{{route('todos.index')}}" method="GET" class="flex items-center gap-3">
                @csrf
                <label for="search" class="font-semibold text-xl">Search for task name here: </label>
                <input type="text" name="search" class="border p-2 rounded-md" placeholder="Search">
                <button type="submit" class="bg-slate-500 hover:bg-slate-700 text-white font-bold py-2 px-4 rounded-md ml-2">
                    Search
                </button>
            </form>

            <form action="{{ route('todos.index') }}" method="GET" class="py-5 flex flex-row gap-3">
                <label class="font-semibold text-xl self-center">Filter by Categories:</label>
                @foreach($categories as $category)
                <div class="self-center ">
                    <input
                        type="checkbox"
                        name="filter_categories[]"
                        value="{{ $category->category_name }}" {{ in_array($category->category_name, (array)request('filter_categories')) ? 'checked' : '' }}
                    >
                    {{ $category->category_name }}
                </div>
                @endforeach
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ml-2">Apply Filter</button>
            </form>

            <table class="w-full text-sm text-left rtl:text-right text-black  border-gray-500">
                <thead class="text-md text-black uppercase bg-gray-300 border-gray-500">
                    <tr>
                        <th scope="col" class="px-6 py-3 border border-gray-500">
                            Task Name
                        </th>
                        <th scope="col" class="px-6 py-3 border border-gray-500">
                            Descripton
                        </th>
                        <th scope="col" class="px-6 py-3 border border-gray-500 text-center">
                            Completion
                        </th>
                        <th scope="col" class="px-6 py-3 border border-gray-500">
                            Category
                        </th>
                        <th scope="col" class="px-6 py-3 border border-gray-500">
                            Action
                        </th>

                    </tr>
                </thead>
                @if(count($todos) > 0)
                <!-- Display todos -->
                @else
                <h1 class="text-2xl">No todos match the search criteria</h1>
                @endif

                @if(count($todos)>0)
                <tbody class="border border-gray-500 text-md">
                    @foreach ($todos as $todo)
                    <tr class="border border-gray-500 items-center">
                        <td class="border border-gray-500 p-3">{{$todo->title}}</td>
                        <td class="border border-gray-500 p-3"> {{$todo->description}}</td>
                        <td class="border border-gray-500">
                            @if($todo->is_completed == 1)
                            <p class="text-green-500 text-center font-semibold">Finished</p>
                            @else
                            <p class="text-rose-700 text-center font-semibold">Not Yet</p>
                            @endif
                        </td>

                        <td class="border border-gray-500 text-center font-semibold"> {{ $todo->category ? $todo->category->category_name : 'Uncategorized' }}</td>
                        {{-- <td class="border border-gray-500 text-center font-semibold"> {{ $todo->category->category_name }}</td> --}}

                        <td class="p-3 flex flex-row gap-3 justify-center">
                            <a class="text-blue-700 hover:bg-blue-300 border-2 border-blue-700 self-center px-3 py-1 rounded-md" href="{{ route('todos.show', $todo->id) }}">View</a>
                            <a class="text-slate-800 px-3 py-1 self-center border-2 hover:bg-slate-300 border-slate-800 rounded-md" href="{{ route('todos.edit', $todo->id) }}">Edit</a>
                            <form method="post" action="{{ route('todos.destroy', ['todo' => $todo->id]) }}">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="todo_id" value="{{ $todo->id }}">
                                <input type="submit" class=" cursor-pointer p-3 text-rose-800 px-3 py-1 self-center border-2 hover:bg-rose-300 border-rose-800 rounded-md" value="Delete">
                            </form>
                        </td>
                    </tr>

                    @endforeach

                </tbody>
            </table>
            @else
                <h1 class="text-2xl	">No todos are created yet</h1>
                <h1 class="text-2xl	">Click Search to reload the data</h1>
            @endif
        </div>
    </div>
</x-app-layout>
