@if ($errors->any())
    <div class="mb-4 rounded-lg bg-red-100 px-6 py-5 text-base text-red-700">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="post"
    action="{{ route('category.add-task', ['categoryId' => $categoryWithTasks['category']->id]) }}"
    enctype="multipart/form-data"
    class="flex flex-row justify-between"
>
    @csrf
    @method('POST')

    <x-input-label for="name" :value="__('Task Name')" class="text-xl self-center"/>
    <x-text-input id="name" class="block p-1 border-2 bg-gray-50" type="text" name="task_name"/>
    <select name="priority" id="options" class="border-2 bg-slate-100 rounded-md px-1">
        <option selected disabled>Select Priority</option>
        <option value="low">Low</option>
        <option value="medium">Medium</option>
        <option value="high">High</option>
    </select>

    <x-primary-button class="" type=submit>
        {{ __('Add Task') }}
    </x-primary-button>
</form>
