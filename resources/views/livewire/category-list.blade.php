<div class="flex flex-col justify-center">
    <div class="flex flex-col justify-center">
        <p class="text-xl mb-2 font-semibold">Add Project</p>
        <form wire:submit.prevent="addCategory" class="flex flex-col gap-4">
            <div class="flex justify-between gap-3">
                <label for="taskName" class="self-center">Category / Project Name:</label>
                <input class="border border-black rounded-md p-2" type="text" wire:model="category_name" id="taskName" placeholder="Add Category...">
            </div>
            <div class="flex justify-between gap-3">
                <label for="taskDesc" class="self-center">Category / Project Description:</label>
                <input class="border border-black rounded-md p-2" type="text" wire:model="category_description" id="taskDesc" placeholder="Add Category Description...">
            </div>
            <button class="border border-slate-500 rounded hover:bg-slate-500 hover:text-white py-1" type="submit">Add</button>
        </form>

        <p class="text-2xl font-semibold my-4">Task List</p>
        <div class="flex flex-row mt-5 mb-2 gap-5 overflow-x-scroll">

            @forelse ($categories as $cat)
                <ul class="flex flex-row justify-between p-5 border-2 border-slate-400 rounded">
                    <li class="flex flex-col gap-3 w-full">
                        <div>
                            <p class="text-xl font-bold">{{$cat->category_name}}</p>
                            <p class="text-slate-500">{{$cat->category_description}}</p>
                        </div>
                        @livewire('todo-list')
                    </li>
                </ul>
            @empty
                <p>No tasks here!</p>
            @endforelse
        </div>
    </div>
</div>
