<?php

namespace App\Http\Livewire;

use App\Models\Family_Structure;
use Livewire\Component;

class FamilyStructure extends Component
{
    public $family_name;
    public $relationship;
    public $age;
    public $job;
    public $live_together;
    public $agreement;

    public function submit()
    {
        $family = new Family_Structure();

        $family->family_name = $this->family_name;
        $family->relationship = $this->relationship;
        $family->age = $this->age;
        $family->job = $this->job;
        $family->live_together = $this->live_together;
        $family->agreement = $this->agreement;

        $family->save();
    }

    public function render()
    {
        return view('livewire.family-structure');
    }
}
