<x-app-layout>
  @if ($errors->any())
  <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 ">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif

  <form method="post" action="{{ route('todos.store') }}" class="max-w-sm mx-auto">
    @csrf
    <h1 class="text-xl text-center uppercase pt-5">Create Task</h1>
    <div class="mb-3">
      <label class="block mb-2 text-sm font-large font-medium text-gray-900 ">Title</label>
      <input type="text" name="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
    </div>
    <div class="mb-3">
      <label class="block mb-2 text-sm font-large font-medium text-gray-900 ">Descripton</label>
      <textarea class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " name="description" cols="5" rows="5"></textarea>
    </div>

    <select name="category_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
        @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
        @endforeach
    </select>

    <button type="submit" class="mt-3 px-6 py-3 transition duration-150 ease-in-out bg-sky-600 hover:bg-sky-300 rounded-md text-white">Add Task</button>

  </form>

</x-app-layout>
