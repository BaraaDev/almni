<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Contact extends Component
{
    public string $name    = '';
    public string $email   = '';
    public string $phone   = '';
    public string $topic   = '';
    public string $message = '';

    protected $rules = [
        'name'        => 'required|string|min:3|max:199',
        'topic'       => 'required|string|min:3|max:199',
        'email'       => 'required|email:rfc,dns|min:3|max:199',
        'phone'       => 'required|digits:11|numeric',
        'message'     => 'required|string|min:3|max:500',
    ];


    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function submit()
    {
        $contact  = \App\Models\Contact::create([
            'name'        => $this->name,
            'email'       => $this->email,
            'phone'       => $this->phone,
            'topic'       => $this->topic,
            'message'     => $this->message,
        ]);


        $data = $this->validate();

        $this->name       = '';
        $this->email      = '';
        $this->phone      = '';
        $this->topic      = '';
        $this->message    = '';
    }

    public function render()
    {
        return view('livewire.contact');
    }
}
