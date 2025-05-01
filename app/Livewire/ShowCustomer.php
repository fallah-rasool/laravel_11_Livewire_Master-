<?php

namespace App\Livewire;
use App\DataTypes\Customer;  

use Livewire\Component;

class ShowCustomer extends Component
{

    public Customer $customer;  
    public function mount()  
    {  
        $this->customer = new Customer('John', 'Doe', '12345'); // مقداردهی اولیه  
    }  

    public function render()
    {
        return view('livewire.show-customer')
        ->layout('components.layouts.with-navigation');
    }
}
