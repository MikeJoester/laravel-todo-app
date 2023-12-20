<x-app-layout>
    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-row gap-3 mb-4">
                <p class="font-bold text-3xl">Welcome to 2DO, create your Project / Category by clicking</p>

                <a href="{{ route('category.create') }}">
                    <x-primary-button class="px-5">{{ __('New Project') }}</x-primary-button>
                </a>
            </div>
            @if (Session::has('alert-success'))
                <div class="mb-4 rounded-lg bg-green-100 px-6 py-5 text-base text-green-700">
                    {{Session::get('alert-success')}}
                </div>
            @endif
            <section class="bg-white shadow-sm sm:rounded-lg p-6">
                @if (count($categories) > 0)
                    <div class="grid grid-rows-2 grid-flow-col gap-5">
                        @foreach ($categories as $cat)
                            <div class="flex flex-col gap-5 border-2 border-slate-400 p-3 rounded-md max-w-xl">
                                <div class="flex flex-row gap-5">
                                    <div class="flex flex-col gap-2 w-1/2">
                                        <h2 class="font-bold text-2xl">{{$cat->category_name}}</h2>
                                        <span class="truncate max-w-[20ch]">{{$cat->category_description}}</span>
                                    </div>

                                    <div class="flex flex-col self-center text-center w-1/2">
                                        <div class="flex gap-4 justify-end">
                                            <x-secondary-button class="">
                                                {{ __('Edit') }}
                                            </x-secondary-button>
                                            <x-danger-button class="">
                                                {{ __('Delete') }}
                                            </x-danger-button>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex flex-row justify-between">
                                    <h2 class="font-bold text-xl self-center">Task List</h2>
                                    <x-primary-button class="">
                                        {{ __('Add Task') }}
                                    </x-primary-button>

                                    @if (count($categoriesWithTasks) > 0)
                                        @foreach ($categoriesWithTasks as $category)
                                            <h2>{{ $category->category_name }}</h2>
                                            <ul>
                                                @foreach ($category->tasks as $task)
                                                    <li>{{ $task->task_name }}</li>
                                                @endforeach
                                            </ul>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <h4>No Categories around!</h4>
                @endif
            </section>
        </div>
    </div>
</x-app-layout>
