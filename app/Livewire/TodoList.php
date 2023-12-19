<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Todo;

class TodoList extends Component
{
    public $todos;
    public $task_name = '';
    public $status = 'open';
    public $priority = 'high';
    public $categoryId;

    function mount()
    {
        $this->fetchTodos();
    }

    function fetchTodos()
    {
        $this->todos = Todo::all()->reverse();
    }

    function addTodo()
    {
        if($this->task_name != '')
        {
            $todo = new Todo();
            $todo->task_name = $this->task_name;
            $todo->status = $this->status;
            $todo->priority = $this->priority;
            $todo->categoryId = $this->categoryId;
            $todo->save();
            $this->reset();
            $this->fetchTodos();
        }
    }

    function switchStatus(Todo $todo)
    {
        $todo->status = 'done';
        $todo->save();
    }

    public function render()
    {
        return view('livewire.todo-list');
    }
}
