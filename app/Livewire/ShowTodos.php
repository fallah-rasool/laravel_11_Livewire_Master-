<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\Computed;

class ShowTodos extends Component
{
    // public $todos;
    // public function mount()
    // {
    //     $this->todos = Auth::user()
    //         ->todos()
    //         ->select(['id','title', 'content']) // فقط این دو فیلد رو می‌گیره
    //         ->get();
    // }



    #[Computed]
    public function todos()
    {
        return Auth::user()
            ->todos()
            ->select(['id', 'title', 'content']) // ✅ تمام فیلدهایی که نیاز داریم
            ->get();
    }


    public function causeError()
    {
    //     // تلاش برای دسترسی به فیلدی که در select نیومده!
        
            \Log::info('Todo ID: '); // ❌ اینجا ارور میده
       
    }


    public function render()
    {
        return view('livewire.show-todos')
        ->layout('components.layouts.with-navigation');
    }
}
