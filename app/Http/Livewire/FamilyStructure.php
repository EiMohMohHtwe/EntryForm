<?php

namespace App\Http\Livewire;

use App\Models\Family;
use Livewire\Component;

class Familystructure extends Component
{
    public $family_name;
    public $relationship;
    public $age;
    public $job;
    public $live_together;
    public $agreement;

    public $families = [];
    public $i = 1;

    public function add($i)
    {
        $i = $i + 1;
        $this->i = $i;
        array_push($this->families, $i);
    }

    public function remove($i)
    {
        unset($this->families[$i]);
    }

    public function store()
    {
        $validatedData = $this->validate([
            'family_name.0' => 'required',
            'relationship.0' => 'required',
            'age.0' => 'required',
            'job.0' => 'required',
            'live_together.0' => 'required',
            'agreement.0' => 'required',
            'family_name.*' => 'required',
            'relationship.*' => 'required',
            'age.*' => 'required',
            'job.*' => 'required',
            'live_together.*' => 'required',
            'agreement.*' => 'required',
        ]);

        foreach ($this->family_name as $key => $value) {
            Family::create(['family_name' => $this->family_name[$key],
            'relationship' => $this->relationship[$key],
            'age' => $this->age[$key],
            'job' => $this->job[$key],
            'live_together' => $this->live_together[$key],
            'agreement' => $this->agreement[$key]
            ]);
        }

        $this->families = [] ;

        Family::create($validatedData);

        return redirect()->to('/register');
       
    }

    public function render()
    {
        return view('livewire.familystructure');
    }
}
