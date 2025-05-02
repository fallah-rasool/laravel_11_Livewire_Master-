<?php

namespace App\Livewire;

use Livewire\Component;

class EventListener extends Component
{
    public $enter=0;
    public  $leave=0;
    public  $Alpain =0;

    public function mouseenter(){
        $this->enter =$this->enter+1;
    }
    public function mouseleave(){
        $this->leave =$this->leave+1;
    }
    
    public function incrementAlpain() {  
        $this->Alpain += 1;  
    }  
    public function decrementAlpain() {  
        if ($this->Alpain > 0) {  
            $this->Alpain -= 1;  
        }  
    }  

    public function render()
    {
        return view('livewire.event-listener')
        ->layout('components.layouts.with-navigation');
    }
}
