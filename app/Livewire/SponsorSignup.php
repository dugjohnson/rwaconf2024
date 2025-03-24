<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;

class SponsorSignup extends Component
{
    #[Validate('required',message:'Company name is required')]
    public $company_name = '';

    #[Validate('required',message:'Contact name is required')]
    public $contact_name = '';

    #[Validate('required',message:'Phone number is required')]
    #[Validate('min:10',message:'Phone number must be 10 digits')]
    public $contact_phone = '';

    #[Validate('required',message:'Email is required')]
    #[Validate('email',message:'Please enter a valid email address')]
    public $contact_email = '';

    public $website = '';

    #[Validate('required',message:'Please choose at least one sponsorship interest')]
    public $sponsorships = [];

    public function sendForm() {
        $validatedData = $this->validate();
        dd($validatedData);

    }

    public function render()
    {
        return view('livewire.sponsor-signup');
    }
}
