<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Registeration extends Component
{
    public $name;
    public $email;
    public $phone;
    public $address;

    public function render()
    {
        return view('livewire.registeration');
    }

    public function submit()
    {
        dd($this->name,$this->email,$this->phone,$this->address);
    }
}
