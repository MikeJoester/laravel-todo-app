<x-app-layout>
    <x-slot name="header">
        <ul class="flex flex-row gap-6">
            <li>
                <x-primary-button
                    x-data=""
                    x-on:click.prevent="$dispatch('open-modal', 'add-category')"
                >{{ __('Add Category') }}</x-primary-button>

                <x-modal name="add-category" focusable>
                    <form class="p-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ __('Add Category or Project') }}
                        </h2>

                        <div class="mt-6 flex flex-col gap-4">
                            <div>
                                <x-input-label for="name" :value="__('Name')" />
                                <x-text-input
                                    id="name"
                                    name="name"
                                    type="text"
                                    class="mt-1 block w-3/4 p-2 border-2"
                                    placeholder="{{ __('Input Category Name...') }}"
                                />
                            </div>

                            <div>
                                <x-input-label for="name" :value="__('Description')" />
                                <textarea
                                    id="name"
                                    name="name"
                                    type="text"
                                    class="mt-1 block w-3/4 p-2 border-2 resize-none"
                                    placeholder="{{ __('Description here...') }}"
                                ></textarea>
                            </div>

                            <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
                        </div>

                        <div class="mt-6 flex justify-end">
                            <x-secondary-button x-on:click="$dispatch('close')">
                                {{ __('Cancel') }}
                            </x-secondary-button>

                            <x-primary-button class="ms-3">
                                {{ __('Add') }}
                            </x-primary-button>
                        </div>
                    </form>
                </x-modal>
            </li>
            <li>
                <x-primary-button
                    x-data=""
                    x-on:click.prevent="$dispatch('open-modal', 'add-task')"
                >{{ __('Add Task') }}</x-primary-button>

                <x-modal name="add-task" focusable>
                    <form class="p-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ __('Add Task') }}
                        </h2>

                        <div class="mt-6 flex flex-col gap-4">
                            <div>
                                <x-input-label for="name" :value="__('Name')" />
                                <x-text-input
                                    id="name"
                                    name="name"
                                    type="text"
                                    class="mt-1 block w-3/4 p-2 border-2"
                                    placeholder="{{ __('Input Category Name...') }}"
                                />
                            </div>

                            <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
                        </div>

                        <div class="mt-6 flex justify-end">
                            <x-secondary-button x-on:click="$dispatch('close')">
                                {{ __('Cancel') }}
                            </x-secondary-button>

                            <x-primary-button class="ms-3">
                                {{ __('Add') }}
                            </x-primary-button>
                        </div>
                    </form>
                </x-modal>
            </li>
        </ul>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
