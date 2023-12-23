@if (count($categoryWithTasks['tasks']) > 0)
<table class="text-left border-separate border-spacing-4">
    <thead>
      <tr>
        <th>Name</th>
        <th class="text-center">Completed</th>
        <th class="text-center">Priority</th>
        <th class="text-center">Options</th>
      </tr>
    </thead>
    <tbody>
      @foreach($categoryWithTasks['tasks'] as $task)
        <tr>
            <td class="truncate max-w-[20ch]">{{$task->name}}</td>
            <td class="text-center">
                @if ($task->completed == 0)
                    <a href="#" class="text-red-500 font-bold border-red-500 border-2 py-1 px-2 rounded-md hover:bg-red-200 text-sm">Not Yet</a>
                @else <a href="#" class="text-green-500 font-bold border-green-500 border-2 p-2 rounded-md hover:bg-green-200">Finished</a>
                @endif
            </td>
            <td class="text-center font-semibold uppercase">{{$task->priority}}</td>
            <td class="flex flex-row gap-2 justify-center">
                <x-secondary-button class="">
                    {{ __('Edit') }}
                </x-secondary-button>
                <x-danger-button class="">
                    {{ __('Delete') }}
                </x-danger-button>
            </td>
        </tr>
      @endforeach
    </tbody>
</table>
@else <h4>No tasks around!</h4>
@endif

