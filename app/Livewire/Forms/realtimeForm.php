<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;
use App\Models\Newsletter;

class realtimeForm extends Form
{
    /**
     * Full Name
     *
     * @var ?string
     */
    #[Validate(['required', 'string', 'min:3'])]
    public ?string $full_name;

    public function updatedQuery($n) 
    {
        dd($n);

    }

}
