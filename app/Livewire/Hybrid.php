<?php

namespace App\Livewire;

use Livewire\Component;

use Livewire\Attributes\Js;

class Hybrid extends Component
{
    public string $number='5';
    #[Js]
    public function showAlert()
    {
        //کارکرد
        return <<<JS
        alert('This is an alert from Livewire! Number is: {$this->number}');
        JS;


        // کار نکرد 
       $this->js("alert('Post saved!: {$this->number}')");
    }
  
    public $message = 'Hello, World!'; // متن اولیه

    // متدی برای تغییر متن
    public function changeText()
    {
        $this->message = 'Text has been changed!'; // تغییر متن
        $this->dispatch('textUpdated', ['message' => $this->message]); // ارسال رویداد به سمت کلاینت
    }



    public function delete($id)
    {
       dd($id);
    }



    public function render()
    {
        return view('livewire.hybrid')
        ->layout('components.layouts.with-navigation');
    }
}
