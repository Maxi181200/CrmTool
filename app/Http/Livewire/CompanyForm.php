<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Company;

class CompanyForm extends Component
{
    public $name, $email, $logo, $website;

    public function submit()
    {
        $this->validate([
            'name' => 'required',
           
        ]);

        Company::create([
            'name' => $this->name,
            'email' => $this->email,
            'logo' => $this->logo,
            'website' => $this->website,
        ]);

      
    }

    public function render()
    {
        return view('livewire.company-form');
    }
}
