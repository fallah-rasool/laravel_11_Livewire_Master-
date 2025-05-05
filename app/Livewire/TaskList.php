<?php

namespace App\Livewire;

use App\Models\Task;
use Livewire\Component;

class TaskList extends Component
{
    public function deleteTask($id)
    {
        Task::findOrFail($id)->delete();

        // ارسال event به Alpine
        $this->dispatch('taskDeleted', ['message' => 'Task deleted successfully!']);
    }

    public function render()
    {
        return view('livewire.task-list', [
            'tasks' => Task::latest()->get()
        ])
        ->layout('components.layouts.with-navigation');

    }

}
