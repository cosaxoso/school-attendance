<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Entry;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;



class CheckIn extends Component
{
    public $alreadyCheckedin = false; 


    
    public function store(){
        Entry::create([
            'time'=> now()->format('g:i A'),
            'date'=> now()->toDateString(),
            'present'=> true,
            'user_id'=> Auth::user()->id
        ]); 

        $this->alreadyCheckedin = true;
    }

    public function mount(){
        $this->alreadyCheckedin = Entry::where('date', now()->toDateString())
            ->where('user_id', Auth::user()->id)
            ->exists();
    }
    public function render()
    {
        // Check if user has already checked in today
        $this->alreadyCheckedin = Entry::where('date', now()->toDateString())
            ->where('user_id', Auth::user()->id)
            ->exists();
            
        return view('livewire.check-in');
    }
}
