<div class="flex justify-start">
    <div class="flex flex-col">
        @forelse ($todos as $todo)
            <div>
                <p>{{$todo->task}}</p>
                <input type="checkbox" wire:change="switchStatus({{$todo->id}})"/>
            </div>
        @empty
            <p>No todos here!</p>
        @endforelse

        <form class="flex flex-row gap-4 pt-3">
            <input class="px-2 border border-black rounded" type="text" wire:model="task_name" wire:keydown.enter="addTodo" placeholder="Add Todo...">
            <div>
                <label for="categoryId">Category:</label>
                {{-- <select wire:model="categoryId" id="categoryId" required>
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->category_name}}</option>
                    @endforeach
                </select> --}}
            </div>
            <button class="border border-slate-500 rounded hover:bg-slate-500 hover:text-white px-5 py-1" type="submit">Add</button>
        </form>
    </div>
</div>
