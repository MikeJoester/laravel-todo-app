<x-app-layout>
    @if ($errors->any())
        <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400">
            <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
    @endif

  <form class="max-w-sm mx-auto" method="post" action="{{ route('todos.update', ['todo' => $todo->id]) }}">
    @csrf
    @method('PUT')

    <h1 class="text-xl text-center uppercase pt-5">Edit form</h1>

    <input type="hidden" name="todo_id" value="{{ $todo->id }}">

    <div class="mb-3">
      <label class="block mb-2 text-sm font-large font-medium text-gray-900 ">Title</label>
      <input type="text" value="{{ $todo->title }}" name="title"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
    </div>
    <div class="mb-3">
      <label class="block mb-2 text-sm font-large font-medium text-gray-900 ">Description</label>
      <textarea
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
        name="description" cols="5" rows="5">{{ $todo->description }}</textarea>
    </div>
    <div class="pb-10">
      <label for="is_completed">Status</label>
      <select name="is_completed" id="is_completed"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
        <option value="1" {{ $todo->is_completed == 1 ? 'selected' : '' }}>Completed</option>
        <option value="0" {{ $todo->is_completed == 0 ? 'selected' : '' }}>Incomplete</option>
      </select>
    </div>


    <button type="submit"
      class="px-6 py-3 transition duration-150 ease-in-out bg-sky-500 hover:bg-sky-200 rounded-full">Submit</button>

  </form>
</x-app-layout>
