<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Locked;

class SecurityConcerns extends Component
{
    #[Locked]  
    public string $status = 'active';  
    public function mount()  
    {  

       // اینجا می‌توان status را مقداردهی کرد  

        $this->status = 'pending';  
    }  
    public function updateStatus()  
    {  
        // اینجا نمی‌توان status را تغییر داد  
        // این خط خطا خواهد داد چون property قفل شده است  
        // $this->status = 'inactive';  
    }  


    public function render()
    {
        return view('livewire.security-concerns')
        ->layout('components.layouts.with-navigation');
    }
}
