<?php

namespace App\DataTypes;
use Livewire\Wireable;

class Customer implements Wireable
{
    public string $first_name;
    public string $last_name;
    public string $cod;
    public function __construct(string $first_name, string $last_name, string $cod)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->cod = $cod;
    }
    public function toLivewire()
    {
        return [
            'name' => $this->first_name,
            'age' => $this->last_name,
            'age' => $this->cod,
        ];
    }
    public static function fromLivewire($value)
    {
        $first_name = $value['first_name'];
        $last_name = $value['last_name'];
        $cod = $value['cod'];
        return new static($first_name ,$last_name,$cod);
    }
}


