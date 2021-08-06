<?php

namespace App\Http\Livewire;

use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Form;

class Forms extends Component
{
    use WithPagination;

    public function render()
    {
        $forms = Form::paginate(5);
        return view('livewire.forms' , ['forms' => $forms]);
    }
}
